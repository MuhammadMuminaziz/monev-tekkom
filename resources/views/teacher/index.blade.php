<x-app-layout>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <div class="card shadow">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="d-flex justify-content-between mb-4 ">
                            <a href="{{ route('teachers.create') }}" class="btn btn-sm px-4 pt-2 rounded-pill btn-primary">Add Data</a>
                        </div>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <th width="5%">ID</th>
                                <th>Nama Guru</th>
                                <th>NIP</th>
                                <th>NUPTK</th>
                                <th>Asal Sekolah</th>
                                <th>Desa / Kecamatan</th>
                                <th>No Telp</th>
                                <th width="15%">Action</th>
                            </thead>
                            <tbody>
                           
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                                <td>#</td>
                                <td>
                                    <a href="#"  class="btn btn-sm btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
                                    <a href="#" class="btn btn-sm btn-secondary btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
                                    <form action="#" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-sm btn-danger btn-circle btn-sm"> <i class="fas fa-trash"></i></button>
                                    </form>
                                </td>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>