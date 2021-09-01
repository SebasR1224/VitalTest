@extends('layouts.main', ['activePage' => 'users' , 'titlePage' => 'Gestion de usuarios']);
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('users.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4>Crear nuevo usuario</h4>
                                <p class="card-category text-light">Complete todos los campos para crear un usuario</p>
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
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" autofocus>
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
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico">
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
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <div class="tab-content">
                                                <div class="tab-pane active">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach ($roles as $id => $role)
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input class="form-check-input" type="checkbox" name="roles[]"
                                                                                value="{{ $id }}"
                                                                            >
                                                                            <span class="form-check-sign">
                                                                                <span class="check"></span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    {{ $role }}
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-warning">Añadir</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
