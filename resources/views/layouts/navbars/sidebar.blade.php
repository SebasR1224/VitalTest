<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{asset('img/sidebar-1.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('vitaltest') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="material-icons">home</i>
            <p>{{ __('Inicio') }}</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#usuarios" aria-expanded="true">

          <p>{{ __('Comunidad') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="usuarios">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('users.profile', ['id'=>Auth::user()->id])}}">
                  <i class="material-icons">face </i>
                  <span class="sidebar-normal"> {{ __('Mi perfil') }} </span>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('users.index')}}">
                <i class="material-icons">group_add </i>
                <span class="sidebar-normal"> {{ __('Usuarios') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#testmedico" aria-expanded="true">

          <p>{{ __('Test médico') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="testmedico">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'partes' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('partes.show')}}">
                  <i class="material-icons">emoji_people </i>
                  <span class="sidebar-normal"> {{ __('Partes del cuerpo') }} </span>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'sintomas' ? ' active' : '' }}">
              <a class="nav-link" href="{{route('sintomas.show')}}">
                <i class="material-icons">sick </i>
                <span class="sidebar-normal"> {{ __('Sintomas') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'recomendaciones' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('recomendacion.index')}}">
                  <i class="material-icons">medication_liquid </i>
                  <span class="sidebar-normal"> {{ __('Recomendaciones') }} </span>
                </a>
              </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('permissions.index')}}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Permisos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
