<div>
    <table class="table table-striped shadow border border-light">
        <thead class="table table-striped bg-primary">
            <tr>
                <th>ID No</th>
                <th>Student Name</th>
                <th>Email Address</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>Department</th>
                <th>Year Level</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->contact_number }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->department }}</td>
                    <td>{{ $student->year_level }}</td>
                    <td>
                        <a href="{{ url('edit', ['student' => $student->id]) }}" class="btn btn-primary">Edit<i class=" fa fa-gear"></i></a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['student' => $student->id]) }}" class="btn btn-danger">Delete<i class=" fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

