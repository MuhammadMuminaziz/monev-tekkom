<x-app-layout>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Account!</h1>
            </div>
            <form class="user" method="post" action="{{ route('users.update', $user) }}">
                @method('put')
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                <div class="form-group">
                    <input type="text" name="name" class="form-control rounded-pill @error('name') is-invalid @enderror" id="name"
                        placeholder="Name" value="{{ old('name', $user->name) }}" required>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control rounded-pill @error('email') is-invalid @enderror" id="email"
                        placeholder="Email Address" value="{{ old('email', $user->email) }}" required readonly>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                </div>
                <div class="form-group">
                    <select name="role_id" class="form-control rounded-pill" id="role_id" required>
                        @foreach($roles as $role)
                            @if($user->role->name == $role->name)
                            <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                            @else
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input name="password" type="password" class="form-control rounded-pill"
                            id="password" placeholder="Password">
                    </div>
                    <div class="col-sm-6">
                        <input name="password_confirmation" type="password" class="form-control rounded-pill"
                            id="password_confirmation" placeholder="Password Confirmation">
                    </div>
                    <small class="ml-4">leave it blank if the password is not changed</small>
                </div>
                <button type="submit" class="btn btn-primary rounded-pill btn-block">Register Account</button>
            </form>
        </div>
    </div>
</x-app-layout>