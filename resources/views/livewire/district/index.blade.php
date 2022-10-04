<div class="row">
    <div class="col">
        <div class="card p-5">
            <h1>This is Dist</h1>
            
            {{-- Message --}}
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show position-fixed" role="alert" style="z-index: 99; top: 80px; right: 10px;">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if($isUpdate)
            <livewire:district.update/>
            @else
            <livewire:district.create/>
            @endif

            <ul>
                @foreach($districts as $district)
                <li class="d-flex justify-content-between mb-1">{{ $district->name }} 
                    <div>
                        <a href="#page-top">
                            <button wire:click="getDistrict({{ $district }})" type="button" class="btn btn-sm btn-secondary">edit</button>
                        </a>
                        <button wire:click="destroy({{ $district }})" type="button" class="btn btn-sm btn-danger">delete</button>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>