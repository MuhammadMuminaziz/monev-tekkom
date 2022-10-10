<div>
    <form wire:submit.prevent="update">
        <input wire:model="id" type="hidden">
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
            <button type="submit" class="btn btn-sm px-4 btn-warning rounded-pill mr-1">Edit Data</button>
            <button wire:click="censelUpdate()" type="button" class="btn btn-sm px-4 btn-danger rounded-pill">Cencel</button>
        </div>
    </form>
</div>
