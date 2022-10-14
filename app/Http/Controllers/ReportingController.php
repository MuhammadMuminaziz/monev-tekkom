<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Periode;
use App\Models\School;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ReportingController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periode    = Periode::first();
        $schools    = School::with(['city', 'district'])->where('periode', $periode->year)->where('isActive', 1)->orderBy('name', 'asc')->get();
        $districts  = District::where('periode', $periode->year)->orderBy('name', 'asc')->get();

        return view('reporting.index', compact('schools', 'districts'));
    }

    public function schoolShow(School $school)
    {
        return view('reporting.school-show', compact('school'));
    }

    public function teacher(School $school)
    {
        $periode    = Periode::first();
        $teachers   = Teacher::where('periode', $periode->year)->where('school_origin', $school->name)->where('isActive', 1)->get();

        return view('reporting.teacher', compact('school', 'teachers'));
    }

    public function teacherShow(School $school, Teacher $teacher)
    {
        return view('reporting.teacher-show', compact('school', 'teacher'));
    }

    // Filter
    public function filterDistrict(Request $request)
    {
        $periode    = Periode::first();
        $schools    = School::where('periode', $periode->year)->where('isActive', 1)->where('district_id', $request->id)->orderBy('name', 'asc')->get();

        return view('reporting.table-school', compact('schools'));
    }
}
