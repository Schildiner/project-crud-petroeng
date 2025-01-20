@extends('master')

@section('content')

<h1>Atualizar</h1>
<form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" value="{{ $user->name }}">

    <button type="submit">Atualizar</button>
</form>

<hr />
<a href="{{ route('users.show', ['user' => $user->id]) }}"><button>DELETAR</button></a>

@endsection
