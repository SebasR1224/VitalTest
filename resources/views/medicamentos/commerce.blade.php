@extends('layouts.main' , ['activePage' =>'commerce' , 'titlePage' => 'Editar un medicamento' ])
@section('content')
    <div class="content">
<style>
            .off {
    position: absolute;
    left: 65%;
    top: 6%;
    width: 80px;
    text-align: center;
    height: 30px;
    line-height: 8px;
    border-radius: 5px;
    font-size: 13px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff
}
</style>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Medicamentos</h4>
                                    <p class="card-category"></p>
                                </div>
                                <div class="card-body">
                                    <!-- Navbar section -->
                                <nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom"> <a class="navbar-brand ml-2 font-weight-bold" href="#"><span id="orange">Productos</span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor" aria-controls="navbarColor" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                </nav>
                                <!-- products section -->
                                <section id="products">
                                    <div class="container">
                                        <div class="row">
                                            @foreach ($medicamentos as $medicamento)
                                            <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                                                <div class="card"> <img class="card-img-top" src="/imagen/{{$medicamento->imagen}}">
                                                    <div class="card-body">
                                                        <div class="product py-4"> <span class="off bg-success">-{{$medicamento->descuento}} %</span></div>
                                                        <h5><b class="font-italic text-uppercase">{{$medicamento->laboratorio->nombreLaboratorio}}</b> </h5>
                                                        <h5><b class="text-primary font-weight-bold text-uppercase">{{$medicamento->nombreMedicamento}}</b> </h5>
                                                        <div class="d-flex align-items-center product text-success"> <span class="material-icons"> star </span>  <span class="material-icons"> star </span>  <span class="material-icons"> star </span>  <span class="material-icons"> star </span>  <span class="material-icons"> star </span> </div>

                                                        <div class=" my-2">
                                                            <h4 class="text-muted font-weight-bold ">$ {{$medicamento->precioNormal}} (Oferta)</h4>
                                                            <h6 class="text-muted font-weight-bold ">$ {{$medicamento->precioNormal}} (normal)</h6>
                                                        </div><a href="{{route('medicamentos.show', $medicamento->id)}}"  class="btn w-100 btn-success my-2">Ver medicamento</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>
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
