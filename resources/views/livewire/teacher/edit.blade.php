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
            
            <div class="card shadow border-bottom-primary">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Verifikasi Data Guru</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table " id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Nama Guru</th>
                                    <th>NIP</th>
                                    <th>NUPTK</th>
                                    <th>Asal Sekolah</th>
                                    <th>Desa / Kecamatan</th>
                                    <th>Kota</th>
                                    <th>Status Verifikasi</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($teachersNotActived as $teacher)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="#link ke menu show">{{ $teacher->teacher_name }}</a> </td>
                                    <td>{{ $teacher->nip }}</td>
                                    <td>{{ $teacher->nuptk }}</td>
                                    <td>{{ $teacher->School_Origin }}</td>
                                    <td>{{ $teacher->district->name }}</td>
                                    <td>{{ $teacher->city->name }}</td>
                                    <td>
                                        @if($teacher->isActive == 0)
                                        <span class="badge badge-danger">Not Acitived</span>
                                        @else
                                        <span class="badge badge-success">Acitived</span>
                                        @endif
                                    </td>
                                    <td>
                                      <button wire:click="" class="btn btn-sm btn-success">Verifikasi</button>
                                      <button wire:click="" class="btn btn-sm btn-danger">Tolak</button>
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