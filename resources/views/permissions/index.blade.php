@extends('layouts.main' , ['activePage' =>'permissions' , 'titlePage' => 'Lista de permisos' ])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                @if (session('messagePermission_add'))
                                    <script>
                                        swal("Aviso","{!! Session::get('messagePermission_add') !!}" , "success", {
                                            button: "Ok",
                                        })
                                    </script>
                                @endif
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Lista de permisos</h4>
                                    <p class="card-category">permisos registrados</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{route('permissions.create')}}" class="btn btn-success"> Agregar</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="usuarios" class="table">
                                            <thead class="text-success">
                                                <th>Codigo</th>
                                                <th>Nombre permiso</th>
                                                <th>Guard</th>
                                                <th>Creat_at</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            @foreach ($permissions as $permission)
                                            <tbody>
                                                <tr>
                                                    <td>{{$permission->id}}</td>
                                                    <td>{{$permission->name}}</td>
                                                    <td>{{$permission->guard_name}}</td>
                                                    <td>{{$permission->created_at}}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{route('permissions.edit', $permission->id)}}" class="btn btn-warning"> <i class="material-icons">edit</i></a>
                                                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" class="d-inline">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn btn-danger" type="submit"><i class="material-icons">close</i> </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{$permissions->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



