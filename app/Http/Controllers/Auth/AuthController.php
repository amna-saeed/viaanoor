<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Support\LmsAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (! Auth::attempt($credentials, (bool) $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => [__('auth.failed')],
            ]);
        }

        $request->session()->regenerate();
        $user = Auth::user();
        $user = LmsAuth::applyPostAuthRoleRules($user);
        Auth::setUser($user);
        LmsAuth::syncRoleToSession($request, $user);

        return redirect()->intended(route(LmsAuth::dashboardRouteName($user)));
    }

    public function showRegisterForm()
    {
        $allowAdminOption = config('viaanoor.allow_admin_registration') || ! User::adminExists();

        return view('auth.register', compact('allowAdminOption'));
    }

    public function register(Request $request)
    {
        $allowAdminOption = config('viaanoor.allow_admin_registration') || ! User::adminExists();
        $allowedRoles = $allowAdminOption
            ? [User::ROLE_STUDENT, User::ROLE_ADMIN]
            : [User::ROLE_STUDENT];

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', Rule::in($allowedRoles)],
        ]);

        $role = $validated['role'];

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $role,
        ]);

        Auth::login($user);
        $request->session()->regenerate();
        $user = LmsAuth::applyPostAuthRoleRules($user);
        Auth::setUser($user);
        LmsAuth::syncRoleToSession($request, $user);

        return redirect()->route(LmsAuth::dashboardRouteName($user));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

    public function claimAdmin(Request $request)
    {
        if (User::adminExists()) {
            $fallback = Auth::user()->isAdmin() ? 'admin.dashboard' : 'student.dashboard';
            return redirect()->route($fallback)->with('error', 'An admin already exists.');
        }

        Auth::user()->update(['role' => User::ROLE_ADMIN]);
        LmsAuth::syncRoleToSession($request, Auth::user());

        return redirect()->route('admin.dashboard')->with('success', 'You now have admin access.');
    }
}
