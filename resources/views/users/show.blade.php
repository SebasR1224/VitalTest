@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Detalles de usuario' ])
    <!-- CSS Users -->
    <link rel="stylesheet" href="{{asset('css/user/UserStyle.css')}}">
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <div class="card-title">Informacion personal</div>
                        <p>Datos completos de {{$user->username}} el cual está registrado en el sistema</p>
                    </div>
                    {{-- body --}}
                    <div class="card-body">
                        <div class="row">
                                <div class="col-md-12">
                                    <div class="card user-card-full">
                                        <div class="row m-l-0 m-r-0">
                                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                                <div class="card-block text-center text-white">
                                                    <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                                    <h6 class="f-w-600">{{$user->username}}</h6>
                                                    <p>
                                                        @forelse ($user->roles as $role)
                                                            {{$role->name}}
                                                        @empty
                                                            Sin rol asignado
                                                        @endforelse
                                                    </p><i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                    <p>{{$user->email}}</p><i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="card-block">
                                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Información detallada</h6>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Nombres</p>
                                                            <h6 class="text-muted f-w-400">{{@old('nombre', $datos->nombre)}}</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Apellidos</p>
                                                            <h6 class="text-muted f-w-400">{{@old('apellido1', $datos->apellido1)}} {{@old('apellido2', $datos->apellido2)}}</h6>
                                                        </div>
                                                    </div>
                                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Tipo de documento</p>
                                                            <h6 class="text-muted f-w-400">{{@old('tipoDocumento', $datos->tipoDocumento)}}</h6>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <p class="m-b-10 f-w-600">Número de documuento</p>
                                                            <h6 class="text-muted f-w-400">{{@old('numDocumento', $datos->numDocumento)}}</h6>
                                                        </div>
                                                    </div>
                                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                                    <div class="row">
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Teléfono</p>
                                                                <h6 class="text-muted f-w-400">{{@old('telefono', $datos->telefono)}}</h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Dirección</p>
                                                                <h6 class="text-muted f-w-400">{{@old('direccion', $datos->direccion)}}</h6>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="m-b-10 f-w-600">Fecha de nacimiento</p>
                                                                <h6 class="text-muted f-w-400">{{@old('fechaNacimiento', $datos->fechaNacimiento)}}</h6>
                                                            </div>
                                                    </div>
                                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                        <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
