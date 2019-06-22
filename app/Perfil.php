<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected  $table="usuario";
    protected  $primaryKey="idusuario";
    protected  $fillable=["primer_nombre","segundo_nombre","primer_apellido","segundo_apellido","documento","correo_personal","corre_institucional","edad"];
}
