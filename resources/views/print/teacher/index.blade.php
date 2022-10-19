<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* .table{
            border: 1px solid black;
            border-collapse: collapse;
            font-family: sans-serif;
            margin: 0%;
        } */

        * {
            box-sizing: border-box;
        }

        .table,
        th,
        td {
            text-align: left;
            padding: 5 px;
        }

        .header {
            /* border: 1px solid black; */
            border-collapse: collapse;
            font-family: sans-serif;
            margin: 0%;
        }

        .data {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 20 px;
        }
    </style>
</head>

<body style="border: 1px solid black; font-family: sans-serif">

    <!-- {{-- Kop Surat --}} -->
    <header>
        <table border="1" width="100%" class="header">
            <tr>
                <td rowspan="2" width="100px">
                    <img src="" alt="">
                </td>
                <td style="background-color: gray; padding: 5px">
                    <h3 style="margin: 0; text-align: center; color: white;">BALAI TEKNOLOGI DAN KOMUNIKASI PENDIDIKAN
                        PROVINSI MALUKU</h3>
                </td>
                <td rowspan="2" width="100px">
                    <img src="" alt="">
                </td>
            </tr>
            <tr>
                <td style="background-color: gray; padding: 3px">
                    <p style="margin: 0; text-align: center; color: white">FORMAT PENDATAAN PENDIDIKAN BERBASIS TIK
                        (DATA SEKOLAH)</p>
                </td>
            </tr>
        </table>
    </header>

    <table>

        <tr>
            <!-- Right -->
            <td width="50%">
                <table >
                    <tbody>
                        <tr>
                            <th class="my-5 font-weight-bold text-primary bg-light border-bottom p-2">
                                <h6><strong> A. Data Umum</strong></h6>
                            </th>
                        </tr>

                        <tr>
                            <th>Nama Guru / Tenaga Administrasi
                            </th>

                           <td>: {{ $teacher->teacher_name }}</td>
                        <tr>
                            <th>Status Ketenagaan</th>
                           <td>: {{ $teacher->employment_status }}</td>
                        </tr>
                        <tr>
                            <th>NIP</th>

                           <td>: {{ $teacher->nip }}</td>
                        </tr>
                        <tr>
                            <th>NUPTK</th>

                           <td>: {{ $teacher->nuptk }}</td>
                        </tr>
                        <tr>
                            <th>Tempat, Tanggal Lahir</th>

                           <td>:
                                {{ $teacher->place_of_birth . ', ' . $teacher->date_of_birth }}
                            </td>
                        </tr>
                        <tr>
                            <th>Agama</th>

                           <td>: {{ $teacher->religion }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>

                           <td>: {{ $teacher->gender }}</td>
                        </tr>
                        <tr>
                            <th>Pendidikan Terakhir</th>

                           <td>: {{ $teacher->last_education }}</td>
                        </tr>
                        <tr>
                            <th>TMT PNS</th>

                            <td>: <strong> Tahun :</strong> {{ $teacher->tmt_pns_tahun }}
                                <strong> Bulan :</strong> {{ $teacher->tmt_pns_bulan }}</td>
                        </tr>
                        <tr>
                            <th>Pangkat / Golongan</th>

                           <td>: {{ $teacher->class }}</td>
                        </tr>
                        <tr>
                            <th>TMT Golongan</th>

                            <td>: <strong> Tahun :</strong> {{ $teacher->tmt_class_tahun }}
                                <strong> Bulan :</strong> {{  $teacher->tmt_class_bulan }}
                            </td>
                        </tr>
                        <tr>
                            <th>Asal Sekolah</th>

                           <td>: {{ $teacher->school->name }}</td>
                        </tr>
                        <tr>
                            <th>Desa / Kecamatan</th>

                           <td>: {{ $teacher->district->name }}</td>
                        </tr>
                        <tr>
                            <th>Kabupaten / Kota</th>

                           <td>: {{ $teacher->city->name }}</td>
                        </tr>
                        <tr>
                            <th>Provinsi</th>

                           <td>: {{ $teacher->provinsi }}</td>
                        </tr>
                        <tr>
                            <th>No Telpon/HP</th>

                           <td>: {{ $teacher->phone}}</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                        </tr>
                        <!-- Data Kompetensi -->
                        <tr>
                            <th class="my-5 font-weight-bold text-primary bg-light border-bottom p-2">
                                <h6><strong> B. Data Kompetensi</strong></h6>
                            </th>
                        </tr>
                        <tr>
                            <th></th>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Mata pelajaran yang diampu</th>

                           <td>: {{ $teacher->subjects_taught }}</td>
                        </tr>
                        <tr>
                            <th>Program atau kegiatan yang
                                dilaksanakan</th>

                            <td> :
                                @foreach($teacher->program_teachers as $program)
                                {{ $program->name . ' ,' }}
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Status Sertifikasi</th>

                           <td>: {{ $teacher->certification_status}}</td>
                        </tr>
                        <tr>
                            <th>Tahun Sertifikasi</th>

                           <td>: {{ $teacher->certification_year}}</td>
                        </tr>
                        <tr>
                            <th>Alasan Belum Sertifikasi</th>

                           <td>: {{ $teacher->reason_not_certified}}</td>
                        </tr>
                        <tr>
                            <th>Kompetensi yang dimiliki</th>

                            <td> :
                                @foreach($teacher->competensi_teachers as $competensi)
                                {{ $competensi->name . ' ,' }}
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Kegiatan Sosialisasi UNBK</th>

                           <td>:
                                {{ $teacher->unbk_socialization_activities }}
                                {{ $teacher->unbk_socialization_activities_tahun ? ', tahun ' . $teacher->unbk_socialization_activities_tahun : '' }}
                            </td>
                        </tr>
                        <tr>
                            <th>Keterlibatan dalam UNBK</th>

                           <td>: {{ $teacher->involvement_unbk }}
                                {{ $teacher->involvement_unbk_tahun ? ', tahun ' . $teacher->involvement_unbk_tahun : '' }}
                            </td>
                        </tr>
                        <tr>
                            <th>Riwayat Keterlibatan dalam UNBK
                            </th>

                           <td>: {{ $teacher->history_involvement_unbk}}
                            </td>
                        </tr>
                        <tr>
                            <th>Kebutuhan Diklat saat ini</th>

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
            </td>
            <!-- Left -->
            <td width="40%">
                <table class="table-sm table-borderless">
                    <tbody>
                        <tr>
                            <th class="col-md-5"><small>Kode Kuisioner</small></th>

                           <td><small>:
                                    {{ $teacher->kode_kuisioner . '/B. TEKKOM/' . $teacher->tekkom . '/KR/2016' }}</small>
                            </td>
                        <tr>
                        <tr>
                            <th class="col-md-5"><small>Tingkatan Sekolah</small></th>

                           <td><small>:
                                    {{ $teacher->tingkatan_sekolah }}</small></td>
                        <tr>
                        <tr>
                            <th class="col-md-5"><small>Nama Petugas Pendataan</small></th>

                           <td><small>: {{ $teacher->nama_petugas }}</small>
                            </td>
                        <tr>
                        <tr>
                            <th class="col-md-5"><small>NIP</small></th>

                           <td><small>: {{ $teacher->nip }}</small></td>
                        <tr>
                        <tr>
                            <th class="align-top"><small>Range Waktu Pendataan</small></th>
                            <td class="align-top"><small>:
                                    {{ $teacher->range_waktu_dari  }} <strong>s/d </strong>
                                    {{ $teacher->range_waktu_sampai }}</small>
                            </td>
                        <tr>
                        <tr class="text-center">
                            <th colspan="3"><small>Analisa Petugas Pendataan</small></th>
                        <tr>
                            <td colspan="3"><small>
                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                        rows="35">{{ $teacher->analisis }}</textarea></small>
                            </td>
                        </tr>
                        <tr>
                            <div class="table-responsive">
                                <table class="table  table-bordered">
                                    <tr>
                                        <td colspan="2" class="col-sm-6">
                                            <table >
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
                                                    <td class="col-md-12 text-center"><small>(
                                                            {{ $teacher->nama_responden }}
                                                            )</small></td>
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
            </td>
        </tr>
    </table>




</body>

</html>