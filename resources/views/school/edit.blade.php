<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4 py-3 border-left-primary">
                    <div class="card-header">
                    <h6 class="card-title font-weight-bold text-primary">Edit Data Sekolah</h6>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <!-- Data Umum -->
                            <div class="col-md-6">
                                <div class="form-group col-sm-12 mb-4">
                                    <h6><strong> A. Data Umum</strong></h6>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label>Nama Sekolah</label></div>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="#" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label>Nomor Pokok Sekolah Nasional
                                            (NPSN)</label></div>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="#" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label>Jumlah Siswa </label></div>
                                    <div class="col-sm-12">
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
                                <div class="form-group">
                                    <div class="col-sm-12"><label>UNBK</label></div>
                                    <div class="col-sm-12">
                                        <div class="form-row">
                                            <select class="col-sm-9 custom-select" id="validationTooltip04" required>
                                                <option selected disabled value="">Pilih</option>
                                                <option>Pernah</option>
                                                <option>Tidak Pernah</option>
                                            </select>
                                            <div class="form-group col-sm-3">
                                                <input type="text" class="form-control" id="inputCity"
                                                    placeholder="Tahun">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"> <label>Desa / Kecamatan</label></div>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="#" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="form-row">
                                            <div class="form-group col-sm-6">
                                                <label for="inputCity">Kabupaten / Kota</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="inputState">Provinsi</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label>Akses Transportasi</label></div>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="#" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label>Kondisi Geografis</label></div>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label>Kondisi sosekbud </label></div>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label>Fasilitas Komunikasi Internet
                                            Saat Ini</label></div>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="#" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label>Pernah Mendapatkan Bantuan Terkait Teknologi Informasi
                                            dan Komunikasi </label></div>
                                    <div class="col-sm-12">
                                        <select class="custom-select" id="validationTooltip04" required>
                                            <option selected disabled value="">Pilih</option>
                                            <option>Pernah</option>
                                            <option>Tidak Pernah</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label>Lembaga Pemberi Bantuan</label></div>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="#" placeholder="">
                                        <small><a href="#">tambah data</a></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="form-row">
                                            <div class="form-group col-sm-4">
                                                <label for="inputCity">Listrik</label>
                                                <select class="custom-select" id="validationTooltip04" required>
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>Ada</option>
                                                    <option>Tidak Ada</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="inputState">Listrik</label>
                                                <select class="custom-select" id="validationTooltip04" required>
                                                    <option selected disabled value="">Pilih</option>
                                                    <option>PLN</option>
                                                    <option>Genset</option>
                                                    <option>Solar Cell</option>
                                                    <option>Lainnya <a href="#">#</a></option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label for="inputZip">Durasi Listrik</label>
                                                <input type="text" class="form-control" id="#" placeholder="Jam">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Data Sekolah yang memiliki akses Internet -->
                            <div class="col-md-6">
                                <div class="form-group  col-sm-12 mb-4">
                                    <h6><strong> B. Data Sekolah Yang Memiliki Akses Internet</strong></h6>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label>Laboratorium</label>
                                    </div>
                                    <div class="col-sm-12">
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
                                <div class="form-group">
                                    <div class="col-sm-12"><label>Jenis Program / Kegiatan yang
                                            diterima</label></div>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="#" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"><label>Tahun Menerima
                                            Bantuan</label></div>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="#" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="#" class="col-sm-12 col-form-label"><strong> Perangkat Internet yang
                                            Ada</strong></label>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="form-row">
                                            <label class="col-sm-5">A. LAN/Wireless LAN</label>
                                            <select class="col-sm-4 custom-select" id="validationTooltip04" required>
                                                <option selected disabled value="">Pilih</option>
                                                <option>Pernah</option>
                                                <option>Tidak Pernah</option>
                                            </select>
                                            <div class="form-group col-sm-3">
                                                <input type="text" class="form-control" id="inputCity"
                                                    placeholder="Jumlah Unit">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="form-row">
                                            <label class="col-sm-5">B. Router</label>
                                            <select class="col-sm-4 custom-select" id="validationTooltip04" required>
                                                <option selected disabled value="">Pilih</option>
                                                <option>Pernah</option>
                                                <option>Tidak Pernah</option>
                                            </select>
                                            <div class="form-group col-sm-3">
                                                <input type="text" class="form-control" id="inputCity"
                                                    placeholder="Jumlah Unit">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="form-row">
                                            <label class="col-sm-5">C. Komputer</label>
                                            <select class="col-sm-4 custom-select" id="validationTooltip04" required>
                                                <option selected disabled value="">Pilih</option>
                                                <option>Pernah</option>
                                                <option>Tidak Pernah</option>
                                            </select>
                                            <div class="form-group col-sm-3">
                                                <input type="text" class="form-control" id="inputCity"
                                                    placeholder="Jumlah Unit">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="form-row">
                                            <label class="col-sm-5">D. Kuota Banwidth Saat Ini</label>
                                            <div class="form-group col-sm-7">
                                                <input type="text" class="form-control" id="inputCity"
                                                    placeholder="Jumlah Unit">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="form-row">
                                            <label class="col-sm-5">E. Kesesuaian Kuota Dengan Kebutuhan</label>
                                            <select class="col-sm-7 custom-select" id="validationTooltip04" required>
                                                <option selected disabled value="">Pilih</option>
                                                <option>Sesuai</option>
                                                <option>Tidak Sesuai</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12"> <label>F. Alasan Penambahan Kuota</label></div>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="4"></textarea>
                                    </div>
                                </div>
                                <br><br>
                                <div class="form-group col-sm-12 mb-4">
                                    <h6><strong> C. Saran</strong></h6>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            rows="10"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-outline-success">Update Data</button>
                                    <button type="submit" class="btn btn-outline-dark">Kembali</button>
                                </div>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>