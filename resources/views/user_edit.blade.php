<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar</title>
</head>
<body>

    <h1>Atualizar</h1>
    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="name" value="{{ $user->name }}">

        <button type="submit">Atualizar</button>
    </form>

    <hr />
    <a href="{{ route('users.show', ['user' => $user->id]) }}"><button>DELETAR</button></a>
</body>
</html>
