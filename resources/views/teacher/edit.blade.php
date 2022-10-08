<x-app-layout>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="card-title">Edit Data Guru</h6>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('teachers.update', $teacher) }}" method="post">
                    <div class="row">
                            @method('put')
                            <!-- Data Umum -->
                            <div class="col-md-6">
                                A. Data Umum
                                <div class="form-group">
                                    <label for="teacher_name">Nama Guru / Tenaga Administrasi</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="teacher_name" name="teacher_name" value="{{ old('teacher_name', $teacher->teacher_name) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="employment_status">Status Ketenagaan</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="employment_status" name="employment_status" value="{{ old('employment_status', $teacher->employment_status) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nip">NIP</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip', $teacher->nip) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nuptk">NUPTK</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="nuptk" name="nuptk" value="{{ old('nuptk', $teacher->nuptk) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="place_of_birth">Tempat Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" value="{{ old('place_of_birth', $teacher->place_of_birth) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="date_of_birth">Tanggal Lahir</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $teacher->date_of_birth) }}" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="religion">Agama</label>
                                    <div class="col-sm-12">
                                        <select class="custom-select" id="religion" name="religion">
                                            <option selected disabled value="">{{ $teacher->religion }}</option>
                                            <option>Islam</option>
                                            <option>Katolik</option>
                                            <option>Kristen</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>Lainnya</option>
                                        </select> </div>
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <div class="col-sm-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="laki-laki" value="Laki-laki" {{ $teacher->gender == 'Laki-laki' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="laki-laki">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender"
                                                id="perempuan" value="Perempuan" {{ $teacher->gender == 'Perempuan' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
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
                                    <textarea name="reason_not_certified" class="form-control" id="reason_not_certified" name="reason_not_certified" rows="6"></textarea>
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
                                    <textarea class="form-control" id="history_involvement_unbk" name="history_involvement_unbk" rows="6"></textarea>
                                    </div>
                                </div>
                                Data Diklat
                                <div class="form-group">
                                    <label>Nama Diklat/Workshop/Seminar</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="#" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label?>Tingkatan/Jenis Diklat</label>                                            diampu</label>
                                    <div class="col-sm-12">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Data</button>
                            </div>
                            <!-- /.col -->
                            @csrf
                        </div>
                    </form>
                    <!-- /.row -->
                </div>
                <!-- /.card-body -->

            </div>
        </div>
    </div>
</div>
</x-app-layout>