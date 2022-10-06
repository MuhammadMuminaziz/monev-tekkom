<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header">
                        <h6>Simple Summernote</h6>
                    </div>
                    <div class="card-body">
                        <form class="user" method="post" action="#">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Name" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email"
                                    class="form-control  @error('email') is-invalid @enderror" id="email"
                                    placeholder="Email Address" value="{{ $user->email }}"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label>Role Name</label>
                                <input type="text" name="role_id" class="form-control" id="role_id" value="{{ $user->role->name }}">
                            </div>

                            @if($user->role->name === 'Verifikator')
                            <div class="form-group">
                                <label for="districts">Districts</label>
                                <select name="districts[]" class="select2 form-control" style="width: 100%;" id="city_id" multiple>
                                    @foreach($user->districts as $district)
                                    <option selected disabled value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @endif


                            <div class="form-group row ">
                                <div class="col-sm-12 col-md-7">
                                    <a href="{{ route('users.index') }}" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>