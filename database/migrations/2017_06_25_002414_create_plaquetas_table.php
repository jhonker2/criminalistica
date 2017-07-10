<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaquetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plaquetas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_foto')->unsigned();
            $table->string('ubicacion');
            $table->string('material');
            $table->string('tipo_grabado');
            $table->string('tipo_remache');
            $table->string('informacion');
            $table->string('observacion')->nullable();
            $table->foreign('id_foto')->references('id')->on('fotos');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plaquetas');
    }
}
