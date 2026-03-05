<header>
    <ul>
        <li><a class="active" href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <div class="login">
            @if(Auth::check())
                <li><a href="{{ route('profile') }}">Profile</a></li>
            @else  
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endif
        </div>
    </ul>
</header>