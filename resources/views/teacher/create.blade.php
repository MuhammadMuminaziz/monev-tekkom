<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4 py-3 border-left-primary">
                    <div class="card-header">
                        <h6 class="card-title font-weight-bold text-primary">Tambah Data Guru</h6>
                    </div>
                    <div class="card-body">
                        {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
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
                        </ul> --}}
                        {{-- <div class="tab-content" id="myTabContent"> --}}
                            <!-- A. Data Umum -->
                            {{-- <div class="tab-pane fade show active" id="general_data" role="tabpanel"
                            aria-labelledby="general_data-tab"> --}}
                            <form action="{{ route('teachers.store') }}" method="post">
                            @csrf
                            <div class="form-group bg-light p-2 border-bottom row">
                                <h6><strong> A. Data Umum</strong></h6>
                            </div>
                                <div class="container mt-3">
                                    <div class="form-group row">
                                        <label for="teacher_name" class="col-sm-4 col-form-label">Nama Guru / Tenaga
                                            Administrasi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('teacher_name') is-invalid @enderror" id="teacher_name" name="teacher_name" placeholder="" value="{{ old('teacher_name') }}">
                                            @error('teacher_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="employment_status" class="col-sm-4 col-form-label">Status Ketenagaan</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select @error('employment_status') is-invalid @enderror" id="employment_status" name="employment_status">
                                                <option selected disabled value="">Pilih</option>
                                                <option>PNS</option>
                                                <option>NON PNS</option>
                                            </select>
                                            @error('employment_status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nip" class="col-sm-4 col-form-label">NIP <br><span>(Diisi jika
                                                PNS)</span></label>

                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nip" name="nip" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nuptk" class="col-sm-4 col-form-label">NUPTK</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('nuptk') is-invalid @enderror" id="nuptk" name="nuptk" placeholder="" value="{{ old('nuptk') }}">
                                            @error('nuptk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="place_of_birth" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control @error('place_of_birth') is-invalid @enderror" id="place_of_birth" name="place_of_birth" placeholder="" value="{{ old('place_of_birth') }}">
                                            @error('place_of_birth')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-group date" id="reservationdate"
                                                data-target-input="nearest">
                                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{ old('date_of_birth') }}"/>
                                                    @error('date_of_birth')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="religion" class="col-sm-4 col-form-label">Agama</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select @error('religion') is-invalid @enderror" id="religion" name="religion">
                                                <option selected disabled value="">Pilih</option>
                                                <option>Islam</option>
                                                <option>Katolik</option>
                                                <option>Kristen</option>
                                                <option>Hindu</option>
                                                <option>Budha</option>
                                            </select>
                                            @error('religion')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <div id="validationServer04Feedback" class="invalid-tooltip">
                                                Please select a valid state.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select @error('gender') is-invalid @enderror" id="gender" name="gender">
                                                <option selected disabled value="">Pilih</option>
                                                <option>Laki-Laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                            @error('gender')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="last_education" class="col-sm-4 col-form-label">Pendidikan Terakhir</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select @error('last_education') is-invalid @enderror" id="last_education" name="last_education">
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
                                            @error('last_education')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <div id="validationServer04Feedback" class="invalid-tooltip">
                                                Please select a valid state.
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tmt_pns_tahun" class="col-sm-4 col-form-label">TMT PNS</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="tmt_pns_tahun" name="tmt_pns_tahun" placeholder="">
                                        </div>
                                        <div class="col-sm-1">
                                            Tahun
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="tmt_pns_bulan" name="tmt_pns_bulan" placeholder="">
                                        </div>
                                        <div class="col-sm-1">
                                            Bulan
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="class" class="col-sm-4 col-form-label">Pangkat / Golongan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('class') is-invalid @enderror" id="class" name="class" placeholder="" value="{{ old('class') }}">
                                            @error('class')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tmt_class_tahun" class="col-sm-4 col-form-label">TMT Golongan</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="tmt_class_tahun" name="tmt_class_tahun" placeholder="">
                                        </div>
                                        <div class="col-sm-1">
                                            Tahun
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="tmt_class_bulan" name="tmt_class_bulan" placeholder="">
                                        </div>
                                        <div class="col-sm-1">
                                            Bulan
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="School_Origin" class="col-sm-4 col-form-label">Asal Sekolah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="School_Origin" name="School_Origin" placeholder="" value="{{ $school->name ?? '' }}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="district_id" class="col-sm-4 col-form-label">Desa / Kecamatan</label>
                                        <div class="col-sm-8">
                                            <select name="district_id" id="district_id" class="custom-select @error('district_id') is-invalid @enderror">
                                                <option value="" selected disabled>Pilih</option>
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
                                            <select name="city_id" id="city_id" class="custom-select @error('district_id') is-invalid @enderror">
                                                <option value="" selected disabled>Pilih</option>
                                                @foreach($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
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
                                        <label for="provinsi" class="col-sm-4 col-form-label">Provinsi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="provinsi" value="Maluku" readonly name="provinsi" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-4 col-form-label">No Telpon/HP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="" value="{{ old('phone') }}">
                                            @error('phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            {{-- </div> --}}
                            <!-- B. Data Kompetensi -->
                            {{-- <div class="tab-pane fade" id="competency_data" role="tabpanel"
                                aria-labelledby="competency_data-tab"> --}}
                                <div class="form-group bg-light border-bottom p-2 row">
                                    <h6><strong> B. Data Kompetensi</strong></h6>
                                </div>
                                <div class="container mt-3">
                                    <div class="form-group row">
                                        <label for="subjects_taught" class="col-sm-4 col-form-label">Mata Pelajaran Yang
                                            Diampu</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('subjects_taught') is-invalid @enderror" id="subjects_taught" name="subjects_taught" placeholder="" value="{{ old('subjects_taught') }}">
                                            @error('subjects_taught')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="program" class="col-sm-4 col-form-label">Program / Kegiatan Yang
                                            Dilaksanakan</label>
                                        <div class="col-sm-8 page-input-program">
                                            <input type="text" class="form-control mb-2" id="program" name="program[]" placeholder="" multiple>
                                        </div>
                                    </div>
                                    <div class="row justify-content-end mx-3 mb-3">
                                        <small class="text-primary add-input-program mr-2" style="cursor: pointer;">tambah data |</small>
                                        <small class="text-danger remove-input-program" style="cursor: pointer;">Hapus data</small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="certification_status" class="col-sm-4 col-form-label">Status Sertifikasi</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select @error('certification_status') is-invalid @enderror" id="certification_status" name="certification_status">
                                                <option selected disabled value="">Pilih</option>
                                                <option>Sudah</option>
                                                <option>Belum</option>
                                            </select>
                                            @error('certification_status')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="certification_year" class="col-sm-4 col-form-label">Tahun Sertifikasi</label><br>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="certification_year" name="certification_year" placeholder=""> <br>
                                        </div>
                                        <div class="col-sm-2">
                                            <small>*(diisi jika sudah sertifikasi)</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="reason_not_certified" class="col-form-label">Alasan Belum
                                                Sertifikasi</label><br>
                                            <small>*(diisi jika sudah sertifikasi tidak perlu diisi)</small>
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="reason_not_certified" name="reason_not_certified"
                                                rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="competencies_taught" class="col-sm-4 col-form-label">Kompetensi Yang
                                            Dimiliki</label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="world" name="competencies_taught[]"
                                                    value="Ms. Word" multiple>
                                                <label class="form-check-label" for="world">Ms.
                                                    Word</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="excel" name="competencies_taught[]"
                                                    value="Ms. Excel">
                                                <label class="form-check-label" for="excel">Ms.
                                                    Excel</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="ppt" name="competencies_taught[]"
                                                    value="Power Point">
                                                <label class="form-check-label" for="ppt">Power
                                                    Point</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="photo" name="competencies_taught[]"
                                                    value="Photoshop" multiple>
                                                <label class="form-check-label" for="photo">Photoshop</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="animasi" name="competencies_taught[]"
                                                    value="Animasi" multiple>
                                                <label class="form-check-label" for="animasi">Animasi</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="programmer" name="competencies_taught[]"
                                                    value="Programmer" multiple>
                                                <label class="form-check-label" for="programmer">Programmer</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="jaringan" name="competencies_taught[]"
                                                    value="Jaringan" multiple>
                                                <label class="form-check-label" for="jaringan">Jaringan</label>
                                            </div>
                                            <input type="text" class="form-control form-control-sm" id="" name="competencies_taught_n"
                                                placeholder="Lainnya" multiple>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="unbk_socialization_activities" class="col-sm-4 col-form-label">Kegiatan Sosialisasi
                                            UNBK</label>
                                        <div class="col-sm-4">
                                            <select class="custom-select" id="unbk_socialization_activities" name="">
                                                <option selected disabled value="">Pilih</option>
                                                <option>Sudah</option>
                                                <option>Belum</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="#" name="unbk_socialization_activities" placeholder="Tahun">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="involvement_unbk" class="col-sm-4 col-form-label">Keterlibatan dalam
                                            UNBK</label>
                                        <div class="col-sm-4">
                                            <select class="custom-select" id="involvement_unbk">
                                                <option selected disabled value="">Pilih</option>
                                                <option>Sudah</option>
                                                <option>Belum</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="involvement_unbk" name="involvement_unbk" placeholder="Tahun">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label for="history_involvement_unbk" class="col-form-label">Riwayat Keterlibatan Dalam
                                                UNBK</label><br>
                                            <small>*(jika telah melaksanakan UNBK)</small>
                                        </div>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="history_involvement_unbk" name="history_involvement_unbk"
                                                rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-12 col-form-label"><strong> Pelatihan Yang
                                                Pernah
                                                Diikuti</strong></label>
                                    </div>
                                    <div class="page-input-training">
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label for="name_of_training">Nama Diklat/Workshop/Seminar</label>
                                                <input type="text" class="form-control" id="name_of_training"
                                                    name="name_of_training[]" multiple>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="level">Tingkatan/Jenis Diklat</label>
                                                <select id="level" name="level[]" class="custom-select">
                                                    <option selected>Pilih</option>
                                                    <option>Pemula</option>
                                                    <option>Lanjutan</option>
                                                    <option>Mahir</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="jampel">Jampel</label>
                                                <input type="text" class="form-control mb-2" id="jampel" name="jampel[]" multiple>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mx-3 mb-2 justify-content-end">
                                        <small class="text-primary add-input-training mr-2" style="cursor: pointer;">tambah data |</small>
                                        <small class="text-danger remove-input-training" style="cursor: pointer;">hapus data</small>
                                    </div>
                                    <div class="form-group row">
                                        <label for="training_needs_now" class="col-sm-4 col-form-label">Kebutuhan Diklat Saat
                                            Ini</label>
                                        <div class="col-sm-12 page-input-training-needs">
                                            <input type="text" class="form-control mb-2" id="training_needs_now" name="training_needs_now[]" multiple>
                                        </div>
                                        <div class="col-sm-12 d-flex px-4 mt-3 justify-content-end">
                                            <small class="add-input-training-needs text-primary mr-2" style="cursor: pointer;">tambah data |</small>
                                            <small class="remove-input-training-needs text-danger" style="cursor: pointer;">hapus data</small>
                                        </div>
                                    </div>       
                                </div>
                            {{-- </div> --}}
                            <!-- Kuisioner -->
                            {{-- <div class="tab-pane fade" id="kuisioner_data" role="tabpanel"
                                aria-labelledby="kuisioner_data-tab"> --}}
                                <div class="container mt-3">
                                    <div class="form-group row">
                                        <label for="kode_kuisioner" class="col-sm-4 col-form-label">Kode Kuisioner</label>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control @error('kode_kuisioner') is-invalid @enderror" id="kode_kuisioner" name="kode_kuisioner" placeholder="" value="{{ old('kode_kuisioner') }}">
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="tekkom" class="col-form-label">/B.Tekkom/</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control @error('tekkom') is-invalid @enderror" id="tekkom" name="tekkom" placeholder="" value="{{ old('tekkom') }}">
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="#" class="col-form-label">/KR/2016</label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tingkatan_sekolah" class="col-sm-4 col-form-label">Tingkatan Sekolah</label>
                                        <div class="col-sm-8">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tingkatan_sekolah"
                                                    id="sdz" value="SD" checked>
                                                <label class="form-check-label" for="sdz">
                                                    SD
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tingkatan_sekolah"
                                                    id="exampleRadios2" value="SMP">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    SMP
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tingkatan_sekolah"
                                                    id="exampleRadios3" value="SMA">
                                                <label class="form-check-label" for="exampleRadios3">
                                                    SMA
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="tingkatan_sekolah"
                                                    id="exampleRadios4" value="SMK">
                                                <label class="form-check-label" for="exampleRadios4">
                                                    SMK
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_petugas" class="col-sm-4 col-form-label">Nama Petugas Pendataan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="nama_petugas" value="{{ auth()->user()->name }}" name="nama_petugas" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" placeholder="" value="{{ old('nip') }}">
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
                                            <input type="date" class="form-control" id="range_waktu_dari" name="range_waktu_dari" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control" id="range_waktu_sampai" name="range_waktu_sampai" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="analisis" class="col-sm-4 col-form-label">Analisa Petugas Pendataan</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="analisis" name="analisis" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama_responden" class="col-sm-4 col-form-label">Responden</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control @error('analisis') is-invalid @enderror" id="nama_responden" name="nama_responden" placeholder="Nama Responden" value="{{ old('nama_responden') }}">
                                            @error('analisis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control" id="" name="date_responden" placeholder="">
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
                            </form>
                            {{-- </div> --}}
                        </div>
                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->
            </div>
        </div>
</x-app-layout>