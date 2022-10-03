<x-app-layout>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            <form class="user" method="post" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control rounded-pill @error('name') is-invalid @enderror" id="name"
                        placeholder="Name" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control rounded-pill @error('email') is-invalid @enderror" id="email"
                        placeholder="Email Address" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="form-group">
                    <select name="role_id" class="form-control rounded-pill" id="role_id" required onchange="getCity()">
                        @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group d-none form-city">
                    <select name="city_id[]" class="select2 form-control rounded-pill" style="width: 100%;" id="city_id" required multiple>
                        @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input name="password" type="password" class="form-control rounded-pill @error('password') is-invalid @enderror"
                            id="password" placeholder="Password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <div class="col-sm-6">
                        <input name="password_confirmation" type="password" class="form-control rounded-pill"
                            id="password_confirmation" placeholder="Password Confirmation">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary rounded-pill btn-block">Register Account</button>
            </form>
        </div>
    </div>
</x-app-layout>