<!--<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil Administrador</title>
</head>
<body>-->

@extends('core-ui.layout')

@section('main')
    <main class="main">

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h2>Perfil Administrador</h2>
            <table class="table table-striped">
                <tr>
                    <th>PRIMER NOMBRE</th>
                    <th>SEGUNDO NOMBRE</th>
                    <th>PRIMER APELLIDO</th>
                    <th>SEGUNDO NOMBRE</th>
                    <th>DOCUMENTO</th>
                    <th>CORREO PERSONAL</th>
                    <th>CORREO INSTITUCIONAL</th>
                    <th>EDAD</th>
                </tr>
                @foreach($Administradores as $Administrador)

                    <tr>
                        <td>{{$Administrador->primer_nombre}}</td>
                        <td>{{$Administrador->segundo_nombre}}</td>
                        <td>{{$Administrador->primer_apellido}}</td>
                        <td>{{$Administrador->segundo_apellido}}</td>
                        <td>{{$Administrador->documento}}</td>
                        <td>{{$Administrador->correo_personal}}</td>
                        <td>{{$Administrador->correo_institucional}}</td>
                        <td>{{$Administrador->edad}}</td>
                        <!--<td><a href="route('Administrador.edit', $Administrador->idusuarios)}}" class="btn btn-warning btn-sm">EDITAR</a></td>
                        <td>
                            <form action="route('$Administrador.destroy',$Administrador->idusuarios)}}" method="post">
                                 csrf_field() }}
                                 method_field('DELETE') }}
                                <button class="btn btn-danger btn-sm">ELIMINAR</button>
                            </form>
                        </td>
                    </tr>-->
                @endforeach

            </table>
        </div>

        <div class="col-md-3">
            <h2>INSERCIONES</h2>
            <form action="usuarios/store" method="post">
                <div class="form-group">
                    <label for="">Nombres</label>
                    <input type="text" name="nombres" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" name="correo" class="form-control">
                </div>
                <hr>
                <button class="btn btn-info btn-block" type="submit">GUARDAR</button>

            </form>
        </div>
    </div>

    </main>
    @endsection

<!--</div>

</body>
</html>-->
