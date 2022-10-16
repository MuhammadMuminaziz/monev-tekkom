<div class="container-fluid">
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
    <div class="row">
        <div class="col">
            <div class="card shadow border-bottom-primary">
                <div class="card-header py-3 mb-3">
                    <h6 class="m-0 font-weight-bold text-primary">Verifikasi Data Guru</h6>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Permintaan
                                Verifikasi 
                                @if($teachersNotActived->count() > 0) <span class="badge badge-primary">{{ $teachersNotActived->count() }}</span> @endif
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Data
                                Terverifikasi</button>
                        </li>
                    </ul>
                    <div class="tab-content my-4" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <select class="custom-select" id="filterDistrict" aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <option selected disabled>- pilih kecamatan -</option>
                                            @foreach($districts as $district)
                                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="button" id="button-addon2">filter</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 text-right">
                                    <button class="btn btn-success ml-auto" id="verify">Verifikasi</button>
                                    <button class="btn btn-danger ml-auto" id="reject">Tolak</button>
                                </div>
                            </div>
                            <!-- Belum Verifikasi Data guru -->
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTableCheckBox" width="100%" cellspacing="0">
                                    <thead>
                                        <th></th>
                                        <th width="5%">No</th>
                                        <th>Nama Guru</th>
                                        <th>NUPTK</th>
                                        <th>Asal Sekolah</th>
                                        <th>Desa/Kecamatan</th>
                                        <th>Kabupaten/Kota</th>
                                        <th>Status Verifikasi</th>
                                        {{-- <th>Action</th> --}}
                                    </thead>
                                    <tbody>
                                        @foreach($teachersNotActived as $teacher)
                                        <tr>
                                            <td>{{ $teacher->id }}</td>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><a href="#link ke menu show">{{ $teacher->teacher_name }}</a> </td>
                                            <td>{{ $teacher->nuptk }}</td>
                                            <td>{{ $teacher->School_Origin }}</td>
                                            <td>{{ $teacher->district->name }}</td>
                                            <td>{{ $teacher->city->name }}</td>
                                            <td>
                                                <span class="badge badge-danger">Not Acitived</span>
                                            </td>
                                            {{-- <td>
                                                <a href="{{ route('verifikator.teacher.verify', $teacher) }}"
                                                    class="btn btn-sm btn-success">Verifikasi</a>
                                                <a href="{{ route('verifikator.teacher.reject', $teacher) }}"
                                                    class="btn btn-sm btn-danger">Tolak</a>
                                                <a href="{{ route('verifikator.teacher.show', $teacher) }}"
                                                    class="btn btn-sm btn-primary">Lihat</a>
                                            </td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Sudah Verifikasi Data guru -->
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <th width="5%">No</th>
                                        <th>Nama Guru</th>
                                        <th>NUPTK</th>
                                        <th>Asal Sekolah</th>
                                        <th>Desa/Kecamatan</th>
                                        <th>Kabupaten/Kota</th>
                                        <th>Status Verifikasi</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($teachersActived as $teacher)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><a href="#link ke menu show">{{ $teacher->teacher_name }}</a> </td>
                                            <td>{{ $teacher->nuptk }}</td>
                                            <td>{{ $teacher->School_Origin }}</td>
                                            <td>{{ $teacher->district->name }}</td>
                                            <td>{{ $teacher->city->name }}</td>
                                            <td>
                                                <span class="badge badge-success">Acitived</span>
                                            </td>
                                            <td>
                                                <a href="{{ route('verifikator.teacher.cansel', $teacher) }}"
                                                    class="btn btn-sm btn-danger">Batal Verifikasi</a>
                                                <a href="{{ route('verifikator.teacher.show', $teacher) }}"
                                                    class="btn btn-sm btn-primary">Lihat</a>
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
