<x-app-layout>
<div class="container-fluid">
    <div class="row">

        <div class="col">
            <div class="card shadow border-bottom-primary">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="d-flex justify-content-between mb-4 ">
                            <a href="{{ route('users.create') }}"
                                class="btn btn-sm px-3 pt-2 mb-2 rounded-pill btn-primary"> <i class="fas fa-plus-square"></i>  Tambah User</a>
                        </div>
                        <table class="table " id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th width="15%" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $index => $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{  $user->role->name}}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-warning rounded"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('users.destroy', $user) }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="d-none"></button>
                                                    <a href="" class="btn btn-sm btn-danger btn-rounded not-link confirm-delete"><i class="fas fa-trash"></i></a>
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
