<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
</head>

<body>
    <h1>User Login</h1>
    <form action="/login" method="POST">
        @csrf
        <input type="text" name="user" placeholder="Username" />
        <br />
        <input type="password" name="password" placeholder="Password" />
        <br />
        <input type="submit" value="Login" />
    </form>
</body>

</html>
