<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>
    <h1>Usuários</h1>
    <ul>
        @foreach ( $usuarios as  $user)
            <li>{{ $user->nome }}</li>
            <li>{{ $user->email }}</li>
            <li>{{ $user->dt_nascimento }}</li>
            <br>
        @endforeach
    </ul>
</body>
</html>