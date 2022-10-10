<div>
    <form wire:submit.prevent="store">
        <div class="form-group row">
            <div class="col-sm-8">
                <input wire:model="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="masukan nama kota" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-sm-4">
                <input wire:model="code" type="text" class="form-control" name="code" id="code" placeholder="kode kota">
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-sm px-4 btn-light rounded-pill">Add Data</button>
        </div>
    </form>
</div>
