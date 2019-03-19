@extends('layouts.app')

@section('content')
<div class="page-login">
    <h2>Login</h2>
    <div class="hr mb-50"></div>
    <form class="primary-form w-600" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group mb-15{{ $errors->has('name') ? ' is-invalid' : '' }}">
            <label for="email" class="w-200 pr-20 align-right">{{ __('E-Mail Address') }}</label>

            <div class="w-300">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group mb-15{{ $errors->has('name') ? ' is-invalid' : '' }}">
            <label for="password" class="w-200 pr-20 align-right">{{ __('Password') }}</label>

            <div class="w-300">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group mb-50">
            <div class="w-300 ml-200">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group mb-0">
            <div>
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-secondary" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>
</div>
@endsection
