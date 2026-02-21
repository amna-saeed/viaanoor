<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

        if (Auth::attempt($credentials, (bool) $request->boolean('remember'))) {
            $request->session()->regenerate();
            $user = Auth::user();

            // If no admin exists yet, make this user admin so they can access admin/courses
            if (! User::where('role', User::ROLE_ADMIN)->exists()) {
                $user->update(['role' => User::ROLE_ADMIN]);
            }

            if ($user->fresh()->isAdmin()) {
                return redirect()->intended(route('admin.dashboard'));
            }
            return redirect()->intended(route('student.dashboard'));
        }

        throw ValidationException::withMessages([
            'email' => [__('auth.failed')],
        ]);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => User::ROLE_STUDENT,
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('student.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

    /**
     * When no admin exists, the logged-in user can claim admin (get access to admin dashboard and add courses).
     */
    public function claimAdmin(Request $request)
    {
        if (User::where('role', User::ROLE_ADMIN)->exists()) {
            return redirect()->route('student.dashboard')->with('error', 'An admin already exists.');
        }

        Auth::user()->update(['role' => User::ROLE_ADMIN]);
        return redirect()->route('admin.dashboard')->with('success', 'You now have admin access. You can add and manage courses.');
    }
}
