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

    <x-alert>
        {{-- adding slot inside component --}}
        <h3>From Slot</h3>

        {{-- named slot --}}
        <x-slot name="title">
            <h3>Named Slot</h3>
        </x-slot>
    </x-alert>
</body>

</html>
