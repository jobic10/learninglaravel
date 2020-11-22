<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Member Form</title>
</head>

<body>
    @if (session('flash_user'))
        <h4 style="color:blue">{{ session('flash_user') }} has been added</h4>
    @endif
    <h3>Please Fill All Fields</h3>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <table border="1">
            <tr>
                <th>Username</th>
                <td><input type="text" name="username" id="">
                    <span style="color:red">@error('username') {{ $message }}@enderror</span>
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" id="">
                    <span style="color:red">@error('email') {{ $message }}@enderror</span>
                </td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="password" id="">
                    <span style="color:red">@error('password') {{ $message }}@enderror</span>
                </td>
            </tr>
            <tr>
                <th>Image</th>
                <td><input type="file" name="passport" id="">
                    <span style="color:red">@error('passport') {{ $message }}@enderror</span>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    <h4>List of previously entered data</h4>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Passport</th>
            <th>Action</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->username }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->password }}</td>
                <td><img heigh='80' width='80' src="{{ asset($student->passport) }}" /></td>
                <td><a href="delete/{{ $student->id }}">Delete</a></td>

            </tr>
        @endforeach
    </table>
</body>

</html>
