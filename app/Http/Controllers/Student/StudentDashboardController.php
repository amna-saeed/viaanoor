<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;

class StudentDashboardController extends Controller
{
    public function index()
    {
        $courses = Course::where('is_published', true)->orderBy('created_at', 'desc')->get();
        $canClaimAdmin = ! User::where('role', User::ROLE_ADMIN)->exists();
        return view('student.dashboard', compact('courses', 'canClaimAdmin'));
    }
}
