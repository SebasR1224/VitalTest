@extends('layouts.main' , ['activePage' =>'inventario' , 'titlePage' => 'inventario de medicamentos' ])
@section('content')
<!-- CSS Medicamentos -->
<link rel="stylesheet" href="{{asset('css/medicamentos/style.css')}}">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Medicamento</h4>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-10">
                                            <div class="card">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="images p-3">
                                                            <div class="text-center p-4"> <img src="/imagen/{{$medicamento->imagen}}" width="250" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="product p-4">
                                                            <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand">{{$medicamento->laboratorio->nombreLaboratorio}}</span>
                                                                <h5 class="text-uppercase">{{$medicamento->nombreMedicamento}}</h5>
                                                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">$ {{$medicamento->precioNormal}} (Oferta)</span>
                                                                    <div class="ml-2"> <small class="dis-price">${{$medicamento->precioNormal}}</small> <span>(Antes)</span> </div>
                                                                </div>
                                                            </div>
                                                            <p class="about">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas veritatis, voluptates iure cupiditate repudiandae, odio consequatur ea dignissimos eos ut nobis minus iusto, omnis repellat quia. Distinctio aspernatur nemo libero!</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
