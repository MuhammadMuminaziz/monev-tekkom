<x-app-layout>
    <h1>Reporting</h1>
    
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card p-2">
                <div class="card-header">
                    <h5>Kabupaten/Kota</h5>
                </div>
                <div class="card-body">
                    <ul class="p-0 px-2">
                        @foreach($cities as $city)
                        <li>{{ $city->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card p-2">
                <div class="card-header">
                    <h5>Kecamatan/Desa</h5>
                </div>
                <div class="card-body">
                    <ul class="p-0 px-2">
                        @foreach($districts as $district)
                        <li>{{ $district->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>