<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h6 class="card-title">Data Sekolah</h6>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="general_data-tab" data-toggle="tab"
                                    data-target="#general_data" type="button" role="tab" aria-controls="general_data"
                                    aria-selected="true">A. Data Umum</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="competency_data-tab" data-toggle="tab"
                                    data-target="#competency_data" type="button" role="tab"
                                    aria-controls="competency_data" aria-selected="false">B. Data
                                    Sekolah Yang Memiliki Akses Internet</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <!-- A. Data Umum -->
                            <div class="tab-pane fade show active" id="general_data" role="tabpanel"
                                aria-labelledby="general_data-tab">
                                <form action="{{ route('schools.store') }}" method="post">
                                    @csrf
                                    <div class="container mt-5">
                                        <div class="form-group row">
                                            <label for="name" class="col-sm-3 col-form-label">Nama Sekolah</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="npsn" class="col-sm-3 col-form-label">Nomor Pokok Sekolah Nasional
                                                (NPSN)</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="npsn" name="npsn" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Jumlah Siswa <br></label>
                                            <div class="col-sm-9">
                                                <div class="form-row">
                                                    <div class="form-group col-sm-5">
                                                        <label for="siswa_lak">Laki-Laki</label>
                                                        <input type="text" class="form-control" id="siswa_lak" name="siswa_lak">
                                                    </div>
                                                    <div class="form-group col-sm-5">
                                                        <label for="siswa_per">Perempuan</label>
                                                        <input type="text" class="form-control" id="siswa_per" name="siswa_per">
                                                    </div>
                                                    <div class="form-group col-sm-2">
                                                        <label for="jumlah_siswa">Total</label>
                                                        <input type="text" class="form-control" id="jumlah_siswa" name="jumlah_siswa">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="unbk" class="col-sm-3 col-form-label">UNBK</label>
                                            <div class="col-sm-9">
                                                <div class="form-row d-flex align-items-center">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="#" id="unbk-1" value="sudah">
                                                        <label class="form-check-label" for="unbk-1">Sudah</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="#" id="unbk-2" value="belum">
                                                        <label class="form-check-label" for="unbk-2">Belum</label>
                                                    </div>
                                                    <div class="form-group col-sm-2">
                                                        <input type="text" class="form-control" id="inputCity" name="unbk"
                                                            placeholder="Tahun" name="tahun">
                                                    </div>
                                                    <small>(diisi jika sudah melaksanakan UNBK)</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="district_id" class="col-sm-3 col-form-label">Desa / Kecamatan</label>
                                            <div class="col-sm-9">
                                                <select name="district_id" id="district_id" class="form-control">
                                                    <option selected disabled value="">-- pilih --</option>
                                                    @foreach($districts as $district)
                                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="city_id" class="col-sm-3 col-form-label">Kabupaten / Kota</label>
                                            <div class="col-sm-9">
                                                <select name="city_id" id="city_id" class="form-control">
                                                    <option selected disabled value="">-- pilih --</option>
                                                    @foreach($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="provinsi" class="col-sm-3 col-form-label">Provinsi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="" value="Maluku" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="transportasi" class="col-sm-3 col-form-label">Akses Transportasi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="transportasi" name="transportasi" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-12 col-form-label">Deskripsi Lokasi
                                                Pendataan</label>

                                        </div>
                                        <div class="form-group row">
                                            <label for="geografis" class="col-sm-3 col-form-label">Kondisi Geografis <br>
                                                <small>(Uraikan Singkat)</small></label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="geografis" name="geografis"
                                                    rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sosekbud" class="col-sm-3 col-form-label">Kondisi sosekbud <br>
                                                <small>(Uraikan Singkat)</small></label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="sosekbud" name="sosekbud"
                                                    rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="internet" class="col-sm-3 col-form-label">Fasilitas Komunikasi Internet
                                                Saat Ini</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="internet" name="internet" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Pernah Mendapatkan Bantuan
                                                Terkait Teknologi Informasi dan Komunikasi </label>
                                            <div class="col-sm-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="bantuan_teknologi" id="bantuanTeknologi1" value="option1">
                                                    <label class="form-check-label" for="bantuanTeknologi1">Pernah</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="bantuan_teknologi" id="bantuanTeknologi2" value="option2">
                                                    <label class="form-check-label" for="bantuanTeknologi2">Tidak
                                                        Pernah</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama_lembaga" class="col-sm-3 col-form-label">Lembaga Pemberi
                                                Bantuan</label>
                                            <div class="col-sm-9 page-input">
                                                <input type="text" name="nama_lembaga[]" id="nama_lembaga" class="form-control mb-2">
                                            </div>
                                        </div>
                                        <div class="row justify-content-end px-2">
                                            <span class="btn btn-light mx-1 add-input">+</span>
                                            <span class="btn btn-danger remove-input">-</span>
                                        </div>
                                        <div class="form-group row">
                                            <label for="listrict" class="col-sm-3 col-form-label">Listrik</label>
                                            <div class="col-sm-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="listrik" id="listrik1" value="Ada">
                                                    <label class="form-check-label" for="listrik1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="listrik" id="listrik2" value="Tidak Ada">
                                                    <label class="form-check-label" for="listrik2">Tidak Ada</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="power_suplay" class="col-sm-3 col-form-label">Sumber Daya Listrik</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="power_suplay" name="power_suplay" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="durasi_listrik" class="col-sm-3 col-form-label">Durasi Listrik</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="durasi_listrik" name="durasi_listrik" placeholder="">
                                            </div>
                                            <div class="col-sm-2">
                                                <p>(Jam)</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="periode" class="col-sm-3 col-form-label">Periode</label>
                                            <div class="col-sm-9">
                                                <select name="periode" id="periode" class="form-control">
                                                    <option selected disabled value="">-- pilih --</option>
                                                    @foreach($years as $year)
                                                    <option value="{{ $year->name }}">{{ $year->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                            </div>
                            <!-- B. Data Kompetensi -->
                            <div class="tab-pane fade" id="competency_data" role="tabpanel"
                                aria-labelledby="competency_data-tab">
                                    <div class="container mt-5">
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Laboratorium <br></label>
                                            <div class="col-sm-9">
                                                <div class="form-row">
                                                    <div class="form-group col-sm-5">
                                                        <label for="laboratorium_komputer">1. Komputer</label>
                                                        <input type="text" class="form-control" id="laboratorium_komputer" name="laboratorium_komputer"
                                                            placeholder="(........Unit)">
                                                    </div>
                                                    <div class="form-group col-sm-5">
                                                        <label for="laboratorium_multimedia">2. Multimedia</label>
                                                        <input type="text" class="form-control" id="laboratorium_multimedia" name="laboratorium_multimedia"
                                                            placeholder="(........Unit)">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jenis_program" class="col-sm-3 col-form-label">Jenis Program / Kegiatan yang
                                                diterima</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="jenis_program" name="jenis_program" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tahun_bantuan" class="col-sm-3 col-form-label">Tahun Menerima
                                                Bantuan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="tahun_bantuan" name="tahun_bantuan" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-12 col-form-label">Perangkat Internet yang
                                                Ada</label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lan" class="col-sm-3 col-form-label">A. LAN/Wireless LAN</label>
                                            <div class="col-sm-9">
                                                <div class="form-row">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="lan1" id="lan1" value="option1">
                                                        <label class="form-check-label" for="lan1">Ada</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="lan1" id="lan2" value="option2">
                                                        <label class="form-check-label" for="lan2">Tidak
                                                            Ada</label>
                                                    </div>
                                                    <div class="jenis_program" class="form-group col-sm-5">
                                                        <input type="text" class="form-control" id="" name="lan"
                                                            placeholder="Jumlah (........Unit)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">B. Router</label>
                                            <div class="col-sm-9">
                                                <div class="form-row">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="router1" id="router1" value="option1">
                                                        <label class="form-check-label" for="router1">Ada</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="router1" id="router2" value="option2">
                                                        <label class="form-check-label" for="router2">Tidak
                                                            Ada</label>
                                                    </div>
                                                    <div class="form-group col-sm-5">
                                                        <input type="text" name="jenis_program" class="form-control" id="" name="router"
                                                            placeholder="Jumlah (........Unit)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">A. Komputer</label>
                                            <div class="col-sm-9">
                                                <div class="form-row">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="komputer1" id="komputer1" value="option1">
                                                        <label class="form-check-label" for="komputer1">Ada</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="komputer1" id="komputer2" value="option2">
                                                        <label class="form-check-label" for="komputer2">Tidak
                                                            Ada</label>
                                                    </div>
                                                    <div class="form-group col-sm-5">
                                                        <input type="text" name="komputer" class="form-control" id=""
                                                            placeholder="Jumlah (........Unit)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kuota_bandwidth" class="col-sm-3 col-form-label">D. Kuota Banwidth Saat
                                                Ini</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="kuota_bandwidth" name="kuota_bandwidth" placeholder="">
                                            </div>
                                            <label>Kbps/ Mbps</label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kesesuaian_kuota" class="col-sm-3 col-form-label">E. Kesesuaian Kuota Dengan Kebutuhan</label>
                                            <div class="col-sm-9">
                                                <div class="form-row">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesesuaian_kuota" id="kesesuaian_kuota1" value="Ada">
                                                        <label class="form-check-label" for="kesesuaian_kuota1">Ada</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="kesesuaian_kuota" id="kesesuaian_kuota2" value="Tidak Ada">
                                                        <label class="form-check-label" for="kesesuaian_kuota2">Tidak
                                                            Ada</label>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alasan_tambah_kuota" class="col-sm-3 col-form-label">Alasan Penambahan Kuota</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="alasan_tambah_kuota"
                                                    rows="6" name="alasan_tambah_kuota"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="saran" class="col-sm-3 col-form-label">Saran</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="saran" name="saran"
                                                    rows="6"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
        </div>
    </div>
</x-app-layout>