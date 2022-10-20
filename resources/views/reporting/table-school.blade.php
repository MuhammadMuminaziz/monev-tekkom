@foreach ($schools as $school)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $school->name }}</td>
    <td>{{ $school->npsn }}</td>
    <td>{{ $school->district->name }}</td>
    <td>{{ $school->city->name }}</td>

    <td><a href="{{ route('reporting.school.teacher', $school) }}" class="btn btn-sm btn-success">Data guru</a></td>
    <td>
        <a href="{{ route('reporting.school.show', $school) }}" class="btn btn-sm btn-info btn-rounded btn-sm"><i
                class="fas fa-eye"></i></a>
        <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-print"></i> Print</a>
    </td>
</tr>
@endforeach