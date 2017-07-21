<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chasi extends Model
{
    protected $table = "chasis";

    protected $fillable = [
		'id_foto',
		'ubicacion',
		'tipo_grabado',
		'alineacion',
		'simetria',
		'espacidad',
		'cantidad_digitos',
		'superficie',
		'densidad',
		'observacion'
	];

	public function Foto(){
        return $this->belongsto(Foto::class);
    }
}
