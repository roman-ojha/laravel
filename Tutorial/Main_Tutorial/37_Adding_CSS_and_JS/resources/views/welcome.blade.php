<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Internal CSS --}}
    <style>
        h1 {
            color: red
        }
    </style>

    {{-- External CSS --}}
    {{-- linking from public folder --}}
    <link rel="stylesheet" href="css/style.css">
    {{-- output herf: css/style.css --}}

    {{-- another way to include css from public folder --}}
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    {{-- output href: http://127.0.0.1:8000/css/style.css --}}

    {{-- another way to include css from public folder --}}
    <link rel="stylesheet" href={{ url('css/style.css') }}>
    {{-- output href: http://127.0.0.1:8000/css/style.css --}}


    {{-- External CSS --}}
    {{-- including css file from resources folder  --}}
    @vite(['resources/css/app.css', 'resources/css/style.css'])
</head>

<body>
    <h1>h1</h1>
    <h2>h2</h2>
    <h3>h3</h3>
    <h4>h4</h4>

    {{-- Internal JS --}}
    <script>
        console.log("Hello Laravel")
    </script>

    {{-- External JS --}}
    {{-- including from public folder --}}
    <script src="js/script.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ url('js/script.js') }}"></script>

    {{-- External JS --}}
    {{-- including js file from resources folder  --}}
    @vite('resources/js/app.js')
</body>

</html>
