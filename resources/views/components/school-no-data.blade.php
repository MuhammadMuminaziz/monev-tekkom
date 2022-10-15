<!-- <div class="container-fluid">
    <div class="card border-left-primary">
        <div class="card-header">
            <h4 class="text-center text-warning">Attention</h4>
        </div>
        <div class="card-body text-center">
            <p class="mb-5">Maaf Anda belum mempunyai data sekolah...</p>
            <a href="{{ route('schools.create') }}" class="btn btn-primary">Input data sekolah</a>
        </div>
    </div>
</div> -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4 py-3 border-left-primary">
                <div class="card-body">
                    <h5 class="font-weight-bold text-primary">Data Sekoalah Belum Tersedia!</h5>
                        <div class="form-group my-3">
                            <label for="">Anda belum mempunyai data sekolah, silahkan untuk melakukan input data.</label>
                        </div>
                        <a href="{{ route('schools.create') }}" class="btn btn-primary">Input Data Sekolah</a>
                </div>
            </div>
        </div>
    </div>
</div>
