<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use App\Models\School;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SchoolUserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('school.user', [
            'schools' => School::where('isActive', 1)->orderBy('name', 'asc')->get()
        ]);
    }

    public function show(School $school)
    {
        return view('school.user-show', compact('school'));
    }

    public function teacher()
    {
        return view('teacher.user', [
            'teachers' => Teacher::where('isActive', 1)->orderBy('teacher_name', 'asc')->get()
        ]);
    }

    public function teacherShow(Teacher $teacher)
    {
        return view('teacher.user-show', compact('teacher'));
    }
}
