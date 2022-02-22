<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>

<body>

    <h1>{{ $title }}</h1>

    <ul>
        @forelse ($users as $user)
            <li>{{ $user }}</li>
        @empty
            <p>No hay usuarios.</p>
        @endforelse
    </ul>
</body>
</html>