<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>

<body>
    {{-- Reading session data --}}
    <h1> Welcome {{ session('user') }}</h1>

    <a href="/logout">Logout</a>
</body>

</html>
