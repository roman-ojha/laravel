<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
</head>

<body>
    <h1>Add New Member</h1>
    {{-- Getting Session Data --}}
    @if (session('user'))
        <h3>Data saved for{{ session('user') }}</h3>
    @endif
    <form action="/store" method="POST">
        @csrf
        <input type="text" name="user" placeholder="Username" />
        <br />
        <input type="password" name="password" placeholder="Password" />
        <br />
        <input type="email" name="email" placeholder="Email" />
        <br />
        <input type="submit" value="Login" />
    </form>
</body>

</html>
