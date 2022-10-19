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
                <table>
                    <tr>
                        <th width="20%">Nama Sekolah</th>
                        <td width="20%"> : {{ $school->name }}</td>
                    </tr>
                    <tr>
                        <th>NPSN</th>
                        <td> : {{ $school->npsn }}</td>
                    </tr>
                    <tr>
                        <th>Jumlah Siswa</th>
                        <td> : <strong> Laki-Laki :</strong> {{$school->siswa_lak}} ,<strong> Perempuan :</strong>
                            {{ $school->siswa_per}} <strong> Total : </strong> {{$school->jumlah_siswa }}</td>
                    </tr>
                    <tr>
                        <th>UNBK</th>
                        <td> : {{ $school->unbk }}, <strong>Tahun : </strong> {{ $school->unbk_tahun }}</td>
                    </tr>
                    <tr>
                        <th>Desa/Kecamatan</th>
                        <td> : {{ $school->district->name }}</td>
                    </tr>
                    <tr>
                        <th>Kabupaten/Kota</th>
                        <td>: {{ $school->city->name }}</td>
                    </tr>
                    <tr>
                        <th>Provinsi</th>
                        <td>: {{ $school->provinsi }}</td>
                    </tr>
                    <tr>
                        <th>Akses Transportasi</th>
                        <td>: {{ $school->transportasi }}</td>
                    </tr>
                    <tr>
                        <th>Kondisi Geografis</th>
                        <td>: {{ $school->geografis }}</td>
                    </tr>
                    <tr>
                        <th>Kondisi Sosekbud</th>
                        <td>: {{ $school->sosekbud }}</td>
                    </tr>
                    <tr>
                        <th>Fasilitas Komunikasi Saat Ini</th>
                        <td>: {{ $school->internet }}</td>
                    </tr>
                    <tr>
                        <th>Pernah Mendapat Bantuan Terkait Teknologi Informasi dan Komunikasi</th>
                        <td>: {{ $school->bantuan_teknologi }}</td>
                    </tr>
                    <tr>
                        <th>Lembaga Pemberi Bantuan</th>
                        <td>:
                            @foreach($school->lembaga_bantuan as $data)
                            {{ $data->name }},
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Listrik</th>
                        <td>: {{ $school->listrik }}</td>
                    </tr>
                    <tr>
                        <th>SumberDaya Listrik</th>
                        <td>: {{ $school->power_suplay }}</td>
                    </tr>
                    <tr>
                        <th>Durasi Listrik</th>
                        <td>: {{ $school->durasi_listrik}} ( Jam )</td>
                    </tr>
                    
                    <tr>
                        <th >
                            <h6><strong> B. Data Sekolah Yang Memiliki Akses Internet</strong></h6>
                        </th>
                    </tr>
                    <tr>
                        <th>Laboratorium</th>
                        <td>: <strong> Komputer : </strong>{{ $school->laboratorium_komputer }},
                            <strong> Multimedia : </strong> {{ $school->laboratorium_multimedia }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Program / Kegiatan yang Diterima</th>
                        <td>: {{ $school->jenis_program }}</td>
                    </tr>
                    <tr>
                        <th>Tahun Menerima Bantuan</th>
                        <td>: {{ $school->tahun_bantuan }}</td>
                    </tr>
                    <tr>
                        <th>Perangkat Internet yang Ada</th>
                    </tr>
                    <tr>
                        <th>A. LAN/Wireless LAN</th>
                        <td>: {{ $school->lan }} , <strong> Jumlah Unit :</strong>
                            {{ $school->lan_unit }}</td>
                    </tr>
                    <tr>
                        <th>B. Router</th>
                        <td>: {{ $school->router }} , <strong> Jumlah Unit :</strong>
                            {{ $school->router_unit }} </td>
                    </tr>
                    <tr>
                        <th>C. Komputer</th>
                        <td>: {{ $school->komputer }} , <strong> Jumlah Unit
                                :</strong>{{ $school->komputer_unit }}</td>
                    </tr>
                    <tr>
                        <th>D. Kuota Banwidth Saat Ini</th>
                        <td>: {{ $school->kuota_bandwidth }} {{ $school->internet_speed}}</td>
                    </tr>
                    <tr>
                        <th>E. Kesesuaian Kuota Dengan Kebutuhan </th>
                        <td>: {{ $school->kesesuaian_kuota }} </td>
                    </tr>
                    <tr>
                        <th>F. Alasan Penambahan Kuota</th>
                        <td>: {{ $school->alasan_tambah_kuota }}</td>
                    </tr>
                    <tr>
                        <th scope="row" class="my-5 font-weight-bold text-primary">
                            <h6><strong> C. Saran</strong></h6>
                        </th>
                    </tr>
                    <tr>
                        <th>Saran</th>
                        <td>: {{ $school->saran }}</td>
                    </tr>



                </table>
            </td>
            <!-- Left -->
            <td width="40%">
                <table>
                    <tr>
                        <th>Kode Kuisioner</th>
                        <td>:
                            {{ $school->kode_kuisioner . '/B. TEKKOM/' . $school->tekkom . '/KR/2016' }}
                        </td>
                    <tr>
                    <tr>
                        <th>Tingkatan Sekolah</th>
                        <td>: {{ $school->tingkat_sekolah }}</td>
                    <tr>
                    <tr>
                        <th>Nama Petugas Pendataan</th>
                        <td>: {{ $school->nama_petugas }}</td>
                    <tr>
                    <tr>
                        <th>NIP</th>
                        <td>: {{ $school->nip }}</td>
                    <tr>
                    <tr>
                        <th>Range Waktu Pendataan</th>
                        <td>: {{ $school->range_waktu_dari }} <strong>s/d </strong>
                            {{ $school->range_waktu_sampai }}</td>
                    <tr>
                    <tr>
                        <th colspan="3">Analisa Petugas Pendataan</th>
                    <tr>
                        <td colspan="3">
                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                rows="30">{{ $school->analisis }}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td colspan="2" class="col-sm-6">
                                        <table class="table table-sm table-borderless">
                                            <tr>
                                                <td class="col-md-12 text-center"> Responden</td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-12 text-center"> tgl :
                                                    {{ $school->date_responden }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-12 text-center">( {{ $school->nama_responden }}
                                                    )
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td colspan="2" class="col-sm-6 m-0">
                                        <table class="table table-sm table-borderless">
                                            <tr>
                                                <td class="col-md-12 text-center">Petugas Pengumpul Data
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-12 text-center">tgl :
                                                    {{ $school->date_responden }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-12 text-center">( {{ $school->nama_petugas }} )
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </tr>
                </table>
            </td>
        </tr>
    </table>




</body>

</html>
