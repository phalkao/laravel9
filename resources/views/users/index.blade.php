@extends('layouts.app')

@section('title', 'Lista de usuários')

@section('content')
    <h3>Lista de usuários <a href="{{route('users.create') }}">+</a></h3>
    <form action="#" method="get">
        <input type="text" name="search" placeholder="Pesquisa">
        <button>Pesquisar</button>
    </form>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->id }} - {{ $user->name }} - {{ $user->email }} 
                | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                | <a href="{{ route('users.show', $user->id) }}">Detalhe</a>
            </li>
        @endforeach
    </ul>
@endsection
