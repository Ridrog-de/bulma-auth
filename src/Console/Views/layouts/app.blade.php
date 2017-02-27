<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    @include('layouts.shared.globalmeta')

    @yield('meta')

    @include('layouts.shared.csrf')

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('style')

</head>
<body>
<div id="app">
    @include('layouts.app.navbar')

    @yield('content')

    @include('layouts.app.footer')

</div>

<script src="{{ asset('js/app.js') }}"></script>

@yield('script')

<script>

    (function() {
        var burger = document.querySelector('.nav-toggle');
        var menu = document.querySelector('.nav-menu');
        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        });
    })();
</script>

</body>