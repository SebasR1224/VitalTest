<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Sintoma extends Model
{
    public function recomendacion(){
        return $this->belongsTo(Recomendacion::class);
    }
}
