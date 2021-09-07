@extends('layouts.main' , ['activePage' =>'recomendaciones' , 'titlePage' => 'Lista de laboratorios' ])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Laboratorios</h4>
                                    <p class="card-category">Lista completa de todas las laboratorios registradas en el sistema</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{route('laboratorios.create')}}" class="btn btn-success"> Agregar</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="usuarios" class="table">
                                            <thead class="text-success">
                                                <th>Codigo</th>
                                                <th>Nombre</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            @foreach ($lists as $list)
                                            <tbody>
                                                <tr>
                                                    <td>{{$list->id}}</td>
                                                    <td>{{$list->nombreLaboratorio}}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{route('laboratorios.edit', $list->id)}}" class="btn btn-warning"> <i class="material-icons">edit</i></a>
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


