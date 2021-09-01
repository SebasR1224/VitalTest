@extends('layouts.main', ['activePage' => 'roles' , 'titlePage' => 'Agregar permisos a roles']);
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('roles.update' , $role->id)}}" method="post" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4>Permisos a roles</h4>
                                <p class="card-category text-light">Formulario para agregar permisos los roles en el sistema</p>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                        </div>
                                        <label for="username" class="col-sm-2 col-form-label">Nombre del Rol</label>
                                        <div class="col-sm-7">
                                            <div>{{$role->name}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-sm-2 col-form-label">Permisos</label>
                                    <div class="col-sm-7">
                                      <div class="form-group">
                                        <div class="tab-content">
                                          <div class="tab-pane active">
                                            <table class="table">
                                              <tbody>
                                                    @foreach ($permissions as $id=> $permission)
                                                <tr>
                                                  <td>
                                                    <div class="form-check">
                                                      <label class="form-check-label">
                                                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{$id}}" {{$role->permissions->contains($id) ? 'checked' : ''}}>
                                                        <span class="form-check-sign">
                                                          <span class="check"></span>
                                                        </span>
                                                      </label>
                                                    </div>
                                                  </td>
                                                  <td>
                                                    {{$permission}}
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
                                <button type="submit" class="btn btn-warning">conceder permisos</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
