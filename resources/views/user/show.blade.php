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
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Name" value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email"
                                    class="form-control  @error('email') is-invalid @enderror" id="email"
                                    placeholder="Email Address" value="{{ old('email', $user->email) }}" required
                                    readonly>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Role Name</label>
                                <select name="role_id" class="form-control" id="role_id" required>

                                </select>
                            </div>


                            <div class="form-group row ">
                                <div class="col-sm-12 col-md-7">
                                    <button type="text" class="btn btn-primary">Kembali</button>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>