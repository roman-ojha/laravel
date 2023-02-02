<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Home Page</h1>

    <ul>
        <li>
            {{-- using 'route' method to redirect using named route --}}
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li>
            <a href="{{ route('about') }}">About</a>
        </li>
        {{-- we can pass the dynamic value into the dynamic urls --}}
        <li>
            <a href="{{ route('redirect', ['page' => 'home']) }}">Home</a>
        </li>
        <li>
            <a href="{{ route('redirect', ['page' => 'about']) }}">About</a>
            {{-- http://localhost:8000/redirect/about?pg=3 --}}
        </li>
    </ul>
</body>

</html>
