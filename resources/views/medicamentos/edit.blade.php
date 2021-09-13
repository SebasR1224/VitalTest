@extends('layouts.main' , ['activePage' =>'inventario' , 'titlePage' => 'Editar un medicamento' ])
@section('css')
    {{-- Buscador --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Editar medicamento</h4>
                                    <p class="card-category">Complete todos los campos para editar un medicamento</p>
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
                                    <form action="{{route('medicamentos.update', $medicamento->id)}}" enctype="multipart/form-data" method="post" class="form-horizontal">
                                        @csrf
                                        @method('PUT')
                                        <div class="form">
                                            <div class="row">
                                                <div class="col-md-4 mt-md-0 mt-3"> <label>Nombre medicamento</label> <input type="text" name="nombreMedicamento" value="{{@old('nombreMedicamento', $medicamento->nombreMedicamento)}}" class="form-control" autofocus></div>
                                                <div class="col-md-4 mt-md-0 mt-3"> <label>Precio</label> <input type="number" name="precioNormal" value="{{@old('precioNormal', $medicamento->precioNormal)}}" class="form-control" autofocus></div>
                                                <div class="col-md-4 mt-md-0 mt-3"> <label>Descuento</label> <input type="number" name="descuento" value="{{@old('descuento', $medicamento->descuento)}}" class="form-control" autofocus></div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6 mt-md-0 mt-3"> <label>Laboratorio</label>
                                                    <select name="laboratorio_id" id="laboratorios" class="form-control">
                                                        <option value="">Seleccione...</option>
                                                        @foreach ($laboratorios as $laboratorio)
                                                            <option value="{{$laboratorio->id}}" {{$laboratorio->id == $medicamento->laboratorio_id ? "selected" : ""}} >{{$laboratorio->nombreLaboratorio}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mt-md-0 mt-3"> <label>Categoria</label>
                                                    <select name="categoria_id" id="categorias" class="form-control">
                                                        <option value="">Seleccione...</option>
                                                        @foreach ($categorias as $categoria)
                                                            <option value="{{$categoria->id}}" {{$categoria->id == $medicamento->categoria_id ? "selected" : ""}} >{{$categoria->nombreCategoria}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6 mt-md-0 mt-3"> <label>Imagen medicamento</label>
                                                    <input name="imagen" id="imagen" type="file" class="hidden">
                                                </div>
                                                <div class="col-md-6 mt-md-0 mt-3"> <label>Imagen seleccionada</label>
                                                    <img src="/imagen/{{$medicamento->imagen}}" id="imagenSeleccionada" style="max-height: 100px;"  >
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4 mt-md-0 mt-3"><input type="hidden" name="estado" value="{{ @old('estado', $medicamento->estado)}}" class="form-control" ></div>
                                            </div>
                                            <div class="card-footer ml-auto mr-auto">
                                                <button type="submit" class="btn btn-success">Guardar recomendación</button>
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
@section('js')
   {{-- Script para mostrar la imagen seleccionada cada que cambie --}}
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
       $(document).ready(function (e){
           $('#imagen').change(function(){
               let reader = new FileReader();
               reader.onload = (e) => {
                   $('#imagenSeleccionada').attr('src', e.target.result);
               }
               reader.readAsDataURL(this.files[0]);
           });
       });
   </script>
    {{-- buscador del select --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#laboratorios').select2();
            $('#categorias').select2();
        })
    </script>
@endsection


