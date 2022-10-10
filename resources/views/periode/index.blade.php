<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow p-3 text-dark">
                    <div class="card-header bg-primary mb-2 text-white">
                        <h2>Periode Active {{ $periode->year }}</button></h1>
                        <div class="row">
                            <div class="col-md-12 my-3">
                                <form action="{{ route('periode.update') }}" method="post">
                                    @csrf
                                    <div class="input-group input-group">
                                        <select name="name" id="name" class="form-control"
                                            aria-describedby="button-addon2">
                                            <option value="" selected disabled>Pilih Tahun Periode </option>
                                            @foreach($years as $year)
                                            <option value="{{ $year->name }}">{{ $year->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-light" type="submit"
                                                id="button-addon2">Change Periode</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>