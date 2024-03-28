<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow  border-bottom-primary">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Sekolah</h6>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama Sekolah</th>
                                        <th>NPSN</th>
                                        <th>Kecamatan</th>
                                        <th>Kota</th>
                                        <th>Periode</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($schools as $school)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $school->name }}</td>
                                        <td>{{ $school->npsn }}</td>
                                        <td>{{ $school->district->name  ?? '' }}</td>
                                        <td>{{ $school->city->name  ?? '' }}</td>
                                        <td>{{ $school->periode }}</td>
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