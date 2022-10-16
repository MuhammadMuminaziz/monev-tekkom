<!-- <div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center text-warning">Attention...</h3>
        </div>
        <div class="card-body text-center">
            <p class="mb-5">Verifikasi data di tolak, Mohon update kembali data Anda</p>
            <a href="{{ route('schools.edit', $school) }}" class="btn btn-danger">Update Data</a>
        </div>
    </div>
</div> -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4 py-3 border-left-danger">
                <div class="card-body">
                    <h5 class="font-weight-bold text-danger">Verifikasi Data di Tolak!</h5>
                        <div class="form-group my-3">
                            <label for="">Verifikasi data di tolak, Mohon update kembali data Anda </label>
                        </div>
                        <a href="{{ route('schools.edit', $school) }}" class="btn btn-danger">Update Data</a>
                </div>
            </div>
        </div>
    </div>
</div>
