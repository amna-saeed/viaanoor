<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'students' => User::where('role', User::ROLE_STUDENT)->count(),
            'admins'   => User::where('role', User::ROLE_ADMIN)->count(),
            'recent_students' => User::where('role', User::ROLE_STUDENT)->latest()->take(5)->get(),
        ];
        return view('admin.dashboard', compact('stats'));
    }
}
