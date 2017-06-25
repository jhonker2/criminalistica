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
            $table->integer('id_chasis');
            $table->integer('id_version');
            $table->integer('id_plaqueta');
            $table->integer('id_motor');
            $table->integer('id_serie');
            $table->string('cilindraje');
            $table->string('transmision');
            $table->string('combustible');
            $table->string('pais_origen');
            $table->string('fotografia');
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
