@extends('layouts.main' , ['activePage' =>'sintomas' , 'titlePage' => 'Lista de sintomas' ])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Sintomas</h4>
                                    <p class="card-category">Lista completa de todos los sintomas registrados</p>
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
                                    @if (session('messageSintoma_add'))
                                    <script>
                                        swal("Aviso","{!! Session::get('messageSintoma_add') !!}" , "success", {
                                            button: "Ok",
                                        })
                                    </script>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#newSintoma">Agregar sintoma</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="usuarios" class="table">
                                            <thead class="text-success">
                                                <th>Codigo</th>
                                                <th>Sintoma</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            @foreach ($sintomas as $sintoma )
                                            <tbody>
                                                <tr>
                                                    <td>{{$sintoma->id}}</td>
                                                    <td>{{$sintoma->nombreSintoma}}</td>
                                                    <td class="td-actions text-right">
                                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editSintoma{{$sintoma->id}}"> <i class="material-icons">edit</i></button>
                                                        <button class="btn btn-success" type="button">
                                                            <i class="material-icons">arrow_circle_up</i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                                <!-- Modal editar -->
                                                <div class="modal fade" id="editSintoma{{$sintoma->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header btn-primary">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Editar sintoma </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form action="{{route('sintoma.save')}}" method="post">
                                                            <input type="hidden" name='id' value="{{ $sintoma->id }}">
                                                            @csrf
                                                            <div class="row mt-2">
                                                                <div class="col-md-12"><input type="text" class="form-control" name="nombreSintoma" value="{{$sintoma->nombreSintoma}}" placeholder="Sintoma"></div>
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
                                    {{$sintomas->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal nuew -->
    <div class="modal fade" id="newSintoma" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="exampleModalCenterTitle">Nuevo sintoma </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="{{route('sintoma.save')}}" method="post">
                @csrf
                <div class="row mt-2">
                    <div class="col-md-12"><input type="text" class="form-control" name="nombreSintoma" placeholder="Sintoma"></div>
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


