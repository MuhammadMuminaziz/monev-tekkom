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
        $cities     = City::where('periode', $periode->year)->orderBy('name', 'asc')->get();
        $schools    = School::where('periode', $periode->year)->orderBy('name', 'asc')->get();
        $teachers   = Teacher::where('periode', $periode->year)->orderBy('teacher_name', 'asc')->get();

        return view('reporting.index', compact('cities', 'schools', 'teachers'));
    }

    public function district(City $city)
    {
        $periode    = Periode::first();
        $districts  = District::where('periode', $periode->year)->where('city_id', $city->id)->orderBy('name', 'asc')->get();
        $schools    = School::where('periode', $periode->year)->where('city_id', $city->id)->orderBy('name', 'asc')->get();
        $teachers   = Teacher::where('periode', $periode->year)->where('city_id', $city->id)->orderBy('teacher_name', 'asc')->get();

        return view('reporting.district', compact('city', 'districts', 'schools', 'teachers'));
    }

    public function school(City $city, District $district)
    {
        $periode    = Periode::first();
        $schools    = School::where('periode', $periode->year)->where('city_id', $city->id)->where('district_id', $district->id)->orderBy('name', 'asc')->get();
        $teachers   = Teacher::where('periode', $periode->year)->where('city_id', $city->id)->where('district_id', $district->id)->orderBy('teacher_name', 'asc')->get();

        return view('reporting.school', compact('city', 'district', 'schools', 'teachers'));
    }
}
