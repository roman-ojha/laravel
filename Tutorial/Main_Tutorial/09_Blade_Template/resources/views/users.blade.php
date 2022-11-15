<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- here we are adding 'header' component --}}
    {{-- also we can pass to component the data as attrubute --}}
    {{-- <x-<component_name>/> --}}
    <x-header componentName="User"/> 
    {{-- we will access this value on '../../app/View/Components/Header.php' --}}
    
   <h1>User View</h1> 
   <h1>Hello {{$username}}</h1>
</body>
</html>