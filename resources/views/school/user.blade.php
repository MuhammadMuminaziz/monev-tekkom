<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow py-3 border-bottom-primary">
                    <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Data Sekolah</h6>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
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
                                    @foreach($schools as $school)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $school->name }}</td>
                                        <td>{{ $school->npsn }}</td>
                                        <td>{{ $school->jumlah_siswa }}</td>
                                        <td>{{ $school->district->name }}</td>
                                        <td>
                                            <a href="{{ route('school.show', $school) }}" class="btn btn-sm btn-info btn-rounded"><i
                                                    class="fas fa-eye"></i></a>
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