<form action="{{ route('district.update', $district) }}" method="post">
    @method('put')
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="" class="col-form-label">Nama Kota</label>
            <select name="city_id" class="form-control" id="city_id">
                @foreach($cities as $city)
                    @if($city->name == $district->city->name)
                    <option selected value="{{ $city->id }}">{{ $city->name }}</option>
                    @else
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="message-text" class="col-form-label">Nama Desa/Kecamatan</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $district->name) }}" placeholder="" required>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kemabali</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>
</form>