<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\CompetensiTeacher;
use App\Models\District;
use App\Models\Periode;
use App\Models\ProgramTeacher;
use App\Models\School;
use App\Models\Tahun;
use App\Models\Teacher;
use App\Models\Training;
use App\Models\TrainingNeedNow;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periode    = Periode::first();
        $school     = School::where('periode', $periode->year)->where('user_id', auth()->user()->id)->first();
        return view('teacher.index', [
            'school'    => $school,
            'teachers'  => Teacher::where('periode', $periode->year)->where('School_Origin', $school->name)->orderBy('teacher_name', 'asc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periode = Periode::first();
        return view('teacher.create', [
            'cities'    => City::where('periode', $periode->year)->orderBy('name', 'asc')->get(),
            'districts' => District::where('periode', $periode->year)->orderBy('name', 'asc')->get(),
            'periodes'  => Tahun::get(),
            'school'    => School::where('periode', $periode->year)->where('user_id', auth()->user()->id)->where('isActive', 1)->first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'district_id'           => 'required',
            'city_id'           => 'required',
            'teacher_name'          => 'required|min:3',
            'employment_status'     => 'required',
            'nuptk'                 => 'required',
            'place_of_birth'                 => 'required',
            'date_of_birth'                 => 'required',
            'religion'                 => 'required',
            'gender'                 => 'required',
            'last_education'                 => 'required',
            'class'                 => 'required',
            'School_Origin'                 => 'required',
            'phone'                 => 'required|min:8',
            'provinsi'                 => 'required',
            'subjects_taught'                 => 'required',
            'certification_status'                 => 'required',
            'unbk_socialization_activities'                 => 'required',
            'involvement_unbk'                 => 'required',
            'kode_kuisioner'                 => 'required',
            'tekkom'                 => 'required',
            'tingkatan_sekolah'                 => 'required',
            'nama_petugas'                 => 'required',
            'nip'                 => 'required',
            'analisis'                 => 'required',
        ]);

        $data = $request->all();
        if ($request->unbk_socialization_activities == 'Sudah') {
            $data['unbk_socialization_activities'] = $request->unbk_socialization_activities_tahun;
        }

        if ($request->involvement_unbk == 'Sudah') {
            $data['involvement_unbk'] = $request->involvement_unbk_tahun;
        }


        $periode = Periode::first();
        $data['user_id'] = auth()->user()->id;
        $data['username'] = $this->uniqueSlug($request->teacher_name);
        $data['periode'] = $periode->year;

        Teacher::create($data);

        $teacher = Teacher::latest()->first();

        // Update Training
        ProgramTeacher::where('teacher_id', $teacher->id)->delete();
        if ($request->program) {
            foreach ($request->program as $item => $name) {
                $data = [
                    'teacher_id' => $teacher->id,
                    'name' => $request['program'][$item],
                ];
                ProgramTeacher::create($data);
            }
        }

        CompetensiTeacher::where('teacher_id', $teacher->id)->delete();
        if ($request->competencies_taught) {
            foreach ($request->competencies_taught as $item => $name) {
                $data = [
                    'teacher_id' => $teacher->id,
                    'name' => $request['competencies_taught'][$item],
                ];
                CompetensiTeacher::create($data);
            }
        }
        if ($request->competencies_taught_n) {
            CompetensiTeacher::create([
                'teacher_id'    => $teacher->id,
                'name'          => $request->competencies_taught_n
            ]);
        }

        Training::where('teacher_id', $teacher->id)->delete();
        if ($request->name_of_training) {
            foreach ($request->name_of_training as $item => $name) {
                $data = [
                    'teacher_id' => $teacher->id,
                    'name' => $request['name_of_training'][$item],
                    'level' => $request['level'][$item],
                    'lesson_hours' => $request['jampel'][$item],
                ];
                Training::create($data);
            }
        }

        // Update Training Needed
        TrainingNeedNow::where('teacher_id', $teacher->id)->delete();
        if ($request->training_needs_now) {
            foreach ($request->training_needs_now as $item => $name) {
                $data = [
                    'teacher_id' => $teacher->id,
                    'name' => $request['training_needs_now'][$item]
                ];
                TrainingNeedNow::create($data);
            }
        }

        return redirect()->route('teachers.index')->with('message', 'Teacher has been added..');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('teacher.show', [
            'teacher' => $teacher,
            'trainings' => Training::where('teacher_id', $teacher->id)->orderBy('name', 'asc')->get(),
            'training_needs' => TrainingNeedNow::where('teacher_id', $teacher->id)->orderBy('name', 'asc')->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teacher.edit', [
            'teacher' => $teacher,
            'trainings' => Training::where('teacher_id', $teacher->id)->orderBy('name', 'asc')->get(),
            'training_needs' => TrainingNeedNow::where('teacher_id', $teacher->id)->orderBy('name', 'asc')->get(),
            'districts' => District::get(),
            'cities' => City::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $data = [
            'teacher_name'                  => $request->teacher_name,
            'employment_status'             => $request->employment_status,
            'nip'                           => $request->nip,
            'nuptk'                         => $request->nuptk,
            'place_of_birth'                => $request->place_of_birth,
            'date_of_birth'                 => $request->date_of_birth,
            'gender'                        => $request->gender,
            'tmt_pns_tahun'                 => $request->tmt_pns_tahun,
            'tmt_pns_bulan'                 => $request->tmt_pns_bulan,
            'class'                         => $request->class,
            'tmt_class_tahun'               => $request->tmt_class_tahun,
            'tmt_class_bulan'               => $request->tmt_class_bulan,
            'School_Origin'                 => $request->School_Origin,
            'district_id'                   => $request->district_id,
            'city_id'                       => $request->city_id,
            'phone'                         => $request->phone,
            'subjects_taught'               => $request->subjects_taught,
            'certification_status'          => $request->certification_status,
            'certification_year'            => $request->certification_year,
            'reason_not_certified'          => $request->reason_not_certified,
            'unbk_socialization_activities' => $request->unbk_socialization_activities,
            'involvement_unbk'              => $request->involvement_unbk,
            'history_involvement_unbk'      => $request->history_involvement_unbk,
            'kode_kuisioner'                => $request->kode_kuisioner,
            'tekkom'                        => $request->tekkom,
            'tingkatan_sekolah'             => $request->tingkatan_sekolah,
            'nama_petugas'                  => $request->nama_petugas,
            'range_waktu_dari'              => $request->range_waktu_dari,
            'range_waktu_sampai'            => $request->range_waktu_sampai,
            'analisis'                      => $request->analisis,
            'nama_responden'                => $request->nama_responden,
            'date_responden'                => $request->date_responden,
        ];

        if ($request->reason_not_certified) {
            $reason_not_certified = $request->reason_not_certified;
        } else {
            $reason_not_certified = $teacher->reason_not_certified;
        }

        if ($request->history_involvement_unbk) {
            $history_involvement_unbk = $request->history_involvement_unbk;
        } else {
            $history_involvement_unbk = $teacher->history_involvement_unbk;
        }

        $data['reason_not_certified'] = $reason_not_certified;
        $data['history_involvement_unbk'] = $history_involvement_unbk;

        $teacher->update($data);

        // Update Training
        ProgramTeacher::where('teacher_id', $teacher->id)->delete();
        if ($request->program) {
            foreach ($request->program as $item => $name) {
                $data = [
                    'teacher_id' => $teacher->id,
                    'name' => $request['program'][$item],
                ];
                ProgramTeacher::create($data);
            }
        }

        CompetensiTeacher::where('teacher_id', $teacher->id)->delete();
        if ($request->competencies_taught) {
            foreach ($request->competencies_taught as $item => $name) {
                $data = [
                    'teacher_id' => $teacher->id,
                    'name' => $request['competencies_taught'][$item],
                ];
                CompetensiTeacher::create($data);
            }
        }

        if ($request->competencies_taught_n) {
            CompetensiTeacher::create([
                'teacher_id'    => $teacher->id,
                'name'          => $request->competencies_taught_n
            ]);
        }

        Training::where('teacher_id', $teacher->id)->delete();
        if ($request->name_of_training) {
            foreach ($request->name_of_training as $item => $name) {
                $data = [
                    'teacher_id' => $teacher->id,
                    'name' => $request['name_of_training'][$item],
                    'level' => $request['level'][$item],
                    'lesson_hours' => $request['jampel'][$item],
                ];
                Training::create($data);
            }
        }

        // Update Training Needed
        TrainingNeedNow::where('teacher_id', $teacher->id)->delete();
        if ($request->training_needs_now) {
            foreach ($request->training_needs_now as $item => $name) {
                $data = [
                    'teacher_id' => $teacher->id,
                    'name' => $request['training_needs_now'][$item]
                ];
                TrainingNeedNow::create($data);
            }
        }

        return redirect()->route('teachers.index')->with('message', 'Data has been updated..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        Training::where('teacher_id', $teacher->id)->delete();
        TrainingNeedNow::where('teacher_id', $teacher->id)->delete();
        CompetensiTeacher::where('teacher_id', $teacher->id)->delete();
        ProgramTeacher::where('teacher_id', $teacher->id)->delete();
        return redirect()->route('teachers.index')->with('success', 'The account has been deleted..');
    }

    protected function uniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = Teacher::where('username', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }
}
