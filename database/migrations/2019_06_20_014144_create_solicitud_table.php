<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->increments('id_solicitud');
            $table->integer('fk_id_usuario')->unsigned();
            $table->integer('fk_id_contrato')->unsigned();
            $table->dateTime('fecha_solicitud');
            $table->integer('verificacion');
            $table->foreign('fk_id_usuario')->references('id_usuario')->on('usuario');
            $table->foreign('fk_id_contrato')->references('id_contrato')->on('contrato');
            $table->timestamps();
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
        Schema::dropIfExists('solicitud');
    }
}
