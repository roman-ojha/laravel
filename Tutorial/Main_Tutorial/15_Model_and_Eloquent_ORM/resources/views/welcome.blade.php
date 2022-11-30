<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>

<body>
    <h1>Welcome page</h1>
    <h1>Students</h1>

    @foreach ($students as $student)
        <ol>
            <li>{{ $student->sid }}</li>
            <li>{{ $student->sname }}</li>
            <li>{{ $student->saddress }}</li>
            <li>{{ $student->sphone }}</li>
        </ol>
    @endforeach

    <h1>Student</h1>
    <li>{{ $stu->sid }}</li>
    <li>{{ $stu->sname }}</li>
    <li>{{ $stu->saddress }}</li>
    <li>{{ $stu->sphone }}</li>
</body>

</html>
