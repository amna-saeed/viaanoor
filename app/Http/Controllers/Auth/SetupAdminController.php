<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SetupAdminController extends Controller
{
    public function show()
    {
        if (! config('viaanoor.allow_web_admin_setup')) {
            abort(404);
        }

        return view('auth.setup-admin');
    }

    public function store(Request $request)
    {
        if (! config('viaanoor.allow_web_admin_setup')) {
            abort(404);
        }

        $validated = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::updateOrCreate(
            ['email' => $validated['email']],
            [
                'name' => 'Administrator',
                'password' => Hash::make($validated['password']),
                'role' => User::ROLE_ADMIN,
            ]
        );

        return redirect()
            ->route('login')
            ->with('success', 'Admin account saved. Sign in with that email and password. Now set ALLOW_WEB_ADMIN_SETUP=false in .env.');
    }
}
