@extends('layouts.main', ['activePage' => 'users' , 'titlePage' => 'Gestion de usuarios']);
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ $user->id ? route('users.update' , $user->id) : route('users.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4>{{$user->id ? 'Editar usuarios' : 'Crear nuevo usuario' }}</h4>
                                <p class="card-category text-light">Complete todos los campos para {{$user->id ? 'editar ' : 'crear '}}un usuario</p>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert - alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="material-icons text-success">account_circle</i></div>
                                        </div>
                                        <label for="username" class="col-sm-2 col-form-label">Nombre de usuario</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" value="{{ @old('username', $user->username)}}" autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="material-icons text-success">email</i></div>
                                        </div>
                                        <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" value="{{ @old('email', $user->email)}}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><span class="material-icons text-success">lock</span></div>
                                        </div>
                                        <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                        <div class="col-sm-7">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="{{$user->id ? 'Actualizar este campo es opcional' : 'Contraseña' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="{{$user->id ? 'btn btn-warning' : 'btn btn-success'}}">{{$user->id ? 'Actualizar usuario' :'Agregar usuario' }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
