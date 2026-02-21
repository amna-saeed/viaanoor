<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    public function index(Request $request)
    {
        $query = User::where('role', User::ROLE_STUDENT)->orderBy('name');
        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function ($qry) use ($q) {
                $qry->where('name', 'like', "%{$q}%")->orWhere('email', 'like', "%{$q}%");
            });
        }
        $students = $query->paginate(15)->withQueryString();
        return view('admin.students.index', compact('students'));
    }

    public function show(User $student)
    {
        if ($student->role !== User::ROLE_STUDENT) {
            abort(404);
        }
        return view('admin.students.show', compact('student'));
    }
}
