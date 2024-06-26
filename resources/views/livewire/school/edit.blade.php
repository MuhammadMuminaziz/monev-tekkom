<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow border-bottom-primary">
                <div class="card-header py-3 mb-3">
                    <h6 class="m-0 font-weight-bold text-primary">Verifikasi Data Sekolah</h6>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Permintaan
                                Verifikasi 
                                <span class="badge badge-primary">{{ $schoolsVerify->count() }}</span>
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
                            <!-- Belum Verifikasi Data Sekolah -->
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTableCheckBox" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Nama Sekolah</th>
                                            <th>NPSN</th>
                                            <th>Kecamatan</th>
                                            <th>Kota</th>
                                            <th class="text-center">Status Verifikasi</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach($schoolsVerify as $school)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $school->name }}</td>
                                            <td>{{ $school->npsn }}</td>
                                            <td>{{ $school->district->name ?? '' }}</td>
                                            <td>{{ $school->city->name ?? '' }}</td>
                                            <td class="text-center">
                                                <span class="badge badge-danger">Not Acitived</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('verifikator.schools.verify', $school) }}"
                                                    class="btn btn-sm btn-success">Verifikasi</a>
                                                <a href="{{ route('verifikator.schools.reject', $school) }}"
                                                    class="btn btn-sm btn-danger">Tolak</a>
                                                <a href="{{ route('verifikator.show', $school) }}"
                                                    class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                            </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Sudah Verifikasi Data Sekolah -->
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="5%">No</th>
                                            <th>Nama Sekolah</th>
                                            <th>NPSN</th>
                                            <th>Kecamatan</th>
                                            <th>Kota</th>
                                            <th class="text-center">Status Verifikasi</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($schoolsActived as $school)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $school->name }}</td>
                                            <td>{{ $school->npsn }}</td>
                                            <td>{{ $school->district->name ?? '' }}</td>
                                            <td>{{ $school->city->name ?? '' }}</td>
                                            <td class="text-center">
                                                <span class="badge badge-success">Acitived</span>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('verifikator.show', $school) }}" class="btn btn-sm btn-info btn-rounded btn-sm"><i class="fas fa-eye"></i></a>
                                                
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

