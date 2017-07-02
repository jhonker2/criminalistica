<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $table = "series";

    protected $fillable = [
		'id_foto', 'observacion'
	];

	public function Foto(){
        return $this->belongsto(Foto::class);
    }
}
