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
            <th scope="col">Nama Guru</th>
            <th scope="col">Desa/Kabupaten</th>
            <th scope="col">Kecamatan/Kota</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        @foreach($teachersNotActived as $teacher)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $teacher->teacher_name }}</td>
            <td>{{ $teacher->district->name }}</td>
            <td>{{ $teacher->city->name }}</td>
            <td>
                <button wire:click="verify({{ $teacher }})" class="btn btn-sm btn-success">Verify</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="row">
        <div class="col">
            <ol class="mt-5" type="1">
                @foreach($teachersActived as $teacher)
                <li class="d-flex justify-content-between bg-secondary rounded-pill py-2 px-5 text-white">{{ $teacher->teacher_name }} <span class="btn btn-sm btn-light rounded-pill px-4">Active</span></li>
                @endforeach
              </ol>
        </div>
      </div>
</div>
