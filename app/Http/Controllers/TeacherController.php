<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
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
        return view('teacher.index', [
            'teachers' => Teacher::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create', [
            'cities' => City::orderBy('name', 'asc')->get(),
            'districts' => District::orderBy('name', 'asc')->get(),
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
        $data = $request->all();
        if ($request->unbk_socialization_activities) {
            $data['unbk_socialization_activities'] = $request->unbk_socialization_activities;
        } else {
            $data['unbk_socialization_activities'] = 'Belum';
        }

        if ($request->involvement_unbk) {
            $data['involvement_unbk'] = $request->involvement_unbk;
        } else {
            $data['involvement_unbk'] = 'Belum';
        }
        $data['user_id'] = auth()->user()->id;
        $data['username'] = $this->uniqueSlug($request->teacher_name);

        Teacher::create($data);

        $teacher_id = Teacher::latest()->first();

        foreach ($request->name_of_training as $item => $name) {
            $data1 = [
                'teacher_id' => $teacher_id->id,
                'name' => $request['name_of_training'][$item],
                'level' => $request['level'][$item],
                'lesson_hours' => $request['jampel'][$item],
            ];
            Training::create($data1);
        }
        foreach ($request->training_needs_now as $item => $name) {
            $data2 = [
                'teacher_id' => $teacher_id->id,
                'name' => $request['training_needs_now'][$item],
            ];
            TrainingNeedNow::create($data2);
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
            'teacher_name' => $request->teacher_name,
            'employment_status' => $request->employment_status,
            'nip' => $request->nip,
            'nuptk' => $request->nuptk,
            'place_of_birth' => $request->place_of_birth,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'tmt_pns_tahun' => $request->tmt_pns_tahun,
            'class' => $request->class,
            'tmt_class_tahun' => $request->tmt_class_tahun,
            'tmt_class_bulan' => $request->tmt_class_bulan,
            'School_Origin' => $request->School_Origin,
            'district_id' => $request->district_id,
            'city_id' => $request->city_id,
            'phone' => $request->phone,
            'subjects_taught' => $request->subjects_taught,
            'program' => $request->program,
            'certification_status' => $request->certification_status,
            'certification_year' => $request->certification_year,
            'reason_not_certified' => $request->reason_not_certified,
            'competencies_taught' => $request->competencies_taught,
            'unbk_socialization_activities' => $request->unbk_socialization_activities,
            'involvement_unbk' => $request->involvement_unbk,
            'history_involvement_unbk' => $request->history_involvement_unbk,
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
