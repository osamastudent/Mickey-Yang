@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

              <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="form-group">
            <label for="email">{{ __('Email Address') }}</label>
            <input id="email" type="email"
                class="form-control @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}"
                required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password"
                class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <!-- Remember -->
        <div class="form-group d-flex justify-content-between align-items-center">
            <div class="form-check">
                <input class="form-check-input" type="checkbox"
                       name="remember" id="remember"
                       {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            @if (Route::has('password.request'))
                <a class="small text-primary" href="{{ route('password.request') }}">
                    {{ __('Forgot Password?') }}
                </a>
            @endif
        </div>

        <!-- Login Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Login') }}
            </button>
        </div>

        <!-- Register -->
        <div class="text-center mt-3">
            <span class="text-muted">Don’t have an account?</span>
           {{-- <a href="{{ route('register') }}" class="font-weight-bold">
                Sign Up
            </a> --}}
        </div>

    </form>
</div>

            </div>
        </div>
    </div>
</div>
@endsection
