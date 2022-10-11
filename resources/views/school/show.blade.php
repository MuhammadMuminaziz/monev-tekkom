<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4 py-3 border-left-primary">
                    <!-- <div class="card-header">
                        <h6 class="card-title font-weight-bold text-primary">Detail Data Sekolah</h6>
                    </div> -->
                    <div class="card-body">
                        <form action="">
                            <!-- Header -->
                            <div class="row justify-content-center">
                                <div class="col-md-12 m">
                                    <div class="text-center">
                                        <h3>BALAI TEKNOLOGI KOMUNIKASI PENDIDIKAN PROVINSI MALUKU</h3>
                                        <h4>FORMAT PENDATAAN PENDIDIKAN BERBASIS TIK (DATA SEKOLAH)</h4>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 border mt-3 ">
                                    <!-- A. Data Umum -->
                                    <div class="form-group row">
                                        <h6><strong> A. Data Umum</strong></h6>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Nama Sekolah</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Nomor Pokok Sekolah Nasional
                                            (NPSN)</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->npsn }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Jumlah Siswa <br></label>
                                        <div class="col-sm-8">
                                            <div class="form-row">
                                                <div class="form-group col-sm-5">
                                                    <label for="inputCity">Laki-Laki</label>
                                                    <input type="text" class="form-control" id="inputCity" value="{{ $school->siswa_lak }}">
                                                </div>
                                                <div class="form-group col-sm-5">
                                                    <label for="inputState">Perempuan</label>
                                                    <input type="text" class="form-control" id="inputCity" value="{{ $school->siswa_per }}">
                                                </div>
                                                <div class="form-group col-sm-2">
                                                    <label for="inputZip">Total</label>
                                                    <input type="text" class="form-control" id="inputZip" value="{{ $school->jumlah_siswa }}">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">UNBK</label>
                                        <div class="col-sm-8">
                                            <div class="form-row">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio1" value="option1" {{ $school->unbk != 'Belum' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio1">Sudah</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio2" value="option2" {{ $school->unbk == 'Belum' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="inlineRadio2">Belum</label>
                                                </div>
                                                <div class="form-group col-sm-2">
                                                    <input type="text" class="form-control" id="inputCity"
                                                        placeholder="Tahun" value="{{ $school->unbk != 'Belum' ? $school->unbk : '' }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Desa / Kecamatan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->district->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Kabupaten / Kota</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->city->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Provinsi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->provinsi }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Akses Transportasi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->transportasi }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <h6><strong> Deskripsi Lokasi
                                                Pendataan</strong></h6>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Kondisi Geografis <br>
                                            <small>(Uraikan Singkat)</small></label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="4">{{ $school->geografis }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Kondisi sosekbud <br>
                                            <small>(Uraikan Singkat)</small></label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="4">{{ $school->sosekbud }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Fasilitas Komunikasi Internet
                                            Saat Ini</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->internet }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Pernah Mendapatkan Bantuan
                                            Terkait Teknologi Informasi dan Komunikasi </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->bantuan_teknologi }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Lembaga Pemberi
                                            Bantuan</label>
                                        <div class="col-sm-8">
                                            @foreach($school->lembaga_bantuan as $data)
                                            <input type="text" class="form-control mb-2" id="#" placeholder="" value="{{ $data->name }}">
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Listrik</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->listrik }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Sumber Daya Listrik</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->power_suplay }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Durasi Listrik</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->durasi_listrik }}">
                                        </div>
                                        <div class="col-sm-2">
                                            <p>(Jam)</p>
                                        </div>
                                    </div>
                                    <!-- B. Data Sekolah Yang Memiliki Akses Internet -->
                                    <div class="form-group row mt-5">
                                        <h6><strong> B. Data Sekolah Yang Memiliki Akses Internet</strong></h6>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Laboratorium <br></label>
                                        <div class="col-sm-8">
                                            <div class="form-row">
                                                <div class="form-group col-sm-6">
                                                    <label for="inputCity">1. Komputer</label>
                                                    <input type="text" class="form-control" id="inputCity"
                                                        placeholder="(...Unit)" value="{{ $school->laboratorium_komputer }}">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="inputState">2. Multimedia</label>
                                                    <input type="text" class="form-control" id="inputCity"
                                                        placeholder="(...Unit)" value="{{ $school->laboratorium_multimedia }}">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Jenis Program / Kegiatan yang
                                            diterima</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->jenis_program }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Tahun Menerima
                                            Bantuan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->tahun_bantuan }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-12 col-form-label"><strong> Perangkat Internet
                                                yang
                                                Ada</strong></label>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">A. LAN/Wireless LAN</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->lan != 'Tidak Ada' ? 'Ada' : 'Tidak Ada' }}">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="#" placeholder="Jumlah Unit" value="{{ $school->lan != 'Tidak Ada' ? $school->lan : '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">B. Router</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->router != 'Tidak Ada' ? 'Ada' : 'Tidak Ada' }}">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="#" placeholder="Jumlah Unit" value="{{ $school->router != 'Tidak Ada' ? $school->router : '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">A. Komputer</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->komputer != 'Tidak Ada' ? 'Ada' : 'Tidak Ada' }}">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="#" placeholder="Jumlah Unit" value="{{ $school->komputer != 'Tidak Ada' ? $school->komputer : '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">D. Kuota Banwidth Saat
                                            Ini</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->kuota_bandwidth }}">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="" class="form-control" value="{{ $school->internet_speed }}" id="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">E. Kesesuaian Kuota Dengan
                                            Kebutuhan</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->kesesuaian_kuota }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">F. Alasan Penambahan
                                            Kuota</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="4">{{ $school->alasan_tambah_kuota }}</textarea>
                                        </div>
                                    </div>
                                    <!-- C. Saran -->
                                    <div class="form-group row mt-5">
                                        <h6><strong> C. Saran</strong></h6>
                                    </div>
                                    <div class="form-group row">
                                        <label for="#" class="col-sm-4 col-form-label">Saran</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="6">{{ $school->saran }}</textarea>
                                        </div>
                                    </div>

                                </div>
                                <!-- Kuisioner -->
                                <div class="col-md-4 border mt-3">
                                    <div class="form-group mt-2 row">
                                        <small for="#" class="col-sm-5">Kode Kuisioner</small>
                                        <div class="col-sm-7 input-group-sm">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->city->code }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <small for="#" class="col-sm-5">Tingkatan Sekolah</small>
                                        <div class="col-sm-7 input-group-sm">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->tingkat_sekolah }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <small for="#" class="col-sm-12">Nama Petugas Pendataan</small>
                                        <div class="col-sm-12 input-group-sm">
                                            <input type="text" class="form-control" id="#" placeholder="" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <small for="#" class="col-sm-5">NIP</small>
                                        <div class="col-sm-7 input-group-sm">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->nip }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <small for="#" class="col-sm-12 mb-2 text-center">Range Waktu
                                            Pendataan</small>
                                        <small for="#" class="col-sm-2  ">Tgl</small>
                                        <div class="col-sm-4 input-group-sm">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->range_waktu_dari }}">
                                        </div>
                                        <small for="#" class="col-sm-2">s/d</small>
                                        <div class="col-sm-4 input-group-sm">
                                            <input type="text" class="form-control" id="#" placeholder="" value="{{ $school->range_waktu_sampai }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <small for="#" class="col-sm-12 mb-2 text-center">Analisa Petugas
                                            Pendataan</small>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="70">{{ $school->analisis }}</textarea>
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
                                                    <input type="text" class="form-control" id="#" placeholder="">
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
                                                    <input type="text" class="form-control" id="#" placeholder="" value="">
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
                            <div class="col-sm-12 mt-3">
                                <button type="button" class="btn btn-secondary mr-2">Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</x-app-layout>