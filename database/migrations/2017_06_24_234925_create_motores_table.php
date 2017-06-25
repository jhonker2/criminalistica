<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_foto')->unsigned();
            $table->string('ubicacion');
            $table->string('tipo_grabado');
            $table->string('alineacion');
            $table->string('simetria');
            $table->string('espacidad');
            $table->string('cantidad_digitos');
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
        Schema::dropIfExists('motores');
    }
}
