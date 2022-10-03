<div>
    <form wire:submit.prevent="update">
        <input wire:model="id" type="hidden">
        <div class="form-group">
            <input wire:model="name" type="text" name="name" class="form-control rounded-pill @error('name') is-invalid @enderror" id="name"
                placeholder="masukan nama kota" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-sm px-4 btn-light rounded-pill mr-1">Edit city</button>
            <button wire:click="censelUpdate()" type="button" class="btn btn-sm px-4 btn-light rounded-pill">censel</button>
        </div>
    </form>
</div>
