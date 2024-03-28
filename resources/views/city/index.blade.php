<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow  border-bottom-primary">
                    <div class="card-header py-3">
                          <h6 class="m-0 font-weight-bold text-primary">Data Kota</h6>
                    </div>
      
                    <div class="card-body">
                        <div class="table-responsive">
                        <div class="d-flex justify-content-between mb-4 ">
                                  <button type="button" class="btn btn-sm px-3 pt-2 mb-2 btn-primary rounded-pill" data-toggle="modal" data-target="#addCity"><i class="fas fa-plus-square"></i> Tambah Data</button>
                              </div>
                              <!-- Modal Tambah Data -->
                              <div class="modal fade" id="addCity" tabindex="-1" aria-labelledby="addCityLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                      <div class="modal-header">
                                          <h6 class="modal-title font-weight-bold text-primary" id="addCityLabel"><i class="fas fa-plus-circle"></i> Data Kota</h6>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <form method="post" action="{{ route('cities.store') }}">
                                          @csrf
                                          <div class="modal-body">
                                              <div class="form-group">
                                                  <label for="message-text" class="col-form-label">Nama Kota</label>
                                                  <input type="text" name="name" class="form-control" id="name" placeholder="masukan nama kota" required>
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
                                        {{-- <th>Kode Kota</th> --}}
                                        <th>Nama Kota</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($cities as $index => $city)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        {{-- <td>{{ $city->code }}</td> --}}
                                        <td>{{ $city->name }}</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning btn-rounded edit-city" id="{{ $city->id }}"><i class="fas fa-edit" data-toggle="modal" data-target="#exampleModal2"></i></a>
                                            {{-- <form action="{{ route('cities.destroy', $city) }}" method="post" class="d-inline" id="confirm-delete">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="d-none"></button>
                                                    <a href="" class="btn btn-sm btn-danger btn-rounded not-link confirm-delete"><i class="fas fa-trash"></i></a>
                                            </form> --}}
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
                                    <div id="modal-edit-city">
                                        
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