<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_chasis')->unsigned();
            $table->integer('id_version')->unsigned();
            $table->integer('id_plaqueta')->unsigned();
            $table->integer('id_motor')->unsigned();
            $table->integer('id_serie')->unsigned();
            $table->string('cilindraje');
            $table->string('transmision');
            $table->string('combustible');
            $table->string('pais_origen');
            $table->string('fotografia');
            $table->string('casa_ensambladora');
            $table->foreign('id_chasis')->references('id')->on('chasis');
            $table->foreign('id_version')->references('id')->on('versiones');
            $table->foreign('id_plaqueta')->references('id')->on('plaquetas');
            $table->foreign('id_motor')->references('id')->on('motores');
            $table->foreign('id_serie')->references('id')->on('series');

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
        Schema::dropIfExists('vehiculos');
    }
}
