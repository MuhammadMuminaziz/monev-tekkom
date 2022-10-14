<div class="container-fluid">
  <div class="row">
      <div class="col">
          <div class="card shadow py-3 border-bottom-primary">
              <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Data Kecamatan</h6>
              </div>

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
                                <div class="modal-body">
                                    <form>
                                    <div class="form-group">
                                        <label for="" class="col-form-label">Nama Kota</label>
                                        <select wire:model="city_id" name="city_id" class="form-control" id="city_id">
                                            <option value="" selected>- Pilih Kota -</option>
                                            <option value="">...</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Nama Desa/Kecamatan</label>
                                        <input wire:model="name" type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="" required>
                                    </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                    <button type="button" class="btn btn-primary">Simpan Data</button>
                                </div>
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
                                    <!-- <button wire:click="getDistrict({{ $district }})" type="button"  class="btn btn-sm rounded btn-warning"><i class="fas fa-edit"></i></button>
                                    <button wire:click="destroy({{ $district }})" type="button" class="btn btn-sm rounded btn-danger"><i class="fas fa-trash"></i></button> -->

                                      <a href="#" class="btn btn-sm btn-warning btn-rounded"><i class="fas fa-edit"></i></a>
                                      <form action="#" method="post" class="d-inline">
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

              
          </div>
      </div>
  </div>
</div>

<!-- <div class="p-3 mb-3">
    @if($isUpdate)
    <livewire:district.update />
    @else
    <livewire:district.create />
    @endif
    </div>
</div> -->