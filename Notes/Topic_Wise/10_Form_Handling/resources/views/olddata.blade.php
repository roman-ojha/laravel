<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- here we will show the old flashed data --}}
    <form action="/user" method="POST">
        @csrf
        {{-- we can set the value using 'old' function --}}
        <input type="text" name="username" placeholder="Username" value={{ old('username') }} />
        <br /><br />
        <input type="password" name="password" placeholder="Password" value={{ old('password') }} />
        <br /><br />
        <input type="submit" value="Login" />
    </form>

</body>

</html>
