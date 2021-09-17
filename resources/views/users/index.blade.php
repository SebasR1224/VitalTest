@extends('layouts.main' , ['activePage' =>'users' , 'titlePage' => 'Lista de usuarios' ])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Nuestra comunidad</h4>
                                    <p class="card-category">Lista completa de todos los usuarios registrados en el sistema</p>
                                </div>
                                <div class="card-body">
                                    @if (session('message_add'))
                                    <script>
                                        swal("Aviso","{!! Session::get('message_add') !!}" , "success", {
                                            button: "Ok",
                                        })
                                    </script>
                                    @endif
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <a href="{{route('users.create')}}" class="btn bnt-sm btn-info">Agregar</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="usuarios" class="table">
                                            <thead class="text-info">
                                                <th>Codigo</th>
                                                <th>Nombre de usuario</th>
                                                <th>Correo</th>
                                                <th>Rol</th>
                                                <th>Fecha de creacion</th>
                                                <th>Estado</th>
                                                <th class="text-right">Acciones</th>
                                            </thead>
                                            @foreach ($users as $user )
                                            <tbody>
                                                <tr>
                                                    <td>{{$user->id}}</td>
                                                    <td>{{$user->username}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>
                                                        @forelse ($user->roles as $role )
                                                            @if ($role->name == "Gerente")
                                                            <span class="badge badge-info">{{$role->name}}</span>
                                                            @elseif ($role->name == "Farmacéutico")
                                                            <span class="badge badge-warning text-white">{{$role->name}}</span>
                                                            @else
                                                            <span class="badge badge-success">{{$role->name}}</span>
                                                            @endif
                                                        @empty
                                                            <span class="badge badge-danger">Usuario sin rol</span>
                                                        @endforelse
                                                    </td>
                                                    <td>{{$user->created_at}}</td>
                                                    <td>
                                                        <form action="{{route('update.status', $user->id)}}" method="POST" class="d-inline form-update">
                                                            @csrf
                                                            @foreach ($user->roles as $role)
                                                            <button class="btn btn-sm {{$user->status == 1 ? 'btn-success' : 'btn-danger'}}" {{$role->name == 'Gerente' ? 'disabled="true"' : ''}} type="submit">{{$user->status == 1 ? 'Activo' : 'Inactivo'}}</button>
                                                            @endforeach
                                                        </form>
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <a href="{{route('users.show', ['id'=>$user->id])}}"  class="btn btn-info"><i class="material-icons">contacts</i></a>
                                                        <a href="{{route('users.edit', ['id'=> $user->id]) }}" class="btn btn-warning"> <i class="material-icons">edit</i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer mr-auto">
                                    {{$users->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    {{-- Alertas de confirmacion estado --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('.form-update').submit(function(e){
            e.preventDefault();
            Swal.fire({
            title: '¿Está seguro?',
            text: "Cambiara el estado del usuario",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si, Cambiar estado!',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
               this.submit();
            }
            })
        });
    </script>
@endsection


