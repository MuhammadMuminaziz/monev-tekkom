<x-app-layout>
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>Kabupaten/Kota</h5>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body">
                            <ul class="p-0 px-2">
                                @foreach($cities as $city)
                                <li><a href="{{ route('reporting.district', $city) }}">{{ $city->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-2 mt-2">
                            <p>Sekolah</p>
                            <ul>
                                @foreach($schools as $school)
                                <li><a href="">{{ $school->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<br><br><br>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card shadow py-3 border-bottom-primary">
                    <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">Laporan Data Sekolah</h6>
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
                                        <th width="10%">Action</th>
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
                                            <a href="#" class="btn btn-sm btn-info btn-rounded"><i class="fas fa-print"></i> Cetak</a>
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
    </div>
    
</x-app-layout>