<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 py-3 border-left-primary">
                    <div class="card-body">
                        <h5 class="font-weight-bold text-primary">Periode Aktif 
                            <span class="badge badge-pill badge-primary">{{ $periode->year }}</span>
                        </button></h5>
                        <form class="form-inline mt-4">
                            <div class="form-group mx-sm-2 mb-2">
                                <label for="inputPassword2" class="sr-only">Password</label>
                                <select name="name" id="name" class="form-control" aria-describedby="button-addon2">
                                    <option value="" selected disabled>Pilih Tahun Periode </option>
                                    @foreach($years as $year)
                                    <option value="{{ $year->name }}">{{ $year->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Ubah Periode</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>