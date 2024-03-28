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
                                        <h5>FORMAT PENDATAAN PENDIDIKAN BERBASIS TIK (DATA SEKOLAH)</h5>
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
                                                        <th scope="row" class="col-md-5">Nama Sekolah</th>
                                                        <td class="col-md-7">: {{ $school->name }}</td>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">NPSN</th>
                                                        <td class="col-md-7">: {{ $school->npsn }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-4">Jumlah Siswa</th>
                                                        <td class="col-md-5">: <strong> Laki-Laki :</strong> {{$school->siswa_lak}} ,<strong> Perempuan :</strong>  {{ $school->siswa_per}} <br> 
                                                        <strong>  Total : </strong> {{$school->jumlah_siswa }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">UNBK</th>
                                                         <td class="col-md-7">: {{ $school->unbk }} , <strong>Tahun : </strong> {{ $school->unbk_tahun }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Desa/Kecamatan</th>
                                                         <td class="col-md-7">: {{ $school->district->name ?? '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kabupaten/Kota</th>
                                                         <td class="col-md-7">: {{ $school->city->name ?? '' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Provinsi</th>
                                                         <td class="col-md-7">: {{ $school->provinsi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Akses Transportasi</th>
                                                         <td class="col-md-7">: {{ $school->transportasi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kondisi Geografis</th>
                                                         <td class="col-md-7">: {{ $school->geografis }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Kondisi Sosekbud</th>
                                                         <td class="col-md-7">: {{ $school->sosekbud }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Fasilitas Komunikasi Saat Ini</th>
                                                         <td class="col-md-7">: {{ $school->internet }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Pernah Mendapat Bantuan Terkait Teknologi Informasi dan Komunikasi</th>
                                                         <td class="col-md-7">: {{ $school->bantuan_teknologi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Lembaga Pemberi Bantuan</th>
                                                         <td class="col-md-7">: 
                                                        @foreach($school->lembaga_bantuan as $data)
                                                        {{ $data->name }}, 
                                                         @endforeach
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Listrik</th>
                                                         <td class="col-md-7">: {{ $school->listrik }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">SumberDaya Listrik</th>
                                                         <td class="col-md-7">: {{ $school->power_suplay }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Durasi Listrik</th>
                                                         <td class="col-md-7">: {{ $school->durasi_listrik}} ( Jam )</td>
                                                    </tr>
                                                    <!-- B. Data Sekolah Yang Memiliki Akses Internet -->
                                                    <tr>
                                                        <th colspan="2" class="my-5 font-weight-bold text-primary bg-light border-bottom p-2">
                                                            <h6><strong> B. Data Sekolah Yang Memiliki Akses Internet</strong></h6>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Laboratorium</th>
                                                         <td class="col-md-7">: <strong> Komputer : </strong>{{ $school->laboratorium_komputer }}, <strong> Multimedia : </strong> {{ $school->laboratorium_multimedia }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Jenis Program / Kegiatan yang  Diterima</th>
                                                         <td class="col-md-7">: {{ $school->jenis_program }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Tahun Menerima Bantuan</th>
                                                         <td class="col-md-7">: {{ $school->tahun_bantuan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Perangkat Internet yang Ada</th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">A. LAN/Wireless LAN</th>
                                                         <td class="col-md-7">: {{ $school->lan }} , <strong> Jumlah Unit :</strong> {{ $school->lan_unit }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">B. Router</th>
                                                         <td class="col-md-7">: {{ $school->router }} , <strong> Jumlah Unit :</strong> {{ $school->router_unit }} </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">C. Komputer</th>
                                                         <td class="col-md-7">: {{ $school->komputer }} ,  <strong> Jumlah Unit :</strong>{{ $school->komputer_unit }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">D. Kuota Banwidth Saat Ini</th>
                                                         <td class="col-md-7">: {{ $school->kuota_bandwidth }}  {{ $school->internet_speed}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">E. Kesesuaian Kuota Dengan Kebutuhan </th>
                                                         
                                                         <td class="col-md-7">: {{ $school->kesesuaian_kuota }} </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">F. Alasan Penambahan Kuota</th>
                                                         <td class="col-md-7">: {{ $school->alasan_tambah_kuota }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="my-5 font-weight-bold text-primary bg-light border-bottom p-2"> 
                                                            <h6><strong> C. Saran</strong></h6>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="col-md-5">Saran</th>
                                                         <td class="col-md-7">: {{ $school->saran }}</td>
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
                                                         <td class="col-md-7"><small>: {{ $school->kode_kuisioner . '/B. TEKKOM/' . $school->tekkom . '/KR/2016' }}</small></td>
                                                    <tr>
                                                    <tr>
                                                        <th class="col-md-5"><small>Tingkatan Sekolah</small></th>
                                                         <td class="col-md-7"><small>: {{ $school->tingkat_sekolah }}</small></td>
                                                    <tr>
                                                    <tr>
                                                        <th class="col-md-5"><small>Nama Petugas Pendataan</small></th>
                                                         <td class="col-md-7"><small>: {{ $school->nama_petugas }}</small></td>
                                                    <tr>
                                                    <tr>
                                                        <th class="col-md-5"><small>NIP</small></th>
                                                         <td class="col-md-7"><small>: {{ $school->nip }}</small></td>
                                                    <tr>
                                                    <tr>
                                                        <th class="col-md-5"><small>Range Waktu Pendataan</small></th>
                                                        <td class="col-md-7"><small>: {{ $school->range_waktu_dari }} <strong>s/d </strong> {{ $school->range_waktu_sampai }}</small></td>
                                                    <tr>
                                                    <tr class="text-center">
                                                        <th colspan="3"><small>Analisa Petugas Pendataan</small></th>
                                                    <tr>
                                                        <td colspan="3"><small>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="30">{{ $school->analisis }}</textarea></small>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <tr>
                                                                    <td colspan="2" class="col-sm-6">
                                                                        <table class="table table-sm table-borderless">
                                                                            <tr>
                                                                                 <td class="col-md-12 text-center"> <small>Responden</small></td>
                                                                            </tr>
                                                                            <tr>
                                                                                 <td class="col-md-12 text-center"><small> tgl : {{ $school->date_responden }} </small></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="col-md-12 text-center"><small>( {{ $school->nama_responden }} )</small></td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td colspan="2" class="col-sm-6 m-0">
                                                                        <table class="table table-sm table-borderless">
                                                                            <tr>
                                                                                 <td class="col-md-12 text-center"><small>Petugas Pengumpul Data</small></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="col-md-12 text-center"><small>tgl : {{ $school->date_responden }}</small> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                 <td class="col-md-12 text-center"><small>( {{ $school->nama_petugas }} )</small></td>
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
                                <a href="{{ route('school.index') }}" class="btn btn-secondary mr-2">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>