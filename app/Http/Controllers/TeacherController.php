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
        if ($school) {
            return view('teacher.index', [
                'school'    => $school,
                'teachers'  => Teacher::where('periode', $periode->year)->where('school_id', $school->id)->orderBy('teacher_name', 'asc')->get(),
            ]);
        } else {
            return view('teacher.message');
        }
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
            'cities'    => City::orderBy('name', 'asc')->get(),
            'districts' => District::orderBy('name', 'asc')->get(),
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
            // 'district_id'                       => 'required',
            // 'city_id'                           => 'required',
            'teacher_name'                      => 'required|min:3',
            'employment_status'                 => 'required',
            'nip'                               => 'required',
            'nuptk'                             => 'required',
            'place_of_birth'                    => 'required',
            'date_of_birth'                     => 'required',
            'religion'                          => 'required',
            'gender'                            => 'required',
            'last_education'                    => 'required',
            'tmt_pns_tahun'                     => 'required',
            'tmt_pns_bulan'                     => 'required',
            'class'                             => 'required',
            'tmt_class_tahun'                   => 'required',
            'tmt_class_bulan'                   => 'required',
            'phone'                             => 'required|min:8',
            'provinsi'                          => 'required',
            'subjects_taught'                   => 'required',
            'certification_status'              => 'required',
            'reason_not_certified'              => 'required',
            'unbk_socialization_activities'     => 'required',
            'involvement_unbk'                  => 'required',
            'kode_kuisioner'                    => 'required',
            'tekkom'                            => 'required',
            'nama_petugas'                      => 'required',
            'tingkatan_sekolah'                 => 'required',
            'range_waktu_dari'                  => 'required',
            'range_waktu_sampai'                => 'required',
            'nip'                               => 'required',
            'nama_responden'                    => 'required',
            'date_responden'                    => 'required',
            'analisis'                          => 'required',
            'history_involvement_unbk'          => 'required',
        ]);


        $periode    = Periode::first();
        $district   = District::where('name', $request->district_id)->first();
        $city       = City::where('name', $request->city_id)->first();
        $school     = School::where('periode', $periode->year)->where('name', $request->school_id)->first();
        $data['district_id'] = $district->id;
        $data['city_id'] = $city->id;
        $data['user_id'] = auth()->user()->id;
        $data['school_id'] = $school->id;
        $data['username'] = $this->uniqueSlug($request->teacher_name);
        $data['periode'] = $periode->year;

        if ($request->unbk_socialization_activities == 'Belum') {
            $data['unbk_socialization_activities_tahun'] = '';
        } else {
            $data['unbk_socialization_activities_tahun'] = $request->unbk_socialization_activities_tahun;
        }

        if ($request->involvement_unbk) {
            $data['involvement_unbk_tahun'] = '';
        } else {
            $data['involvement_unbk_tahun'] = $request->involvement_unbk_tahun;
        }
        $data['certification_year'] = $request->involvement_unbk_tahun;

        Teacher::create($data);

        $teacher = Teacher::latest()->first();

        // store Training
        $program    = $request->program;
        if ($program[0] != null) {
            for ($i = 0; $i < count($program); $i++) {
                $programTeacher = new ProgramTeacher();
                $programTeacher->teacher_id = $teacher->id;
                $programTeacher->name       = $program[$i];
                $programTeacher->save();
            }
        }

        // store competency
        $kompetensi = $request->competencies_taught;
        if ($kompetensi != null) {
            for ($i = 0; $i < count($kompetensi); $i++) {
                $kompetensiTeacher  = new CompetensiTeacher();
                $kompetensiTeacher->teacher_id  = $teacher->id;
                $kompetensiTeacher->name        = $kompetensi[$i];
                $kompetensiTeacher->save();
            }
        }

        if ($request->competencies_taught_n) {
            CompetensiTeacher::create([
                'teacher_id'    => $teacher->id,
                'name'          => $request->competencies_taught_n
            ]);
        }

        $trainingName   = $request->name_of_training;
        $trainingLevel  = $request->level;
        $trainingHour   = $request->jampel;
        if ($trainingName[0] != null) {
            for ($i = 0; $i < count($trainingName); $i++) {
                $trainingTeacher                = new Training();
                $trainingTeacher->teacher_id    = $teacher->id;
                $trainingTeacher->name          = $trainingName[$i];
                $trainingTeacher->level         = $trainingLevel[$i];
                $trainingTeacher->lesson_hours  = $trainingHour[$i];
                $trainingTeacher->save();
            }
        }

        // store training need now
        $trainingNeed   = $request->training_needs_now;
        if ($trainingNeed[0] != null) {
            for ($i = 0; $i < count($trainingNeed); $i++) {
                $trainingNeedTeacher                = new TrainingNeedNow();
                $trainingNeedTeacher->teacher_id    = $teacher->id;
                $trainingNeedTeacher->name          = $trainingNeed[$i];
                $trainingNeedTeacher->save();
            }
        }

        return redirect()->route('teachers.index')->with('message', 'Data guru berhasil ditambahkan..');
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
        $periode = Periode::first();
        return view('teacher.edit', [
            'teacher'           => $teacher,
            'trainings'         => Training::where('teacher_id', $teacher->id)->orderBy('name', 'asc')->get(),
            'training_needs'    => TrainingNeedNow::where('teacher_id', $teacher->id)->orderBy('name', 'asc')->get(),
            'districts'         => District::get(),
            'cities'            => City::get(),
            'school'            => School::where('periode', $periode->year)->where('user_id', auth()->user()->id)->where('isActive', 1)->first()
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
        $request->validate([
            // 'district_id'                       => 'required',
            // 'city_id'                           => 'required',
            'teacher_name'                      => 'required|min:3',
            'employment_status'                 => 'required',
            'nip'                               => 'required',
            'nuptk'                             => 'required',
            'place_of_birth'                    => 'required',
            'date_of_birth'                     => 'required',
            'religion'                          => 'required',
            'gender'                            => 'required',
            'last_education'                    => 'required',
            'tmt_pns_tahun'                     => 'required',
            'tmt_pns_bulan'                     => 'required',
            'class'                             => 'required',
            'tmt_class_tahun'                   => 'required',
            'tmt_class_bulan'                   => 'required',
            'phone'                             => 'required|min:8',
            'provinsi'                          => 'required',
            'subjects_taught'                   => 'required',
            'certification_status'              => 'required',
            'reason_not_certified'              => 'required',
            'unbk_socialization_activities'     => 'required',
            'involvement_unbk'                  => 'required',
            'kode_kuisioner'                    => 'required',
            'tekkom'                            => 'required',
            'nama_petugas'                      => 'required',
            'tingkatan_sekolah'                 => 'required',
            'range_waktu_dari'                  => 'required',
            'range_waktu_sampai'                => 'required',
            'nip'                               => 'required',
            'nama_responden'                    => 'required',
            'date_responden'                    => 'required',
            'analisis'                          => 'required',
            'history_involvement_unbk'          => 'required',
        ]);

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
            // 'district_id'                   => $request->district_id,
            // 'city_id'                       => $request->city_id,
            'phone'                         => $request->phone,
            'subjects_taught'               => $request->subjects_taught,
            'certification_status'          => $request->certification_status,
            'certification_year'            => $request->certification_year,
            'reason_not_certified'          => $request->reason_not_certified,
            'unbk_socialization_activities' => $request->unbk_socialization_activities,
            'unbk_socialization_activities_tahun' => $request->unbk_socialization_activities_tahun,
            'involvement_unbk'              => $request->involvement_unbk,
            'involvement_unbk_tahun'        => $request->involvement_unbk_tahun,
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

        // dd($request);

        $teacher->update($data);

        // Update Training
        ProgramTeacher::where('teacher_id', $teacher->id)->delete();
        $program    = $request->program;
        if ($program[0] != null) {
            for ($i = 0; $i < count($program); $i++) {
                $programTeacher = new ProgramTeacher();
                $programTeacher->teacher_id = $teacher->id;
                $programTeacher->name       = $program[$i];
                $programTeacher->save();
            }
        }

        CompetensiTeacher::where('teacher_id', $teacher->id)->delete();
        $kompetensi = $request->competencies_taught;
        if ($kompetensi != null) {
            for ($i = 0; $i < count($kompetensi); $i++) {
                $kompetensiTeacher  = new CompetensiTeacher();
                $kompetensiTeacher->teacher_id  = $teacher->id;
                $kompetensiTeacher->name        = $kompetensi[$i];
                $kompetensiTeacher->save();
            }
        }

        if ($request->competencies_taught_n) {
            CompetensiTeacher::create([
                'teacher_id'    => $teacher->id,
                'name'          => $request->competencies_taught_n
            ]);
        }

        Training::where('teacher_id', $teacher->id)->delete();
        $trainingName   = $request->name_of_training;
        $trainingLevel  = $request->name_of_training;
        $trainingHour   = $request->name_of_training;
        if ($trainingName[0] != null) {
            for ($i = 0; $i < count($trainingName); $i++) {
                $trainingTeacher                = new Training();
                $trainingTeacher->teacher_id    = $teacher->id;
                $trainingTeacher->name          = $trainingName[$i];
                $trainingTeacher->level         = $trainingLevel[$i];
                $trainingTeacher->lesson_hours  = $trainingHour[$i];
                $trainingTeacher->save();
            }
        }

        // Update Training Needed
        TrainingNeedNow::where('teacher_id', $teacher->id)->delete();
        $trainingNeed   = $request->training_needs_now;
        if ($trainingNeed[0] != null) {
            for ($i = 0; $i < count($trainingNeed); $i++) {
                $trainingNeedTeacher                = new TrainingNeedNow();
                $trainingNeedTeacher->teacher_id    = $teacher->id;
                $trainingNeedTeacher->name          = $trainingNeed[$i];
                $trainingNeedTeacher->save();
            }
        }

        return redirect()->route('teachers.index')->with('message', 'Data guru berhasil di edit..');
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
