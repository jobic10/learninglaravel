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
    <form action="" method="post">
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
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>
