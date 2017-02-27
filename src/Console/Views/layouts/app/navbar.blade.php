<section class="hero is-primary is-small">

    <div class="hero-head">
        <header class="nav">
            <div class="container">
                <div class="nav-left">
                    <a href="/" class="nav-item">
                        <img src="img/logo/bulma.png" alt="Logo">
                    </a>
                </div>
                <span class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <div class="nav-right nav-menu">
                    <a href="/home" class="nav-item">
                        Home
                    </a>
                    @if (Auth::guest())
                        <a href="{{ route('login') }}" class="nav-item {{ Route::is('login') ? 'is-active' : '' }}">
                            Login
                        </a>
                        <a href="{{ route('register') }}" class="nav-item {{ Route::is('register') ? 'is-active' : '' }}">
                            Register
                        </a>
                    @else
                        <a class="nav-item">
                            {{ Auth::user()->name }}
                        </a>

                        <a href="{{ route('logout') }}" class="nav-item" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    @endif

                </div>
            </div>
        </header>
    </div>

    @stack('heroheader')

    @stack('heronav')

</section>