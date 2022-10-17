<x-app-layout>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="font-weight-bold text-primary">Tambah Data User</h6>
                </div>
                <div class="card-body">
                    <form class="user" method="post" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                             <label>Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                placeholder="Name" value="{{ old('name') }}" required>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                        </div>
                        <div class="form-group">
                        <label>Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                placeholder="Email Address" value="{{ old('email') }}" required>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                        </div>
                        <div class="form-group">
                        <label>Role Name</label>
                            <select name="role_id" class="form-control " id="role_id" required onchange="getCity()">
                                <option value="1">Operator</option>
                                <option value="2" {{ $districts->count() == 0 ? 'disabled' : '' }}>Verifikator</option>
                                <option value="3">Super Admin</option>
                                <option value="4">Owner</option>
                            </select>
                        </div>
                        <div class="form-group d-none form-city">
                            <select name="districts[]" class="select2 form-control" style="width: 100%;" id="city_id" multiple>
                                @foreach($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label>Password</label>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    id="password" placeholder="Password">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                            <div class="col-sm-6">
                                <input name="password_confirmation" type="password" class="form-control "
                                    id="password_confirmation" placeholder="Password Confirmation">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-sm-12 col-md-7">
                                <button type="submit"  class="btn btn-primary">Simpan Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>