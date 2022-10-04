<x-app-layout>
    <div class="row">
        <div class="col">
            <div class="card p-3">
                <h1>Periode Active {{ $periode->year }}</h1>
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('periode.update') }}" method="post">
                            @csrf
                            <div class="input-group input-group-sm">
                                <select name="name" id="name" class="form-control" aria-describedby="button-addon2">
                                    <option value="" selected>- pilih tahun periode -</option>
                                    @foreach($years as $year)
                                    <option value="{{ $year->name }}">{{ $year->name }}</option>
                                    @endforeach
                                </select>
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Change Periode</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>