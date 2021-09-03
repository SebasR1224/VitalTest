@extends('layouts.main' , ['activePage' =>'partes' , 'titlePage' => 'Editar recomendaciones' ])
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
                                    <p class="card-category">Complete todos los campos para editar la recomendacion</p>
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
                                    <form action="{{route('recomendacion.update' , $recomendacion->id)}}" method="post" class="form-horizontal">
                                        @csrf
                                        @method('PUT')
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
                                            {{-- <div class="row">
                                                <label for="roles" class="col-sm-2 col-form-label">Contraindicaciones</label>
                                                <div class="col-sm-7">
                                                    <div class="form-group">
                                                        <div class="tab-content">
                                                            <div class="tab-pane active">
                                                                <table class="table">
                                                                    <tbody>
                                                                        @foreach ($roles as $id => $role)
                                                                        <tr>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input class="form-check-input" type="radio" name="roles[]"
                                                                                            value="{{ $id }}"
                                                                                        >
                                                                                        <span class="form-check-sign">
                                                                                            <span class="check"></span>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                {{ $role }}
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="submit" class="btn btn-warning">Aditar recomendación</button>
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
