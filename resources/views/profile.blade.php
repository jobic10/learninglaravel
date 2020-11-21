<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Dear {{ session('user') }}, welcome to your profile.</h1>
    <a href="logout">Logout</a>
    <x-footer year="2020" />
</body>

</html>
