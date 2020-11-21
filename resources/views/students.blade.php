<h3>All Students</h3>

<table border="1" cellspacing='3' cellpadding='3'>
    <tr>
        <th>ID</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Phone Number</th>
        <th>Email</th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->lastname }}</td>
            <td>{{ $student->firstname }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->email }}</td>
        </tr>
    @endforeach
</table>


{{ $students->links() }}

<style>
    .w-5 {
        display: none
    }

</style>
