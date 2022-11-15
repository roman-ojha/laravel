<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>User Login</h1>
    {{-- now we will pass the action url to that route where we want our form data to go --}}
    {{-- NOTE while create form we must have to use csrf --}}
    <form action="/user" method="POST">
        @csrf
        {{-- creawte Normal form --}}
        <input type="text" name="username" placeholder="Psername" />
        <br /><br />
        <input type="text" name="password" placeholder="Password" />
        <br /><br />
        <input type="submit" value="Login" />
    </form>
</body>

</html>
