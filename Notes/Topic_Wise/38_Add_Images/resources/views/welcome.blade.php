<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1>Home page</h1>
{{-- after '/public' folder we will defile the path of that image --}}
<img src="/images/01.jpg" alt="img">

{{-- another method --}}
{{-- recomended way --}}
<img src="{{ asset('/images/01.jpg') }}" alt="img">

{{-- another method --}}
<img src="{{ url('/images/01.jpg') }}" alt="img">

<body>

</body>

</html>
