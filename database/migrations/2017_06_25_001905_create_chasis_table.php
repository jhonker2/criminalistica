<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_fotos');
            $table->string('tipo_chasis');
            $table->string('numero');
            $table->string('ubicacion');
            $table->string('observacion')->nullable();
            $table->foreign('id_fotos')->references('id')->on('fotos');
            
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
        Schema::dropIfExists('chasis');
    }
}
