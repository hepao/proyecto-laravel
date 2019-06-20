<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->integer('fk_id_tipo_documento')->unsigned();
            $table->integer('fk_id_genero')->unsigned();
            $table->string('primer_nombre',45);
            $table->string('segundo_nombre',45);
            $table->string('primer_apellido',45);
            $table->string('segundo_apellido',45);
            $table->string('documento',45);
            $table->string('correo_personal',45);
            $table->string('correo_institucional',45);
            $table->date('edad');
            $table->foreign('fk_id_tipo_documento')->references('id_tipo_documento')->on('tipo_documento');
            $table->foreign('fk_id_genero')->references('id_genero')->on('genero');
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
        Schema::dropIfExists('usuario');
    }
}
