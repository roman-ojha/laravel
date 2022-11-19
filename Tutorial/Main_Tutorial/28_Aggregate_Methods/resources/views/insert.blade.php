<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Insert Student</h1>
    <form action="/insert" method="POST">
        @csrf
        <label for="sname">Name: </label>
        <input type="text" name="sname" placeholder="Name" id="sname" />
        <br /> <br />
        <label for="saddress">Address: </label>
        <input type="text" name="saddress" placeholder="Name" id="saddress" />
        <br /> <br />
        <label for="sphone">Phone: </label>
        <input type="number" name="sphone" placeholder="Name" id="sphone" />
        <br /> <br />
        <input type="submit" name="insert" value="Insert" />
    </form>
</body>

</html>
