@extends('partials.layout')

@section('title', 'login')

@section('content')
    <h1>Login</h1>
    <div class="center">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="container">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Email" name="email" />

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Password" name="password" />

                <div class="center">
                    <button type="submit">Valider</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection
