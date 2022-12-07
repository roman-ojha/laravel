<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- accessing the data that is provided by extended views --}}
    {{-- for that we will use @yield directive --}}
    <title>@yield('title')</title>
</head>

<body>
    {{-- accessing provided html code --}}
    @yield('page-name')
    @yield('banner')
    @yield('main')

    {{-- Default content --}}
    @section('default-content1')
        <h1>This is the default content from layout</h1>
    @endsection
    {{-- to show this data we can use '@yield' directive --}}
    @yield('default-content1')

    @section('default-content2')
        <h1>This is the default content from layout</h1>
        {{-- but also we can use '@show' --}}
    @show
</body>

</html>
