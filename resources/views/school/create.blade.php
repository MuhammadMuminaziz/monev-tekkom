<x-app-layout>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="card-title">Data Guru</h6>
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
                                data-target="#competency_data" type="button" role="tab" aria-controls="competency_data"
                                aria-selected="false">B. Data
                                Kompetensi </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="training_data-tab" data-toggle="tab"
                                data-target="#training_data" type="button" role="tab" aria-controls="training_data"
                                aria-selected="false">Data
                                Diklat</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!-- A. Data Umum -->
                        <div class="tab-pane fade show active" id="general_data" role="tabpanel"
                            aria-labelledby="general_data-tab">
                            <form action="">
                                <div class="container mt-5">
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Nama Guru / Tenaga
                                            Administrasi</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Status Ketenagaan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">NIP <br><span>(Diisi jika
                                                PNS)</span></label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">NUPTK</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="input-group date" id="reservationdate"
                                                data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#reservationdate" />
                                                <div class="input-group-append" data-target="#reservationdate"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="validationTooltip04" class="col-sm-2 col-form-label">Agama</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select" id="validationTooltip04" required>
                                                <option selected disabled value="">Pilih</option>
                                                <option>Islam</option>
                                                <option>Katolik</option>
                                                <option>Kristen</option>
                                                <option>Hindu</option>
                                                <option>Budha</option>
                                                <option>Lainnya</option>
                                            </select>
                                            <div id="validationServer04Feedback" class="invalid-tooltip">
                                                Please select a valid state.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select" id="validationTooltip04" required>
                                                <option selected disabled value="">Pilih</option>
                                                <option>SMA</option>
                                                <option>D1</option>
                                                <option>D2</option>
                                                <option>D3</option>
                                                <option>D4</option>
                                                <option>S1</option>
                                                <option>S2</option>
                                                <option>S3</option>
                                            </select>
                                            <div id="validationServer04Feedback" class="invalid-tooltip">
                                                Please select a valid state.
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">TMT PNS</label>

                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                        <div class="col-sm-1">
                                            Tahun
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                        <div class="col-sm-1">
                                            Bulan
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Pangkat / Golongan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">TMT Golongan</label>

                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                        <div class="col-sm-1">
                                            Tahun
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                        <div class="col-sm-1">
                                            Bulan
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Asal Sekolah</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Desa / Kecamatan</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Kabupaten / Kota</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Propinsi</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">No Telpon/HP</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="#" placeholder="">
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
                                        <label for="#" class="col-sm-2 col-form-label">Mata pelajaran yang
                                            diampu</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Program atau kegiatan yang
                                            dilaksanakan</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Status Sertifikasi</label>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Sudah</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Belum</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Tahun Sertifikasi</label><br>

                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="#" placeholder=""> <br>
                                        </div>
                                        <div class="col-sm-3">
                                            <span>*(diisi jika sudah sertifikasi)</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Alasan Belum Sertifikasi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Kompetensi yang dimiliki</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Kegiatan Sosialisasi UNBK</label>

                                        <div class="col-sm-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Sudah</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Belum</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="#" class="form-label">Tahun</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Keterlibatan dalam UNBK</label>

                                        <div class="col-sm-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Sudah</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Belum</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="#" class="form-label">Tahun</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="#" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-2 col-form-label">Riwayat Keterlibatan dalam
                                            UNBK</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="6"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <!-- Data Diklat -->
                        <div class="tab-pane fade" id="training_data" role="tabpanel"
                            aria-labelledby="training_data-tab">
                            <form action="">
                                <div class="container mt-5">
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <label for="inputCity">Nama Diklat/Workshop/Seminar</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="inputState">Tingkatan/Jenis Diklat</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Pilih</option>
                                                <option>Pemula</option>
                                                <option>Lanjutan</option>
                                                <option>Mahir</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Jampel</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Kebutuhan Diklat saat ini</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="6"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save Data</button>
                                </div>

                        
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
</div>
</x-app-layout>