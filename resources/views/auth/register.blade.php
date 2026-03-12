@extends('partials.layout')

@section('title', 'register')

@section('content')
    <div class="form-block center">
        <h1 class="text-center">Register</h1>
        @if(Session::has('error'))
            <div class="alert-danger">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                {{ Session::get('error') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert-danger">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <span>Error was found</span>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="container">
                <div class="mb">
                    <label for="name"><b>Name</b></label>
                    <input class="form-input @error('name') form-error @enderror" type="text" placeholder="Name" name="name" id="name" />
                    @error('name')
                        <span class="text-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb">
                    <label for="email"><b>Email</b></label>
                    <input class="form-input @error('email') form-error @enderror" type="text" placeholder="Email" name="email" />
                    @error('email')
                        <span class="text-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb">
                    <label for="password"><b>Password</b></label>
                    <input class="form-input @error('password') form-error @enderror" type="password" placeholder="Password" name="password" />
                    @error('password')
                        <span class="text-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="center">
                    <button class="submit-button center" type="submit">Valider</button>
                </div>
            </div>
        </form>
    </div>
@endsection