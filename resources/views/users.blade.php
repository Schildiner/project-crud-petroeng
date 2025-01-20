@extends('master')

@section('content')

<h1>Usuarios</h1>

<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }} | <a href="{{ route('users.edit', ['user' => $user->id]) }}">Editar</a>
        </li>
    @endforeach
</ul>

<hr>

<a href="{{ route('users.create') }}"><button>Cadastrar Usuário</button></a>

@endsection
