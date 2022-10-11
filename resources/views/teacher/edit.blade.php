<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4 py-3 border-left-primary">
                    <div class="card-header">
                        <h6 class="card-title font-weight-bold text-primary">Edit Data Guru</h6>
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
                                    Kompetensi </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="kuisioner_data-tab" data-toggle="tab"
                                    data-target="#kuisioner_data" type="button" role="tab"
                                    aria-controls="kuisioner_data" aria-selected="false">Kuisioner</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <form action="{{ route('teachers.update', $teacher) }}" method="post">
                                @method('put')
                                <!-- A. Data Umum -->
                                <div class="tab-pane fade show active" id="general_data" role="tabpanel"
                                    aria-labelledby="general_data-tab">
                                    <div class="container mt-5">
                                        <div class="form-group row">
                                            <h6><strong> A. Data Umum</strong></h6>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Nama Guru / Tenaga
                                                Administrasi</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="teacher_name"
                                                    name="teacher_name"
                                                    value="{{ old('teacher_name', $teacher->teacher_name) }}"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Status Ketenagaan</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="employment_status"
                                                    name="employment_status"
                                                    value="{{ old('employment_status', $teacher->employment_status) }}"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">NIP <br><span>(Diisi jika
                                                    PNS)</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="nip" name="nip"
                                                    value="{{ old('nip', $teacher->nip) }}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">NUPTK</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="nuptk" name="nuptk"
                                                    value="{{ old('nuptk', $teacher->nuptk) }}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="place_of_birth"
                                                    name="place_of_birth"
                                                    value="{{ old('place_of_birth', $teacher->place_of_birth) }}"
                                                    placeholder="">
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="input-group date" id="reservationdate"
                                                    data-target-input="nearest">
                                                    <input type="text" class="form-control datetimepicker-input"
                                                        data-target="#reservationdate" />
                                                    <div class="input-group-append" data-target="#reservationdate"
                                                        data-toggle="datetimepicker">
                                                        <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validationTooltip04"
                                                class="col-sm-4 col-form-label">Agama</label>
                                            <div class="col-sm-8">
                                                <select class="custom-select" id="religion" name="religion">
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Islam</option>
                                                    <option>Katolik</option>
                                                    <option>Kristen</option>
                                                    <option>Hindu</option>
                                                    <option>Budha</option>
                                                    <option>Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-8">
                                                <select class="custom-select" id="laki-laki" value="Laki-laki">
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Laki-Laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Pendidikan Terakhir</label>
                                            <div class="col-sm-8">
                                                <select class="custom-select" id="last_education" name="last_education"
                                                    required>
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>SMA</option>
                                                    <option>D1</option>
                                                    <option>D2</option>
                                                    <option>D3</option>
                                                    <option>D4</option>
                                                    <option>S1</option>
                                                    <option>S2</option>
                                                    <option>S3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">TMT PNS</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="tmt_pns_tahun"
                                                    name="tmt_pns_tahun"
                                                    value="{{ old('tmt_pns_tahun', $teacher->tmt_pns_tahun) }}"
                                                    placeholder="">
                                            </div>
                                            <div class="col-sm-1">
                                                Tahun
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                            <div class="col-sm-1">
                                                Bulan
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Pangkat / Golongan</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="class" name="class"
                                                    value="{{ old('class', $teacher->class) }}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">TMT Golongan</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="tmt_class_tahun"
                                                    name="tmt_class_tahun"
                                                    value="{{ old('tmt_class_tahun', $teacher->tmt_class_tahun) }}"
                                                    placeholder="">
                                            </div>
                                            <div class="col-sm-1">
                                                Tahun
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                            <div class="col-sm-1">
                                                Bulan
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Asal Sekolah</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="School_Origin"
                                                    name="School_Origin"
                                                    value="{{ old('School_Origin', $teacher->School_Origin) }}"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Desa / Kecamatan</label>
                                            <div class="col-sm-8">
                                                <select name="district_id" class="form-control " id="district_id">
                                                    @foreach($districts as $district)
                                                    @if($district->name == $teacher->district->name)
                                                    <option selected value="{{ $district->id }}">{{ $district->name }}
                                                    </option>
                                                    @else
                                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Kabupaten / Kota</label>
                                            <div class="col-sm-8">
                                                <select name="city_id" class="form-control" id="city_id">
                                                    @foreach($cities as $city)
                                                    @if($city->name == $teacher->city->name)
                                                    <option selected value="{{ $city->id }}">{{ $city->name }}</option>
                                                    @else
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Provinsi</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="#" placeholder="" readonly
                                                    value="{{ $teacher->provinsi }}" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">No Telpon/HP</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="phone" name="phone"
                                                    value="{{ old('phone', $teacher->phone) }}" placeholder="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- B. Data Kompetensi -->
                                <div class="tab-pane fade" id="competency_data" role="tabpanel"
                                    aria-labelledby="competency_data-tab">
                                    <div class="container mt-5">
                                        <div class="form-group row">
                                            <h6><strong> B. Data Kompetensi</strong></h6>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Mata pelajaran yang
                                                diampu</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="subjects_taught"
                                                    name="subjects_taught"
                                                    value="{{ old('subjects_taught', $teacher->subjects_taught) }}"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Program atau kegiatan yang
                                                dilaksanakan</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="program" name="program"
                                                    value="{{ old('program', $teacher->program) }}" placeholder="">
                                                <small><a href="#">tambah data</a></small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Status Sertifikasi</label>
                                            <div class="col-sm-8">
                                                <select class="custom-select" id="certification_status"
                                                    name="certification_status"
                                                    value="{{ old('certification_status', $teacher->certification_status) }}"
                                                    required>
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Sudah</option>
                                                    <option>Belum</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Tahun Sertifikasi</label><br>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="certification_year"
                                                    name="certification_year"
                                                    value="{{ old('certification_year', $teacher->certification_year) }}"
                                                    placeholder=""> <br>
                                            </div>
                                            <div class="col-sm-2">
                                                <small>*(diisi jika sudah sertifikasi)</small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="#" class="col-form-label" id="reason_not_certified"
                                                    name="reason_not_certified">Alasan Belum
                                                    Sertifikasi</label><br>
                                                <small>*(diisi jika sudah sertifikasi tidak perlu diisi)</small>
                                            </div>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label" id="competencies_taught"
                                                name="competencies_taught"
                                                value="{{ old('competencies_taught', $teacher->competencies_taught) }}">Kompetensi
                                                yang
                                                dimiliki</label>
                                            <div class="col-sm-8">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Ms.
                                                        Word</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                        value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">Ms.
                                                        Excel</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                        value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox3">Power
                                                        Point</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
                                                        value="option2">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox4">Photoshop</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5"
                                                        value="option2">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox5">Animasi</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6"
                                                        value="option1">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox6">Programmer</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7"
                                                        value="option2">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox7">Jaringan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8"
                                                        value="option2">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox8">Lainnya</label>
                                                </div>
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" placeholder="Lainnya">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Kegiatan Sosialisasi
                                                UNBK</label>
                                            <div class="col-sm-4">
                                                <select class="custom-select" id="unbk_socialization_activities"
                                                    name="unbk_socialization_activities"
                                                    value="{{ old('unbk_socialization_activities', $teacher->unbk_socialization_activities) }}">
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Sudah</option>
                                                    <option>Belum</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="#" placeholder="Tahun">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Keterlibatan dalam
                                                UNBK</label>
                                            <div class="col-sm-4">
                                                <select class="custom-select" id="involvement_unbk"
                                                    name="involvement_unbk"
                                                    value="{{ old('involvement_unbk', $teacher->involvement_unbk) }}">
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Sudah</option>
                                                    <option>Belum</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="#" placeholder="Tahun">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="#" class="col-form-label" id="history_involvement_unbk"
                                                    name="history_involvement_unbk">Riwayat Keterlibatan dalam
                                                    UNBK</label><br>
                                                <small>*(jika telah melaksanakan UNBK)</small>
                                            </div>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-12 col-form-label"><strong> Pelatihan Yang
                                                    Pernah Diikuti</strong></label>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label>Nama Diklat/Workshop/Seminar</label>
                                                <input type="text" class="form-control">
                                                <small><a href="#">tambah data</a></small>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label>Tingkatan/Jenis Diklat</label>
                                                <select class="form-control">
                                                    <option selected>Pilih</option>
                                                    <option>Pemula</option>
                                                    <option>Lanjutan</option>
                                                    <option>Mahir</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Jampel</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Kebutuhan Diklat saat
                                                ini</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="">
                                                <small><a href="#">tambah data</a></small>
                                            </div>
                                        </div>
                                        @csrf
                                    </div>
                                </div>
                                <!-- Kuisioner -->
                                <div class="tab-pane fade" id="kuisioner_data" role="tabpanel"
                                    aria-labelledby="kuisioner_data-tab">
                                    <div class="container mt-5">
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Kode Kuisioner</label>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                            <div class="col-sm-1">
                                                <label for="#" class="col-form-label">/B.Tekkom/</label>
                                            </div>
                                            <div class="col-sm-1">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                            <div class="col-sm-1">
                                                <label for="#" class="col-form-label">/KR/2016</label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Tingkatan Sekolah</label>
                                            <div class="col-sm-8">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios1" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        SD
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios2" value="option2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        SMP
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios3" value="option1" checked>
                                                    <label class="form-check-label" for="exampleRadios3">
                                                        SMA
                                                    </label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                                        id="exampleRadios4" value="option2">
                                                    <label class="form-check-label" for="exampleRadios4">
                                                        SMK
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Nama Petugas
                                                Pendataan</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">NIP</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="range_waktu_dari" class="col-sm-4 col-form-label">Range Waktu
                                                Pendataan</label>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" id="range_waktu_dari"
                                                    name="range_waktu_dari" placeholder="">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" id="range_waktu_sampai"
                                                    name="range_waktu_sampai" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Analisa Petugas
                                                Pendataan</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="8"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Responden</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="#"
                                                    placeholder="Nama Responden">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="date" class="form-control" id="range_waktu_sampai"
                                                    name="range_waktu_sampai" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 my-5">
                                            <button type="submit" class="btn btn-primary float-right">Simpan
                                                Data</button>
                                            <button type="button"
                                                class="btn btn-secondary float-right mr-2">Kembali</button>
                                        </div>
                                        <br><br><br>
                                        <hr>
                                        <div class="form-group row">
                                            <small><strong><i class="fas fa-file-alt"></i> Catatan</strong></small>
                                            <small class="col-sm-12 text-muted well well-sm no-shadow ">
                                                Untuk kode kuisioner diisi dengan nomor urut dan kode kabupaten/kota :
                                                <br>
                                                1.Kota Ambon, 2.Kota Tual, 3.Maluku tengah, 4.SBB, 5.SBT, 6.Butu, 7.Buru
                                                Selatan, 8.Maluku Tenggara, 9.Maluku Barat, 10.Maluku Barat Daya,
                                                11.Kep.Aru
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-body -->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>