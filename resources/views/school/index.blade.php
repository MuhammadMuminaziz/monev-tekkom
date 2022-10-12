<x-app-layout>
    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-4 text-gray-800">Data Sekolah</h1>
                <div class="card shadow py-3 border-bottom-primary">

                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="d-flex justify-content-between mb-4 ">
                                <a href="{{ route('schools.create') }}"
                                    class="btn btn-sm px-3 pt-2 rounded-pill btn-primary"><i class="fas fa-plus-square"></i>Tambah Data</a>
                            </div>
                            <table class="table " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="5%">ID</th>
                                        <th>Nama Sekolah</th>
                                        <th>NPSN</th>
                                        <th>Jumlah Siswa</th>
                                        <th>Desa / Kecamatan</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>#</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-info btn-rounded"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-sm btn-warning btn-rounded"><i class="fas fa-edit"></i></a>
                                            <form action="#" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-danger btn-rounded">
                                                    <i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div> --}}

       <div class="row justify-content-center">
        <div class="col-md-12">

            @if($success == 'no data')
            <x-school-no-data/>
            @endif

            {{-- dont verify --}}
            @if($success == 'no verify')
            <x-school-no-verify/>
            @endif

            {{-- reject --}}
            @if($success == 'reject')
            <x-school-reject :school="$school"/>
            @endif

            {{-- verify --}}
            @if($success == 'data')
            <x-school-data :school="$school"/>
            @endif
        </div>
    </div>
</x-app-layout>