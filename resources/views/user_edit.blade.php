@extends('master')

@section('content')

<h1>Atualizar</h1>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="name" value="{{ $user->name }}">
    <input type="text" name="email" value="{{ $user->email }}">
    <input type="text" name="password" value="">

    <button type="submit">Atualizar</button>
</form>

<hr />
<a href="{{ route('users.show', ['user' => $user->id]) }}"><button>DELETAR</button></a>

@endsection
