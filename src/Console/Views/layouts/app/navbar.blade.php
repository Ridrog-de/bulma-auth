<section class="hero is-primary is-small">

    <div class="hero-head">
        <header class="nav">
            <div class="container">
                <div class="nav-left">
                    <a href="/" class="nav-item">
                        <img src="/img/logo/bulma.png" alt="Logo">
                    </a>
                    @if (Auth::guest())

                    @else
                        <a href="/home" class="nav-item is-hidden-mobile {{ Route::is('home') ? 'is-active' : '' }}">
                            Home
                        </a>
                    @endif
                </div>
                <span class="nav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <div class="nav-right nav-menu">
                    @if (Auth::guest())

                    @else
                        <a href="/home" class="nav-item is-hidden-tablet {{ Route::is('home') ? 'is-active' : '' }}">
                            Home
                        </a>
                    @endif

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