<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Sekolah</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <th width="5%">No</th>
                                    <th>Nama Sekolah</th>
                                    <th>NPSN</th>
                                    <th>Jumlah Siswa</th>
                                    <th>Desa / Kecamatan</th>
                                </thead>
                                <tbody>
                                    @foreach($schools as $school)
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $school->name }}</td>
                                    <td>{{ $school->npsn }}</td>
                                    <td>{{ $school->jumlah_siswa }}</td>
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