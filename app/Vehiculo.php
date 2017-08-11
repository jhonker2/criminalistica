<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
     protected $fillable = [
        'id_chasis', 'id_version', 'id_plaqueta','id_motor','id_serie','cilindraje','transmision','combustible','pais_origen','fotografia','anio','casa_ensambladora'
    ];
}
