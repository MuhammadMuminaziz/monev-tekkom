{{-- <x-guest-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <!-- Card image -->
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <!-- Card text login -->
                            <div class="col-lg-6">
                                <div class="p-5">

                                    <div class="text-center">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                            style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">Logo Sekolah</h4>
                                    </div>
                                   
                                    <div class="text-center">
                                        <p>LOGIN</p>
                                    </div>
                                    @error('email')
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @enderror
                                    <form class="user" method="post" action="{{ route('login') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user"
                                                    id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                                                    placeholder="Enter Email Address...">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password"
                                                    class="form-control form-control-user" id="exampleInputPassword"
                                                    placeholder="Password">
                                            </div>
                                            <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="container-fluid p-0">
        <div class="row" style="height: 100vh">
            <div class="col-md-8 bg-login-image">
                {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp" alt="" class="img-fluid"> --}}
            </div>
            <div class="col-md-4 bg-white py-5 px-5">
                <div class="text-center mb-5 pt-5">
                    <img src="{{ asset('/img/logo-pemprov.png') }}" alt="" height="100" width="100">
                </div>
                @error('email')
                <div data-message="{{ $message }}" id="missLog"></div>
                @enderror
                <form class="user" method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                            id="exampleInputEmail" name="email" aria-describedby="emailHelp"
                            placeholder="Enter Email Address..." autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password"
                            class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputPassword"
                            placeholder="Password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                            <label class="custom-control-label" for="remember">Remember
                                Me</label>
                        </div>
                    </div>
                    <button class="btn btn-outline-primary btn-user btn-block" type="submit">Login</button>
                    <hr>
            </form>
            </div>
        </div>
    </div>
</x-guest-layout>