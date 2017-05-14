@extends(config('bulma-auth.masterview'))


@section('meta')
    <title>{{ config('app.name') . ' | Login' }}</title>
@endsection

@section(config('bulma-auth.section'))
<section class="hero is-bold">

    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title">
                        Login
                    </h1>
                    <div class="box">
                        <form role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <label class="label">Email</label>
                            <p class="control has-icon has-icon-right">
                                <input class="input" type="email" placeholder="jsmith@example.org" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="icon is-small">
                                            <i class="fa fa-warning"></i>
                                        </span>
                                    <span class="help is-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </p>

                            <label class="label">Password</label>
                            <p class="control has-icon has-icon-right">
                                <input class="input" type="password" placeholder="●●●●●●●" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="icon is-small">
                                            <i class="fa fa-warning"></i>
                                        </span>
                                    <span class="help is-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </p>

                            <hr>

                            <p class="control">
                                <button class="button is-primary" type="submit">Login</button>
                            </p>

                        </form>
                    </div>
                    <p class="has-text-centered">
                        <a href="/register">Register an Account</a>
                        |
                        <a href="{{ url('/password/reset') }}">Forgot password</a>
                    </p>

                </div>
            </div>
        </div>
    </div>

</section>
@endsection