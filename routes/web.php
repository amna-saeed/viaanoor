<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Student\StudentDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\SetupAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/application', [ApplicationController::class, 'store'])->name('application.store');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/teams', [HomeController::class, 'Team'])->name('teams');
Route::get('/courses', [HomeController::class, 'Courses'])->name('courses');
Route::get('/terms-conditions', [HomeController::class, 'termsCondition'])->name('terms-conditions');
Route::get('/privacy-policy', [HomeController::class, 'Privacy'])->name('privacy-policy');

Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');

// Auth
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    // One-time admin creation without /register (enable ALLOW_WEB_ADMIN_SETUP=true in .env)
    Route::get('/setup-admin-account', [SetupAdminController::class, 'show'])->name('setup-admin');
    Route::post('/setup-admin-account', [SetupAdminController::class, 'store'])->name('setup-admin.store');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Claim admin (when no admin exists yet - gets you access to admin/courses)
Route::get('/claim-admin', [AuthController::class, 'claimAdmin'])->name('claim-admin')->middleware('auth');

// Student LMS area — only users with role "student"
Route::middleware(['auth', 'student'])->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('dashboard');
    Route::post('/courses/{course}/enroll', [StudentDashboardController::class, 'enroll'])->name('courses.enroll');
});

// Admin (auth + admin role only)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
    Route::get('/dashboard/api/stats', [AdminDashboardController::class, 'apiStats'])->name('dashboard.api.stats');
    Route::get('/students', [AdminStudentController::class, 'index'])->name('students.index');
    Route::get('/students/{student}', [AdminStudentController::class, 'show'])->name('students.show');
    // Courses
    Route::get('/courses', [AdminCourseController::class, 'index'])->name('courses.index');
    Route::get('/courses/create', [AdminCourseController::class, 'create'])->name('courses.create');
    Route::post('/courses', [AdminCourseController::class, 'store'])->name('courses.store');
    Route::get('/courses/{course}/edit', [AdminCourseController::class, 'edit'])->name('courses.edit');
    Route::put('/courses/{course}', [AdminCourseController::class, 'update'])->name('courses.update');
    Route::delete('/courses/{course}', [AdminCourseController::class, 'destroy'])->name('courses.destroy');
});
