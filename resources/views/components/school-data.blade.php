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
                        <div class="d-flex justify-content-between mb-4 ">
                            <a href="{{ route('schools.create') }}"
                                class="btn btn-sm px-3 pt-2 rounded-pill btn-primary"><i class="fas fa-plus-square"></i> Tambah Data</a>
                        </div>
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <th width="5%">No</th>
                              <th>Nama Sekolah</th>
                              <th>NPSN</th>
                              <th>Jumlah Siswa</th>
                              <th>Desa / Kecamatan</th>
                              <th width="10%">Status</th>
                          </thead>
                          <tbody>
                             
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
