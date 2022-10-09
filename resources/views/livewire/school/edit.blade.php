<div>
  {{-- Message --}}
  @if(session()->has('message'))
  <div class="alert alert-success alert-dismissible fade show position-fixed" role="alert" style="z-index: 99; top: 80px; right: 10px;">
      {{ session('message') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  @endif
  
    <table class="table">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Nama Sekolah</th>
            <th scope="col">Desa/Kabupaten</th>
            <th scope="col">Kecamatan/Kota</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($schools as $index => $school)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $school->name }}</td>
            <td>{{ $school->district->name }}</td>
            <td>{{ $school->city->name }}</td>
            <td>
                <button wire:click="verify({{ $school }})" class="btn btn-sm btn-success">Verify</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
