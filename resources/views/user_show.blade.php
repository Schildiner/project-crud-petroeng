<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>User - {{ $user->name }}</h2>


    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">

        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">DELETE</button>

    </form>
</body>
</html>
