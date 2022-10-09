<div>
    <form wire:submit.prevent="store">
        <div class="form-group">
            <input wire:model="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                placeholder="masukan nama kota" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-sm px-4 btn-light rounded-pill">Add Data</button>
        </div>
    </form>
</div>
