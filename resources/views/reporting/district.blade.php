<x-app-layout>
    <div class="card">
        <div class="card-header">
            <h3>Kota {{ $city->name }}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <p>Kecamatan/Desa</p>
                        </div>
                        <div class="card-body">
                            <ul>
                                @foreach($districts as $district)
                                <li><a href="{{ route('reporting.school', [$city, $district]) }}">{{ $district->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-2">
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
</x-app-layout>