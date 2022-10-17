<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow py-3 border-bottom-primary">
                    <div class="card-header">
                          <h6 class="m-0 font-weight-bold text-primary">Data Kecamatan</h6>
                    </div>

                    {{-- Message --}}
                    @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show position-fixed" role="alert" style="z-index: 99; top: 80px; right: 10px;">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
      
                    <div class="card-body">
                        <div class="table-responsive">
                              <div class="d-flex justify-content-between mb-4 ">
                                  <button type="button" class="btn btn-primary my-2 rounded-pill" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus-square"></i> Tambah Data</button>
                              </div>
                              <!-- Modal Tambah Data -->
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title font-weight-bold text-primary" id="exampleModalLabel"><i class="fas fa-plus-circle"></i> Data Kecamatan</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('district.store') }}" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="" class="col-form-label">Nama Kota</label>
                                                    <select name="city_id" class="form-control" id="city_id" required>
                                                        <option value="" selected disabled>- Pilih Kota -</option>
                                                        @foreach($cities as $city)
                                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Nama Desa/Kecamatan</label>
                                                    <input type="text" name="name" class="form-control" id="name" placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                                            </div>
                                        </form>
                                      </div>
                                  </div>
                              </div>
                              <!-- End Modal -->
                            <table class="table " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Desa/Kecamatan</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($districts as $district)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $district->name }}</td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-warning btn-rounded edit-district" id="{{ $district->id }}" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('district.destroy', $district) }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger btn-rounded">
                                                    <i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
      
                    <!-- Edit data -->
                      <div>
                          <!-- Modal Edit Data -->
                          <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title font-weight-bold text-primary" id="exampleModalLabel2"><i class="fas fa-edit"></i> Data Kecamatan</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div id="modal-edit-district">
                                        
                                    </div>
                                  </div>
                              </div>
                          </div>
                          <!-- End Modal -->
                      </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>