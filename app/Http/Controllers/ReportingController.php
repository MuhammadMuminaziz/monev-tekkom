<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\Periode;
use App\Models\School;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

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
        $districts  = District::orderBy('name', 'asc')->get();

        return view('reporting.index', compact('schools', 'districts'));
    }

    public function schoolShow(School $school)
    {
        return view('reporting.school-show', compact('school'));
    }

    public function schoolPrint(School $school)
    {
        $pdf = Pdf::loadView('print.school.index', [
            'school' => $school
        ])->setPaper('a4', 'landscape');
        return $pdf->stream('example.pdf');
    }

    public function schoolsPrint($id)
    {
        $schools = School::where('district_id', $id)->where('isActive', 1)->get();
        foreach ($schools as $id) {
            $school = School::where('id', $id->id)->get();
            $pdf = Pdf::loadView('print.school.index', [
                'school' => $school
            ])->setPaper('a4', 'landscape');
            $output = $pdf->download('example.pdf');
            file_put_contents("pdf/$id->id.pdf", $output);

            $files = Storage::files("public");
            $pdfFiles = array();
            foreach ($files as $key => $val) {
                dd($val);
                $val = str_replace("public/pdf", "", $val);
                array_push($pdfFiles, $val);
            }
        }
        return back();
    }

    public function teacher(School $school)
    {
        $periode    = Periode::first();
        $teachers   = Teacher::with('school')->where('periode', $periode->year)->where('school_id', $school->id)->where('isActive', 1)->get();

        return view('reporting.teacher', compact('school', 'teachers'));
    }

    public function teacherShow(School $school, Teacher $teacher)
    {
        return view('reporting.teacher-show', compact('school', 'teacher'));
    }

    public function teacherPrint(Teacher $teacher)
    {
        $pdf = Pdf::loadView('print.teacher.index', [
            'teacher' => $teacher
        ])->setPaper('a4', 'landscape');
        return $pdf->stream('example.pdf');
    }

    // Filter
    public function filterDistrict(Request $request)
    {
        $periode    = Periode::first();
        $schools    = School::where('periode', $periode->year)->where('isActive', 1)->where('district_id', $request->id)->orderBy('name', 'asc')->get();

        return view('reporting.table-school', compact('schools'));
    }
}
