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
        $school = School::where('periode', $periode->year)->where('user_id', auth()->user()->id);

        if ($school->exists()) {
            $school = School::where('periode', $periode->year)->where('user_id', auth()->user()->id);
            // dd($school->where('isActive', 2)->exists());
            if ($school->where('isActive', 1)->exists()) {
                $data = School::where('periode', $periode->year)->where('user_id', auth()->user()->id)->where('isActive', 1)->first();
                $success = 'data';
            } elseif (School::where('periode', $periode->year)->where('user_id', auth()->user()->id)->where('isActive', 2)->exists()) {
                $data = School::where('periode', $periode->year)->where('user_id', auth()->user()->id)->where('isActive', 2)->first();
                $success = 'reject';
            } else {
                $data = School::where('periode', $periode->year)->where('user_id', auth()->user()->id)->where('isActive', 0)->get()->first();
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
        $request->validate([
            'name'                      => 'required',
            'npsn'                      => 'required',
            'siswa_lak'                 => 'required',
            'siswa_per'                 => 'required',
            'unbk'                      => 'required',
            'district_id'               => 'required',
            'city_id'                   => 'required',
            'transportasi'              => 'required',
            'geografis'                 => 'required',
            'sosekbud'                  => 'required',
            'internet'                  => 'required',
            'bantuan_teknologi'         => 'required',
            'listrik'                   => 'required',
            'power_suplay'              => 'required',
            'durasi_listrik'            => 'required',
            'laboratorium_komputer'     => 'required',
            'laboratorium_multimedia'   => 'required',
            'jenis_program'             => 'required',
            'tahun_bantuan'             => 'required',
            'lan'                       => 'required',
            'router'                    => 'required',
            'komputer'                  => 'required',
            'kuota_bandwidth'           => 'required',
            'internet_speed'            => 'required',
            'kesesuaian_kuota'          => 'required',
            'alasan_tambah_kuota'       => 'required',
            'saran'                     => 'required',
            'kode_kuisioner'            => 'required',
            'tekkom'                    => 'required',
            'nip'                       => 'required',
            'range_waktu_dari'          => 'required',
            'range_waktu_sampai'        => 'required',
            'analisis'                  => 'required',
            'nama_responden'            => 'required',
            'date_responden'            => 'required',
        ]);

        $periode = Periode::first();

        $school = $request->all();
        $school['slug'] = $this->uniqueSlug($request->name);
        $school['user_id'] = auth()->user()->id;
        $school['periode'] = $periode->year;
        $school['jumlah_siswa'] = $request->siswa_lak + $request->siswa_per;

        if ($request->unbk == 'Belum') {
            $school['unbk_tahun'] = '';
        } else {
            $school['unbk_tahun'] = $request->unbk_tahun;
        }
        if ($request->lan != 'Ada') {
            $school['lan_unit'] = '';
        } else {
            $school['lan_unit'] = $request->lan_unit;
        }
        if ($request->router != 'Ada') {
            $school['router_unit'] = '';
        } else {
            $school['router_unit'] = $request->router_unit;
        }
        if ($request->komputer != 'Ada') {
            $school['komputer_unit'] = '';
        } else {
            $school['komputer_unit'] = $request->komputer_unit;
        }

        School::create($school);

        $school_id = School::latest()->first();

        if ($request->nama_lembaga != array('')) {
            foreach ($request->nama_lembaga as $items => $name) {
                $lembaga = [
                    'school_id' => $school_id->id,
                    'name' => $request['nama_lembaga'][$items]
                ];
                LembagaBantuan::create($lembaga);
            }
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

        $request->validate([
            'name'                      => 'required|min:5',
            'npsn'                      => 'required|min:5',
            'siswa_lak'                 => 'required',
            'siswa_per'                 => 'required',
            'unbk'                      => 'required',
            'district_id'               => 'required',
            'city_id'                   => 'required',
            'transportasi'              => 'required',
            'geografis'                 => 'required',
            'sosekbud'                  => 'required',
            'internet'                  => 'required',
            'bantuan_teknologi'         => 'required',
            'listrik'                   => 'required',
            'power_suplay'              => 'required',
            'durasi_listrik'            => 'required',
            'laboratorium_komputer'     => 'required',
            'laboratorium_multimedia'   => 'required',
            'jenis_program'             => 'required',
            'tahun_bantuan'             => 'required',
            'lan'                       => 'required',
            'router'                    => 'required',
            'komputer'                  => 'required',
            'kuota_bandwidth'           => 'required',
            'internet_speed'            => 'required',
            'kesesuaian_kuota'          => 'required',
            'alasan_tambah_kuota'       => 'required',
            'saran'                     => 'required',
            'kode_kuisioner'            => 'required',
            'tekkom'                    => 'required',
            'nip'                       => 'required',
            'range_waktu_dari'          => 'required',
            'range_waktu_sampai'        => 'required',
            'analisis'                  => 'required',
            'nama_responden'            => 'required',
            'date_responden'            => 'required',
        ]);

        $data = [
            'city_id'                   => $request->city_id,
            'district_id'               => $request->district_id,
            'name'                      => $request->name,
            'nama_petugas'              => $request->nama_petugas,
            'nip'                       => $request->nip,
            'npsn'                      => $request->npsn,
            'siswa_per'                 => $request->siswa_per,
            'siswa_lak'                 => $request->siswa_lak,
            'jumlah_siswa'              => $request->siswa_lak + $request->siswa_per,
            'unbk'                      => $request->unbk,
            'unbk_tahun'                => $request->unbk_tahun,
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
            'lan'                       => $request->lan,
            'lan_unit'                  => $request->lan_unit,
            'router'                    => $request->router,
            'router_unit'               => $request->router_unit,
            'komputer'                  => $request->komputer,
            'komputer_unit'             => $request->komputer_unit,
            'kuota_bandwidth'           => $request->kuota_bandwidth,
            'internet_speed'            => $request->internet_speed,
            'kesesuaian_kuota'          => $request->kesesuaian_kuota,
            'alasan_tambah_kuota'       => $request->alasan_tambah_kuota,
            'saran'                     => $request->saran,
            'tingkat_sekolah'           => $request->tingkat_sekolah,
            'range_waktu_dari'          => $request->range_waktu_dari,
            'range_waktu_sampai'        => $request->range_waktu_sampai,
            'analisis'                  => $request->analisis,
            'tekkom '                   => $request->tekkom,
            'isActive'                  => 0
        ];

        LembagaBantuan::where('school_id', $school->id)->delete();
        if ($request->nama_lembaga != array('')) {
            foreach ($request->nama_lembaga as $item => $lembaga) {
                $data2 = [
                    'school_id'     => $school->id,
                    'name'          => $request['nama_lembaga'][$item]
                ];

                LembagaBantuan::create($data2);
            }
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
