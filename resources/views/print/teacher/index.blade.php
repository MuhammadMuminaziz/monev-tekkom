<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .flex {
            display: flex;
        }

        .justify-center {
            justify-content: center;
        }

        .text-center {
            text-align: center;
        }

        .mx-auto {
            margin: auto;
        }

        .table,
        th,
        td {
            text-align: left;
            padding: 5 px;
        }

        .header {
            border: 1px solid black;
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

<body style="font-family: sans-serif; padding: 0">

    <!-- {{-- Kop Surat --}} -->
    <header>
        <table width="100%" class="header">
            <tr style="">
                <td rowspan="2" width="100px">
                    <img src="{{ asset('img/logo-pemprov.png') }}" alt="pemprov maluku" height="50" class="mx-auto text-center">
                </td>
                <td style="background-color: gray; padding: 7px; ">
                    <h3 style="margin: 0; text-align: center; color: white;">BALAI TEKNOLOGI DAN KOMUNIKASI PENDIDIKAN
                        PROVINSI MALUKU</h3>
                </td>
                <td rowspan="2" width="100px">
                    <img src="{{ asset('img/tutwuri-handayani.png') }}" alt="tutwuri handayani" height="50" class="mx-auto text-center">
                </td>
            </tr>
            <tr style="">
                <td style="background-color: gray; padding: 4px; ">
                    <p style="margin: 0; text-align: center; color: white">FORMAT PENDATAAN PENDIDIKAN BERBASIS TIK
                        (DATA KETENAGAAN)</p>
                </td>
            </tr>
        </table>
    </header>

    
    <table style="padding: 0; margin: 0px; border-collapse: collapse;">
        <tr style="padding: 0;">
            <!-- Right -->
            <td width="670px" style="border: 1px solid black; padding: 5px">
                <p style="margin-bottom: 10px; margin-left: 7px;">A. DATA UMUM</p>
                <small style="">
                    <table style="border-collapse: collapse; margin-left: 25px" width="96%">
                        <tr>
                            <td width="300px" style="vertical-align: top">Nama Guru</td>
                            <td width="15px" style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $teacher->teacher_name }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Status Ketenagaan</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $teacher->employment_status }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">NIP</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $teacher->nip }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">NUPTK</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->nuptk }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Tempat, Tanggal Lahir</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->place_of_birth . ', ' . $teacher->date_of_birth }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Agama</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->religion }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Jenis Kelamin</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->gender }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Pendidikan Terakhir</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->last_education }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">TMT PNS</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">Tahun: {{ $teacher->tmt_pns_tahun }} Bulan: {{ $teacher->tmt_pns_bulan }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Pangkat / Golongan</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->class }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">TMT Golongan</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">Tahun: {{ $teacher->tmt_class_tahun }} Bulan: {{ $teacher->tmt_class_bulan }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Asal Sekolah</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->school->name }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Desa/Kecamatan</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">
                                {{ $teacher->district->name }}, 
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Kabupaten/Kota</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->city->name }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Provinsi</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->provinsi }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">No Telpon/HP</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->phone}}</td>
                        </tr>
                    </table>
                </small>
            </td>
            <!-- Left -->
            <td width="32%" style="border: 1px solid black; padding: 0px 5px 0px;">
                <small>
                    <table style="border-collapse: collapse;">
                        <tr>
                            <td style="vertical-align: top">Kode Kuisioner</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">
                                {{ $teacher->kode_kuisioner . ' /B. TEKKOM/ ' . $teacher->tekkom . ' /KR/2016' }}
                            </td>
                        <tr>
                        <tr>
                            <td style="vertical-align: top">Tingkatan Sekolah</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->tingkat_sekolah }}</td>
                        <tr>
                        <tr>
                            <td style="vertical-align: top">Nama Petugas Pendataan</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->nama_petugas }}</td>
                        <tr>
                        <tr>
                            <td style="vertical-align: top">NIP</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->nip }}</td>
                        <tr>
                        <tr>
                            <td style="vertical-align: top">Range Waktu Pendataan</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $teacher->range_waktu_dari }} s/d
                                {{ $teacher->range_waktu_sampai }}</td>
                        <tr>
                        <tr>
                            <td colspan="3">Analisa Petugas Pendataan</td>
                        <tr>
                            <td colspan="3">
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                    rows="1000" style="height: 323px">{{ $teacher->analisis }}</textarea>
                            </td>
                        </tr>
                    </table>
                </small>
            </td>
        </tr>
    </table>

    <table style="padding: 0; margin: 0px; border-collapse: collapse;">
        <tr style="padding: 0;">
            <!-- Right -->
            <td width="670px" style="border: 1px solid black; padding: 5px">
                <p style="margin-bottom: 10px; margin-left: 7px;">B. DATA KOMPETENSI</p>
                <small style="">
                    <table style="border-collapse: collapse; margin-left: 25px" width="96%">
                        <tr>
                            <td width="300px" style="vertical-align: top">Mata pelajaran yang diampu</td>
                            <td width="15px" style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $teacher->subjects_taught }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Program atau kegiatan yang dilaksanakan</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">
                                <ul style="list-style: none; margin: 0; padding: 0;">
                                    @foreach($programs as $program)
                                    <li>{{ $loop->iteration . '. ' . $program->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Status Sertifikasi</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $teacher->certification_status }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Tahun Sertifikasi</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $teacher->certification_year }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Alasan Belum Sertifikasi</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $teacher->reason_not_certified }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Kompetensi yang dimiliki</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">
                                @foreach($kompetensis as $kompetensi)
                                {{ $kompetensi->name }}, 
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Kegiatan Sosialisasi UNBK</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $teacher->unbk_socialization_activities }}, Tahun: {{ $teacher->unbk_socialization_activities_tahun }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Keterlibatan dalam UNBK</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $teacher->involvement_unbk }}, Tahun: {{ $teacher->involvement_unbk_tahun }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Riwayat Keterlibatan dalam UNBK</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $teacher->history_involvement_unbk }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top" colspan="3">Pelatihan Yang Pernah Diikuti</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <table border="1" width="100%" style="border-collapse: collapse">
                                    <tr>
                                        <th style="text-align: center" width="40px">No</th>
                                        <th style="text-align: center" width="200px">Nama Diklat / Workshop / Seminar</th>
                                        <th style="text-align: center" width="150px">Tingkat / Jenis Diklat</th>
                                        <th style="text-align: center">Jampel</th>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center; vertical-align: top;">1</td>
                                        <td style="text-align: center; vertical-align: top;">skajskjaj</td>
                                        <td style="text-align: center; vertical-align: top;">skaksajsa</td>
                                        <td style="text-align: center; vertical-align: top;">skaksajsa</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Kebutuhan Diklat saat ini</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">
                                <ul style="list-style: none; margin: 0; padding: 0;">
                                    @foreach($trainingNeeds as $training)
                                    <li>{{ $loop->iteration . '. ' . $training->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    </table>
                </small>
            </td>
            <!-- Left -->
            <td width="337px" style="border: 1px solid black; padding: 0px 5px 0px;">
                <small>
                    <table style="border-collapse: collapse;">
                        <tr>
                            <td colspan="3">Analisa Petugas Pendataan</td>
                        <tr>
                            <td colspan="3">
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                    style="height: 260px; width: 325px"></textarea>
                            </td>
                        </tr>
                    </table>
                    <table style="border-collapse: collapse;" width="100%" border="1">
                        <tr>
                            <td style="padding: 5px" width="50%">
                                <p style="text-align: center; margin: 0">Responden</p>
                                <p style="margin-bottom: 90px; margin-top: 0">Tgl: {{ $teacher->date_responden }}</p>
                                <p style="text-align: center; margin-bottom: 0">( {{ $teacher->nama_responden }} )</p>
                                <small style="text-align: center; color: gray">*dibutuhkan cap instansi</small>
                            </td>
                            <td style="padding: 5px">
                                <p style="text-align: center; margin: 0">Petugas Pengumpulan</p>
                                <p style="margin-bottom: 90px; margin-top: 0">Tgl :</p>
                                <p style="text-align: center">( {{ $teacher->nama_petugas }} )</p>
                            </td>
                        </tr>
                    </table>
                </small>
            </td>
        </tr>
    </table>
</body>

</html>
