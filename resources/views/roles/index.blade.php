@extends('layouts.main' , ['activePage' =>'roles' , 'titlePage' => 'Lista de roles' ])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                @if (session('messageRole_add'))
                                    <script>
                                        swal("Aviso","{!! Session::get('messageRole_add') !!}" , "success", {
                                            button: "Ok",
                                        })
                                    </script>
                                @endif
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Lista de roles</h4>
                                    <p class="card-category">Roles registrados</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="usuarios" class="table">
                                            <thead class="text-success">
                                                <th>Codigo</th>
                                                <th>Nombre rol</th>
                                                <th>Permisos</th>
                                                <th>Guard</th>
                                                <th>Creat_at</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            @foreach ($roles as $role)
                                            <tbody>
                                                <tr>
                                                    <td>{{$role->id}}</td>
                                                    <td>{{$role->name}}</td>
                                                    <td>
                                                        @forelse ($role->permissions as $permission)
                                                            <span class="badge badge-info">{{$permission->name}}</span>
                                                        @empty
                                                            <span class="badge badge-danger">Sin permisos</span>
                                                        @endforelse
                                                    </td>
                                                    <td>{{$role->guard_name}}</td>
                                                    <td>{{$role->created_at}}</td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{route('roles.edit', $role->id)}}" class="btn btn-warning">Agregar permisos</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{$roles->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
