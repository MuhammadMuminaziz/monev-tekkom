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
        $periode        = Periode::first();
        $school         = School::where('periode', $periode->year)->where('isActive', 1)->get();
        $teacher        = Teacher::with('school')->where('periode', $periode->year)->where('isActive', 1)->get();
        $district       = District::get();
        $city           = City::get();
        $numberOfScholl = [
            School::where('periode', $periode->year)->where('isActive', 1)->where('tingkat_sekolah', 'sd')->count(),
            School::where('periode', $periode->year)->where('isActive', 1)->where('tingkat_sekolah', 'SMP')->count(),
            School::where('periode', $periode->year)->where('isActive', 1)->where('tingkat_sekolah', 'SMA')->count(),
            School::where('periode', $periode->year)->where('isActive', 1)->where('tingkat_sekolah', 'SMK')->count(),
        ];
        $unbk           = [
            School::where('periode', $periode->year)->where('isActive', 1)->where('unbk', 'Sudah')->count(),
            School::where('periode', $periode->year)->where('isActive', 1)->where('unbk', 'Belum')->count(),
        ];
        $numberOfStudent= [
            School::where('periode', $periode->year)->where('isActive', 1)->sum('siswa_lak'),
            School::where('periode', $periode->year)->where('isActive', 1)->sum('siswa_per')
        ];
        $employmentStatus   = [
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('employment_status', 'PNS')->count(),
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('employment_status', 'Non PNS')->count(),
        ];
        $lastEducation      = [
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('last_education', 'SMA')->count(),
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('last_education', 'D1')->count(),
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('last_education', 'D2')->count(),
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('last_education', 'D3')->count(),
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('last_education', 'D4')->count(),
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('last_education', 'S1')->count(),
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('last_education', 'S2')->count(),
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('last_education', 'S3')->count(),
        ];
        $sertificationStatus= [
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('certification_status', 'Sudah')->count(),
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('certification_status', 'Belum')->count(),
        ];
        $involvement_unbk   = [
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('involvement_unbk', 'Sudah')->count(),
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('involvement_unbk', 'Belum')->count(),
        ];
        $jumlahguru         = [
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('gender', 'Laki-laki')->count(),
            Teacher::where('periode', $periode->year)->where('isActive', 1)->where('gender', 'Perempuan')->count(),
        ];
        // $labelSchoolByCity  = City::orderBy('name', 'asc')->pluck('name');
        // $params             = City::orderBy('name', 'asc')->pluck('id');
        // $schoolByCity       = [];
        // for($i = 0; $i < count($params); $i++){
        //     $schoolData = School::where('periode', $periode->year)->where('isActive', 1)->where('city_id', $params[$i])->count();
        //     array_push($schoolByCity, $schoolData);
        // }

        return view('dashboard', [
            'school'            => $school->count(),
            'teacher'           => $teacher->count(),
            'district'          => $district->count(),
            'city'              => $city->count(),
            'numberOfScholl'    => $numberOfScholl,
            'totalOfSchool'     => $numberOfScholl[0] + $numberOfScholl[1] + $numberOfScholl[2] + $numberOfScholl[3],
            'unbk'              => $unbk,
            'totalUnbk'         => $unbk[0] + $unbk[1],
            'numberOfStudent'   => $numberOfStudent,
            'totalOfStudent'    => $numberOfStudent[0] + $numberOfStudent[1],
            'employmentStatus'  => $employmentStatus,
            'totalEmployment'   => $employmentStatus[0] + $employmentStatus[1],
            'lastEducation'     => $lastEducation,
            'sertificationStatus'=> $sertificationStatus,
            'involvement_unbk'  => $involvement_unbk,
            'jumlahguru'        => $jumlahguru,         
        ]);
    }
}
