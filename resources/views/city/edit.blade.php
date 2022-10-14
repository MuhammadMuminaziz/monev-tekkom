<form action="{{ route('cities.update', $city) }}" method="post">
    @method('put')
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label for="" class="col-form-label">Nama Kota</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="" required value="{{ old('name', $city->name) }}">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kemabali</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </div>
</form>