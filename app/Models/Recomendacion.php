<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Recomendacion extends Model
{

    //relacion uno a muchos(inversa)
    public function parte(){
        return $this->belongsTo(ParteCuerpo::class);
    }

    public function sintoma(){
        return $this->belongsTo(Sintoma::class);
    }
    public function imc(){
        return $this->belongsTo(Imc::class);
    }

    //relacion muchos a muchos

    public function enfermedades(){
        return $this->belongsToMany(Enfermedad::class);
    }
}
