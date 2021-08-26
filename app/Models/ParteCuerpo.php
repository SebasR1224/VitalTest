<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ParteCuerpo extends Model
{

    //Relacion uno a muchos inversa

    public function recomendacion(){
        return $this->belongsTo(Recomendacion::class);
    }
}
