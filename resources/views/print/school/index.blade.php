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
                <td rowspan="2" width="100px" style="">
                    <img src="/img/logo pemprov.png'" alt="pemprov maluku" height="50">
                </td>
                <td style="background-color: gray; padding: 7px; ">
                    <h3 style="margin: 0; text-align: center; color: white;">BALAI TEKNOLOGI DAN KOMUNIKASI PENDIDIKAN
                        PROVINSI MALUKU</h3>
                </td>
                <td rowspan="2" width="100px" style="">
                    <img src="/img/tutwuri-handayani.png" alt="tutwuri handayani" height="50">
                </td>
            </tr>
            <tr style="">
                <td style="background-color: gray; padding: 4px; ">
                    <p style="margin: 0; text-align: center; color: white">FORMAT PENDATAAN PENDIDIKAN BERBASIS TIK
                        (DATA SEKOLAH)</p>
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
                            <td width="300px" style="vertical-align: top">Nama Sekolah</td>
                            <td width="15px" style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $school->name }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">NPSN</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $school->npsn }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Jumlah Siswa</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> Laki-Laki : {{$school->siswa_lak}} ,
                                {{ $school->siswa_per}} Total : {{$school->jumlah_siswa }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">UNBK</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->unbk }}, Tahun : {{ $school->unbk_tahun }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Desa/Kecamatan</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->district->name }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Kabupaten/Kota</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->city->name }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Provinsi</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->provinsi }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Akses Transportasi</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->transportasi }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Kondisi Geografis</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->geografis }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Kondisi Sosekbud</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->sosekbud }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Fasilitas Komunikasi Saat Ini</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->internet }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Pernah Mendapat Bantuan Terkait Teknologi Informasi dan Komunikasi</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->bantuan_teknologi }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Lembaga Pemberi Bantuan</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">
                                @foreach($school->lembaga_bantuan as $data)
                                {{ $data->name }}, 
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Listrik</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->listrik }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">SumberDaya Listrik</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->power_suplay }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Durasi Listrik</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->durasi_listrik}} ( Jam )</td>
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
                                {{ $school->kode_kuisioner . ' /B. TEKKOM/ ' . $school->tekkom . ' /KR/2016' }}
                            </td>
                        <tr>
                        <tr>
                            <td style="vertical-align: top">Tingkatan Sekolah</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->tingkat_sekolah }}</td>
                        <tr>
                        <tr>
                            <td style="vertical-align: top">Nama Petugas Pendataan</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->nama_petugas }}</td>
                        <tr>
                        <tr>
                            <td style="vertical-align: top">NIP</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->nip }}</td>
                        <tr>
                        <tr>
                            <td style="vertical-align: top">Range Waktu Pendataan</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top"> {{ $school->range_waktu_dari }} s/d
                                {{ $school->range_waktu_sampai }}</td>
                        <tr>
                        <tr>
                            <td colspan="3">Analisa Petugas Pendataan</td>
                        <tr>
                            <td colspan="3">
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                    rows="1000" style="height: 323px">{{ $school->analisis }}</textarea>
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
                <p style="margin-bottom: 10px; margin-left: 7px;">B. DATA SEKOLAH YANG MEMILIKI AKSES INTERNET</p>
                <small style="">
                    <table style="border-collapse: collapse; margin-left: 25px" width="96%">
                        <tr>
                            <td width="300px" style="vertical-align: top">Laboratorium</td>
                            <td width="15px" style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">Komputer : {{ $school->laboratorium_komputer }},
                                Multimedia :  {{ $school->laboratorium_multimedia }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Jenis Program / Kegiatan yang Diterima</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $school->jenis_program }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Tahun Menerima Bantuan</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $school->tahun_bantuan }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">Perangkat Internet yang Ada</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">A. LAN/Wireless LAN</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $school->lan }} , Jumlah Unit : 
                                {{ $school->lan_unit }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">B. Router</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $school->router }} , Jumlah Unit : 
                                {{ $school->router_unit }} </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">C. Komputer</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $school->komputer }} , Jumlah Unit
                                    : {{ $school->komputer_unit }}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">D. Kuota Banwidth Saat Ini</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $school->kuota_bandwidth }} {{ $school->internet_speed}}</td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">E. Kesesuaian Kuota Dengan Kebutuhan </td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $school->kesesuaian_kuota }} </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top">F. Alasan Penambahan Kuota</td>
                            <td style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $school->alasan_tambah_kuota }}</td>
                        </tr>
                    </table>
                </small>
                <p style="margin-bottom: 10px; margin-left: 7px;">B. DATA SEKOLAH YANG MEMILIKI AKSES INTERNET</p>
                <small>
                    <table style="border-collapse: collapse; margin-left: 25px" width="96%">
                        <tr>
                            <td width="300px" style="vertical-align: top">Saran</td>
                            <td width="15px" style="vertical-align: top; text-align: center">:</td>
                            <td style="vertical-align: top">{{ $school->saran }} lore</td>
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
                                    style="height: 200px; width: 325px"></textarea>
                            </td>
                        </tr>
                    </table>
                    <table style="border-collapse: collapse;" width="100%" border="1">
                        <tr>
                            <td style="padding: 5px" width="50%">
                                <p style="text-align: center; margin: 0">Responden</p>
                                <p style="margin-bottom: 90px; margin-top: 0">Tgl: {{ $school->date_responden }}</p>
                                <p style="text-align: center; margin-bottom: 0">( {{ $school->nama_responden }} )</p>
                                <small style="text-align: center; color: gray">*dibutuhkan cap instansi</small>
                            </td>
                            <td style="padding: 5px">
                                <p style="text-align: center; margin: 0">Petugas Pengumpulan</p>
                                <p style="margin-bottom: 90px; margin-top: 0">Tgl :</p>
                                <p style="text-align: center">( {{ $school->nama_petugas }} )</p>
                            </td>
                        </tr>
                    </table>
                </small>
            </td>
        </tr>
    </table>
</body>

</html>
