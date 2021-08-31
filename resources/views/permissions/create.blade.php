@extends('layouts.main', ['activePage' => 'permissions' , 'titlePage' => 'Agregar permisos']);
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('permissions.store') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4>Crear permisos</h4>
                                <p class="card-category text-light">Complete todos los campos para crear un permiso</p>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="material-icons text-success">account_circle</i></div>
                                        </div>
                                        <label for="username" class="col-sm-2 col-form-label">Nombre del permiso</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="username" name="name" placeholder="Nombre del permiso" value="{{ @old('name', $permission->name)}}" autofocus>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-success">Agregar permiso</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
