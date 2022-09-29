<x-app-layout>
    <div class="row">
        <div class="col">
            <div class="card p-3 border-left border-primary border-top-0 border-bottom-0 border-right-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="mb-0 text-dark">{{ $user->name }}</h3>
                        <p class="text-secondary mb-0">{{ $user->email }}</p>
                        <p class="text-secondary my-0">{{ $user->role->name }}</p>
                        <p class="text-secondary">{{ $user->city }}</p>
                    </div>
                    <div>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-secondary rounded-pill px-4">edit</a>
                        <form action="{{ route('users.destroy', $user) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger rounded-pill px-4">delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>