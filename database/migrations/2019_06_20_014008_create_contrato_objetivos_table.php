<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratoObjetivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_objetivos', function (Blueprint $table) {
            $table->increments('id_contrato_objetivo');
            $table->integer('fk_id_contrato')->unsigned();
            $table->integer('fk_id_objetivos')->unsigned();
            $table->string('objetivo',100);
            $table->foreign('fk_id_contrato')->references('id_contrato')->on('contrato');
            $table->foreign('fk_id_objetivos')->references('id_objetivos')->on('objetivos');
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
        Schema::dropIfExists('contrato_objetivos');
    }
}
