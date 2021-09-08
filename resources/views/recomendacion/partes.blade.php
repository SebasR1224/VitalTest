@extends('layouts.main' , ['activePage' =>'partes' , 'titlePage' => 'Lista de partes del cuerpo' ])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Partes del cuerpo</h4>
                                    <p class="card-category">Lista completa de todas las partes de cuerporegistradas en el sistema</p>
                                </div>
                                <div class="card-body">
                                    @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                    @endif
                                    @if (session('messageParte_add'))
                                    <script>
                                        swal("Aviso","{!! Session::get('messageParte_add') !!}" , "success", {
                                            button: "Ok",
                                        })
                                    </script>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newParte">Agregar</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="usuarios" class="table">
                                            <thead class="text-success">
                                                <th>Codigo</th>
                                                <th>Parte del cuerpo</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            @foreach ($partes as $parte )
                                            <tbody>
                                                <tr>
                                                    <td>{{$parte->id}}</td>
                                                    <td>{{$parte->nombreParte}}</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editParte{{$parte->id}}"> <i class="material-icons">edit</i></button>
                                                        <button class="btn btn-danger" type="button">
                                                            <i class="material-icons">remove</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                                <!-- Modal editar -->
                                                <div class="modal fade" id="editParte{{$parte->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header btn-primary">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Editar parte del cuerpo </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form action="{{route('parte.save')}}" method="post">
                                                            <input type="hidden" name='id' value="{{ $parte->id }}">
                                                            @csrf
                                                            <div class="row mt-2">
                                                                <div class="col-md-12"><input type="text" class="form-control" name="nombreParte" value="{{$parte->nombreParte}}" placeholder="Parte del cuerpo"></div>
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
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{$partes->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal nuew -->
    <div class="modal fade" id="newParte" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="exampleModalCenterTitle">Nueva parte del cuerpo </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="{{route('parte.save')}}" method="post">
                @csrf
                <div class="row mt-2">
                    <div class="col-md-12"><input type="text" class="form-control" name="nombreParte" placeholder="Parte del cuerpo"></div>
                </div>
                <div class="modal-footer mt-4">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Agregar cambios</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
@endsection


