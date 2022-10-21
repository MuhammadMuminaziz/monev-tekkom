<div class="container-fluid">
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
                                <span class="badge badge-primary">{{ $teachersNotActived->count() }}</span>
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
                            <div class="row justify-content-end px-3 mb-3">
                                <button class="btn btn-success mr-2" id="verify">Verifikasi</button>
                                <button class="btn btn-danger" id="reject">Tolak</button>
                            </div>
                            <!-- Belum Verifikasi Data guru -->
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTableCheckBox" width="100%" cellspacing="0">
                                    <thead>
                                        <th></th>
                                        <th width="5%">No</th>
                                        <th>Nama Guru</th>
                                        <th>Asal Sekolah</th>
                                        <th>Desa/Kecamatan</th>
                                        <th>Kabupaten/Kota</th>
                                        <th class="text-center">Status Verifikasi</th>
                                        <th class="text-center">Aksi</th>
                                    </thead>
                                    <tbody>
                                        @foreach($teachersNotActived as $teacher)
                                        <tr>
                                            <td>{{ $teacher->id }}</td>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $teacher->teacher_name }}</td>
                                            <td>{{ $teacher->school->name }}</td>
                                            <td>{{ $teacher->district->name }}</td>
                                            <td>{{ $teacher->city->name }}</td>
                                            <td class="text-center">
                                                <span class="badge badge-danger">Not Actived</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('verifikator.teacher.show', $teacher) }}" class="btn btn-sm btn-info btn-rounded btn-sm"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Sudah Verifikasi Data guru -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="table-responsive">
                                <table class="table table-bordered my-5" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <th width="5%">No</th>
                                        <th>Nama Guru</th>
                                        <th>Asal Sekolah</th>
                                        <th>Kecamatan</th>
                                        <th>Kota</th>
                                        <th class="text-center">Status Verifikasi</th>
                                        <th class="text-center">Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($teachersActived as $teacher)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $teacher->teacher_name }}</td>
                                            <td>{{ $teacher->school->name }}</td>
                                            <td>{{ $teacher->district->name }}</td>
                                            <td>{{ $teacher->city->name }}</td>
                                            <td class="text-center">
                                                <span class="badge badge-success">Actived</span>
                                            </td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{ route('verifikator.teacher.show', $teacher) }}" class="btn btn-sm btn-info btn-rounded btn-sm"><i class="fas fa-eye"></i></a>
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
