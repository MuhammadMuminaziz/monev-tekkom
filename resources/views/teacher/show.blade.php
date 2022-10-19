<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4 py-3">
                    <!-- <div class="card-header">
                        <h6 class="card-title font-weight-bold text-primary">Detail Data Sekolah</h6>
                    </div> -->
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
                                                        <th class="my-5 font-weight-bold text-primary bg-light border-bottom p-2">
                                                            <h6><strong> A. Data Umum</strong></h6>
                                                        </th>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row" class="col-md-5">Nama Guru / Tenaga Administrasi
                                                        </th>

                                                        <td class="col-md-7">: {{ $teacher->teacher_name }}</td>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Status Ketenagaan</th>

                                                        <td class="col-md-7">: {{ $teacher->employment_status }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">NIP</th>

                                                        <td class="col-md-7">: {{ $teacher->nip }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">NUPTK</th>

                                                        <td class="col-md-7">: {{ $teacher->nuptk }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Tempat, Tanggal Lahir</th>

                                                        <td class="col-md-7">:
                                                            {{ $teacher->place_of_birth . ', ' . $teacher->date_of_birth }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Agama</th>

                                                        <td class="col-md-7">: {{ $teacher->religion }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Jenis Kelamin</th>

                                                        <td class="col-md-7">: {{ $teacher->gender }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Pendidikan Terakhir</th>

                                                        <td class="col-md-7">: {{ $teacher->last_education }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">TMT PNS</th>

                                                        <td>: <strong> Tahun :</strong> {{ $teacher->tmt_pns_tahun }}
                                                            <strong> Bulan :</strong> {{ $teacher->tmt_pns_bulan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Pangkat / Golongan</th>

                                                        <td class="col-md-7">: {{ $teacher->class }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">TMT Golongan</th>

                                                        <td>: <strong> Tahun :</strong> {{ $teacher->tmt_class_tahun }}
                                                            <strong> Bulan :</strong> {{  $teacher->tmt_class_bulan }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Asal Sekolah</th>

                                                        <td class="col-md-7">: {{ $teacher->school->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Desa / Kecamatan</th>

                                                        <td class="col-md-7">: {{ $teacher->district->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kabupaten / Kota</th>

                                                        <td class="col-md-7">: {{ $teacher->city->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Provinsi</th>

                                                        <td class="col-md-7">: {{ $teacher->provinsi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">No Telpon/HP</th>

                                                        <td class="col-md-7">: {{ $teacher->phone}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5"></th>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <!-- Data Kompetensi -->
                                                    <tr>
                                                        <th
                                                            class="my-5 font-weight-bold text-primary bg-light border-bottom p-2">
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

                                                        <td class="col-md-7">: {{ $teacher->subjects_taught }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Program atau kegiatan yang
                                                            dilaksanakan</th>

                                                        <td> :
                                                            @foreach($teacher->program_teachers as $program)
                                                            {{ $program->name . ' ,' }}
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Status Sertifikasi</th>

                                                        <td class="col-md-7">: {{ $teacher->certification_status}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Tahun Sertifikasi</th>

                                                        <td class="col-md-7">: {{ $teacher->certification_year}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Alasan Belum Sertifikasi</th>

                                                        <td class="col-md-7">: {{ $teacher->reason_not_certified}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kompetensi yang dimiliki</th>

                                                        <td> :
                                                            @foreach($teacher->competensi_teachers as $competensi)
                                                            {{ $competensi->name . ' ,' }}
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kegiatan Sosialisasi UNBK</th>

                                                        <td class="col-md-7">:
                                                            {{ $teacher->unbk_socialization_activities }}
                                                            {{ $teacher->unbk_socialization_activities_tahun ? ', tahun ' . $teacher->unbk_socialization_activities_tahun : '' }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Keterlibatan dalam UNBK</th>

                                                        <td class="col-md-7">: {{ $teacher->involvement_unbk }}
                                                            {{ $teacher->involvement_unbk_tahun ? ', tahun ' . $teacher->involvement_unbk_tahun : '' }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Riwayat Keterlibatan dalam UNBK
                                                        </th>

                                                        <td class="col-md-7">: {{ $teacher->history_involvement_unbk}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kebutuhan Diklat saat ini</th>

                                                        <td>:
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
                                                                <tr class="text-center">
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
                                                    <th class="col-md-5"><small>Kode Kuisioner</small></th>

                                                    <td class="col-md-7"><small>:  {{ $teacher->kode_kuisioner . '/B. TEKKOM/' . $teacher->tekkom . '/KR/2016' }}</small>
                                                    </td>
                                                <tr>
                                                <tr>
                                                    <th class="col-md-5"><small>Tingkatan Sekolah</small></th>

                                                    <td class="col-md-7"><small>:
                                                            {{ $teacher->tingkatan_sekolah }}</small></td>
                                                <tr>
                                                <tr>
                                                    <th class="col-md-5"><small>Nama Petugas Pendataan</small></th>

                                                    <td class="col-md-7"><small>: {{ $teacher->nama_petugas }}</small>
                                                    </td>
                                                <tr>
                                                <tr>
                                                    <th class="col-md-5"><small>NIP</small></th>

                                                    <td class="col-md-7"><small>: {{ $teacher->nip }}</small></td>
                                                <tr>
                                                <tr>
                                                    <th class="align-top"><small>Range Waktu Pendataan</small></th>
                                                    <td class="align-top"><small>:
                                                            {{ $teacher->range_waktu_dari  }} <strong>s/d </strong> {{ $teacher->range_waktu_sampai }}</small>
                                                    </td>
                                                <tr>
                                                <tr class="text-center">
                                                    <th colspan="3"><small>Analisa Petugas Pendataan</small></th>
                                                <tr>
                                                    <td colspan="3"><small>
                                                            <textarea class="form-control"
                                                                id="exampleFormControlTextarea1"
                                                                rows="35">{{ $teacher->analisis }}</textarea></small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <div class="table-responsive">
                                                        <table class="table  table-bordered">
                                                            <tr>
                                                                <td colspan="2" class="col-sm-6">
                                                                    <table class="table table-sm table-borderless">
                                                                        <tr>
                                                                            <td class="col-md-12 text-center"> <small>
                                                                                    Responden</small></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="col-md-12 text-center"><small>
                                                                                    tgl : {{ $teacher->date_responden }}
                                                                                </small></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="col-md-12 text-center"><small>( {{ $teacher->nama_responden }} )</small></td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td colspan="2" class="col-sm-6 m-0">
                                                                    <table class="table table-sm table-borderless">
                                                                        <tr>
                                                                            <td class="col-md-12 text-center">
                                                                                <small>Petugas Pengumpul Data</small>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="col-md-12 text-center"><small>tgl
                                                                                    :
                                                                                    {{ $teacher->date_responden }}</small>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="col-md-12 text-center"><small>(
                                                                                    {{ $teacher->nama_petugas }}
                                                                                    )</small></td>
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
                                <a href="{{ route('teachers.index') }}" class="btn btn-secondary mr-2">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
