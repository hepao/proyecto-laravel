<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
</head>
<body>

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
                    <th>CORREO PERSONAL</th>
                    <th>CORREO INSTITUCIONAL</th>
                    <th>FECHA DE NACIMIENTO</th>
                </tr>
                @foreach($usuario as $usuarios)
                    <tr>
                        <td>{{$usuarios->primer_nombre}}</td>
                        <td>{{$usuarios->segundo_nombre}}</td>
                        <td>{{$usuarios->primer_apellido}}</td>
                        <td>{{$usuarios->segundo_apellido}}</td>
                        <td>{{$usuarios->correo_personal}}</td>
                        <td>{{$usuarios->correo_institucional}}</td>
                        <td>{{$usuarios->fecha_nacimiento}}</td>
                    </tr>
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
                <button class="btn btn-info" type="submit">Enviar</button>

            </form>
        </div>
    </div>



</div>

</body>
</html>
