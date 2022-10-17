<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Periode;
use App\Models\School;
use App\Models\Teacher;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $periode    = Periode::first();
        $school     = School::where('periode', $periode->year)->where('isActive', 1)->get()->count();
        $teacher    = Teacher::with('school')->where('periode', $periode->year)->where('isActive', 1)->get()->count();
        $district   = District::get()->count();
        $city       = City::get()->count();
        return view('dashboard', [
            'school'    => $school,
            'teacher'   => $teacher,
            'district'  => $district,
            'city'      => $city,
        ]);
    }
}
