<?php

namespace App\Support;

use App\Models\User;
use Illuminate\Http\Request;

/**
 * Single place for LMS role-based auth after login/register (no duplicate redirect logic).
 */
class LmsAuth
{
    /**
     * Optional env overrides: admin-only site, ADMIN_EMAILS promotion.
     */
    public static function applyPostAuthRoleRules(User $user): User
    {
        if (config('viaanoor.admin_only_mode')) {
            if (! $user->isAdmin()) {
                $user->update(['role' => User::ROLE_ADMIN]);
            }
            return $user->fresh();
        }

        $user->promoteIfConfiguredAdminEmail();

        return $user->fresh();
    }

    public static function dashboardRouteName(User $user): string
    {
        return $user->isAdmin() ? 'admin.dashboard' : 'student.dashboard';
    }

    public static function syncRoleToSession(Request $request, User $user): void
    {
        $request->session()->put('auth.role', $user->role);
    }
}
