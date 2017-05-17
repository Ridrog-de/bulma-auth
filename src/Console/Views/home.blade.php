@extends('layouts.app')

@section('meta')
    <title>{{ config('app.name') . ' | Home' }}</title>
@endsection


@section('style')

@endsection


@section('content')
<section class="section">
    <p>
        Some Text
    </p>
</section>
@endsection


@section('script')

@endsection



@push('heroheader')
<div class="hero-body">
    <div class="container has-text-centered">
        <h1 class="title">
            Home
        </h1>
        <h2 class="subtitle">
            home.blade.php Subtitle
        </h2>
    </div>
</div>
@endpush


@push('heronav')
<div class="hero-foot">

    <nav class="tabs is-boxed is-fullwidth">
        <div class="container">
            <ul>
                <li class="is-active">
                    <a>
                        Link active
                    </a>
                </li>
                <li>
                    <a>
                        Link
                    </a>
                </li>
                <li>
                    <a>
                        Link
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

@endpush
