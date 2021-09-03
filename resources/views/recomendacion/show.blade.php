@extends('layouts.main', ['activePage' => 'recomendaciones', 'titlePage' => 'Recomendación detallada' ])
@section('content')
<div class="content">
    <div class="container-fluid">
        @if (session('messageRecomendacion_add'))
        <script>
            swal("Aviso","{!! Session::get('messageRecomendacion_add') !!}" , "success", {
                button: "Ok",
            })
        </script>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="bg-white border rounded mt-2">
                    <div class=" px-3 mt-3 d-flex flex-row justify-content-between"><h4>{{$recomendacion->nombreRecomendacion}}</h4></div>
                    <hr>
                    <div class="row px-5 mb-3">
                        <div class="col-md-3 mt-1">
                            <div class="d-flex flex-row"> <i class="material-icons text-primary">emoji_people </i>
                                <div class="ml-2"> <span class="d-block font-weight-bold">Parte del cuerpo</span> <span>{{$recomendacion->parte->nombreParte}}</span> </div>
                            </div>
                        </div>
                        <div class="col-md-3 mt-1">
                            <div class="d-flex flex-row"> <i class="material-icons text-primary">sick </i>
                                <div class="ml-2"> <span class="d-block font-weight-bold">Sintoma</span> <span>{{$recomendacion->sintoma->nombreSintoma}}</span> </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-1">
                            <div class="d-flex flex-row"><i class="material-icons text-primary">receipt_long </i>
                                <div class="ml-2"> <span class="d-block font-weight-bold">Dosis</span> <span>{{$recomendacion->dosis}}</span> </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-1">
                            <div class="d-flex flex-row"><i class="material-icons text-primary">hourglass_top </i>
                                <div class="ml-2"> <span class="d-block font-weight-bold">Frecuencia</span> <span>{{$recomendacion->frecuencia}}</span> </div>
                            </div>
                        </div>
                        <div class="col-md-2 mt-1">
                            <div class="d-flex flex-row"><i class="material-icons text-primary">timelapse </i>
                                <div class="ml-2"> <span class="d-block font-weight-bold">Tiempo</span> <span>{{$recomendacion->tiempo}}</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6 mt-3">
                        <div class="bg-white p-3 rounded border">
                            <h6>Solución con medicamenstos</h6>
                            <p class="text-black-50 content mb-5">para la recomendación <strong>{{$recomendacion->nombreRecomendacion}}</strong> los medicamentos que aliviaran el malestar son</p>
                            <div class="d-flex flex-row">
                                @forelse ($recomendacion->medicamentos as $medicamento )
                                    <div class="mr-4"> <span>{{$medicamento->nombreMedicamento}}</span></div>
                                @empty
                                    <div class="mr-4"> <span>Aún no se han añadido medicmantos</span></div>
                                @endforelse

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="bg-white p-3 rounded border">
                            <h6>Condicionones</h6>
                            <p class="text-black-50 content mb-5">Para que esta recomendación se muestre es ncesario que los usuario cumplan con estas condiciones.</p>
                            <div class="container">
                                <div class="card">
                                    <div class="row no-gutters">
                                        <div class="col-md-8">
                                            <div class="rating-progress-bars p-2">
                                                <div class="progress-1 align-items-center">
                                                    <div class="d-flex flex-row">
                                                        <div class="mr-4"> <span class="font-weight-bold">Edad mínima:</span></div>
                                                        <div class="mr-4"> <span>{{$recomendacion->edadMin}}</span> años</div>
                                                        <div class="mr-4"> <span class="font-weight-bold">Edad maxima:</span></div>
                                                        <div class="mr-4"> <span>{{$recomendacion->edadMax}}</span> años</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="card">
                                    <div class="row no-gutters">
                                        <div class="col-md-8">
                                            <div class="rating-progress-bars p-2">
                                                <div class="progress-1 align-items-center">
                                                    <p class="font-weight-bold">Intensidad mínima</p>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{$recomendacion->intensidadMin}}%" aria-valuenow="{{$recomendacion->intensidadMin}}" aria-valuemin="0" aria-valuemax="100">{{$recomendacion->intensidadMin}}</div>
                                                    </div>
                                                    <p class="mt-3 font-weight-bold">Intensidad maxima</p>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{$recomendacion->intensidad}}%;" aria-valuenow="{{$recomendacion->intensidadMax}}" aria-valuemin="0" aria-valuemax="100">{{$recomendacion->intensidadMax}}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="bg-white p-3 rounded border">
                            <h6>Información adicional</h6>
                            <p class="text-black-50 content mb-5">Señ@r farmaceutico, para la recomendación <span class="font-weight-bold">{{$recomendacion->nombreRecomendacion}}</span> los consejos son </p>
                            <div class="container">
                                <div class="card">
                                    <div class="row no-gutters">
                                        <div class="col-md-8">
                                            <div class="rating-progress-bars p-2">
                                                <div class="progress-1 align-items-center">
                                                    <div class="d-flex flex-row">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">{{$recomendacion->informacionAdicional}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="bg-white p-3 rounded border">
                            <h6>Contraindicaciones</h6>
                            <p class="text-black-50 content mb-5">Señ@r farmaceutico, en este apartado podrá encontrar en una lista las contraindicaciones que la recomendación <span class="font-weight-bold">{{$recomendacion->nombreRecomendacion}}</span> presenta</p>
                            <div class="container">
                                <div class="card">
                                    <div class="row no-gutters">
                                        <div class="col-md-8">
                                            <div class="rating-progress-bars p-2">
                                                <div class="progress-1 align-items-center">
                                                    <div class="d-flex flex-row">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                @forelse ($recomendacion->enfermedades as $enfermedad)
                                                                <span class="badge badge-info">{{$enfermedad->nombreEnfermedad}}</span>
                                                                @empty
                                                                    Sin contraindicaciones
                                                                @endforelse
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
