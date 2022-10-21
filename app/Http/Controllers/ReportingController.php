<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\CompetensiTeacher;
use App\Models\District;
use App\Models\Periode;
use App\Models\ProgramTeacher;
use App\Models\School;
use App\Models\Teacher;
use App\Models\Training;
use App\Models\TrainingNeedNow;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Response;
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
        return $pdf->download('data-sekolah-' . $school->slug . '.pdf');
    }

    public function schoolsPrint($id)
    {
        $schools = School::where('district_id', $id)->where('isActive', 1)->get();
        foreach ($schools as $school) {
            $pdf = Pdf::loadView('print.school.index', [
                'school' => $school
            ])->setPaper('a4', 'landscape');
            $pdf->render();
            $output = $pdf->output();
            file_put_contents("pdf/$school->id.pdf", $output);

            $file = public_path() . "/pdf/$school->id.pdf";
            $headers = array('Content-Type: application/pdf',);
            return Response::download($file,  $school->id . '.pdf', $headers);
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
            'teacher'       => $teacher,
            'trainings'     => Training::where('teacher_id', $teacher->id)->get(),
            'trainingNeeds' => TrainingNeedNow::where('teacher_id', $teacher->id)->get(),
            'programs'      => ProgramTeacher::where('teacher_id', $teacher->id)->get(),
            'kompetensis'   => CompetensiTeacher::where('teacher_id', $teacher->id)->get()
        ])->setPaper('a4', 'landscape');
        return $pdf->download('data-guru-' . $teacher->username . '.pdf');
    }

    // Filter
    public function filterDistrict(Request $request)
    {
        $periode    = Periode::first();
        $schools    = School::where('periode', $periode->year)->where('isActive', 1)->where('district_id', $request->id)->orderBy('name', 'asc')->get();

        return view('reporting.table-school', compact('schools'));
    }
}
