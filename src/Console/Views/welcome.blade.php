@extends('layouts.app')

@section('meta')
    <title>{{ config('app.name') . ' | Welcome' }}</title>
@endsection


@section('style')

@endsection


@section('content')

@endsection


@section('script')

@endsection


@push('heroheader')
<div class="hero-body">
    <div class="container has-text-centered">
        <h1 class="title">
            Welcome
        </h1>
        <h2 class="subtitle">
            welcome.blade.php Subtitle
        </h2>
    </div>
</div>
@endpush


@push('heronav')
<div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
        <div class="container">
            <ul>
                <li class="is-active"><a>Link active</a></li>
                <li><a>Link</a></li>
            </ul>
        </div>
    </nav>
</div>
@endpush
