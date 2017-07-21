<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motore extends Model
{
    protected $fillable = [
        'ubicacion','tipo_grabado','alineacion','simetria','espacidad','cantidad_digitos','superficie','observacion','densidad'
    ];
}
