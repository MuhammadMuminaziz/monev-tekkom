<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow py-3 border-bottom-primary">
                    <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama Guru</th>
                                        <th>Asal sekolah</th>
                                        <th>Kecamatan</th>
                                        <th>Kota</th>
                                        <th>Periode</th>
                                        <th width="15%" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teachers as $teacher)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $teacher->teacher_name }}</td>
                                        <td>{{ $teacher->school->name }}</td>
                                        <td>{{ $teacher->district->name ?? '' }}</td>
                                        <td>{{ $teacher->city->name ?? '' }}</td>
                                        <td>{{ $teacher->periode }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('teacher.show', $teacher) }}" class="btn btn-sm btn-info btn-rounded"><i
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