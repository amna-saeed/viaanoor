<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\LmsEnrollment;
use App\Models\User;
use App\Services\LmsDashboardStatsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentDashboardController extends Controller
{
    public function index(LmsDashboardStatsService $lmsStats): View
    {
        $user = auth()->user();
        $enrolledIds = $user->lmsEnrollments()->pluck('course_id');

        $myCourses = Course::query()
            ->whereIn('id', $enrolledIds)
            ->orderBy('title')
            ->get();

        $catalog = Course::query()
            ->where('is_published', true)
            ->whereNotIn('id', $enrolledIds)
            ->orderBy('created_at', 'desc')
            ->get();

        $announcements = $lmsStats->publishedAnnouncements(5);
        $canClaimAdmin = ! User::adminExists();

        return view('student.dashboard', compact('myCourses', 'catalog', 'announcements', 'canClaimAdmin'));
    }

    public function enroll(Request $request, Course $course): RedirectResponse
    {
        if (! $course->is_published) {
            return redirect()->route('student.dashboard')->with('error', 'This course is not available.');
        }

        LmsEnrollment::firstOrCreate([
            'user_id' => $request->user()->id,
            'course_id' => $course->id,
        ]);

        return redirect()->route('student.dashboard')->with('success', 'You are now enrolled in '.$course->title.'.');
    }
}
