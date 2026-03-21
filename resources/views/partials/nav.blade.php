<nav>
    <ul class="navbar">
        <li><a class="active" href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
        <div class="navbar-auth">
            @if(Auth::check())
                <li><a href="{{ route('notes.index') }}">Note</a></li>
                <li><a href="{{ route('profile') }}">Profile</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @else  
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endif
        </div>
    </ul>
</nav>