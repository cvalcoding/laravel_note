@extends('partials.layout')

@section('title', 'profile')

@section('content')
    <div class="center" style="width: 250px">
        <h1>Login</h1>
        <p><b>Name</b> : {{ $user->name }}</p>
        <p><b>Email</b> : {{ $user->email }}</p>
    </div>
@endsection