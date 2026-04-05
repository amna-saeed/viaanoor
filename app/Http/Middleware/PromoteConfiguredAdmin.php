<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PromoteConfiguredAdmin
{
    /**
     * Admin-only site: everyone is admin; student dashboard URL redirects to admin.
     * Or: promote users whose email is in ADMIN_EMAILS.
     */
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::check()) {
            return $next($request);
        }

        $user = Auth::user();

        if (config('viaanoor.admin_only_mode')) {
            if (! $user->isAdmin()) {
                $user->update(['role' => User::ROLE_ADMIN]);
                Auth::setUser($user->fresh());
            }
            if ($request->routeIs('student.dashboard')) {
                return redirect()->route('admin.dashboard');
            }
            return $next($request);
        }

        if ($user->promoteIfConfiguredAdminEmail()) {
            Auth::setUser($user->fresh());
            if ($request->routeIs('student.dashboard')) {
                return redirect()->route('admin.dashboard');
            }
        }

        return $next($request);
    }
}
