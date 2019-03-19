@extends('layouts.app')

@section('content')

<div class="page-register">
    <h2>Register</h2>
    <div class="hr mb-50"></div>
    <form class="primary-form w-600" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group mb-15{{ $errors->has('name') ? ' is-invalid' : '' }}">
            <label for="name" class="w-200 pr-20 align-right">{{ __('Name') }}</label>

            <div class="w-300">
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group mb-15{{ $errors->has('email') ? ' is-invalid' : '' }}">
            <label for="email" class="w-200 pr-20 align-right">{{ __('E-Mail Address') }}</label>

            <div class="w-300">
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group mb-15{{ $errors->has('password') ? ' is-invalid' : '' }}">
            <label for="password" class="w-200 pr-20 align-right">{{ __('Password') }}</label>

            <div class="w-300">
                <input id="password" type="password" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group mb-35{{ $errors->has('password') ? ' is-invalid' : '' }}">
            <label for="password-confirm" class="w-200 pr-20 align-right">{{ __('Confirm Password') }}</label>

            <div class="w-300">
                <input id="password-confirm" type="password" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group mb-0">
            <div class="">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
