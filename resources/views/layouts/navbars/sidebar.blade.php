<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{asset('img/sidebar-1.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="/" class="simple-text logo-normal">
        <img src="assets/img/logo.png" alt="">
        vital<span>test</span>
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
                <i class="material-icons">manage_accounts </i>
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
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#medicamento" aria-expanded="true">
          <p>{{ __('Medicamentos') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="medicamento">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'inventario' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('medicamentos.index')}}">
                  <i class="material-icons">inventory_2</i>
                  <p>{{ __('Inventario') }}</p>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'commerce' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('medicamento.commerce')}}">
                  <i class="material-icons">healing</i>
                    <p>{{ __('Medicamentos') }}</p>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'laboratorios' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('laboratorios.index')}}">
                  <i class="material-icons">science</i>
                    <p>{{ __('Laboratorio') }}</p>
                </a>
              </li>
              <li class="nav-item{{ $activePage == 'categorias' ? ' active' : '' }}">
                <a class="nav-link" href="{{route('categorias.index')}}">
                  <i class="material-icons">category</i>
                    <p>{{ __('Categorias') }}</p>
                </a>
              </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('permissions.index')}}">
          <i class="material-icons">format_list_numbered_rtl</i>
            <p>{{ __('Permisos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
        <a class="nav-link" href="{{route('roles.index')}}">
          <i class="material-icons">build</i>
            <p>{{ __('Roles') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
