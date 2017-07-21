<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
     protected $table = "series";

    protected $fillable = [
		'id_foto',
		'ubicacion',
		'tipo_grabado',
		'cantidad_digitos',
		'observacion'
	];

	public function Foto(){
        return $this->belongsto(Foto::class);
    }
}
