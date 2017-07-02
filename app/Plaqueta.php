<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plaqueta extends Model
{
    protected $table = "plaquetas";

    protected $fillable = [
		'id_foto' , 'observacion'
	];

	public function Foto(){
        return $this->belongsto(Foto::class);
    }
}
