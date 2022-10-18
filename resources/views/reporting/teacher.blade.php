<x-app-layout>
    <div class="container-fluid">
        <!-- Data Sekolah -->
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4  border-left-primary">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Sekolah</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group ">
                            <table class="w-100">
                                <tr>
                                    <th>Nama Sekolah</th>
                                    <td>:</td>
                                    <td>{{ $school->name }}</td>
                                </tr>
                                <tr>
                                    <th>NPSN</th>
                                    <td>:</td>
                                    <td>{{ $school->npsn }}</td>
                                </tr>
                                <tr>
                                    <th>Kecamatan</th>
                                    <td>:</td>
                                    <td>{{ $school->district->name }}</td>
                                </tr>
                                <tr>
                                    <th>Kab/Kota</th>
                                    <td>:</td>
                                    <td>{{ $school->city->name }}</td>
                                </tr>
                                <tr>
                                    <th>Jumlah Guru</th>
                                    <td>:</td>
                                    <td>{{ $school->teachers->count() }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Data Guru by Sekolah -->
        <div class="row">
            <div class="col">
                <div class="card shadow border-bottom-primary">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Guru </h6>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-12">
                            <a href="{{ route('reporting.index') }}" class="mr-3 mt-1">
                                <button class="btn btn-sm btn-secondary float-right mb-3"> Kembali</button>
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Guru</th>
                                        <th>NUPTK</th>
                                        <th>Status Ketenagaan</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Status Sertifikasi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $teacher)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $teacher->teacher_name }}</td>
                                        <td>{{ $teacher->nuptk }}</td>
                                        <td>{{ $teacher->employment_status }}</td>
                                        <td>{{ $teacher->gender }}</td>
                                        <td>{{ $teacher->last_education }}</td>
                                        <td>{{ $teacher->certification_status }}</td>
                                        <td>
                                            <a href="{{ route('reporting.school.teacher.show', [ $school, $teacher ]) }}" class="btn btn-sm btn-info btn-rounded btn-sm"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('reporting.teacher.print', $teacher) }}" target="_black" class="btn btn-sm btn-primary"><i class="fas fa-print"></i> Print</a>
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
</x-app-layout>
