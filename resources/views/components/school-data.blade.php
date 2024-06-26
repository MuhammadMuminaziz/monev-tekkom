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
                        <a href="" class="btn btn-success btn-sm btn-icon-split mb-5">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Data Berhasil di Verifikasi</span>
                        </a>
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <th width="5%">No</th>
                              <th>Nama Sekolah</th>
                              <th>NPSN</th>
                              <th>Kecamatan</th>
                              <th>Kota</th>
                              <th width="5%" class="text-center">Action</th>
                          </thead>
                          <tbody>
                             
                              <td>1</td>
                              <td>{{ $school->name }}</td>
                              <td>{{ $school->npsn }}</td>
                              <td>{{ $school->district->name ?? '' }}</td>
                              <td>{{ $school->city->name ?? '' }}</td>
                              <td class="text-center">
                                <a href="{{ route('schools.show', $school) }}" class="btn btn-sm btn-info btn-rounded"><i class="fas fa-eye"></i></a>
                              </td>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
