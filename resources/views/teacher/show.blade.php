<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="card-title">Data Guru</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5><strong>A. Data Umum</strong></h5>
                               
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Nama Guru / Tenaga
                                                Administrasi</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->teacher_name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Status Ketenagaan</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->employment_status }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">NIP</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->nip }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">NUPTK</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->nuptk }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Tempat, Tanggal Lahir</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->place_of_birth . ', ' . $teacher->date_of_birth }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Agama</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->religion }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Jenis Kelamin</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->gender }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Pendidikan Terakhir</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->last_education }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">TMT PNS</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->tmt_pns_tahun . $teacher->tmt_pns_bulan }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Pangkat / Golongan</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->class }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">TMT Golongan</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->tmt_class_tahun . $teacher->tmt_class_bulan }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Asal Sekolah</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->School_Origin }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Desa / Kecamatan</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->district->name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Kabupaten / Kota</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->city->name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Propinsi</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->provinsi }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">No Telpon/HP</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->phone }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <h5><strong>B. Data Kompetensi</strong></h5>
                             
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Mata pelajaran yang
                                                diampu</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->subjects_taught }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Program atau kegiatan yang
                                                dilaksanakan</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->program }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Status Sertifikasi</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->certification_status }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Tahun Sertifikasi</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->certification_year }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Alasan Belum Sertifikasi</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->reason_not_certified }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Kompetensi yang dimiliki</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->competencies_taught }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Kegiatan Sosialisasi UNBK</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->unbk_socialization_activities }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Keterlibatan dalam UNBK</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->unbk_socialization_activities }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="col-sm-4">Riwayat Keterlibatan dalam
                                                UNBK</th>
                                            <td width="5%">:</td>
                                            <td>{{ $teacher->involvement_unbk }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <h6><strong>Pelatihan yang pernah diikuti</strong></h6>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Diklat/Workshop/Seminar</th>
                                            <th scope="col">Tingkatan/Jenis Diklat</th>
                                            <th scope="col">Jampel</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($trainings as $index => $training)
                                        <tr>
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>{{ $training->name }}</td>
                                            <td>{{ $training->level }}</td>
                                            <td>{{ $training->jampel }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-12">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="col-sm-2">Kebutuhan diklat saat ini</th>
                                            <td width="5%">:</td>
                                            <td>
                                                @foreach($training_needs as $need)
                                                <span>{{ $need->name }}, </span>
                                                @endforeach
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col-sm-12">
                                    <a href="{{ route('teachers.index') }}" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>