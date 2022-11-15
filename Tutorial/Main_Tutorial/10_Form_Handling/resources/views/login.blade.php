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
    {{-- we can access the error object like this --}}
    {{ $errors }}
    @if ($errors->any())
        @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
        {{-- 
            The username field is required.
            The password field is required.
            --}}
    @endif

    {{-- now we will pass the action url to that route where we want our form data to go --}}
    {{-- NOTE while create form we must have to use csrf --}}
    <form action="/user" method="POST">
        @csrf
        {{-- creawte Normal form --}}
        <input type="text" name="username" placeholder="Psername" />
        <span style="color:red;">
            {{-- we can show the error to the user specific to the filed error like this --}}
            @error('username')
                {{ $message }}
            @enderror
        </span>
        <br /><br />
        <input type="password" name="password" placeholder="Password" />
        <span style="color:red;">
            @error('password')
                {{ $message }}
            @enderror
        </span>
        <br /><br />
        <input type="submit" value="Login" />
    </form>
</body>

</html>
