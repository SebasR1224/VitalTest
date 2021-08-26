@extends('layouts.main' , ['activePage' =>'recomendaciones' , 'titlePage' => 'Lista de recomendaciones' ])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Recomendaciones</h4>
                                    <p class="card-category">Lista completa de todas las recomendaciones registradas en el sistema</p>
                                </div>
                                <div class="card-body">
                                    @if (session('messageRecome_add'))
                                    <script>
                                        swal("Aviso","{!! Session::get('messageRecome_add') !!}" , "success", {
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
                                                <th>Nombre</th>
                                                <th>Parte del cuerpo</th>
                                                <th>Sintoma</th>
                                                <th>Dosis</th>
                                                <th>Frecuencia</th>
                                                <th>Tiempo</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            @foreach ($lists as $list)
                                            <tbody>
                                                <tr>
                                                    <td>{{$list->id}}</td>
                                                    <td>{{$list->nombreRecomendacion}}</td>
                                                    <td>{{$list->parte->nombreParte}}</td>
                                                    <td>{{$list->sintoma->nombreSintoma}}</td>
                                                    <td>{{$list->dosis}}</td>
                                                    <td>{{$list->frecuencia}}</td>
                                                    <td>{{$list->tiempo}}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="" class="btn btn-warning"> <i class="material-icons">edit</i></a>
                                                        <a href="{{route('recomendacion.show', ['id'=>$list->id])}}"  class="btn btn-success"><i class="material-icons">playlist_add_check_circle</i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{$lists->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


