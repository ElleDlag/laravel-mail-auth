@extends('layouts.app')

@section('login')
<main class="d-flex flex-wrap flex-column align-items-center justify-content-center wrapper_login">
    <div class='short-nav'>
        <a href="{{__('/')}}"><i class="fas fa-home"></i></a>
        <h2 class="">Login</h2>
    </div>

    <div class="login-side">
        <form method="POST" action="{{ __('login') }}">
            @csrf
            @method('post')

            <div class="d-flex flex-row flex-nowrap align-items-center field_email">
                <label for="email" class="">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
 
            </div>

            <div class="d-flex flex-nowrap align-items-center field_password">
                <label for="password" class="">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>

            <div class="d-flex flex-nowrap align-items-center field_remember">
            
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
            </div>

            <div class="d-flex flex-nowrap align-items-center mb-0 field_submit">
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary alt">
                        {{ __('Login') }}
                    </button>
                    <a class="btn btn-primary alt" href="{{ route('register') }}" role="button">Register</a>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</main>
@endsection
