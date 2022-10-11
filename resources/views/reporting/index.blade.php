<x-app-layout>
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>Kabupaten/Kota</h5>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="p-0 px-2">
                                @foreach($cities as $city)
                                <li><a href="{{ route('reporting.district', $city) }}">{{ $city->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-2 mt-2">
                            <p>Sekolah</p>
                            <ul>
                                @foreach($schools as $school)
                                <li><a href="">{{ $school->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>