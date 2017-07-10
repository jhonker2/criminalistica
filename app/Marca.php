<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = ['marca','logo'];

	public function Modelos(){
        return $this->hasmany(Modelo::class);
    }
}
