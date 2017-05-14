@extends(config('bulma-auth.masterview'))


@section('meta')
    <title>{{ config('app.name') . ' | Reset Password' }}</title>
@endsection


@section(config('bulma-auth.section'))
<section class="hero is-bold">

    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title">
                        Reset Password
                    </h1>
                    <div class="box">
                        @if (session('status'))
                            <div class="notification is-success">
                                <button class="delete"></button>
                                {{ session('status') }}
                            </div>

                        @endif

                        <form role="form" method="POST" action="{{ url('/password/reset') }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{ $token }}">

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

                            <label class="label">New Password</label>
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

                            <p class="control">
                                <button class="button is-primary" type="submit">Reset Password</button>
                            </p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection