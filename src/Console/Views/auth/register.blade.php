@extends(config('bulma-auth.masterview'))


@section(config('bulma-auth.section'))
<section class="hero is-bold">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title">
                        Register an Account
                    </h1>
                    <div class="box">

                        <form role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}

                            <label class="label">Username</label>
                            <p class="control has-icon has-icon-right">

                                <input class="input" type="text" placeholder="John Smith" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="icon is-small">
                                                <i class="fa fa-warning"></i>
                                            </span>
                                    <span class="help is-danger">{{ $errors->first('name') }}</span>
                                @endif

                            </p>

                            <label class="label">Email</label>
                            <p class="control has-icon has-icon-right">
                                <input class="input" type="email" placeholder="jsmith@example.org" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="icon is-small">
                                                <i class="fa fa-warning"></i>
                                            </span>
                                    <span class="help is-danger">{{ $errors->first('email') }}</span>
                                @endif

                            </p>

                            <hr>

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

                            <label class="label has-icon has-icon-right">Confirm Password</label>
                            <p class="control">
                                <input class="input" type="password" placeholder="●●●●●●●" name="password_confirmation" required>
                            </p>

                            <hr>

                            <p class="control">
                                <button class="button is-primary" type="submit">Register</button>
                            </p>

                        </form>
                    </div>
                    <p class="has-text-centered">
                        <a href="/login">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection