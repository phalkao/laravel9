@extends('layouts.app')

@section('title', "Editar usuário { $user->name }")

@section('content')
    <h3>Editar usuário {{ $user->name }}</h3>
    @include('includes.validations-form')
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @include('users._partials.form')
    </form>
@endsection
