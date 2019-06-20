<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato', function (Blueprint $table) {
            $table->increments('id_contrato');
            $table->integer('fk_id_institucion')->unsigned();
            $table->integer('fk_id_objeto')->unsigned();
            $table->integer('fk_id_tipo_contrato')->unsigned();
            $table->integer('fk_id_usuario')->unsigned();
            $table->string('n_contrato',45);
            $table->decimal('valor',6,2);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->foreign('fk_id_institucion')->references('id_institucion')->on('institucion');
            $table->foreign('fk_id_objeto')->references('id_objeto')->on('objeto');
            $table->foreign('fk_id_tipo_contrato')->references('id_tipo_contrato')->on('tipo_contrato');
            $table->foreign('fk_id_usuario')->references('id_usuario')->on('usuario');
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
        Schema::dropIfExists('contrato');
    }
}
