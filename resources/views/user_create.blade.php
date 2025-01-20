@extends('master')

@section('content')

<h2>Cadastro</h2>

@if (session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.store') }}" method="post">

    @csrf
    <input type="text" name="name" placeholder="Insira seu nome">
    <input type="text" name="email" placeholder="Insira seu e-mail">
    <input type="text" name="password" placeholder="Insira sua senha">

    <button type="submit">Cadastre</button>

</form>

@endsection
