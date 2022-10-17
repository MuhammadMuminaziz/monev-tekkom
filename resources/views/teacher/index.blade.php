<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                {{-- Message --}}
                @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show position-fixed" role="alert"
                    style="z-index: 99; top: 80px; right: 10px;">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                
                     <!-- Data sedang di Tinjau -->
                    @if($school->isActive == 0)
                    <div class="col-md-12">
                        <div class="card mb-4 py-3 border-left-warning">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-warning">Data Sekolah Sedang di Verifikasi
                                </h5>
                                <div class="form-group my-3">
                                    <label for="">Untuk melakukan input data guru mohon tunggu proses verifikasi data sekolah. </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                      <!-- Data ditolak -->
                    @if($school->isActive == 2)
                    <div class="col-md-6">
                        <div class="card mb-4 py-3 border-left-danger">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-danger">Verifikasi Data Sekolah di Tolak!</h5>
                                <div class="form-group my-3">
                                    <label for="">Mohon periksa kembali data sekolah agar dapat melakukan input data Guru</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                <!-- Add Data -->
                @if($school->isActive == 1)
                <div class="card shadow border-bottom-primary">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="{{ route('teachers.create') }}"
                                class="btn btn-sm px-3 pt-2 mb-3 rounded-pill btn-primary"><i class="fas fa-plus-square"></i>
                                Tambah Data</a>
                            <table class="table " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama Guru</th>
                                        <th>NUPTK</th>
                                        <th>Asal Sekolah</th>
                                        <th>Kecamatan</th>
                                        <th>Kota</th>
                                        <th class="text-center">Status</th>
                                        <th width="15%" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teachers as $index => $teacher)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $teacher->teacher_name }}</td>
                                        <td>{{ $teacher->nuptk }}</td>
                                        <td>{{ $teacher->school->name }}</td>
                                        <td>{{ $teacher->district->name }}</td>
                                        <td>{{ $teacher->city->name }}</td>
                                        <td class="text-center">
                                            @if($teacher->isActive == 0)
                                            <span class="badge badge-danger">Not Acitived</span>
                                            @else
                                            <span class="badge badge-success">Acitived</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('teachers.show', $teacher) }}" class="btn btn-sm btn-info btn-rounded btn-sm"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-sm btn-secondary btn-rounded btn-sm"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('teachers.destroy', $teacher) }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger btn-rounded btn-sm">
                                                    <i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
