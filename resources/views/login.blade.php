<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
</head>

<body>
    <h3>Please login</h3>
    <form action="login/process" method="post">
        @csrf
        <table border="1">
            <tr>
                <th>Username</th>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>
