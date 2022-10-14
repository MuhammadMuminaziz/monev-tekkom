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
                                            <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{ old('name', $school->name) }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="npsn" class="col-sm-4 col-form-label">Nomor Pokok Sekolah Nasional
                                            (NPSN)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="npsn" name="npsn" value="{{ old('npsn', $school->npsn) }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Jumlah Siswa <br></label>
                                        <div class="col-sm-8">
                                            <div class="form-row">
                                                <div class="form-group col-sm-5">
                                                    <label for="siswa_lak">Laki-Laki</label>
                                                    <input type="text" class="form-control" id="siswa_lak" name="siswa_lak" value="{{ old('siswa_lak', $school->siswa_lak) }}">
                                                </div>
                                                <div class="form-group col-sm-5">
                                                    <label for="siswa_per">Perempuan</label>
                                                    <input type="text" class="form-control" id="siswa_per" name="siswa_per" value="{{ old('siswa_per', $school->siswa_per) }}">
                                                </div>
                                                <div class="form-group col-sm-2">
                                                    <label for="jumlah_siswa">Total</label>
                                                    <input type="text" class="form-control" id="jumlah_siswa" name="jumlah_siswa" value="{{ old('jumlah_siswa', $school->jumlah_siswa) }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="unbk" class="col-sm-4 col-form-label">UNBK</label>
                                        <div class="col-sm-8">
                                            <div class="form-row">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="unbk" id="unbk-1" value="Sudah" {{ $school->unbk != 'Belum' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="unbk-1">Sudah</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="unbk" id="unbk-2" value="Belum" {{ $school->unbk == 'Belum' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="unbk-2">Belum</label>
                                                </div>
                                                <div class="form-group col-sm-2">
                                                    <input type="text" class="form-control" id="inputCity" name="unbk"
                                                        placeholder="Tahun" value="{{ $school->unbk != 'Belum' ? $school->unbk : '' }}">
                                                </div>
                                                <small>(diisi jika sudah melaksanakan UNBK)</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="district_id" class="col-sm-4 col-form-label">Desa / Kecamatan</label>
                                        <div class="col-sm-8">
                                        <select name="district_id" id="district_id" class="custom-select">
                                                @foreach($districts as $district)
                                                @if($school->district->name == $district->name)
                                                <option selected value="{{ $district->id }}">{{ $district->name }}</option>
                                                @else
                                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="city_id" class="col-sm-4 col-form-label">Kabupaten / Kota</label>
                                        <div class="col-sm-8">
                                        <select name="city_id" id="city_id" class="custom-select">
                                                @foreach($cities as $city)
                                                @if($school->city->name == $city->name)
                                                <option selected value="{{ $city->id }}">{{ $city->name }}</option>
                                                @else
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endif
                                                @endforeach
                                            </select>
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
                                            <input type="text" class="form-control" id="transportasi" name="transportasi" value="{{ old('transportasi', $school->transportasi) }}" placeholder="">
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
                                            <textarea class="form-control"  id="geografis" name="geografis"
                                                rows="4">{{ $school->geografis }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sosekbud" class="col-sm-4 col-form-label">Kondisi sosekbud <br>
                                            <small>(Uraikan Singkat)</small></label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="sosekbud" name="sosekbud"
                                                rows="4">{{ $school->sosekbud }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="internet" class="col-sm-4 col-form-label">Fasilitas Komunikasi Internet
                                            Saat Ini</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="internet" name="internet" value="{{ old('internet', $school->internet) }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bantuan_teknologi" class="col-sm-4 col-form-label">Pernah Mendapatkan Bantuan
                                            Terkait Teknologi Informasi dan Komunikasi </label>
                                        <div class="col-sm-8">
                                            <select class="custom-select"  id="bantuan_teknologi" name="bantuan_teknologi">
                                                <option {{ $school->bantuan_teknologi == 'Pernah' ? 'checked' : '' }}>Pernah</option>
                                                <option {{ $school->bantuan_teknologi != 'Pernah' ? 'checked' : '' }}>Tidak Pernah</option>
                                            </select>
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
                                            <select class="custom-select" id="listrik" name="listrik" required>
                                                <option {{ $school->listrik == 'Ada' ? 'checked' : '' }}>Ada</option>
                                                <option {{ $school->listrik != 'Ada' ? 'checked' : '' }}>Tidak Ada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="power_suplay" class="col-sm-4 col-form-label">Sumber Daya Listrik</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="power_suplay" name="power_suplay" required>
                                                <option {{ $school->power_suplay == 'PLN' ? 'selected' : '' }}>PLN</option>
                                                <option {{ $school->power_suplay == 'Genset' ? 'selected' : '' }}>Genset</option>
                                                <option {{ $school->power_suplay == 'Solar Cell' ? 'selected' : '' }}>Solar Cell</option>
                                                <option>Lainnya <a href="#">#</a></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="durasi_listrik" class="col-sm-4 col-form-label">Durasi Listrik</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="durasi_listrik" name="durasi_listrik" placeholder="" value="{{ old('durasi_listrik', $school->durasi_listrik) }}">
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
                                                    <input type="text" class="form-control" id="laboratorium_komputer" name="laboratorium_komputer"
                                                        placeholder="(...Unit)" value="{{ old('laboratorium_komputer', $school->laboratorium_komputer) }}">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="laboratorium_multimedia">2. Multimedia</label>
                                                    <input type="text" class="form-control" id="laboratorium_multimedia" name="laboratorium_multimedia"
                                                        placeholder="(...Unit)" value="{{ old('laboratorium_multimedia', $school->laboratorium_multimedia) }}">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jenis_program" class="col-sm-4 col-form-label">Jenis Program / Kegiatan yang
                                            diterima</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="jenis_program" name="jenis_program" value="{{ old('jenis_program', $school->jenis_program) }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun_bantuan" class="col-sm-4 col-form-label">Tahun Menerima
                                            Bantuan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control"id="tahun_bantuan" value="{{ old('tahun_bantuan', $school->tahun_bantuan) }}" name="tahun_bantuan" placeholder="">
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
                                            <select class="custom-select" id="lan" name="">
                                                <option {{ $school->lan != 'Tidak Ada' ? 'selected' : '' }}>Ada</option>
                                                <option {{ $school->lan == 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="#" name="lan"
                                                placeholder="Jumlah Unit" value="{{ $school->lan != 'Tidak Ada' ? $school->lan : '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="router" class="col-sm-4 col-form-label">B. Router</label>
                                        <div class="col-sm-5">
                                            <select class="custom-select" id="router" name="">
                                                <option {{ $school->router != 'Tidak Ada' ? 'selected' : '' }}>Ada</option>
                                                <option {{ $school->router == 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="#" name="router"
                                                placeholder="Jumlah Unit" value="{{ $school->router != 'Tidak Ada' ? $school->router : '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="komputer" class="col-sm-4 col-form-label">A. Komputer</label>
                                        <div class="col-sm-5">
                                            <select class="custom-select" id="komputer" name="">
                                                <option {{ $school->komputer != 'Tidak Ada' ? 'selected' : '' }}>Ada</option>
                                                <option {{ $school->komputer == 'Tidak Ada' ? 'selected' : '' }}>Tidak Ada</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="number" class="form-control" id="#" name="komputer"
                                                placeholder="Jumlah Unit" value="{{ $school->komputer != 'Tidak Ada' ? $school->komputer : '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kuota_bandwidth" class="col-sm-4 col-form-label">D. Kuota Banwidth Saat
                                            Ini</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="kuota_bandwidth" name="kuota_bandwidth" value="{{ old('kuota_bandwidth', $school->kuota_bandwidth) }}" placeholder="">
                                        </div>
                                        <div class="col-sm-2">
                                            <select class="custom-select" id="" name="internet_speed">
                                                <option {{ $school->internet_speed == 'Kbps' ? 'selected' : '' }}>Kbps</option>
                                                <option {{ $school->internet_speed == 'Mbps' ? 'selected' : '' }}>Mbps</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kesesuaian_kuota" class="col-sm-4 col-form-label">E. Kesesuaian Kuota Dengan
                                            Kebutuhan</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select" id="kesesuaian_kuota" name="kesesuaian_kuota">
                                                <option {{ $school->kesesuaian_kuota == 'Ada' ? 'selected' : '' }}>Ada</option>
                                                <option {{ $school->kesesuaian_kuota != 'Ada' ? 'selected' : '' }}>Tidak Ada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alasan_tambah_kuota" class="col-sm-4 col-form-label">F. Alasan Penambahan
                                            Kuota</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control"  id="alasan_tambah_kuota" name="alasan_tambah_kuota"
                                                rows="4">{{ $school->alasan_tambah_kuota }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <h6><strong> C. Saran</strong></h6>
                                    </div>
                                    <div class="form-group row">
                                        <label for="saran" class="col-sm-4 col-form-label">Saran</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="saran" name="saran"
                                                rows="6">{{ $school->saran }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="analisis" class="col-sm-4 col-form-label">Analisa Petugas Pendataan</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control"  id="analisis" name="analisis"
                                                rows="6">{{ $school->analisis }}</textarea>
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
                                            <input type="text" class="form-control" id="kode_kuisioner" name="kode_kuisioner" value="{{ old('kode_kuisioner', $school->kode_kuisioner) }}" placeholder="">
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="tekkom" class="col-form-label">/B.Tekkom/</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="tekkom" name="tekkom" value="{{ old('tekkom', $school->tekkom) }}" placeholder="">
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="#" class="col-form-label">/KR/2016</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tingkat_sekolah" class="col-sm-4 col-form-label">Tingkatan Sekolah</label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios1" value="SD" {{ $school->tingkat_sekolah == 'SD' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="exampleRadios1">
                                                    SD
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios2" value="SMP" {{ $school->tingkat_sekolah == 'SMP' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="exampleRadios2">
                                                    SMP
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios3" value="SMA" {{ $school->tingkat_sekolah == 'SMA' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="exampleRadios3">
                                                    SMA
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios4" value="SMK" {{ $school->tingkat_sekolah == 'SMK' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="exampleRadios4">
                                                    SMK
                                                </label>
                                            </div>
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
                                            <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip', $school->nip) }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="range_waktu_dari" class="col-sm-4 col-form-label">Range Waktu Pendataan</label>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control" id="range_waktu_dari" name="range_waktu_dari" value="{{ old('range_waktu_dari', $school->range_waktu_dari) }}" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control" id="range_waktu_sampai" name="range_waktu_sampai" value="{{ old('range_waktu_dari', $school->range_waktu_sampai) }}" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="analisis" class="col-sm-4 col-form-label">Analisa Petugas Pendataan</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="analisis" name="analisis" rows="8">{{ $school->analisis }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_responden" class="col-sm-4 col-form-label">Responden</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="nama_responden" name="nama_responden" value="{{ old('nama_responden', $school->nama_responden) }}" placeholder="Nama Responden">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control" id="date_responden" name="date_responden" value="{{ old('date_responden', $school->date_responden) }}" placeholder="">
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