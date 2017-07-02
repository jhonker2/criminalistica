<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
     protected $table = "marcas";

    protected $fillable = [
		'id_marca' , 'modelo_descripcion'
	];

	public function Modelos(){
        return $this->hasmany(Modelo::class);
    }
}
