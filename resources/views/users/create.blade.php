@extends('layouts.app')

@section('title', 'Novo usuário')

@section('content')
    <h3>Novo usuário</h3>
    <div class="row">
        <div class="col-12">
            @include('includes.validations-form')
        </div>
    </div>
    <form action="{{ route('users.store') }}" method="post">
        @include('users._partials.form')
    </form>
@endsection
