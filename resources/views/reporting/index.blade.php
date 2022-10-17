<x-app-layout>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Data Sekolah</h6>
                </div>
                <div class="card-body">
                    <div class="row p-3 justify-content-between">
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <select class="custom-select" id="filterDistrict" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <option selected disabled>- pilih kecamatan -</option>
                                    @foreach($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                    @endforeach
                                </select>
                                <div class="input-group-append">
                                <button class="btn btn-outline-primary btn-filter" type="button" id="button-addon2">filter</button>
                                </div>
                            </div>
                        </div>
                        <a href="" class="mr-3 mt-1">
                            <button class="btn btn-primary">Print</button>
                        </a>
                    </div>

                    <div class="row p-2">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table " id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">No</th>
                                            <th scope="col">Nama Sekolah</th>
                                            <th scope="col" class="text-center">NPSN</th>
                                            <th scope="col" class="text-center">Kecamatan</th>
                                            <th scope="col" class="text-center">Kota</th>
                                            <th scope="col" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="page-school">
                                        @foreach ($schools as $school)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $school->name }}</td>
                                            <td class="text-center">{{ $school->npsn }}</td>
                                            <td class="text-center">{{ $school->district->name }}</td>
                                            <td class="text-center">{{ $school->city->name }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('reporting.school.show', $school) }}" class="btn btn-sm btn-success">Data sekolah</a>
                                                <a href="{{ route('reporting.school.teacher', $school) }}" class="btn btn-sm btn-warning">Data guru</a>
                                                <a href="" class="btn btn-sm btn-primary">Print</a>
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
    </div>
</div>

</x-app-layout>