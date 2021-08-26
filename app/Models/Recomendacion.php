<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Recomendacion extends Model
{
    //relaion uno a muchos
    public function partes(){
        return $this->hasMany(ParteCuerpo::class);
    }

    public function sintomas(){
        return $this->hasMany(Sintoma::class);
    }
    public function imcs(){
        return $this->hasMany(Imc::class);
    }

    //relacion muchos a muchos

    public function enfermedades(){
        return $this->belongsToMany(Enfermedad::class);
    }
}
