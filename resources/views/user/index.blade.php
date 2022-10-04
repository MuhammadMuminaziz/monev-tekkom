<x-app-layout>
<div class="container-fluid">
    <div class="row">

        {{-- Message --}}
        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show position-fixed" role="alert" style="z-index: 99; top: 80px; right: 10px;">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="col">
            <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="d-flex justify-content-between mb-4 ">
                            <a href="{{ route('users.create') }}"
                                class="btn btn-sm px-4 pt-2 rounded-pill btn-primary">Add User</a>
                        </div>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>District</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $index => $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{  $user->role->name}}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->district }}</td>
                                    <td>
                                        <a href="{{ route('users.show', $user) }}"  class="btn btn-sm btn-info rounded-pill"><i class="fas fa-info-circle"> Detail</i></a>
                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-secondary rounded-pill"><i class="fas fa-pencil">Edit</i></a>
                                        <form action="{{ route('users.destroy', $user) }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-sm btn-danger rounded-pill"> <i class="fas fa-trash"> Delete</i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
