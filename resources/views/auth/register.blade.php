<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

        <!-- icons -->
        <script src="https://kit.fontawesome.com/18d9640215.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('login-assets/css/owl.carousel.min.css')}}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('login-assets/css/bootstrap.min.css')}}">

        <!-- Style -->
        <link rel="stylesheet" href="{{asset('login-assets/css/style.css')}}">

        <title>Registrarse</title>
      </head>
  <body>
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                <div class="mb-0">
                  <h3 class="text-center mb-0"><img src="{{asset('login-assets/img/logo.png')}}" alt=""></h3>
                  <h3 class="mt-4 font-weight-light">Crear cuenta</h3>
                  <p class="mb-4">Complete las sigientes credenciales para crear su cuenta.</p>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="form-group first">
                    <label for="username">Nombre de usuario</label>
                    <input type="text" class="form-control" id="username" name="username"  value="{{ old('username') }}" required autocomplete="username">
                  </div>
                  @if ($errors->has('username'))
                    <div id="username-error" class="error text-danger pl-3" for="username" style="display: block;">
                        <strong>{{ $errors->first('username') }}</strong>
                    </div>
                  @endif
                  <div class="form-group first">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" id="email" name="email"  value="{{ old('email') }}" required autocomplete="email" >
                  </div>
                  @if ($errors->has('email'))
                    <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                    <strong>{{ $errors->first('email') }}</strong>
                    </div>
                  @endif
                  <div class="form-group last mb-4">
                    <label for="password">Contrase??a</label>
                    <input type="password" class="form-control" id="password" name="password"  required autocomplete="new-password">
                  </div>
                  @if ($errors->has('password'))
                    <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                    <strong>{{ $errors->first('password') }}</strong>
                    </div>
                  @endif
                  <div class="form-group last mb-4">
                    <label for="password_confirmation">Confirmar contrase??a</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" >
                  </div>
                  @if ($errors->has('password_confirmation'))
                    <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </div>
                  @endif
                  <input type="submit" value="Registrarse" class="btn btn-pill text-white btn-block btn-vital">
                  <div class="mt-4">
                    <a href="{{route('login')}}" class="p-2">Iniciar sesi??n</a>
                  </div>

                  <span class="d-block text-center my-2 text-muted"> Registrarse con</span>

                  <div class="social-login text-center">
                    <a href="#" class="facebook">
                      <span class="fab fa-facebook-f"></span>
                    </a>
                    <a href="#" class="google">
                      <span class="fab fa-google"></span>
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="{{asset('login-assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('login-assets/js/popper.min.js')}}"></script>
    <script src="{{asset('login-assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('login-assets/js/main.js')}}"></script>
  </body>
</html>
