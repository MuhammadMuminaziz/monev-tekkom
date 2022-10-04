<div>
    <form wire:submit.prevent="store">
        <div class="form-group mb-2">
            <select wire:model="city_id" name="city_id" class="form-control" id="city_id">
                <option value="" selected>- pilih kota -</option>
                @foreach($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-2">
            <input wire:model="name" type="text" name="name" class="form-control rounded-pill @error('name') is-invalid @enderror" id="name"
                placeholder="masukan nama kecamatan" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="d-flex justify-content-end mb-4">
            <button type="submit" class="btn btn-sm px-4 btn-secondary rounded-pill">Add district</button>
        </div>
    </form>
</div>
