@extends('layouts.main' , ['activePage' =>'partes' , 'titlePage' => 'Gestion de recomendaciones' ])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">{{$recomendacion->id ? 'Editar recomendación' : 'Registar nueva recomendación'}}</h4>
                                    <p class="card-category">Complete todos los campos para {{$recomendacion->id ? 'editar ' : 'crear '}}la recomendacion</p>
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
                                    <form action="{{$recomendacion->id ? route('recomendacion.update' , $recomendacion->id) : route('recomendacion.create')}}" method="post" class="form-horizontal">
                                        @csrf
                                        <div class="form">
                                            <div class="row">
                                                <div class="col-md-6 mt-md-0 mt-3"> <label>Nombre recomendación</label> <input type="text" name="nombreRecomendacion" value="{{ @old('nombreRecomendacion', $recomendacion->nombreRecomendacion)}}" class="form-control" autofocus></div>
                                                <div class="col-md-6 mt-md-0 mt-3"> <label>Parte del cuerpo</label>
                                                    <select name="parte_id" id="" class="form-control">
                                                        <option value="">Seleccione...</option>
                                                        @foreach ($partes as $parte)
                                                            <option value="{{$parte->id}}" {{$parte->id == $recomendacion->parte_id ? "selected" : ""}} >{{$parte->nombreParte}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mt-md-0 mt-3"> <label>Sintoma</label>
                                                    <select name="sintoma_id" id="" class="form-control">
                                                        <option value="">Seleccione...</option>
                                                        @foreach ($sintomas as $sintoma)
                                                            <option value="{{$sintoma->id}}" {{$sintoma->id == $recomendacion->sintoma_id ? "selected" : ""}} >{{$sintoma->nombreSintoma}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 mt-md-0 mt-3"> <label>Dosis</label> <input type="text" name="dosis" value="{{ @old('dosis', $recomendacion->dosis)}}" class="form-control" ></div>
                                                <div class="col-md-4 mt-md-0 mt-3"> <label>Frecuencia</label> <input type="text" name="frecuencia" value="{{ @old('frecuencia', $recomendacion->frecuencia)}}" class="form-control"></div>
                                                <div class="col-md-4 mt-md-0 mt-3"> <label>Tiempo</label><input type="text" name="tiempo" value="{{ @old('tiempo', $recomendacion->tiempo)}}" class="form-control"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 mt-md-0 mt-3"> <label>Intensidad mínima</label> <input type="text" name="intensidadMin" value="{{ @old('intensidadMin', $recomendacion->intensidadMin)}}" class="form-control" ></div>
                                                <div class="col-md-3 mt-md-0 mt-3"> <label>Intensidad maxima</label> <input type="text" name="intensidadMax" value="{{ @old('intensidadMax', $recomendacion->intensidadMax)}}" class="form-control"></div>
                                                <div class="col-md-3 mt-md-0 mt-3"> <label>Edad mínima</label><input type="text" name="edadMin" value="{{ @old('edadMin', $recomendacion->edadMin)}}" class="form-control"></div>
                                                <div class="col-md-3 mt-md-0 mt-3"> <label>Edad maxima</label><input type="text" name="edadMax" value="{{ @old('edadMax', $recomendacion->edadMax)}}" class="form-control"></div>
                                                <input type="hidden" name="estado" value="Activo">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 mt-md-0 mt-3"> <label>Imc</label>
                                                    <select name="imc_id" id="" class="form-control">
                                                        <option value="">Seleccione...</option>
                                                        @foreach ($imcs as $imc)
                                                            <option value="{{$imc->id}}" {{$imc->id == $recomendacion->imc_id ? "selected" : ""}} >{{$imc->nombreImc}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                    <div class="col-md-6 mt-md-0 mt-3"> <label>Informacíon adicional</label> <input type="text" name="informacionAdicional" value="{{ @old('informacionAdicional', $recomendacion->informacionAdicional)}}" class="form-control" ></div>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="submit" class="btn {{$recomendacion->id ? 'btn-warning' : 'btn-success'}}">{{$recomendacion->id ? 'Aditar recomendación' : 'Guardar recomendación'}}</button>
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


