<x-app-layout>
    <!-- <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>Data Sekolah</h5>
                </div>
                <div class="row p-3 justify-content-between">
                    <div class="col-md-5">
                          <div class="input-group mb-3">
                            <select class="custom-select" id="filterDistrict" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <option selected disabled>- pilih kecamatan -</option>
                                @foreach($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                              </select>
                            <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button" id="button-addon2">filter</button>
                            </div>
                          </div>
                    </div>
                    <a href="" class="mr-2 mt-1">
                        <button class="btn btn-primary">Print semua data sekolah</button>
                    </a>
                </div>
                <div class="row p-2">
                    <div class="col">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col">Nama Sekolah</th>
                                    <th scope="col" class="text-center">NPSN</th>
                                    <th scope="col" class="text-center">Kecamatan</th>
                                    <th scope="col" class="text-center">Kota</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="page-school">
                                @foreach ($schools as $school)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $school->name }}</td>
                                    <td class="text-center">{{ $school->npsn }}</td>
                                    <td class="text-center">{{ $school->district->name }}</td>
                                    <td class="text-center">{{ $school->city->name }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('reporting.school.show', $school) }}" class="btn btn-sm btn-success">Data sekolah</a>
                                        <a href="{{ route('reporting.school.teacher', $school) }}" class="btn btn-sm btn-warning">Data guru</a>
                                        <a href="" class="btn btn-sm btn-primary">Print</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow py-3 border-bottom-primary">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Laporan</h6>
                    </div>
                    <div class="card-body">
                        <div class="justify-content-between mb-4 ">
                            <a href="#" class="btn btn-sm px-4 rounded-pill btn-primary"> Filter</a>
                            <a href="#" class="btn btn-sm px-4 rounded-pill btn-danger"> Reset</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama Sekolah</th>
                                        <th>NPSN</th>
                                        <th>Jumlah Siswa</th>
                                        <th>Desa / Kecamatan</th>
                                        <th>Dokumen</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td> <a href="#" class="btn btn-sm btn-primary btn-rounded">Data Guru</a></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-info btn-rounded mr-3"><i class="fas fa-print"></i> Cetak</a>
                                          
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>