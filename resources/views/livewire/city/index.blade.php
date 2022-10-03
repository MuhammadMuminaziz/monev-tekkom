<div class="row">
    <div class="col">
        <div class="card p-3 text-dark">
            <div class="card-header bg-secondary mb-2 text-white">
              <div class="d-flex mb-2">
                <h3>Cities</h3>
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

              <div class="p-3 mb-3">
                  @if($statusUpdate)
                  <livewire:city.update/>
                  @else
                  <livewire:city.create/>
                  @endif
              </div>
            </div>
            
            <table class="table table-hover table-sm">
                <thead>
                  <tr>
                    <th scope="col" width="50px"></th>
                    <th scope="col">City</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($cities as $index => $city)
                    <tr>
                      <td class="text-center">{{ $index + 1 }}</td>
                      <td>{{ $city->name }}</td>
                      <td class="text-right">
                        <button wire:click="getCity({{ $city }})" type="button" class="btn btn-sm rounded-pill px-4 btn-outline-secondary">edit</button>
                        <button wire:click="destroy({{ $city }})" type="button" class="btn btn-sm rounded-pill px-4 btn-outline-danger">delete</button>
                      </td>
                    </tr>
                    @endforeach
              </table>
        </div>
    </div>
</div>