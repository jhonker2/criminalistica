<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plaqueta extends Model
{
    protected $table = "plaquetas";

    protected $fillable = [
		'id_foto','ubicacion','material','tipo_grabado','tipo_remache','informacion','observacion'
	];

	public function Foto(){
        return $this->belongsto(Foto::class);
    }
}
