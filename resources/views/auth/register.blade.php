<x-guest-layout>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            {{-- <div class="col-lg-5 d-none d-lg-block bsg-register-image"></div> --}}
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    </div>
                                    <form class="user" method="post" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control rounded-pill @error('name') is-invalid @enderror" id="name"
                                                placeholder="Name" required>
                                                @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control rounded-pill @error('email') is-invalid @enderror" id="email"
                                                placeholder="Email Address" required>
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <select name="role_id" class="form-control rounded-pill" id="role_id" required>
                                                @foreach($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
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
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>