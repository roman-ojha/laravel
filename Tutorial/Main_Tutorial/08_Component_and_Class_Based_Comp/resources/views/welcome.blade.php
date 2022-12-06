<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome Page</h1>

    <a href="/about">About</a>
    <a href="/contact">Contact</a>

    @php
        $desc = 'Description';
    @endphp

    <x-card title="1" sub-title="roman" :description=$desc />
    <x-card title="2" sub-title="jack" :description=$desc />
    <x-card title="3" sub-title="krishna" :description=$desc />
    <x-card title="4" sub-title="yashodha" :description=$desc />
</body>

</html>
