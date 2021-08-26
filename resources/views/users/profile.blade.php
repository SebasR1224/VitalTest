@extends('layouts.main', ['activePage' => 'profile', 'titlePage' => 'Mi perfil' ])
@section('content')
<div class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h3 class="card-title">Mi perfil</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                              <div class="card-body">
                                @if (session('messageData_add'))
                                <script>
                                    swal("Aviso","{!! Session::get('messageData_add') !!}" , "success", {
                                        button: "Ok",
                                    })
                                </script>
                                @endif
                                <div class="d-flex flex-column align-items-center text-center">
                                  <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                  <div class="mt-3">
                                    <h4 class="font-weight-bold">{{$user->username}}</h4>
                                    <p class="text-secondary mb-1">{{$user->email}}</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card mb-3">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Nombre</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                    {{ @old('name', $datos->nombre)}}
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Apellidos completos</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                    {{ @old('apellido1', $datos->apellido1)}} {{ @old('apellido2', $datos->apellido2)}}
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Tipo de documento</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                    {{ @old('tipoDodumento', $datos->tipoDocumentos)}}
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Número de documento</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                    {{ @old('numDocumento', $datos->numDocumento)}}
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Teléfono</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                    {{ @old('telefono', $datos->telefono)}}
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Dirección</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                    {{ @old('direccion', $datos->direccion)}}
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <h6 class="mb-0">Fecha de nacimiento</h6>
                                  </div>
                                  <div class="col-sm-9 text-secondary">
                                    {{ @old('fechaNacimiento', $datos->fechaNacimiento)}}
                                  </div>
                                </div>
                                <hr>
                                <div class="row">
                                  <div class="col-sm-3">
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editProfile">Editar información</button>
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
    <!-- Modal -->
    <div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalCenterTitle">Editar información personal </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{route('save.profile')}}" method="post">
                <input type="hidden" name="id" value="{{ @old('id', $datos->id)}}">
                <input type="hidden" name="user_id" value=" {{ Auth::user()->id}}">
                @csrf
                <div class="row mt-2">
                    <div class="col-md-4"><input type="text" class="form-control" name="nombre" placeholder="Nombre"></div>
                    <div class="col-md-4"><input type="text" class="form-control" name="apellido1"  placeholder="Primer apellido"></div>
                    <div class="col-md-4"><input type="text" class="form-control" name="apellido2"  placeholder="Segundo apellido"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <select name="tipoDocumento" class="form-control">
                            <option value="0" selected>Tipo de documento</option>
                            <option value="TI">Targeta de identidad</option>
                            <option value="CC">Cedula de ciudadania</option>
                            <option value="PS">Pasaporte</option>
                        </select>
                    </div>
                    <div class="col-md-6"><input type="text" class="form-control" name="numDocumento" placeholder="Numero de documento"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="text" class="form-control" name="telefono" placeholder="Teléfono"></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="direccion" placeholder="Dirección"></div>
                    <div class="col-md-6"><input type="hidden" class="form-control" name="user_1" value="2" placeholder="Dirección"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><input type="date" class="form-control" name="fechaNacimiento" placeholder="Fecha de nacimiento" ></div>
                    <div class="col-md-6"><input type="text" class="form-control" name="estado" placeholder="Estado" ></div>
                </div>
                <div class="modal-footer mt-4">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-warning">Guardar cambios</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection


