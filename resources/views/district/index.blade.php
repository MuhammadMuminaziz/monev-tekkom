<x-app-layout>
    <div class="row">
        <div class="col">
            <div class="card p-5">
                <h1>This is Dist</h1>
                <ul>
                    @foreach($districts as $district)
                    <li>{{ $district->city->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>