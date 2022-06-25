@extends('layouts.app')

@section('title', 'Listagem do usuário')

@section('content')
    <h3>Listagem do usuário {{ $user->name }}</h3>
    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->created_at }}</li>
    </ul>
@endsection
