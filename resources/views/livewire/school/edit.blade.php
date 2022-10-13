<div class="container-fluid">
  {{-- Message --}}
  @if(session()->has('message'))
  <div class="alert alert-success alert-dismissible fade show position-fixed" role="alert" style="z-index: 99; top: 80px; right: 10px;">
      {{ session('message') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  @endif
  <div class="row">
      <div class="col">
          <div class="card shadow border-bottom-primary">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Verifikasi Data Sekolah</h6>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <th width="5%">No</th>
                              <th>Nama Sekolah</th>
                              <th>NPSN</th>
                              <th>Jumlah Siswa</th>
                              <th>Desa / Kecamatan</th>
                              <th>Status Verifikasi</th>
                              <th>Action</th>
                          </thead>
                          <tbody>
                              @foreach($schools as $school)
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $school->name }}</td>
                              <td>{{ $school->npsn }}</td>
                              <td>{{ $school->jumlah_siswa }}</td>
                              <td>{{ $school->district->name }}</td>
                              <td>
                                    @if($school->isActive == 0)
                                    <span class="badge badge-danger">Not Acitived</span>
                                    @else
                                    <span class="badge badge-success">Acitived</span>
                                    @endif
                              </td>
                              <td>
                                <a href="{{ route('verifikator.schools.verify', $school) }}" class="btn btn-sm btn-success">Verifikasi</a>
                                <a href="{{ route('verifikator.schools.reject', $school) }}" class="btn btn-sm btn-danger">Tolak</a>
                                <a href="{{ route('verifikator.show', $school) }}" class="btn btn-sm btn-primary">Lihat</a>
                              </td>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
