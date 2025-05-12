@extends('layouts.app')
@section('content')
    @vite(['resources/css/login.css'])
    <div>
        <div class="container-form">
            <div class="login form">
                <h1>{{ __('Iniciar Sesión ') }}</h1>
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf

                    <input id="email" type="email" placeholder="{{ __('Ingresa su correo electronico') }}"
                        class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                        required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password"
                        placeholder="{{ __('Ingresa su contraseña') }}">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Recordarme') }}
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif


                    <button type="submit" class="btn btn-primary">
                        {{ __('Iniciar Sesión ') }}
                    </button>
                </form>

                @if (Route::has('register'))
                    <span class="signup text-center w-100">{{ __('¿No tienes cuenta?') }}
                        <a class="link-primary" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                    </span>
                @endif


            </div>
        </div>
    </div>
@endsection
