@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('vitaltest')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><strong>{{ __('Inicio') }}</strong></h4>
            <div class="social-line">
              <a href="#" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="#" class="btn btn-just-icon btn-link btn-white">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>
          <div class="card-body">
            <p class="card-description text-center"><strong>vitaltest</strong> te da la bienvenida, esperamos disfrutes de nuestros beneficios </p>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <span class="material-icons">person_outline</span>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Correo electrónico...') }}" value="{{ old('email', null) }}" required autocomplete="email" autofocus>
              </div>
              @if ($errors->has('email'))
                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                  <strong>{{ $errors->first('email') }}</strong>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Contraseña...') }}" required autocomplete="current-password">
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <strong>{{ $errors->first('password') }}</strong>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
                @if (Route::has('password.request'))
                    <a class="text-info" href="{{ route('password.request') }}">
                        <small>{{ __('¿Olvidaste la contraseña?') }}</small>
                    </a>
                @endif
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn text-info btn-link btn-lg">{{ __('Iniciar sesión') }}</button>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-6  text-center">
            <a href="{{ route('register') }}" class="text-light">
                <small>{{ __('Crear nueva cuenta') }}</small>
            </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
