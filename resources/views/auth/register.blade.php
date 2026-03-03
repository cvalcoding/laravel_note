@extends('partials.layout')

@section('title', 'register')

@section('content')
    <h1>Register</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="container">
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Name" name="name" />

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Email" name="email" />

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Password" name="password" />

            <div class="center">
                <button type="submit">Valider</button>
            </div>
        </div>
    </form>
@endsection