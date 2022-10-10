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
          <h1 class="h3 mb-2 text-gray-800">Verifikator</h1>
          <div class="card shadow">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Sekolah</h6>
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
                              <th>Aksi</th>
                          </thead>
                          <tbody>
                              @foreach($schools as $school)
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $school->name }}</td>
                              <td>{{ $school->npsn }}</td>
                              <td>{{ $school->jumlah_siswa }}</td>
                              <td>{{ $school->district->name }}</td>
                              <td>
                                <button wire:click="verify({{ $school }})" class="btn btn-sm btn-success">Verifikasi</button>
                                <button wire:click="reject({{ $school }})" class="btn btn-sm btn-danger">Tolak</button>
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
