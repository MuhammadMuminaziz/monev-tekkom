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
            $school = School::where('periode', $periode->year);
            // dd($school->where('isActive', 2)->exists());
            if ($school->where('isActive', 1)->exists()) {
                $data = $school->where('isActive', 1)->first();
                $success = 'data';
            } elseif (School::where('periode', $periode->year)->where('isActive', 2)->exists()) {
                $data = School::where('periode', $periode->year)->where('isActive', 2)->first();
                $success = 'reject';
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
        $school['lan'] = $lan;
        $school['router'] = $router;
        $school['komputer'] = $komputer;
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
        return view('school.edit', [
            'school' => $school,
            'districts' => District::orderBy('name', 'asc')->get(),
            'cities' => City::orderBy('name', 'asc')->get(),
            'years' => Tahun::get()
        ]);
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
        if ($request->unbk) {
            $unbk = $request->unbk;
        } else {
            $unbk = 'Belum';
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

        $data = [
            'city_id'                   => $request->city_id,
            'district_id'               => $request->district_id,
            'name'                      => $request->name,
            'nama_petugas'              => $request->nama_petugas,
            'nip'                       => $request->nip,
            'npsn'                      => $request->npsn,
            'siswa_per'                 => $request->siswa_per,
            'siswa_lak'                 => $request->siswa_lak,
            'jumlah_siswa'              => $request->jumlah_siswa,
            'unbk'                      => $unbk,
            'transportasi'              => $request->transportasi,
            'geografis'                 => $request->geografis,
            'sosekbud'                  => $request->sosekbud,
            'internet'                  => $request->internet,
            'bantuan_teknologi'         => $request->bantuan_teknologi,
            'listrik'                   => $request->listrik,
            'power_suplay'              => $request->power_suplay,
            'durasi_listrik'            => $request->durasi_listrik,
            'laboratorium_komputer'     => $request->laboratorium_komputer,
            'laboratorium_multimedia'   => $request->laboratorium_multimedia,
            'jenis_program'             => $request->jenis_program,
            'tahun_bantuan'             => $request->tahun_bantuan,
            'lan'                       => $lan,
            'router'                    => $router,
            'komputer'                  => $komputer,
            'kuota_bandwidth'           => $request->kuota_bandwidth,
            'internet_speed'            => $request->internet_speed,
            'kesesuaian_kuota'          => $request->kesesuaian_kuota,
            'alasan_tambah_kuota'       => $request->alasan_tambah_kuota,
            'saran'                     => $request->saran,
            'tingkat_sekolah'           => $request->tingkat_sekolah,
            'range_waktu_dari'          => $request->range_waktu_dari,
            'range_waktu_sampai'        => $request->range_waktu_sampai,
            'analisis'                  => $request->analisis,
            'periode'                   => $request->periode,
            'tekkom '                   => $request->tekkom,
            'isActive'                  => 0
        ];

        LembagaBantuan::where('school_id', $school->id)->delete();
        foreach ($request->nama_lembaga as $item => $lembaga) {
            $data2 = [
                'school_id'     => $school->id,
                'name'          => $request['nama_lembaga'][$item]
            ];

            LembagaBantuan::create($data2);
        }

        $school->update($data);
        return redirect()->route('schools.index')->with('message', 'Data berhasil diperbarui..');
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
