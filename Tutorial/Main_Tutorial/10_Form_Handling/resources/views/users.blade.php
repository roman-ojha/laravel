<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <x-header componentName="User" />
    <h1>Hello {{ $username }}</h1>

    {{-- php expression --}}
    <h1>{{ 10 * 2 }}</h1>

    {{-- php functions --}}
    <h1>{{ count($friends) }}</h1>

    {{-- if else condition --}}
    @if ($username == 'roman-ojha')
        <h1> you are roman </h1>
    @elseif($username == 'razz')
        <h1> you are razz </h1>
    @else
        <h1> you are unknown </h1>
        {{-- end if else --}}
    @endif

    {{-- Loops --}}
    {{-- For loops: --}}
    <h1>Friends:</h1>
    <ol>
        @for ($i = 0; $i < count($friends); $i++)
            <li>{{ $friends[$i] }}</li>
        @endfor
    </ol>

    {{-- For each --}}
    <h1>Friends:</h1>
    <ol>
        @foreach ($friends as $friend)
            <li>{{ $friend }}</li>
        @endforeach
    </ol>

    {{-- Using PHP Tab --}}
    <?php
    function a()
    {
        echo 'Hello';
    }
    a();
    ?>

    {{-- Include View inside View --}}
    @include('inner');

    {{-- Csrf token --}}
    @csrf
    {{-- <input type="hidden" name="_token" value="eElvCQ4YdWslsctTSCMXNxUllyPE7d59uTmDWYeF"> --}}

    {{-- PHP in JS --}}
    <script>
        var data = @json($username);
        console.log(data);
        var friends = @json($friends);
        console.log(friends[0]);
    </script>
</body>

</html>