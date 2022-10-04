<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow py-3 border-left-primary">
                    <div class="card-header">
                        <h6 class="card-title font-weight-bold text-primary">Tambah Data Sekolah</h6>
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
                                <form action="">
                                    <div class="container mt-5">
                                        <div class="form-group row">
                                            <h6><strong> A. Data Umum</strong></h6>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Nama Sekolah</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Nomor Pokok Sekolah Nasional
                                                (NPSN)</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Jumlah Siswa <br></label>
                                            <div class="col-sm-9">
                                                <div class="form-row">
                                                    <div class="form-group col-sm-5">
                                                        <label for="inputCity">Laki-Laki</label>
                                                        <input type="text" class="form-control" id="inputCity">
                                                    </div>
                                                    <div class="form-group col-sm-5">
                                                        <label for="inputState">Perempuan</label>
                                                        <input type="text" class="form-control" id="inputCity">
                                                    </div>
                                                    <div class="form-group col-sm-2">
                                                        <label for="inputZip">Total</label>
                                                        <input type="text" class="form-control" id="inputZip">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">UNBK</label>
                                            <div class="col-sm-9">
                                                <div class="form-row">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Sudah</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">Belum</label>
                                                    </div>
                                                    <div class="form-group col-sm-2">
                                                        <input type="text" class="form-control" id="inputCity"
                                                            placeholder="Tahun">
                                                    </div>
                                                    <small>(diisi jika sudah melaksanakan UNBK)</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Desa / Kecamatan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Kabupaten / Kota</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Provinsi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Akses Transportasi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6><strong> Deskripsi Lokasi
                                                    Pendataan</strong></h6>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Kondisi Geografis <br>
                                                <small>(Uraikan Singkat)</small></label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Kondisi sosekbud <br>
                                                <small>(Uraikan Singkat)</small></label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="4"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Fasilitas Komunikasi Internet
                                                Saat Ini</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Pernah Mendapatkan Bantuan
                                                Terkait Teknologi Informasi dan Komunikasi </label>
                                            <div class="col-sm-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Pernah</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Tidak
                                                        Pernah</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Lembaga Pemberi
                                                Bantuan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                                <small><a href="#">tambah data</a></small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Listrik</label>
                                            <div class="col-sm-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Ada</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Tidak Ada</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Sumber Daya Listrik</label>
                                            <div class="col-sm-9">
                                                <select class="custom-select" id="validationTooltip04" required>
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>PLN</option>
                                                    <option>Genset</option>
                                                    <option>Solar Cell</option>
                                                    <option>Lainnya <a href="#">#</a></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Durasi Listrik</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                            <div class="col-sm-2">
                                                <p>(Jam)</p>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <!-- B. Data Kompetensi -->
                            <div class="tab-pane fade" id="competency_data" role="tabpanel"
                                aria-labelledby="competency_data-tab">
                                <form action="">
                                    <div class="container mt-5">
                                        <div class="form-group row">
                                            <h6><strong> B. Data Sekolah Yang Memiliki Akses Internet</strong></h6>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Laboratorium <br></label>
                                            <div class="col-sm-9">
                                                <div class="form-row">
                                                    <div class="form-group col-sm-5">
                                                        <label for="inputCity">1. Komputer</label>
                                                        <input type="text" class="form-control" id="inputCity"
                                                            placeholder="(........Unit)">
                                                    </div>
                                                    <div class="form-group col-sm-5">
                                                        <label for="inputState">2. Multimedia</label>
                                                        <input type="text" class="form-control" id="inputCity"
                                                            placeholder="(........Unit)">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Jenis Program / Kegiatan yang
                                                diterima</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Tahun Menerima
                                                Bantuan</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-12 col-form-label">Perangkat Internet yang
                                                Ada</label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">A. LAN/Wireless LAN</label>
                                            <div class="col-sm-9">
                                                <div class="form-row">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Ada</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">Tidak
                                                            Ada</label>
                                                    </div>
                                                    <div class="form-group col-sm-5">
                                                        <input type="text" class="form-control" id="inputCity"
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
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Ada</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">Tidak
                                                            Ada</label>
                                                    </div>
                                                    <div class="form-group col-sm-5">
                                                        <input type="text" class="form-control" id="inputCity"
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
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Ada</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">Tidak
                                                            Ada</label>
                                                    </div>
                                                    <div class="form-group col-sm-5">
                                                        <input type="text" class="form-control" id="inputCity"
                                                            placeholder="Jumlah (........Unit)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">D. Kuota Banwidth Saat
                                                Ini</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="#" placeholder="">
                                            </div>
                                            <label>Kbps/ Mbps</label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">E. Kesesuaian Kuota Dengan
                                                Kebutuhan</label>
                                            <div class="col-sm-9">
                                                <div class="form-row">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                        <label class="form-check-label" for="inlineRadio1">Ada</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                        <label class="form-check-label" for="inlineRadio2">Tidak
                                                            Ada</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Alasan Penambahan
                                                Kuota</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-3 col-form-label">Saran</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
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