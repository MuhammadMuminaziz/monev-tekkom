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
                  <h6 class="m-0 font-weight-bold text-primary">Data Sekolah</h6>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                        <a href="" class="btn btn-danger btn-sm btn-icon-split mb-5">
                            <span class="icon text-white-50">
                                <i class="fas fa-exclamation-triangle"></i>
                            </span>
                            <span class="text">Verifikasi Data di Tolak, Mohon Perika Kembali !</span>
                        </a>
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <th width="5%">No</th>
                              <th>Nama Sekolah</th>
                              <th>NPSN</th>
                              <th>Jumlah Siswa</th>
                              <th>Desa / Kecamatan</th>
                              <th width="10%">Status</th>
                              <th width="10%">Action</th>
                          </thead>
                          <tbody>
                             
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>
                                    <span class="badge badge-danger">Failed</span>
                              </td>
                              <td>
                                <a href="{{ route('schools.edit', $school) }}" class="btn btn-sm btn-info btn-rounded">Ubah Data</a>
                              </td>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
