<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
</head>

<body>
    {{ $customer }}
    <h1>Name: {{ $customer->name }}</h1>
    <h1>Email: {{ $customer->email }}</h1>
    <h1>ID: {{ $customer->id }}</h1>
</body>

</html>
