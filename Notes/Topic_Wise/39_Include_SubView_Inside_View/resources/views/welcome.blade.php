<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h1>Welcome {{ $name }}</h1>

{{-- including the one view into another view --}}
{{-- if this file have access to some variable then that variable can be able to access by included view as well --}}
@include('contact')

{{-- also we can pass specific data from here as well --}}
@include('contact', ['pincode' => 43211234])

{{-- using includeif --}}
@includeIf('view', ['some' => 'data'])

{{-- using includeWhen --}}
{{-- if boolean varible is true then it will render the given view --}}
@includeWhen($userType, 'contact', ['pincode' => 45321432])

{{-- using includeUnless --}}
{{-- if boolean variable is false then only it will render the view --}}
@includeUnless($userType, 'contact ', ['pincode' => 5432543254])

{{-- not false --}}
@includeUnless(!$userType, 'contact ', ['pincode' => 5432543254])

{{-- showing students using 'foreach' --}}
@foreach ($students as $student)
    {{-- we can do this  --}}
    {{-- <h4>{{ $student }}</h4> --}}
    {{-- or we can include this as well --}}
    @include('student')
@endforeach

{{-- each directive --}}
{{-- so as before done where we are using 'foreach' and including the view inside it in that case rather then doing that we we can use 'each' directive --}}
@each('student', $students, 'student')

{{-- if give array is empty then we will include given view --}}
@each('student', $students, 'student', 'nostudent')

{{-- once directive --}}
@once
    <h1> It will get render at once on every rendering cycle </h1>
@endonce

<body>

</body>

</html>
