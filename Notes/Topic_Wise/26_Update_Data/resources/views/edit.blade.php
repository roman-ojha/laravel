<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Edit Student</h1>
    <form action="/edit" method="POST">
        @csrf
        {{-- Hidden sid so that we can update the given student --}}
        <input type="number" name="sid" hidden id="sid" value="{{ $student['sid'] }}" />
        <label for="sname">Name: </label>
        <input type="text" name="sname" placeholder="Name" id="sname" value="{{ $student['sname'] }}" />
        <br /> <br />
        <label for="saddress">Address: </label>
        <input type="text" name="saddress" placeholder="Name" id="saddress" value="{{ $student['saddress'] }}" />
        <br /> <br />
        <label for="sphone">Phone: </label>
        <input type="number" name="sphone" placeholder="Name" id="sphone" value="{{ $student['sphone'] }}" />
        <br /> <br />
        <input type="submit" name="insert" value="Edit" />
    </form>
</body>

</html>
