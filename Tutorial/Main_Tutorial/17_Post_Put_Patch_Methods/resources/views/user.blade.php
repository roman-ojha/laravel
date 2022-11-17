<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>

<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last name</th>
            <th>Avatar</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>
                    <img src="{{ $user->avatar }}" alt="{{ $user->first_name . ' ' . $user->last_name }}" />
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
