@extends('layouts.app')
@section('content')
<!--inicio tarjeta-->
<div class="container">
<div class="row">
        <div class="col s12 m12">
          <div class="card deep-purple accent-1">
            <div class="card-content white-text">
              <span class="card-title center">Iniciar sesion</span>
<!--formulario-->
               <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                        <i class="small material-icons">contact_mail</i>
                            <label for="email" class="col-md-4 col-form-label text-md-right blue-text text-darken-2">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <i class="small material-icons">lock_open</i>
                            <label for="password" class="col-md-4 col-form-label text-md-right blue-text text-darken-2">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label blue-text text-darken-2" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    <div class="center">
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                      </div>
                    </form>
<!--end -form-->


            </div>
          </div>
        </div>
 </div>
 </div>
<!--end-tarjeta-->
@endsection