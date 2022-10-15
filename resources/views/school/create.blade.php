<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow py-3 border-left-primary">
                    <div class="card-header">
                        <h6 class="card-title font-weight-bold text-primary">Tambah Data Sekolah</h6>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="general_data-tab" data-toggle="tab"
                                    data-target="#general_data" type="button" role="tab" aria-controls="general_data"
                                    aria-selected="true">A. Data Umum</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="competency_data-tab" data-toggle="tab"
                                    data-target="#competency_data" type="button" role="tab"
                                    aria-controls="competency_data" aria-selected="false">B. Data
                                    Sekolah Yang Memiliki Akses Internet</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="kuisioner_data-tab" data-toggle="tab"
                                    data-target="#kuisioner_data" type="button" role="tab"
                                    aria-controls="kuisioner_data" aria-selected="false">Kuisioner</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!-- A. Data Umum -->
                            <div class="tab-pane fade show active" id="general_data" role="tabpanel"
                                aria-labelledby="general_data-tab">
                                <form action="{{ route('schools.store') }}" method="post">
                                    @csrf
                                    <div class="container mt-5">
                                        <div class="form-group row">
                                            <h6><strong> A. Data Umum</strong></h6>
                                        </div>
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-4 col-form-label">Nama Sekolah</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="">
                                            </div>
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <label for="npsn" class="col-sm-4 col-form-label">Nomor Pokok Sekolah Nasional
                                                (NPSN)</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control @error('npsn') is-invalid @enderror" id="npsn" name="npsn" placeholder="">
                                                @error('npsn')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Jumlah Siswa <br></label>
                                            <div class="col-sm-8">
                                                <div class="form-row">
                                                    <div class="form-group col-sm-6">
                                                        <label for="siswa_lak">Laki-Laki</label>
                                                        <input type="text" class="form-control @error('siswa_lak') is-invalid @enderror" id="siswa_lak" name="siswa_lak">
                                                        @error('siswa_lak')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="siswa_per">Perempuan</label>
                                                        <input type="text" class="form-control @error('siswa_per') is-invalid @enderror" id="siswa_per" name="siswa_per">
                                                        @error('siswa_per')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="unbk" class="col-sm-4 col-form-label">UNBK</label>
                                            <div class="col-sm-8">
                                                <div class="form-row">
                                                    <div class="col-sm-5">
                                                        <select class="custom-select @error('unbk') is-invalid @enderror" id="unbk" name="unbk">
                                                            <option selected disabled value="">Pilih</option>
                                                            <option value="Sudah">Sudah</option>
                                                            <option value="Belum">Belum</option>
                                                        </select>
                                                    </div>
                                                    @error('unbk')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                    <div class="form-group col-sm-2">
                                                        <input type="text" class="form-control" id="inputCity" name="unbk_tahun" placeholder="Tahun">
                                                    </div>
                                                    <small>(diisi jika sudah melaksanakan UNBK)</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="district_id" class="col-sm-4 col-form-label">Desa / Kecamatan</label>
                                            <div class="col-sm-8">
                                            <select name="district_id" id="district_id" class="custom-select @error('district_id') is-invalid @enderror">
                                                    <option selected disabled value="">Pilih</option>
                                                    @foreach($districts as $district)
                                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('district_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="city_id" class="col-sm-4 col-form-label">Kabupaten / Kota</label>
                                            <div class="col-sm-8">
                                            <select name="city_id" id="city_id" class="custom-select @error('city_id') is-invalid @enderror">
                                                    <option selected disabled value="">Pilih</option>
                                                    @foreach($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('city_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="provinsi" class="col-sm-4 col-form-label">Provinsi</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="provinsi" name="provinsi" value="Maluku" readonly placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="transportasi" class="col-sm-4 col-form-label">Akses Transportasi</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control @error('transportasi') is-invalid @enderror" id="transportasi" name="transportasi" placeholder="">
                                                @error('transportasi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6><strong> Deskripsi Lokasi
                                                    Pendataan</strong></h6>
                                        </div>
                                        <div class="form-group row">
                                            <label for="geografis" class="col-sm-4 col-form-label">Kondisi Geografis <br>
                                                <small>(Uraikan Singkat)</small></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control @error('geografis') is-invalid @enderror" id="geografis" name="geografis"
                                                    rows="4"></textarea>
                                                    @error('geografis')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sosekbud" class="col-sm-4 col-form-label">Kondisi sosekbud <br>
                                                <small>(Uraikan Singkat)</small></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control @error('sosekbud') is-invalid @enderror" id="sosekbud" name="sosekbud"
                                                    rows="4"></textarea>
                                                    @error('sosekbud')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="internet" class="col-sm-4 col-form-label">Fasilitas Komunikasi Internet
                                                Saat Ini</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control @error('internet') is-invalid @enderror" id="internet" name="internet" placeholder="">
                                                @error('internet')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="bantuan_teknologi" class="col-sm-4 col-form-label">Pernah Mendapatkan Bantuan
                                                Terkait Teknologi Informasi dan Komunikasi </label>
                                            <div class="col-sm-8">
                                                <select class="custom-select @error('bantuan_teknologi') is-invalid @enderror"  id="bantuan_teknologi" name="bantuan_teknologi">
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Pernah</option>
                                                    <option>Tidak Pernah</option>
                                                </select>
                                                @error('bantuan_teknologi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama_lembaga" class="col-sm-4 col-form-label">Lembaga Pemberi
                                                Bantuan</label>
                                            <div class="col-sm-8 page-input">
                                                <input type="text" class="form-control mb-1"  name="nama_lembaga[]" id="nama_lembaga" placeholder="" multiple>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mb-3">
                                            <small class="add-input text-primary mr-2" style="cursor: pointer;">Tambah data |</small>
                                            <small class="remove-input text-danger" style="cursor: pointer;">Kurangi data</small>
                                        </div>
                                        <div class="form-group row">
                                            <label for="listrik" class="col-sm-4 col-form-label">Listrik</label>
                                            <div class="col-sm-8">
                                                <select class="custom-select @error('listrik') is-invalid @enderror" id="listrik" name="listrik">
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Ada</option>
                                                    <option>Tidak Ada</option>
                                                </select>
                                                @error('listrik')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="power_suplay" class="col-sm-4 col-form-label">Sumber Daya Listrik</label>
                                            <div class="col-sm-8">
                                                <select class="custom-select @error('power_suplay') is-invalid @enderror" id="power_suplay" name="power_suplay">
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>PLN</option>
                                                    <option>Genset</option>
                                                    <option>Solar Cell</option>
                                                </select>
                                                @error('power_suplay')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="durasi_listrik" class="col-sm-4 col-form-label">Durasi Listrik</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control @error('durasi_listrik') is-invalid @enderror" id="durasi_listrik" name="durasi_listrik" placeholder="">
                                                @error('durasi_listrik')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-sm-2">
                                                <p>(Jam)</p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <!-- B. Data Kompetensi -->
                            <div class="tab-pane fade" id="competency_data" role="tabpanel"
                                aria-labelledby="competency_data-tab">
                                    <div class="container mt-5">
                                        <div class="form-group row">
                                            <h6><strong> B. Data Sekolah Yang Memiliki Akses Internet</strong></h6>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Laboratorium <br></label>
                                            <div class="col-sm-8">
                                                <div class="form-row">
                                                    <div class="form-group col-sm-6">
                                                        <label for="laboratorium_komputer">1. Komputer</label>
                                                        <input type="text" class="form-control @error('laboratorium_komputer') is-invalid @enderror" id="laboratorium_komputer" name="laboratorium_komputer"
                                                            placeholder="(...Unit)">
                                                            @error('laboratorium_komputer')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="laboratorium_multimedia">2. Multimedia</label>
                                                        <input type="text" class="form-control @error('laboratorium_multimedia') is-invalid @enderror" id="laboratorium_multimedia" name="laboratorium_multimedia"
                                                            placeholder="(...Unit)">
                                                            @error('laboratorium_multimedia')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jenis_program" class="col-sm-4 col-form-label">Jenis Program / Kegiatan yang
                                                diterima</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control @error('jenis_program') is-invalid @enderror" id="jenis_program" name="jenis_program" placeholder="">
                                                @error('jenis_program')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tahun_bantuan" class="col-sm-4 col-form-label">Tahun Menerima
                                                Bantuan</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control @error('tahun_bantuan') is-invalid @enderror" id="tahun_bantuan" name="tahun_bantuan" placeholder="">
                                                @error('tahun_bantuan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-12 col-form-label"><strong> Perangkat Internet
                                                    yang
                                                    Ada</strong></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lan" class="col-sm-4 col-form-label">A. LAN/Wireless LAN</label>
                                            <div class="col-sm-5">
                                                <select class="custom-select @error('lan') is-invalid @enderror" id="lan" name="lan">
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Ada</option>
                                                    <option>Tidak Ada</option>
                                                </select>
                                                @error('lan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="#" name="lan_unit"
                                                    placeholder="Jumlah Unit">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="router" class="col-sm-4 col-form-label">B. Router</label>
                                            <div class="col-sm-5">
                                                <select class="custom-select @error('router') is-invalid @enderror" id="router" name="router">
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Ada</option>
                                                    <option>Tidak Ada</option>
                                                </select>
                                                @error('router')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="#" name="router_unit"
                                                    placeholder="Jumlah Unit">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="komputer" class="col-sm-4 col-form-label">A. Komputer</label>
                                            <div class="col-sm-5">
                                                <select class="custom-select @error('komputer') is-invalid @enderror" id="komputer" name="komputer">
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Ada</option>
                                                    <option>Tidak Ada</option>
                                                </select>
                                                @error('komputer')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="#" name="komputer_unit"
                                                    placeholder="Jumlah Unit">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kuota_bandwidth" class="col-sm-4 col-form-label">D. Kuota Banwidth Saat
                                                Ini</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control @error('kuota_bandwidth') is-invalid @enderror" id="kuota_bandwidth" name="kuota_bandwidth" placeholder="">
                                                @error('kuota_bandwidth')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="col-sm-2">
                                                <select class="custom-select @error('internet_speed') is-invalid @enderror" id="" name="internet_speed">
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Kbps</option>
                                                    <option>Mbps</option>
                                                </select>
                                                @error('internet_speed')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kesesuaian_kuota" class="col-sm-4 col-form-label">E. Kesesuaian Kuota Dengan
                                                Kebutuhan</label>
                                            <div class="col-sm-8">
                                                <select class="custom-select @error('kesesuaian_kuota') is-invalid @enderror" id="kesesuaian_kuota" name="kesesuaian_kuota">
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Ada</option>
                                                    <option>Tidak Ada</option>
                                                </select>
                                                @error('kesesuaian_kuota')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alasan_tambah_kuota" class="col-sm-4 col-form-label">F. Alasan Penambahan
                                                Kuota</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control @error('alasan_tambah_kuota') is-invalid @enderror" id="alasan_tambah_kuota" name="alasan_tambah_kuota"
                                                    rows="6"></textarea>
                                                    @error('alasan_tambah_kuota')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6><strong> C. Saran</strong></h6>
                                        </div>
                                        <div class="form-group row">
                                            <label for="saran" class="col-sm-4 col-form-label">Saran</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control @error('saran') is-invalid @enderror" id="saran" name="saran"
                                                    rows="6"></textarea>
                                                    @error('saran')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <!-- Kuisioner -->
                            <div class="tab-pane fade" id="kuisioner_data" role="tabpanel"
                                aria-labelledby="kuisioner_data-tab">
                                <div class="container mt-5">
                                    <div class="form-group row">
                                        <label for="kode_kuisioner" class="col-sm-4 col-form-label">Kode Kuisioner</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control @error('kode_kuisioner') is-invalid @enderror" id="kode_kuisioner" name="kode_kuisioner" placeholder="">
                                            @error('kode_kuisioner')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="tekkom" class="col-form-label">/B.Tekkom/</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control @error('tekkom') is-invalid @enderror" id="tekkom" name="tekkom" placeholder="">
                                            @error('tekkom')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="#" class="col-form-label">/KR/2016</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tingkat_sekolah" class="col-sm-4 col-form-label">Tingkatan Sekolah</label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tingkat_sekolah"
                                                    id="sd" value="SD" checked>
                                                <label class="form-check-label" for="sd">
                                                    SD
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tingkat_sekolah"
                                                    id="smp" value="SMP">
                                                <label class="form-check-label" for="smp">
                                                    SMP
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tingkat_sekolah"
                                                    id="sma" value="SMA">
                                                <label class="form-check-label" for="sma">
                                                    SMA
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tingkat_sekolah"
                                                    id="smk" value="SMK">
                                                <label class="form-check-label" for="smk">
                                                    SMK
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_petugas" class="col-sm-4 col-form-label">Nama Petugas Pendataan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="{{ auth()->user()->name }}" readonly placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" placeholder="">
                                            @error('nip')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_waktu_dari" class="col-sm-4 col-form-label">Range Waktu Pendataan</label>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control @error('range_waktu_dari') is-invalid @enderror" id="range_waktu_dari" name="range_waktu_dari" placeholder="">
                                            @error('range_waktu_dari')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control @error('range_waktu_sampai') is-invalid @enderror" id="range_waktu_sampai" name="range_waktu_sampai" placeholder="">
                                            @error('range_waktu_sampai')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="analisis" class="col-sm-4 col-form-label">Analisa Petugas Pendataan</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control @error('analisis') is-invalid @enderror" id="analisis" name="analisis"  rows="8"></textarea>
                                            @error('analisis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_responden" class="col-sm-4 col-form-label">Responden</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control @error('nama_responden') is-invalid @enderror" id="nama_responden" name="nama_responden" placeholder="Nama Responden">
                                            @error('nama_responden')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control @error('date_responden') is-invalid @enderror" id="" name="date_responden" placeholder="">
                                            @error('date_responden')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 my-5">
                                        <button type="submit" class="btn btn-primary float-right">Simpan Data</button>
                                        <button type="button"
                                            class="btn btn-secondary float-right mr-2">Kembali</button>
                                    </div>
                                    <br><br><br><hr>
                                    <div class="form-group row">
                                        <small><strong><i class="fas fa-file-alt"></i> Catatan</strong></small>
                                        <small class="col-sm-12 text-muted well well-sm no-shadow ">
                                        Untuk kode kuisioner diisi dengan nomor urut dan kode kabupaten/kota : <br>
                                        1.Kota Ambon, 2.Kota Tual, 3.Maluku tengah, 4.SBB, 5.SBT, 6.Butu, 7.Buru Selatan, 8.Maluku Tenggara, 9.Maluku Barat, 10.Maluku Barat Daya, 11.Kep.Aru
                                        </small>
                                    </div>



                                </div>
                            </div>

                        </form>

                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
        </div>
    </div>
</x-app-layout>