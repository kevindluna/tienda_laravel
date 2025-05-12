@extends('layouts.app')

@section('content')
    @vite(['resources/css/login.css'])

    <div class="container-form">
        <div class="login form">
            <h1>{{ __('Registrarse') }}</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input id="name" type="text" placeholder="{{ __('Ingresa su nombre') }}"
                    class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                    required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <input id="lastname" type="text" placeholder="{{ __('Ingresa su apellido') }}"
                    class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                    value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


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

                <input id="password-confirm" type="password" placeholder="{{ __('Confirme su contraseña') }}"
                    class="form-control" name="password_confirmation" required autocomplete="new-password">

                <button type="submit" class="btn btn-primary">
                    {{ __('Registrarse') }}
                </button>
            </form>

            @if (Route::has('login'))
                <span class="signup text-center w-100">{{ __('¿Ya tienes cuenta?') }}
                    <a class="link-primary" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                </span>
            @endif


        </div>
    </div>
@endsection
