@extends('layouts.app')

@section('meta')
    <title>{{ config('app.name') . ' | Home' }}</title>
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
            Title
        </h1>
        <h2 class="subtitle">
            Subtitle
        </h2>
    </div>
</div>
@endpush


@push('heronav')
<div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
        <div class="container">
            <ul>
                <li class="is-active"><a>Overview</a></li>
                <li><a>Modifiers</a></li>
                <li><a>Grid</a></li>
                <li><a>Elements</a></li>
                <li><a>Components</a></li>
                <li><a>Layout</a></li>
            </ul>
        </div>
    </nav>
</div>
@endpush
