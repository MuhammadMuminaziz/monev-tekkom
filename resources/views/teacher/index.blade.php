<x-app-layout>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            {{-- Message --}}
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show position-fixed" role="alert" style="z-index: 99; top: 80px; right: 10px;">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="d-flex justify-content-between mb-4 ">
                            <a href="{{ route('teachers.create') }}" class="btn btn-sm px-3 pt-2 rounded-pill btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a>
                        </div>
                        <table class="table " id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Nama Guru</th>
                                    <th>NIP</th>
                                    <th>NUPTK</th>
                                    <th>Asal Sekolah</th>
                                    <th>Desa / Kecamatan</th>
                                    <th>Status</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                           @foreach($teachers as $index => $teacher)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $teacher->teacher_name }}</td>
                                    <td>{{ $teacher->nip }}</td>
                                    <td>{{ $teacher->nuptk }}</td>
                                    <td>{{ $teacher->School_Origin }}</td>
                                    <td>{{ $teacher->district->name }}</td>
                                    <td>
                                        @if($teacher->isActive == 0)
                                        <span class="badge badge-danger">Not Acitived</span>
                                        @else
                                        <span class="badge badge-success">Acitived</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('teachers.show', $teacher) }}"  class="btn btn-sm btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
                                        <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-sm btn-secondary btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
                                        <form action="{{ route('teachers.destroy', $teacher) }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-sm btn-danger btn-circle btn-sm"> <i class="fas fa-trash"></i></button>
                                        </form>
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