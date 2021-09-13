@extends('layouts.main' , ['activePage' =>'inventario' , 'titlePage' => 'inventario de medicamentos' ])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Medicamentos</h4>
                                    <p class="card-category">Lista completa de todos los medicamentos</p>
                                </div>
                                <div class="card-body">
                                    @if (session('messageMedicamento_add'))
                                    <script>
                                        swal("Aviso","{!! Session::get('messageMedicamento_add') !!}" , "success", {
                                            button: "Ok",
                                        })
                                    </script>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{route('medicamentos.create')}}" class="btn btn-success"> Nuevo medicamento</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="usuarios" class="table">
                                            <thead class="text-success">
                                                <th>Codigo</th>
                                                <th>Nombre</th>
                                                <th>Precio Normal</th>
                                                <th>Descuento</th>
                                                <th>Laboratorio</th>
                                                <th>Categoria</th>
                                                <th>Estado</th>
                                                <th>imagen</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            @foreach ($lists as $list)
                                            <tbody>
                                                <tr>
                                                    <td>{{$list->id}}</td>
                                                    <td>{{$list->nombreMedicamento}}</td>
                                                    <td>{{$list->precioNormal}}</td>
                                                    <td>{{$list->descuento}} %</td>
                                                    <td>{{$list->laboratorio->nombreLaboratorio}}</td>
                                                    <td>{{$list->categoria->nombreCategoria}}</td>
                                                    <td>{{$list->estado}}</td>
                                                    <td>
                                                        <img src="/imagen/{{$list->imagen}}" width="50px">
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{route('medicamentos.edit', $list->id)}}" class="btn btn-warning"> <i class="material-icons">edit</i></a>
                                                        <a href="{{route('medicamentos.show', $list->id)}}"  class="btn btn-white"><i class="material-icons">visibility</i></a>
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
