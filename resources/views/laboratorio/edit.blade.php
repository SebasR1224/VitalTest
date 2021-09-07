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
                                    <h4 class="card-title">Editar recomendación</h4>
                                    <p class="card-category">Complete todos los campos para editar la laboratio</p>
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
                                    <form action="{{route('laboratorios.update' , $laboratorio->id)}}" method="post" class="form-horizontal">
                                        @csrf
                                        @method('PUT')
                                        <div class="form">
                                            <div class="row">
                                                <div class="col-md-6 mt-md-0 mt-3"> <label>Nombre recomendación</label> <input type="text" name="nombreLaboratorio" value="{{ @old('nombreLaboratorio', $laboratorio->nombreLaboratorio)}}" class="form-control" autofocus></div>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="submit" class="btn btn-warning">Editar recomendación</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer mr-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
