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
                                        <h3><strong> BALAI TEKNOLOGI KOMUNIKASI PENDIDIKAN PROVINSI MALUKU </strong>
                                        </h3>
                                        <h4>FORMAT PENDATAAN PENDIDIKAN BERBASIS TIK (DATA KETENAGAAN)</h4>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 border mt-3 ">
                                    <div class="container my-5">
                                        <!-- A. Data Umum -->
                                        <div class="form-group row">
                                            <h6><strong> A. Data Umum</strong></h6>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Nama Guru / Tenaga
                                                Administrasi</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->teacher_name }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Status Ketenagaan</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->employment_status }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">NIP <br><span>(Diisi jika
                                                    PNS)</span></label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->nip }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">NUPTK</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->nuptk }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Tempat, Tanggal Lahir</label>
                                            <p>:</p>
                                            <div class="col-sm-4">
                                                <p>{{ $teacher->place_of_birth . ', ' . $teacher->date_of_birth }}</p>
                                            </div>
                                            <div class="col-sm-3">
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validationTooltip04"
                                                class="col-sm-4 col-form-label">Agama</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->religion }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->gender }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Pendidikan Terakhir</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->last_education }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">TMT PNS</label>
                                            <p>:</p>
                                            <div class="col-sm-2">
                                                <p>{{ $teacher->tmt_pns_tahun . $teacher->tmt_pns_bulan }}</p>
                                            </div>
                                            <p>Tahun</p>
                                            <div class="col-sm-2">
                                                <p></p>
                                            </div>
                                            <p> Bulan</p>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Pangkat / Golongan</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->class }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">TMT Golongan</label>
                                            <p>:</p>
                                            <div class="col-sm-2">
                                                <p>{{ $teacher->tmt_class_tahun . $teacher->tmt_class_bulan }}</p>
                                            </div>
                                            <p>Tahun</p>
                                            <div class="col-sm-2">
                                                <p></p>
                                            </div>
                                            <p> Bulan</p>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Asal Sekolah</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->School_Origin }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Desa / Kecamatan</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->district->name }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Kabupaten / Kota</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->city->name }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Provinsi</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->provinsi }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">No Telpon/HP</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->phone}}</p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Mata pelajaran yang
                                                diampu</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->subjects_taught }}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Program atau kegiatan yang
                                                dilaksanakan</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->program}}</p>
                                                <small><a href="#">tambah data</a></small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Status Sertifikasi</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->certification_status}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Tahun Sertifikasi</label><br>
                                            <p>:</p>
                                            <div class="col-sm-4">
                                                <p>{{ $teacher->certification_year}}</p>
                                            </div>
                                            <div class="col-sm-3">
                                                <small>*(diisi jika sudah sertifikasi)</small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="#" class="col-form-label">Alasan Belum
                                                    Sertifikasi</label><br>
                                                <small>*(diisi jika sudah sertifikasi tidak perlu diisi)</small>
                                            </div>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->reason_not_certified}}" rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Kompetensi yang
                                                dimiliki</label>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                        value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Ms.
                                                        Word</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                        value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">Ms.
                                                        Excel</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                        value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox3">Power
                                                        Point</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4"
                                                        value="option2">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox4">Photoshop</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5"
                                                        value="option2">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox5">Animasi</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6"
                                                        value="option1">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox6">Programmer</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7"
                                                        value="option2">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox7">Jaringan</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8"
                                                        value="option2">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox8">Lainnya</label>
                                                </div>
                                                <input type="text" class="form-control form-control-sm"
                                                    id="colFormLabelSm" placeholder="Lainnya">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Kegiatan Sosialisasi
                                                UNBK</label>
                                            <div class="col-sm-4">
                                                <p>{{ $teacher->unbk_socialization_activities}}</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="#" placeholder="Tahun">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Keterlibatan dalam
                                                UNBK</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="#</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="#" placeholder="Tahun">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="#" class="col-form-label">Riwayat Keterlibatan dalam
                                                    UNBK</label><br>
                                                <small>*(jika telah melaksanakan UNBK)</small>
                                            </div>
                                            <p>:</p>
                                            <div class="col-sm-7">
                                                <p>{{ $teacher->involvement_unbk}}</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-12 col-form-label"><strong> Pelatihan Yang
                                                    Pernah
                                                    Diikuti</strong></label>
                                        </div>
                                        <div class="table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">No</th>
                                                        <th rowspan="2">Nama Diklat/Workshop/Seminar</th>
                                                        <th colspan="3">Tingkatan/Jenis Diklat</th>
                                                        <th rowspan="2">Jampel</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Pemula</th>
                                                        <th>Lanjut</th>
                                                        <th>Mahir</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-group row">
                                            <label for="#" class="col-sm-4 col-form-label">Kebutuhan Diklat saat
                                                ini</label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="">
                                                <small><a href="#">tambah data</a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Kuisioner -->
                                <div class="col-md-4 border mt-3">
                                    <div class="container my-5">
                                        <div class="form-group mt-2 row">
                                            <small for="#" class="col-sm-5">Kode Kuisioner</small>
                                            <div class="col-sm-7 input-group-sm">
                                                <input type="text" class="form-control" id="#</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <small for="#" class="col-sm-5">Tingkatan Sekolah</small>
                                            <div class="col-sm-7 input-group-sm">
                                                <input type="text" class="form-control" id="#</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <small for="#" class="col-sm-12">Nama Petugas Pendataan</small>
                                            <div class="col-sm-12 input-group-sm">
                                                <input type="text" class="form-control" id="#</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <small for="#" class="col-sm-5">NIP</small>
                                            <div class="col-sm-7 input-group-sm">
                                                <input type="text" class="form-control" id="#</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <small for="#" class="col-sm-12 mb-2 text-center">Range Waktu
                                                Pendataan</small>
                                            <small for="#" class="col-sm-2  ">Tgl</small>
                                            <div class="col-sm-4 input-group-sm">
                                                <input type="text" class="form-control" id="#</p>
                                            </div>
                                            <small for="#" class="col-sm-2">s/d</small>
                                            <div class="col-sm-4 input-group-sm">
                                                <input type="text" class="form-control" id="#</p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <small for="#" class="col-sm-12 mb-2 text-center">Analisa Petugas
                                                Pendataan</small>
                                            <div class="col-sm-12">
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="60"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row text-center">
                                            <div class="col-sm-6 border">
                                                <small for="#" class="col-sm-12 text-center">Responden</small>
                                                <div class="row">
                                                    <div class="col-sm-3 ">
                                                        <small>Tgl</small>
                                                    </div>
                                                    <div class="col-sm-9 input-group-sm">
                                                        <input type="text" class="form-control" id="#</p>
                                                    </div>
                                                </div><br><br><br>
                                                <div class="col-sm-12 input-group-sm">
                                                    <label for=""><input type="text" class="form-control" id="#"
                                                            placeholder="(.............................)"></label>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 border ">
                                                <small for="#" class="text-center">Petugas Pengumpul Data</small>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <small>Tgl</small>
                                                    </div>
                                                    <div class="col-sm-9 input-group-sm">
                                                        <input type="text" class="form-control" id="#</p>
                                                    </div>
                                                </div><br><br><br>
                                                <div class="col-sm-12 input-group-sm">
                                                    <label for=""><input type="text" class="form-control" id="#"
                                                            placeholder="(.............................)"></label>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <button type="button" class="btn btn-secondary mr-2">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>