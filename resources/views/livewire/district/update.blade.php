<div>
    <form wire:submit.prevent="store">
        <input wire:model="district_id" type="hidden">
        <div class="form-group mb-2">
            <select wire:model="city_id" name="city_id" class="form-control" id="city_id">
                <option value="" selected disabled>pilih kota</option>
                @foreach($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <input wire:model="name" type="text" name="name" class="form-control rounded-pill @error('name') is-invalid @enderror" id="name"
                placeholder="masukan nama kecamatan" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="d-flex justify-content-end mb-4">
            <button type="submit" class="btn btn-sm px-4 btn-warning rounded-pill mr-1">Update Data</button>
            <button wire:click="censelUpdate()" type="button" class="btn btn-sm px-4 btn-danger rounded-pill">Cencel</button>
        </div>
    </form>
</div>
