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
        $periode = Periode::first();
        $school = School::where('periode', $periode->year)->get()->count();
        $teacher = Teacher::where('periode', $periode->year)->get()->count();
        $district = District::where('periode', $periode->year)->get()->count();
        $city = City::where('periode', $periode->year)->get()->count();
        return view('dashboard', [
            'school' => $school,
            'teacher' => $teacher,
            'district' => $district,
            'city' => $city,
        ]);
    }
}
