<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>Users List</h1>
    <table style="width:20%; text-align: center;">
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td><a href="{{ route('user.profile', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>