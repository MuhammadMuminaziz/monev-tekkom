<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow p-3 text-dark">
                <div class="card-header bg-primary mb-2 text-white">
                    <div class="d-flex mb-2">
                        <h3>Nama Kecamatan</h3>
                    </div>

                    {{-- Message --}}
                    @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show position-fixed" role="alert"
                        style="z-index: 99; top: 80px; right: 10px;">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <div class="p-3 mb-3">
                        @if($isUpdate)
                        <livewire:district.update />
                        @else
                        <livewire:district.create />
                        @endif
                    </div>
                </div>

                <div class="container-fluid mt-4">
                    <div class="table-responsive">
                        <table class="table table-hover table-sm" id="dataTable">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" width="50px">No</th>
                                    <th scope="col">Nama Kecamatan</th>
                                    <th scope="col" width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($districts as $district)
                                <tr>
                                    <td class="text-center"></td>
                                    <td>{{ $district->name }}</td>
                                    <td class="text-right">
                                        <button wire:click="getDistrict({{ $district }})" type="button"
                                            class="btn btn-sm rounded btn-warning"><i class="fas fa-edit"></i></button>
                                        <button wire:click="destroy({{ $district }})" type="button"
                                            class="btn btn-sm rounded btn-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>