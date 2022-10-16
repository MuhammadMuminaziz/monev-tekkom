<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow border-bottom-primary">
                    <div class="card-header">
                        <h6 class="m-0 font-weight-bold text-primary">Laporan Data Sekolah</h6>
                    </div>
                    <div class="card-body">
                        <div class="row p-3">
                            <div class="col-md-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="btn btn-primary" for="filterDistrict">Filter</label>
                                    </div>
                                    <select class="custom-select" id="filterDistrict">
                                        <option selected disabled>- Pilih Kecamatan -</option>
                                        @foreach($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <a href="{{ route('reporting.index') }}" class="">
                                <button class="btn btn-danger float-right mb-3" type="button">Reset</button>
                            </a>
                        </div>

                        <div class="row p-2">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table " id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th scope="col">Nama Sekolah</th>
                                                <th>NPSN</th>
                                                <th>Kecamatan</th>
                                                <th>Kota</th>
                                                <th>Dokumen</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="page-school">
                                            @foreach ($schools as $school)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $school->name }}</td>
                                                <td>{{ $school->npsn }}</td>
                                                <td>{{ $school->district->name }}</td>
                                                <td>{{ $school->city->name }}</td>
                                                <td>
                                                    <a href="{{ route('reporting.school.teacher', $school) }}" class="btn btn-sm btn-success">Data guru</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('reporting.school.show', $school) }}" class="btn btn-sm btn-info btn-rounded btn-sm"><i class="fas fa-eye"></i></a>
                                                    <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-print"></i> Print</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>