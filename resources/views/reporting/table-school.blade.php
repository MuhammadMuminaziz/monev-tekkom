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