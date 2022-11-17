<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>

<body>
    {{-- GET Method --}}
    {{-- Using GET method data goes through URL:
        http://127.0.0.1:8000/users?user=fdsaf&password=fdfdsa&login=
        --}}
    <h1>GET Method</h1>
    <form action="/user" method="GET">
        <input type="text" name="user" placeholder="User Name">
        <br />
        <input type="password" name="password" placeholder="Password">
        <br />
        <button type="submit" name="login">Login</button>
    </form>

    {{-- POST Method --}}
    {{-- Data goes using JSON or XML --}}
    {{-- {"_token":"W8qGkzHQlQBvCy4PplERgq4KZJ4PJ8jRYDxZ9s9E","user":"fd","password":"fd","login":null} --}}
    <h1>POST Method</h1>
    <form action="/user" method="POST">
        @csrf
        <input type="text" name="user" placeholder="User Name">
        <br />
        <input type="password" name="password" placeholder="Password">
        <br />
        <button type="submit" name="login">Login</button>
    </form>

    <h1>PUT Method</h1>
    {{-- {"_token":"W8qGkzHQlQBvCy4PplERgq4KZJ4PJ8jRYDxZ9s9E","_method":"PUT","user":null,"password":null,"login":null} --}}
    <form action="/user" method="POST">
        @csrf
        {{-- to send Put method we have to use POST method but we also have to add this small thing: --}}
        {{ @method_field('PUT') }}
        <input type="text" name="user" placeholder="User Name">
        <br />
        <input type="password" name="password" placeholder="Password">
        <br />
        <button type="submit" name="login">Login</button>
    </form>

    <h1>Delete Method</h1>
    {{-- {"_token":"W8qGkzHQlQBvCy4PplERgq4KZJ4PJ8jRYDxZ9s9E","_method":"DELETE","user":null,"password":null,"login":null} --}}
    <form action="/user" method="POST">
        @csrf
        {{-- to send Put method we have to use POST method but we also have to add this small thing: --}}
        {{ @method_field('DELETE') }}
        <input type="text" name="user" placeholder="User Name">
        <br />
        <input type="password" name="password" placeholder="Password">
        <br />
        <button type="submit" name="login">Login</button>
    </form>
</body>

</html>
