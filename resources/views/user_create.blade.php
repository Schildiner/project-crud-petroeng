@extends('master')

@section('content')

<h2>Cadastro</h2>

<form action="{{ route('users.store') }}" method="post">

    @csrf
    <input type="text" name="name" placeholder="Insira seu nome">

    <button type="submit">Cadastre</button>

</form>

@endsection
