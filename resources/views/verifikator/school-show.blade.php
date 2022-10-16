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
                                                        <th scope="row" class="col-md-5">Nama Sekolah
                                                        </th>
                                                        <td>:</td>
                                                        <td>{{ $school->name }}</td>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Nomor Pokok Sekolah Nasional (NPSN)</th>
                                                        <td>:</td>
                                                        <td>{{ $school->npsn }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Jumlah Siswa</th>
                                                        <td>:</td>
                                                        <td>{{ $school->jumlah_siswa }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">UNBK</th>
                                                        <td>:</td>
                                                        <td>{{ $school->unbk . ', Tahun ' . $school->unbk_tahun }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Desa/Kecamatan</th>
                                                        <td>:</td>
                                                        <td>{{ $school->district->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kabupaten/Kota</th>
                                                        <td>:</td>
                                                        <td>{{ $school->city->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Provinsi</th>
                                                        <td>:</td>
                                                        <td>{{ $school->provinsi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Akses Transportasi</th>
                                                        <td>:</td>
                                                        <td>{{ $school->transportasi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kondisi Geografis</th>
                                                        <td>:</td>
                                                        <td>{{ $school->geografis }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kondisi Sosekbud</th>
                                                        <td>:</td>
                                                        <td>{{ $school->sosekbud }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Fasilitas Komunikasi Saat Ini</th>
                                                        <td>:</td>
                                                        <td>{{ $school->internet }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Pernah Mendapat Bantuan Terkait Teknologi Informasi dan Komunikasi</th>
                                                        <td>:</td>
                                                        <td>{{ $school->bantuan_teknologi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Lembaga Pemberi Bantuan</th>
                                                        <td>:</td>
                                                        <td>
                                                        @foreach($school->lembaga_bantuan as $data)
                                                        {{ $data->name }}, 
                                                         @endforeach
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Listrik</th>
                                                        <td>:</td>
                                                        <td>{{ $school->listrik }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">SumberDaya Listrik</th>
                                                        <td>:</td>
                                                        <td>{{ $school->power_suplay }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Durasi Listrik</th>
                                                        <td>:</td>
                                                        <td>{{ $school->durasi_listrik }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5"></th>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <!-- B. Data Sekolah Yang Memiliki Akses Internet -->
                                                    <tr>
                                                        <th scope="row" class="my-5 font-weight-bold text-primary">
                                                            <h6><strong> B. Data Sekolah Yang Memiliki Akses Internet</strong></h6>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5"></th>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Laboratorium</th>
                                                        <td>:</td>
                                                        <td>Komputer {{ $school->laboratorium_komputer }}, Multimedia {{ $school->laboratorium_multimedia }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Jenis Program / Kegiatan yang  Diterima</th>
                                                        <td>:</td>
                                                        <td>{{ $school->jenis_program }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Tahun Menerima Bantuan</th>
                                                        <td>:</td>
                                                        <td>{{ $school->tahun_bantuan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Perangkat Internet yang Ada</th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">A. LAN/Wireless LAN</th>
                                                        <td>:</td>
                                                        <td>{{ $school->lan }}</td>
                                                        <td>Jumlah Unit</td>
                                                        <td>:</td>
                                                        <td>{{ $school->lan_unit }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">B. Router</th>
                                                        <td>:</td>
                                                        <td>{{ $school->router }}</td>
                                                        <td>Jumlah Unit</td>
                                                        <td>:</td>
                                                        <td>{{ $school->router_unit }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">C. Komputer</th>
                                                        <td>:</td>
                                                        <td>{{ $school->komputer }}</td>
                                                        <td>Jumlah Unit</td>
                                                        <td>:</td>
                                                        <td>{{ $school->komputer_unit }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">D. Kuota Banwidth Saat Ini</th>
                                                        <td>:</td>
                                                        <td>{{ $school->kuota_bandwidth }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">E. Kesesuaian Kuota Dengan Kebutuhan </th>
                                                        <td>:</td>
                                                        <td>{{ $school->kesesuaian_kuota }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">F. Alasan Penambahan Kuota</th>
                                                        <td>:</td>
                                                        <td>{{ $school->alasan_tambah_kuota }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="my-5 font-weight-bold text-primary">
                                                            <h6><strong> C. Saran</strong></h6>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Saran</th>
                                                        <td>:</td>
                                                        <td>{{ $school->saran }}</td>
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
                                                        <td>{{ $school->kode_kuisioner }}</td>
                                                    <tr>
                                                    <tr>
                                                        <th class="col-md-6">Tingkatan Sekolah</th>
                                                        <td>:</td>
                                                        <td>{{ $school->tingkat_sekolah }}</td>
                                                    <tr>
                                                    <tr>
                                                        <th class="col-md-6">Nama Petugas Pendataan</th>
                                                        <td>:</td>
                                                        <td>{{ $school->nama_petugas }}</td>
                                                    <tr>
                                                    <tr>
                                                        <th class="col-md-6">NIP</th>
                                                        <td>:</td>
                                                        <td>{{ $school->nip }}</td>
                                                    <tr>
                                                    <tr>
                                                        <th class="align-top">Range Waktu Pendataan</th>
                                                        <td class="align-top">:</td>
                                                        <td class="align-top">{{ $school->range_waktu_dari . ' s/d ' . $school->range_waktu_sampai }}</td>
                                                    <tr>
                                                    <tr>
                                                        <th colspan="3">Analisa Petugas Pendataan</th>
                                                    <tr>
                                                        <td colspan="3">
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="30">{{ $school->analisis }}</textarea>
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
                                <a href="{{ route('verifikator.schools') }}" class="btn btn-secondary mr-2">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>