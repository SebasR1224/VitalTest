<?php

namespace App\Http\Controllers;

use App\Models\Recomendacion;
use Illuminate\Http\Request;

class RecomendacionController extends Controller
{
    public function index(){
        $lists = Recomendacion::paginate(8);
        return view('recomendacion.index', compact('lists'));
    }

    //detalles de recomendacion
    public function show($id){
        $recomendacion = Recomendacion::find($id);
        return view('recomendacion.show' , compact('recomendacion'));
    }


}
