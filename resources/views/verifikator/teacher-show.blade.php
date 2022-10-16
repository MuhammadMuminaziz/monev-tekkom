<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4 py-3">
                    <div class="card-body">
                        <form action="">
                            <!-- Header -->
                            <div class="row justify-content-center">
                                <div class="col-md-12 m">
                                    <div class="text-center">
                                        <h4><strong> BALAI TEKNOLOGI KOMUNIKASI PENDIDIKAN PROVINSI MALUKU </strong>
                                        </h4>
                                        <h5>FORMAT PENDATAAN PENDIDIKAN BERBASIS TIK (DATA KETENAGAAN)</h5>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 border mt-3 ">
                                    <div class="container my-3">
                                        <div class="table-responsive">
                                            <table class="table table-sm table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="my-5 font-weight-bold text-primary">
                                                            <h6><strong> A. Data Umum</strong></h6>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5"></th>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Nama Guru / Tenaga Administrasi
                                                        </th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->teacher_name }}</td>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Status Ketenagaan</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->employment_status }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">NIP</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->nip }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">NUPTK</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->nuptk }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Tempat, Tanggal Lahir</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->place_of_birth . ', ' . $teacher->date_of_birth }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Agama</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->religion }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Jenis Kelamin</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->gender }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Pendidikan Terakhir</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->last_education }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">TMT PNS</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->tmt_pns_tahun . $teacher->tmt_pns_bulan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Pangkat / Golongan</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->class }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">TMT Golongan</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->tmt_class_bulan . ', ' . $teacher->tmt_class_tahun }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Asal Sekolah</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->School_Origin }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Desa / Kecamatan</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->district->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kabupaten / Kota</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->city->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Provinsi</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->provinsi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">No Telpon/HP</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->phone}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5"></th>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <!-- Data Kompetensi -->
                                                    <tr>
                                                        <th scope="row" class="my-5 font-weight-bold text-primary">
                                                            <h6><strong> B. Data Kompetensi</strong></h6>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5"></th>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Mata pelajaran yang diampu</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->subjects_taught }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Program atau kegiatan yang
                                                            dilaksanakan</th>
                                                        <td>:</td>
                                                        <td>
                                                            @foreach($teacher->program_teachers as $program)
                                                            {{ $program->name . ' ,' }}
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Status Sertifikasi</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->certification_status}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Tahun Sertifikasi</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->certification_year}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Alasan Belum Sertifikasi</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->reason_not_certified}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kompetensi yang dimiliki</th>
                                                        <td>:</td>
                                                        <td>
                                                            @foreach($teacher->competensi_teachers as $competensi)
                                                            {{ $competensi->name . ' ,' }}
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kegiatan Sosialisasi UNBK</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->unbk_socialization_activities }}
                                                            {{ $teacher->unbk_socialization_activities_tahun ? ', tahun ' . $teacher->unbk_socialization_activities_tahun : '' }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Keterlibatan dalam UNBK</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->involvement_unbk }}
                                                            {{ $teacher->involvement_unbk_tahun ? ', tahun ' . $teacher->involvement_unbk_tahun : '' }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Riwayat Keterlibatan dalam UNBK
                                                        </th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->history_involvement_unbk}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kebutuhan Diklat saat ini</th>
                                                        <td>:</td>
                                                        <td>
                                                            @foreach($teacher->training_need_nows as $diklat)
                                                            {{ $diklat->name . ', ' }}
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Pelatihan Yang Pernah Diikuti</th>
                                                    </tr>
                                                    <tr>
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama Diklat/Workshop/Seminar</th>
                                                                    <th>Tingkatan/Jenis Diklat</th>
                                                                    <th>Jampel</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($teacher->trainings as $training)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $training->name }}</td>
                                                                    <td>{{ $training->level }}</td>
                                                                    <td>{{ $training->lesson_hours }}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <!-- Kuisioner -->
                                <div class="col-md-4 border mt-3">
                                    <!-- <div class="container my-3"> -->
                                        <div class="table-responsive my-5">
                                            <table class="table-sm table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th class="col-md-6">Kode Kuisioner</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->kode_kuisioner }}</td>
                                                    <tr>
                                                    <tr>
                                                        <th class="col-md-6">Tingkatan Sekolah</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->tingkatan_sekolah }}</td>
                                                    <tr>
                                                    <tr>
                                                        <th class="col-md-6">Nama Petugas Pendataan</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->nama_petugas }}</td>
                                                    <tr>
                                                    <tr>
                                                        <th class="col-md-6">NIP</th>
                                                        <td>:</td>
                                                        <td>{{ $teacher->nip }}</td>
                                                    <tr>
                                                        <tr>
                                                            <th class="align-top">Range Waktu Pendataan</th>
                                                            <td class="align-top">:</td>
                                                            <td class="align-top">{{ $teacher->range_waktu_dari . ' s/d ' . $teacher->range_waktu_sampai }}</td>
                                                        <tr>
                                                    <tr>
                                                        <th colspan="3">Analisa Petugas Pendataan</th>
                                                    <tr>
                                                        <td colspan="3">
                                                            <textarea class="form-control"
                                                                id="exampleFormControlTextarea1" rows="40">{{ $teacher->analisis }}</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <div class="table-responsive">
                                                            <table class="table  table-bordered">
                                                                <tr>
                                                                    <td colspan="2" class="col-sm-6">
                                                                        <table class="table table-sm table-borderless">
                                                                            <tr>
                                                                                <td><small> Responden</small></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>tgl</td>
                                                                                <td>:</td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>xxx</td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td colspan="2" class="col-sm-6 m-0">
                                                                        <table class="table table-sm table-borderless">
                                                                            <tr>
                                                                                <td><small>Petugas Pengumpul Data</small> 
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>tgl</td>
                                                                                <td>:</td>
                                                                                <td></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>xxx</td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                            <div class="col-sm-12 my-3">
                                <a href="{{ route('verifikator.teachers') }}" class="btn btn-secondary mr-2">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>