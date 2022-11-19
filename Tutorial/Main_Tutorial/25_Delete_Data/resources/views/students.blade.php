<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .w-5 {
            display: none
        }
    </style>
</head>

<body>
    <h1>Student List</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student['sid'] }}</td>
                <td>{{ $student['sname'] }}</td>
                <td>{{ $student['saddress'] }}</td>
                <td>{{ $student['sclass'] }}</td>
                <td>{{ $student['sphone'] }}</td>
            </tr>
        @endforeach
    </table>
    <div>
        {{-- we can use the default 'links()' to go to another page --}}
        {{ $students->links() }}
    </div>
</body>

</html>
