<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Versione extends Model
{
    protected $table = "versiones";

    protected $fillable = [
		'id_modelo', 'version_descripcion'
	];

	public function Modelo(){
        return $this->belongsto(Modelo::class);
    }
}
