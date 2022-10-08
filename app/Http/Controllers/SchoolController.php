<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\LembagaBantuan;
use App\Models\Periode;
use App\Models\School;
use App\Models\Tahun;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periode = Periode::first();
        $school = School::where('periode', $periode->year);

        if ($school->exists()) {
            $school = School::where('periode', $periode->year)->where('isActive', 1);
            if ($school->exists()) {
                $data = $school->where('isActive', 1)->first();
                $success = 'data';
            } else {
                $data = $school->first();
                $success = 'no verify';
            }
            return view('school.index', [
                'school' => $data,
                'success' => $success
            ]);
        } else {
            return view('school.index', [
                'success' => 'no data'
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('school.create', [
            'districts' => District::orderBy('name', 'asc')->get(),
            'cities' => City::orderBy('name', 'asc')->get(),
            'years' => Tahun::get()
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
        // Input Field UNBK
        if ($request->unbk) {
            $unbk = $request->unbk;
        } else {
            $unbk = 'Belum';
        }

        // Input Field Bantuan Teknologi
        if ($request->bantuan_teknologi) {
            $bantuan_teknologi = $request->bantuan_teknologi;
        } else {
            $bantuan_teknologi = 'Tidak Pernah';
        }

        // Input Field Bantuan Teknologi
        if ($request->lan) {
            $lan = $request->lan;
        } else {
            $lan = 'Tidak Ada';
        }

        // Input Field Bantuan Teknologi
        if ($request->router) {
            $router = $request->router;
        } else {
            $router = 'Tidak Ada';
        }

        // Input Field Bantuan Teknologi
        if ($request->komputer) {
            $komputer = $request->komputer;
        } else {
            $komputer = 'Tidak Ada';
        }

        $school = $request->all();
        $school['unbk'] = $unbk;
        $school['bantuan_teknologi'] = $bantuan_teknologi;
        $school['lan'] = $lan;
        $school['router'] = $router;
        $school['komputer'] = $komputer;
        $school['periode'] = date('Y');
        $school['slug'] = $this->uniqueSlug($request->name);
        $school['user_id'] = auth()->user()->id;

        School::create($school);

        $school_id = School::latest()->first();

        foreach ($request->nama_lembaga as $items => $name) {
            $lembaga = [
                'school_id' => $school_id->id,
                'name' => $request['nama_lembaga'][$items]
            ];
            LembagaBantuan::create($lembaga);
        }


        return redirect()->route('schools.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        return view('school.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }

    protected function uniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = School::where('slug', 'LIKE', "{$slug}%")->count();
        $newCount = $count > 0 ? ++$count : '';
        return $newCount > 0 ? "$slug-$newCount" : $slug;
    }
}
