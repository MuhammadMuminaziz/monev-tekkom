<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4 py-3 border-left-primary">
                    <div class="card-header">
                    <h6 class="card-title font-weight-bold text-primary">Edit Data Sekolah</h6>
                    </div>
                    <!-- /.card-header -->
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
                                aria-labelledby="general_data-tab">                                <div class="container mt-5">
                                <form action="{{ route('schools.update', $school) }}" method="post">
                                    @method('put')
                                    @csrf
                                    <div class="form-group row">
                                        <h6><strong> A. Data Umum</strong></h6>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Nama Sekolah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="" value="{{ old('name', $school->name) }}">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="npsn" class="col-sm-4 col-form-label">Nomor Pokok Sekolah Nasional
                                            (NPSN)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('npsn') is-invalid @enderror" id="npsn" name="npsn" value="{{ old('npsn', $school->npsn) }}" placeholder="">
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
                                                <div class="form-group col-sm-5">
                                                    <label for="siswa_lak">Laki-Laki</label>
                                                    <input type="number" class="form-control @error('siswa_lak') is-invalid @enderror" id="siswa_lak" name="siswa_lak" value="{{ old('siswa_lak', $school->siswa_lak) }}">
                                                    @error('siswa_lak')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                </div>
                                                <div class="form-group col-sm-5">
                                                    <label for="siswa_per">Perempuan</label>
                                                    <input type="number" class="form-control @error('siswa_per') is-invalid @enderror" id="siswa_per" name="siswa_per" value="{{ old('siswa_per', $school->siswa_per) }}">
                                                    @error('siswa_per')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                </div>
                                                <div class="form-group col-sm-2">
                                                    <label for="jumlah_siswa">Total</label>
                                                    <input type="text" class="form-control @error('siswa_per') is-invalid @enderror" id="jumlah_siswa" name="jumlah_siswa" value="{{ old('jumlah_siswa', $school->jumlah_siswa) }}" readonly>
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
                                                        <option {{ old('unbk', $school->unbk) == 'Sudah' ? 'selected' : '' }} value="Sudah">Sudah</option>
                                                        <option {{ old('unbk', $school->unbk) == 'Belum' ? 'selected' : '' }} value="Belum">Belum</option>
                                                    </select>
                                                </div>
                                                @error('unbk')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <div class="form-group col-sm-2">
                                                    <input type="number" class="form-control" id="inputCity" name="unbk_tahun" placeholder="Tahun" value="{{ old('unbk_tahun', $school->unbk_tahun) }}">
                                                </div>
                                                <small>(diisi jika sudah melaksanakan UNBK)</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="district_id" class="col-sm-4 col-form-label">Desa / Kecamatan</label>
                                        <div class="col-sm-8">
                                        <select name="district_id" id="district_id" class="custom-select @error('district_id') is-invalid @enderror">
                                                @foreach($districts as $district)
                                                @if( old('district_id', $school->district->id) == $district->id)
                                                <option selected value="{{ $district->id }}">{{ $district->name }}</option>
                                                @else
                                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                @endif
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
                                                @foreach($cities as $city)
                                                @if( old('city_id', $school->city->id) == $city->id)
                                                <option selected value="{{ $city->id }}">{{ $city->name }}</option>
                                                @else
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endif
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
                                            <input type="text" class="form-control" id="provinsi" name="provinsi" value="Maluku" readonly placeholder="" value="{{ $school->provinsi }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="transportasi" class="col-sm-4 col-form-label">Akses Transportasi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('transportasi') is-invalid @enderror" id="transportasi" name="transportasi" value="{{ old('transportasi', $school->transportasi) }}" placeholder="">
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
                                                rows="4">{{ old('geografis', $school->geografis) }}</textarea>
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
                                                rows="4">{{ old('sosekbud', $school->sosekbud) }}</textarea>
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
                                            <input type="text" class="form-control @error('internet') is-invalid @enderror" id="internet" name="internet" value="{{ old('internet', $school->internet) }}" placeholder="">
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
                                            <select class="custom-select @error('bantuan_teknologi') is-invalid @enderror" id="bantuan_teknologi" name="bantuan_teknologi">
                                                <option {{ old('bantuan_teknologi', $school->bantuan_teknologi) == 'Pernah' ? 'checked' : '' }}>Pernah</option>
                                                <option {{ old('bantuan_teknologi', $school->bantuan_teknologi) != 'Pernah' ? 'checked' : '' }}>Tidak Pernah</option>
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
                                            @foreach($school->lembaga_bantuan as $data)
                                            <input type="text" class="form-control form-input mb-1"  name="nama_lembaga[]" id="nama_lembaga" placeholder="" value="{{ $data->name }}" multiple>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mb-3">
                                        <small class="add-input text-primary mr-2" style="cursor: pointer;">Tambah data</small>
                                        <small class="remove-input text-danger" style="cursor: pointer;">Kurangi data</small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="listrik" class="col-sm-4 col-form-label">Listrik</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select @error('listrik') is-invalid @enderror" id="listrik" name="listrik">
                                                <option {{ old('listrik', $school->listrik) == 'Ada' ? 'checked' : '' }}>Ada</option>
                                                <option {{ old('listrik', $school->listrik) == 'Tidak Ada' ? 'checked' : '' }}>Tidak Ada</option>
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
                                                <option {{ old('power_suplay', $school->power_suplay) == 'PLN' ? 'selected' : '' }}>PLN</option>
                                                <option {{ old('power_suplay', $school->power_suplay) == 'Genset' ? 'selected' : '' }}>Genset</option>
                                                <option {{ old('power_suplay', $school->power_suplay) == 'Solar Cell' ? 'selected' : '' }}>Solar Cell</option>
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
                                        <div class="col-sm-5">
                                            <input type="number" class="form-control @error('durasi_listrik') is-invalid @enderror" id="durasi_listrik" name="durasi_listrik" placeholder="" value="{{ old('durasi_listrik', $school->durasi_listrik) }}">
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
                                                    <input type="number" class="form-control @error('laboratorium_komputer') is-invalid @enderror" id="laboratorium_komputer" name="laboratorium_komputer"
                                                        placeholder="(...Unit)" value="{{ old('laboratorium_komputer', $school->laboratorium_komputer) }}">
                                                        @error('laboratorium_komputer')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                            @enderror
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="laboratorium_multimedia">2. Multimedia</label>
                                                    <input type="number" class="form-control @error('laboratorium_multimedia') is-invalid @enderror" id="laboratorium_multimedia" name="laboratorium_multimedia"
                                                        placeholder="(...Unit)" value="{{ old('laboratorium_multimedia', $school->laboratorium_multimedia) }}">
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
                                            <input type="text" class="form-control @error('jenis_program') is-invalid @enderror" id="jenis_program" name="jenis_program" value="{{ old('jenis_program', $school->jenis_program) }}" placeholder="">
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
                                            <input type="number" class="form-control  @error('tahun_bantuan') is-invalid @enderror" id="tahun_bantuan" value="{{ old('tahun_bantuan', $school->tahun_bantuan) }}" name="tahun_bantuan" placeholder="">
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
                                                <option {{ old('lan', $school->lan) != 'Tidak Ada' ? 'selected' : '' }}>Ada</option>
                                                <option {{ old('lan', $school->lan) == 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada</option>
                                            </select>
                                            @error('lan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="#" name="lan_unit"
                                                placeholder="Jumlah Unit" value="{{ old('lan_unit', $school->lan_unit) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="router" class="col-sm-4 col-form-label">B. Router</label>
                                        <div class="col-sm-5">
                                            <select class="custom-select @error('router') is-invalid @enderror" id="router" name="router">
                                                <option {{ OLD('router', $school->router) != 'Tidak Ada' ? 'selected' : '' }}>Ada</option>
                                                <option {{ OLD('router', $school->router) == 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada</option>
                                            </select>
                                            @error('router')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="#" name="router_unit"
                                                placeholder="Jumlah Unit" value="{{ old('router_unit', $school->router_unit) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="komputer" class="col-sm-4 col-form-label">A. Komputer</label>
                                        <div class="col-sm-5">
                                            <select class="custom-select @error('komputer') is-invalid @enderror" id="komputer" name="komputer">
                                                <option {{ old('komputer', $school->komputer) != 'Tidak Ada' ? 'selected' : '' }}>Ada</option>
                                                <option {{ old('komputer', $school->komputer) == 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada</option>
                                            </select>
                                            @error('komputer')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="#" name="komputer_unit"
                                                placeholder="Jumlah Unit" value="{{ old('komputer_unit', $school->komputer_unit) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kuota_bandwidth" class="col-sm-4 col-form-label">D. Kuota Banwidth Saat
                                            Ini</label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control @error('kuota_bandwidth') is-invalid @enderror" id="kuota_bandwidth" name="kuota_bandwidth" value="{{ old('kuota_bandwidth', $school->kuota_bandwidth) }}" placeholder="">
                                            @error('kuota_bandwidth')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                        </div>
                                        <div class="col-sm-2">
                                            <select class="custom-select @error('internet_speed') is-invalid @enderror" id="" name="internet_speed">
                                                <option {{ old('internet_speed', $school->internet_speed) == 'Kbps' ? 'selected' : '' }}>Kbps</option>
                                                <option {{ old('internet_speed', $school->internet_speed) == 'Mbps' ? 'selected' : '' }}>Mbps</option>
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
                                                <option {{ old('kesesuaian_kuota', $school->kesesuaian_kuota) == 'Ada' ? 'selected' : '' }}>Ada</option>
                                                <option {{ old('kesesuaian_kuota', $school->kesesuaian_kuota) != 'Ada' ? 'selected' : '' }}>Tidak Ada</option>
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
                                            <textarea class="form-control @error('alasan_tambah_kuota') is-invalid @enderror"  id="alasan_tambah_kuota" name="alasan_tambah_kuota"
                                                rows="4">{{ old('alasan_tambah_kuota', $school->alasan_tambah_kuota) }}</textarea>
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
                                                rows="6">{{ old('saran', $school->saran) }}</textarea>
                                                @error('saran')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="analisis" class="col-sm-4 col-form-label">Analisa Petugas Pendataan</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control @error('analisis') is-invalid @enderror"  id="analisis" name="analisis"
                                                rows="6">{{ old('analisis', $school->analisis) }}</textarea>
                                                @error('analisis')
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
                                        <label for="kode_kuisioner @error('kode_kuisioner') is-invalid @enderror" class="col-sm-4 col-form-label">Kode Kuisioner</label>
                                        <div class="col-sm-1">
                                            <input type="number" class="form-control" id="kode_kuisioner" name="kode_kuisioner" value="{{ old('kode_kuisioner', $school->kode_kuisioner) }}" placeholder="">
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
                                            <input type="text" class="form-control @error('tekkom') is-invalid @enderror" id="tekkom" name="tekkom" value="{{ old('tekkom', $school->tekkom) }}" placeholder="">
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
                                            <select class="custom-select @error('tingkat_sekolah') is-invalid @enderror" id="tingkat_sekolah" name="tingkat_sekolah">
                                                <option {{ old('tingkat_sekolah', $school->tingkat_sekolah) == 'SD' ? 'selected' : '' }} value="SD">SD</option>
                                                <option {{ old('tingkat_sekolah', $school->tingkat_sekolah) == 'SMP' ? 'selected' : '' }} value="SMP">SMP</option>
                                                <option {{ old('tingkat_sekolah', $school->tingkat_sekolah) == 'SMA' ? 'selected' : '' }} value="SMA">SMA</option>
                                                <option {{ old('tingkat_sekolah', $school->tingkat_sekolah) == 'SMK' ? 'selected' : '' }} value="SMK">SMK</option>
                                            </select>
                                            @error('tingkat_sekolah')
                                            <div class="infalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_petugas" class="col-sm-4 col-form-label">Nama Petugas Pendataan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" value="{{ old('nama_petugas', $school->nama_petugas) }}" readonly placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old('nip', $school->nip) }}" placeholder="">
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
                                            <input type="date" class="form-contro @error('range_waktu_dari') is-invalid @enderror" id="range_waktu_dari" name="range_waktu_dari" value="{{ old('range_waktu_dari', $school->range_waktu_dari) }}" placeholder="">
                                            @error('range_waktu_dari')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control @error('range_waktu_sampai') is-invalid @enderror" id="range_waktu_sampai" name="range_waktu_sampai" value="{{ old('range_waktu_dari', $school->range_waktu_sampai) }}" placeholder="">
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
                                            <textarea class="form-control @error('analisis') is-invalid @enderror" id="analisis" name="analisis" rows="8">{{ old('analisis', $school->analisis) }}</textarea>
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
                                            <input type="text" class="form-control @error('nama_responden') is-invalid @enderror" id="nama_responden" name="nama_responden" value="{{ old('nama_responden', $school->nama_responden) }}" placeholder="Nama Responden">
                                            @error('nama_responden')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control @error('date_responden') is-invalid @enderror" id="date_responden" name="date_responden" value="{{ old('date_responden', $school->date_responden) }}" placeholder="">
                                            @error('date_responden')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-12 my-5">
                                        <button type="submit" class="btn btn-primary float-right">Update Data</button>
                                        <a href="{{ route('schools.index') }}" class="btn btn-secondary float-right mr-2">Kembali</a>
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
                        </div>
                    </form>
                    </div>
                    <!-- /.card-body -->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>