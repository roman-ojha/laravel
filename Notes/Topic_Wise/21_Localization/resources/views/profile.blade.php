<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- to access data from 'lang'
    __('<file_name>.<key>')
    --}}
    <h1>{{ __('profile.welcome') }}</h1>
    <a href="">{{ __('profile.about') }}</a>
    <br />
    <a href="">{{ __('profile.contact') }}</a>
    <br />
    <a href="">{{ __('profile.list') }}</a>
</body>

</html>
