<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
</head>

<body>
    <h1>Add New Member</h1>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        {{-- while sending file using form we have to use 'multipart/form-data' --}}
        @csrf
        <input type="file" name="file" />
        <br /> <br />
        <input type="submit" value="Upload File" />
    </form>
</body>

</html>
