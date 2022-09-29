<x-app-layout>
    <div class="row">
        <div class="col">
            <div class="card p-3 text-dark">
                <div class="d-flex justify-content-between mb-4">
                    <h3>Users</h3>
                    <a href="{{ route('users.create') }}" class="btn btn-sm px-4 pt-2 rounded-pill btn-outline-primary">Add new user</a>
                </div>
                <ul class="list-group border-0">
                    @foreach($users as $index => $user)
                    <a href="{{ route('users.show', $user) }}" class="text-secondary text-decoration-none">
                        <div class="card rounded-pill list-group-item mb-1 py-2 px-4">
                            {{ $index + 1 . '.  ' . $user->name . ' - ' . $user->email }}
                        </div>
                    </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
