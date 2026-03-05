@extends('partials.layout')

@section('title', 'profile')

@section('content')
    <h1>Login</h1>
    <div class="center">
        <div class="container">
            <p> <b>Name</b> : {{ $user->name }}</p>
            <p> <b>Email</b> : {{ $user->email }}</p>
        </div>
    </div>
@endsection