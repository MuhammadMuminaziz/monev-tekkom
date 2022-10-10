<x-app-layout>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4 py-3 border-left-primary">
                <div class="card-header">
                    <h6 class="card-title font-weight-bold text-primary">Edit Data Guru</h6>
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
                                    Kompetensi </button>
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
                                                    <input type="text" class="form-control" id="teacher_name" name="teacher_name" value="{{ old('teacher_name', $teacher->teacher_name) }}" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="#" class="col-sm-4 col-form-label">Status Ketenagaan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="employment_status" name="employment_status" value="{{ old('employment_status', $teacher->employment_status) }}" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="#" class="col-sm-4 col-form-label" id="nip" name="nip" value="{{ old('nip', $teacher->nip) }}">NIP <br><span>(Diisi jika
                                                        PNS)</span></label>

                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="#" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="#" class="col-sm-4 col-form-label">NUPTK</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nuptk" name="nuptk" value="{{ old('nuptk', $teacher->nuptk) }}" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="#" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" value="{{ old('place_of_birth', $teacher->place_of_birth) }}" placeholder="">
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
                                                    <select class="custom-select" id="religion" name="religion" >
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
                                                    <select class="custom-select" id="laki-laki" value="Laki-laki" >
                                                        <option selected disabled value="">Pilih</option>
                                                        <option>Laki-Laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="#" class="col-sm-4 col-form-label">Pendidikan Terakhir</label>
                                                <div class="col-sm-8">
                                                    <select class="custom-select" id="last_education" name="last_education" required>
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
                                                    <input type="text" class="form-control"  id="tmt_pns_tahun" name="tmt_pns_tahun" value="{{ old('tmt_pns_tahun', $teacher->tmt_pns_tahun) }}" placeholder="">
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
                                                    <input type="text" class="form-control" id="class" name="class" value="{{ old('class', $teacher->class) }}" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="#" class="col-sm-4 col-form-label">TMT Golongan</label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" id="tmt_class_tahun" name="tmt_class_tahun" value="{{ old('tmt_class_tahun', $teacher->tmt_class_tahun) }}" placeholder="">
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
                                                    <input type="text" class="form-control"id="School_Origin" name="School_Origin" value="{{ old('School_Origin', $teacher->School_Origin) }}" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="#" class="col-sm-4 col-form-label">Desa / Kecamatan</label>
                                                <div class="col-sm-8">
                                                <select name="district_id" class="form-control " id="district_id">
                                                @foreach($districts as $district)
                                                @if($district->name == $teacher->district->name)
                                                <option selected value="{{ $district->id }}">{{ $district->name }}</option>
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
                                                    <input type="text" class="form-control" id="#" placeholder="" readonly value="{{ $teacher->provinsi }}" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="#" class="col-sm-4 col-form-label">No Telpon/HP</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $teacher->phone) }}" placeholder="">
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
                                                    <input type="text" class="form-control" id="subjects_taught" name="subjects_taught" value="{{ old('subjects_taught', $teacher->subjects_taught) }}" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="#" class="col-sm-4 col-form-label">Program atau kegiatan yang
                                                    dilaksanakan</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control"  id="program" name="program" value="{{ old('program', $teacher->program) }}" placeholder="">
                                                    <small><a href="#">tambah data</a></small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="#" class="col-sm-4 col-form-label">Status Sertifikasi</label>
                                                <div class="col-sm-8">
                                                    <select class="custom-select" id="certification_status" name="certification_status" value="{{ old('certification_status', $teacher->certification_status) }}" required>
                                                        <option selected disabled value="">Pilih</option>
                                                        <option>Sudah</option>
                                                        <option>Belum</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="#" class="col-sm-4 col-form-label">Tahun Sertifikasi</label><br>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control" id="certification_year" name="certification_year" value="{{ old('certification_year', $teacher->certification_year) }}" placeholder=""> <br>
                                                </div>
                                                <div class="col-sm-2">
                                                    <small>*(diisi jika sudah sertifikasi)</small>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="#" class="col-form-label" id="reason_not_certified" name="reason_not_certified">Alasan Belum
                                                        Sertifikasi</label><br>
                                                    <small>*(diisi jika sudah sertifikasi tidak perlu diisi)</small>
                                                </div>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="6"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="#" class="col-sm-4 col-form-label" id="competencies_taught" name="competencies_taught" value="{{ old('competencies_taught', $teacher->competencies_taught) }}">Kompetensi yang
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
                                                    <select class="custom-select" id="unbk_socialization_activities" name="unbk_socialization_activities" value="{{ old('unbk_socialization_activities', $teacher->unbk_socialization_activities) }}" >
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
                                                    <select class="custom-select" id="involvement_unbk" name="involvement_unbk" value="{{ old('involvement_unbk', $teacher->involvement_unbk) }}">
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
                                                    <label for="#" class="col-form-label" id="history_involvement_unbk" name="history_involvement_unbk">Riwayat Keterlibatan dalam
                                                        UNBK</label><br>
                                                    <small>*(jika telah melaksanakan UNBK)</small>
                                                </div>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="4"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="#" class="col-sm-12 col-form-label"><strong> Pelatihan Yang Pernah Diikuti</strong></label>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-5">
                                                    <label >Nama Diklat/Workshop/Seminar</label>
                                                    <input type="text" class="form-control" >
                                                    <small><a href="#">tambah data</a></small>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label>Tingkatan/Jenis Diklat</label>
                                                    <select  class="form-control">
                                                        <option selected>Pilih</option>
                                                        <option>Pemula</option>
                                                        <option>Lanjutan</option>
                                                        <option>Mahir</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>Jampel</label>
                                                    <input type="text" class="form-control" >
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
                                            <div class="col-sm-12 my-5">
                                                <button type="submit" class="btn btn-primary float-right"><i class="fa fa-save"></i> Update Data</button>
                                                <button type="button" class="btn btn-secondary float-right mr-2">Back</button>
                                            </div>
                                            @csrf
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="last_education">Pendidikan Terakhir</label>
                                    <div class="col-sm-12">
                                        <select class="custom-select" id="last_education" name="last_education">
                                            <option selected disabled value="">{{ $teacher->last_education }}</option>
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
                                <div class="form-group">
                                    <label for="tmt_pns_tahun">TMT PNS TAHUN</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="tmt_pns_tahun" name="tmt_pns_tahun" value="{{ old('tmt_pns_tahun', $teacher->tmt_pns_tahun) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tmt_pns_bulan">TMT PNS BULAN</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="tmt_pns_bulan" name="tmt_pns_bulan" value="{{ old('tmt_pns_bulan', $teacher->tmt_pns_bulan) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="class">Pangkat / Golongan</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="class" name="class" value="{{ old('class', $teacher->class) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tmt_class_tahun">TMT Golongan Tahun</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="tmt_class_tahun" name="tmt_class_tahun" value="{{ old('tmt_class_tahun', $teacher->tmt_class_tahun) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tmt_class_bulan">TMT Golongan Bulan</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="tmt_class_bulan" name="tmt_class_bulan" value="{{ old('tmt_class_bulan', $teacher->tmt_class_bulan) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="School_Origin">Asal Sekolah</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="School_Origin" name="School_Origin" value="{{ old('School_Origin', $teacher->School_Origin) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="district_id">Desa / Kecamatan</label>
                                    <div class="col-sm-12">
                                        <select name="district_id" class="form-control" id="district_id">
                                            @foreach($districts as $district)
                                            @if($district->name == $teacher->district->name)
                                            <option selected value="{{ $district->id }}">{{ $district->name }}</option>
                                            @else
                                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="city_id">Desa / Kecamatan</label>
                                    <div class="col-sm-12">
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

                                <div class="form-group">
                                    <label>Propinsi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="#" placeholder="" readonly value="{{ $teacher->provinsi }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone">No Telpon/HP</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $teacher->phone) }}" placeholder="">
                                    </div>
                                </div>





                            </div>
                            <!--  Data Kompetensi -->
                            <div class="col-md-6">
                                Data Kompetensi
                                <div class="form-group">
                                    <label for="subjects_taught">Mata pelajaran yang diampu</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="subjects_taught" name="subjects_taught" value="{{ old('subjects_taught', $teacher->subjects_taught) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="program">Program atau kegiatan yang
                                                dilaksanakan</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="program" name="program" value="{{ old('program', $teacher->program) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="certification_status">Status Sertifikasi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="certification_status" name="certification_status" value="{{ old('certification_status', $teacher->certification_status) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="certification_year">Tahun Sertifikasi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="certification_year" name="certification_year" value="{{ old('certification_year', $teacher->certification_year) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="reason_not_certified">Alasan Belum Sertifikasi</label>
                                    <div class="col-sm-12">
                                    <input type="text" class="form-control" id="reason_not_certified" name="reason_not_certified" value="{{ old('reason_not_certified', $teacher->reason_not_certified) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="competencies_taught">Kompetensi yang dimiliki</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="competencies_taught" name="competencies_taught" value="{{ old('competencies_taught', $teacher->competencies_taught) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="unbk_socialization_activities">Kegiatan Sosialisasi UNBK</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="unbk_socialization_activities" name="unbk_socialization_activities" value="{{ old('unbk_socialization_activities', $teacher->unbk_socialization_activities) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="involvement_unbk">Keterlibatan dalam UNBK</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="involvement_unbk" name="involvement_unbk" value="{{ old('involvement_unbk', $teacher->involvement_unbk) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="history_involvement_unbk">Riwayat Keterlibatan dalam UNBK</label>
                                    <div class="col-sm-12">
                                    <input type="text" class="form-control" id="history_involvement_unbk" name="history_involvement_unbk" value="{{ old('history_involvement_unbk', $teacher->history_involvement_unbk) }}">
                                    </div>
                                </div>
                                Data Diklat
                                <div class="form-group">
                                    <label for="name_of_training">Nama Diklat/Workshop/Seminar</label>
                                    <div class="col-sm-12">
                                        @foreach($trainings as $training)
                                        <input type="text" class="form-control" id="name_of_training" name="name_of_training[]" value="{{ $training->name }}">
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="level">Tingkatan/Jenis Diklat</label>
                                    <div class="col-sm-12">
                                    @foreach($trainings as $training)
                                    <select name="level[]" id="level" class="form-control">
                                        <option selected value="{{ $training->level }}">{{ $training->level }}</option>
                                        <option value="Pemula">Pemula</option>
                                        <option value="Lanjutan">Lanjutan</option>
                                        <option value="Mahir">Pemula</option>
                                    </select>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label for="jampel">Jampel</label>
                                    <div class="col-sm-12">
                                        @foreach($trainings as $training)
                                        <input type="text" class="form-control" id="jampel" name="jampel[]" value="{{ $training->lesson_hours }}">
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="training_needs_now">Kebutuhan Diklat saat ini</label>
                                    <div class="col-sm-12">
                                        @foreach($training_needs as $training_need)
                                        <input type="text" class="form-control" id="training_needs_now" name="training_needs_now[]" value="{{ $training_need->name }}">
                                        @endforeach
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Data</button>
                            </div>
                            <!-- /.col -->
                            </form>
                        </div>
                    </div>
                <!-- /.card-body -->

            </div>
        </div>
    </div>
</div>
</x-app-layout>