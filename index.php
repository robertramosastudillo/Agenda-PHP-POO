<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda Telefonica</title>

    <link rel="stylesheet" type="text/css" href="librerias/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

    <script src="librerias/jquery-3.3.1.min.js"></script>
    <script src="js/funciones.js"></script>
    <script src="librerias/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
</head>
<body>

    <div class="container">
        <div id="tabla"></div> 
    </div>

    <!-- Modal para registros nuevos -->

<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar nueva persona</h4>
      </div>
      <div class="modal-body">
            <label>Identificacion</label>
            <input type="text" name="" id="identificacion" class="form-control input-sm">
            <label>Nombre</label>
            <input type="text" name="" id="nombres" class="form-control input-sm">
            <label>Apellido</label>
            <input type="text" name="" id="apellidos" class="form-control input-sm">
            <label>Email</label>
            <input type="text" name="" id="email" class="form-control input-sm">
            <label>Celular</label>
            <input type="text" name="" id="celular" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
            <input type="text" hidden="" id="idpersona" name="" >
            <label>Identificacion</label>
            <input type="text" name="" id="identificacionu" class="form-control input-sm">
            <label>Nombre</label>
            <input type="text" name="" id="nombresu" class="form-control input-sm">
            <label>Apellido</label>
            <input type="text" name="" id="apellidosu" class="form-control input-sm">
            <label>Email</label>
            <input type="text" name="" id="emailu" class="form-control input-sm">
            <label>Celular</label>
            <input type="text" name="" id="celularu" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">
        Actualizar
        </button>
      </div>
    </div>
  </div>
</div>


</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').load('componentes/tabla.php');
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
          $('#guardarnuevo').click(function(){
            identificacion=$('#identificacion').val();
            nombres=$('#nombres').val();
            apellidos=$('#apellidos').val();
            email=$('#email').val();
            celular=$('#celular').val();
              agregardatos(identificacion,nombres,apellidos,email,celular);
        });

        $('#actualizadatos').click(function(){
            actualizaDatos();
        });
    });
</script>