<header class="py-4 ">
    <div class="container d-flex justify-content-between">
        <div class="logo d-flex align-items-center">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>

        <nav>

            <ul class="d-flex mb-0">
                <li><a class="{{ Route::currentRouteName()=== 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li><a class="{{ Route::currentRouteName()=== 'about' ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                <li><a class="{{ Route::currentRouteName()=== 'movies' ? 'active' : '' }}" href="{{ route('movies') }}">Movies</a></li>
                <li><a class="{{ Route::currentRouteName()=== 'contacts' ? 'active' : '' }}" href="{{ route('contacts') }}">Contacts</a></li>
            </ul>
        </nav>
    </div>

</header>
