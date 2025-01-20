<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <h1>Usuarios</h1>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} <a href="{{ route('users.edit', ['user' => $user->id]) }}">Editar</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('users.create') }}">Cadastrar Usuário</a>
</body>
</html>
