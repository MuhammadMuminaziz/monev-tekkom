<x-app-layout>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="card-title">Data Guru</h6>
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
                                data-target="#competency_data" type="button" role="tab" aria-controls="competency_data"
                                aria-selected="false">B. Data
                                Kompetensi </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="training_data-tab" data-toggle="tab"
                                data-target="#training_data" type="button" role="tab" aria-controls="training_data"
                                aria-selected="false">Data
                                Diklat</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!-- A. Data Umum -->
                        <div class="tab-pane fade show active" id="general_data" role="tabpanel"
                            aria-labelledby="general_data-tab">
                            <form action="{{ route('teachers.store') }}" method="post">
                                @csrf
                                <div class="container mt-5">
                                    <div class="form-group row">
                                        <label for="teacher_name" class="col-sm-2 col-form-label">Nama Guru / Tenaga
                                            Administrasi</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="teacher_name" name="teacher_name" placeholder="" required>
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="employment_status" class="col-sm-2 col-form-label">Status Ketenagaan</label>
                                        <div class="col-sm-10">
                                            <select name="employment_status" class="form-control" id="employment_status">
                                                <option selected disabled value="">- pilih -</option>
                                                <option value="PNS">PNS</option>
                                                <option value="NON-PNS">NON PNS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nip" class="col-sm-2 col-form-label">NIP <br><span>(Diisi jika
                                                PNS)</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nip" name="nip" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nuptk" class="col-sm-2 col-form-label @error('nuptk') is-invalid @enderror">NUPTK</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nuptk" name="nuptk" placeholder="" required>
                                            @error('nuptk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="place_of_birth" class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control @error('place_of_birth') is-invalid @enderror" id="place_of_birth" name="place_of_birth" placeholder="" required>
                                            @error('place_of_birth')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="input-group date" id="reservationdate"
                                                data-target-input="nearest">
                                                <input type="date" class="form-control datetimepicker-input" name="date_of_birth"
                                                    data-target="#reservationdate" />
                                                <div class="input-group-append" data-target="#reservationdate"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="religion" class="col-sm-2 col-form-label">Agama</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select" id="religion" name="religion" required>
                                                <option selected disabled value="">Pilih</option>
                                                <option>Islam</option>
                                                <option>Katolik</option>
                                                <option>Kristen</option>
                                                <option>Hindu</option>
                                                <option>Budha</option>
                                                <option>Lainnya</option>
                                            </select>
                                            <div id="validationServer04Feedback" class="invalid-tooltip">
                                                Please select a valid state.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="laki-laki" value="Laki-laki">
                                                <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="perempuan" value="Perempuan">
                                                <label class="form-check-label" for="perempuan">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="last_education" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                        <div class="col-sm-10">
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
                                            <div id="validationServer04Feedback" class="invalid-tooltip">
                                                Please select a valid state.
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">TMT PNS</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="#" placeholder="">
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
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">TMT Golongan</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="#" placeholder="">
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
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Desa / Kecamatan</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Kabupaten / Kota</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Provinsi</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">No Telpon/HP</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <!-- B. Data Kompetensi -->
                            <div class="tab-pane fade" id="competency_data" role="tabpanel"
                                aria-labelledby="competency_data-tab">
                                <form action="">
                                    <div class="container mt-5">
                                        <div class="form-group row">
                                            <h6><strong> B. Data Kompetensi</strong></h6>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Mata pelajaran yang
                                                diampu</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Program atau kegiatan yang
                                                dilaksanakan</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                                <small><a href="#">tambah data</a></small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Status Sertifikasi</label>
                                            <div class="col-sm-8">
                                                <select class="custom-select" id="validationTooltip04" required>
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Sudah</option>
                                                    <option>Belum</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Tahun Sertifikasi</label><br>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="#" placeholder=""> <br>
                                            </div>
                                            <div class="col-sm-2">
                                                <small>*(diisi jika sudah sertifikasi)</small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="#" class="col-form-label">Alasan Belum
                                                    Sertifikasi</label><br>
                                                <small>*(diisi jika sudah sertifikasi tidak perlu diisi)</small>
                                            </div>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Kompetensi yang
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
                                                <select class="custom-select" id="validationTooltip04" required>
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
                                                <select class="custom-select" id="validationTooltip04" required>
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
                                                <label for="#" class="col-form-label">Riwayat Keterlibatan dalam
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
                                            <button type="submit" class="btn btn-primary float-right"><i class="fa fa-save"></i> Save Data</button>
                                            <button type="button" class="btn btn-secondary float-right mr-2">Cancel</button>
                                        </div>
                                    </div>
<<<<<<< HEAD
                                </form>
                            </div>
                           
                        </div>
=======
                                    <div class="form-group row">
                                        <label for="tmt_pns_tahun" class="col-sm-2 col-form-label">TMT PNS</label>

                                        <div class="col-sm-2">
                                            <input type="text" class="form-control @error('tmt_pns_tahun') is-invalid @enderror" id="tmt_pns_tahun" name="tmt_pns_tahun" placeholder="" required>
                                            @error('tmt_pns_tahun')
                                            <div class="infalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-1">
                                            Tahun
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control @error('tmt_pns_bulan') is-invalid @enderror" id="tmt_pns_tahun" name="tmt_pns_bulan" placeholder="" required>
                                            @error('tmt_pns_bulan')
                                            <div class="infalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-1">
                                            Bulan
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="class" class="col-sm-2 col-form-label">Pangkat / Golongan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('class') is-invalid @enderror" id="class" name="class" placeholder="" required>
                                            @error('class')
                                            <div class="infalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tmt_class_tahun" class="col-sm-2 col-form-label">TMT Golongan</label>

                                        <div class="col-sm-2">
                                            <input type="text" class="form-control @error('tmt_class_tahun') is-invalid @enderror" id="tmt_class_tahun" name="tmt_class_tahun" placeholder="" required>
                                            @error('tmt_class_tahun')
                                            <div class="infalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-1">
                                            Tahun
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control @error('tmt_class_bulan') is-invalid @enderror" id="tmt_class_bulan" name="tmt_class_bulan" placeholder="" required>
                                            @error('tmt_class_bulan')
                                            <div class="infalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-1">
                                            Bulan
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="School_Origin" class="col-sm-2 col-form-label">Asal Sekolah</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('School_Origin') is-invalid @enderror" id="School_Origin" name="School_Origin" placeholder="" required>
                                            @error('School_Origin')
                                            <div class="infalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="district_id" class="col-sm-2 col-form-label">Desa / Kecamatan</label>
                                        <div class="col-sm-10">
                                            <select name="district_id" id="district_id" class="form-control">
                                                <option selected disabled value="">-- pilih --</option>
                                                @foreach($districts as $district)
                                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="citY_id" class="col-sm-2 col-form-label">Kabupaten / Kota</label>
                                        <div class="col-sm-10">
                                            <select name="city_id" id="city_id" class="form-control">
                                                <option selected disabled value="">-- pilih --</option>
                                                @foreach($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="provinsi" class="col-sm-2 col-form-label">Propinsi</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="provinsi" name="provinsi" value="Maluku" readonly placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-2 col-form-label">No Telpon/HP</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="" required>
                                            @error('phone')
                                            <div class="infalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                        </div>
                        <!-- B. Data Kompetensi -->
                        <div class="tab-pane fade" id="competency_data" role="tabpanel"
                            aria-labelledby="competency_data-tab">
                                <div class="container mt-5">
                                    <div class="form-group row">
                                        <label for="subjects_taught" class="col-sm-2 col-form-label">Mata pelajaran yang
                                            diampu</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control @error('subjects_taught') is-invalid @enderror" id="subjects_taught" name="subjects_taught" placeholder="" required>
                                            @error('subjects_taught')
                                            <div class="infalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="program" class="col-sm-2 col-form-label">Program atau kegiatan yang
                                            dilaksanakan</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="program" name="program"
                                                rows="4" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="certification_status" class="col-sm-2 col-form-label">Status Sertifikasi</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="certification_status"
                                                    id="sudah_status" value="Sudah">
                                                <label class="form-check-label" for="sudah_status">Sudah</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="certification_status"
                                                    id="belum_status" value="Belum">
                                                <label class="form-check-label" for="belum_status">Belum</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="certification_year" class="col-sm-2 col-form-label">Tahun Sertifikasi</label><br>

                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="certification_year" name="certification_year" placeholder=""> <br>
                                        </div>
                                        <div class="col-sm-3">
                                            <span>*(diisi jika sudah sertifikasi)</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="reason_not_certified" class="col-sm-2 col-form-label">Alasan Belum Sertifikasi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="reason_not_certified" name="reason_not_certified"
                                                rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="competencies_taught" class="col-sm-2 col-form-label">Kompetensi yang dimiliki</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="competencies_taught" name="competencies_taught"
                                                rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="unbk_socialization_activities" class="col-sm-2 col-form-label">Kegiatan Sosialisasi UNBK</label>

                                        <div class="col-sm-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sosialisasi_unbk"
                                                    id="sudah_unbk" value="sudah">
                                                <label class="form-check-label" for="sudah_unbk">Sudah</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sosialisasi_unbk"
                                                    id="belum_unbk" value="Belum">
                                                <label class="form-check-label" for="belum_unbk">Belum</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="#" class="form-label">Tahun</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="#" name="unbk_socialization_activities" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="involvement_unbk" class="col-sm-2 col-form-label">Keterlibatan dalam UNBK</label>

                                        <div class="col-sm-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="keterlibatan_unbk"
                                                    id="sudah_invo" value="option1">
                                                <label class="form-check-label" for="sudah_invo">Sudah</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="keterlibatan_unbk"
                                                    id="belum_info" value="option2">
                                                <label class="form-check-label" for="belum_info">Belum</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="#" class="form-label">Tahun</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="#" name="involvement_unbk" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="history_involvement_unbk" class="col-sm-2 col-form-label">Riwayat Keterlibatan dalam
                                            UNBK</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="history_involvement_unbk" name="history_involvement_unbk"
                                                rows="6"></textarea>
                                        </div>
                                    </div>

                                </div>
                        </div>
                        <!-- Data Diklat -->
                        <div class="tab-pane fade" id="training_data" role="tabpanel"
                            aria-labelledby="training_data-tab">
                                <div class="container mt-5">
                                    <div class="page-input-training">
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="name_of_training">Nama Diklat/Workshop/Seminar</label>
                                                <input type="text" class="form-control" id="name_of_training" name="name_of_training[]" multiple>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="level">Tingkatan/Jenis Diklat</label>
                                                <select id="level" name="level[]" class="form-control">
                                                    <option selected>-- Pilih --</option>
                                                    <option>Pemula</option>
                                                    <option>Lanjutan</option>
                                                    <option>Mahir</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="jampel">Jampel</label>
                                                <input type="text" class="form-control" id="jampel" name="jampel[]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end px-2">
                                        <span class="btn btn-light mx-1 add-input-training">+</span>
                                        <span class="btn btn-danger remove-input-training">-</span>
                                    </div>

                                    <div class="form-group row">
                                        <label for="training_needs_now" class="col-sm-4 col-form-label">Kebutuhan Diklat saat ini</label>
                                        <div class="col-sm-12 page-input-training-needs">
                                            <input type="text" name="training_needs_now[]" id="training_needs_now" class="form-control mb-2">
                                        </div>
                                    </div>
                                    <div class="row justify-content-end px-2">
                                        <span class="btn btn-light mx-1 add-input-training-needs">+</span>
                                        <span class="btn btn-danger remove-input-training-needs">-</span>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                </div>

                        
                        </form>
>>>>>>> 7371a39b4ef29bd770c18bb7cf2d247e3d3130c7
                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->
            </div>
        </div>
</x-app-layout>