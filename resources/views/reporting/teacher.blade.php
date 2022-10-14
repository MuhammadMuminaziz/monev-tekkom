<x-app-layout>
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>Data Guru Sekolah {{ $school->name }}</h5>
                </div>
                <div class="row p-4">
                    <a href="{{ route('reporting.index') }}" class="mt-1">
                        <button class="btn btn-secondary mx-1">Kembali</button>
                    </a>
                    <a href="" class="mr-2 mt-1">
                        <button class="btn btn-primary">Print semua data sekolah</button>
                    </a>
                </div>
                <div class="row p-3">
                    <div class="col">
                        <table class="table">
                            <tr>
                                <th scope="col" class="text-center">No</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col" class="text-center">Status</th>
                                <th scope="col" class="text-center">NUPTK</th>
                                <th scope="col" class="text-center">Jenis Kelamin</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                            @foreach ($teachers as $teacher)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $teacher->teacher_name }}</td>
                                <td class="text-center">{{ $teacher->employment_status }}</td>
                                <td class="text-center">{{ $teacher->nuptk }}</td>
                                <td class="text-center">{{ $teacher->gender }}</td>
                                <td class="text-center">
                                    <a href="{{ route('reporting.school.teacher.show', [ $school, $teacher ]) }}" class="btn btn-sm btn-success">Lihat</a>
                                    <a href="" class="btn btn-sm btn-primary">Print</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>