<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
   protected $table = "modelos";

    protected $fillable = [
		'id_marca' , 'modelo_descripcion'
	];

	public function Marca(){
        return $this->belongsto(Marca::class);
    }
}
