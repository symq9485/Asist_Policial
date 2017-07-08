<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/background2.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="jumbotron">
    </div>
    <nav class="navbar navbar-inverse navbar-static-top" name="barra" id="id_barra">
      <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Policia</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="form_agregar.php">Agregar</a>
              <li><a href="form_consulta.php">Consultar</a></li>
              <li class="active"><a href="form_modificar.php">Modificar</a></li>
              <li><a href="form_eliminar.php">Eliminar</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
            </ul>
          </div>
      </div>
    </nav>
    <div class="container-fluid">
      <form name='Modificar' action='result_modificar.php' method='POST'>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <?php
          $cedula=$_POST["cedula"];

          include("conexionBD.php");

          $consulta="SELECT * FROM Ciudadanos WHERE cedula='$cedula'";
          $resultado=mysqli_query($conexion, $consulta);

          if($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){

            $consulta="SELECT * FROM Ciudadanos WHERE cedula='$cedula'";
            $resultado=mysqli_query($conexion, $consulta);
            mysqli_set_charset($conexion, "utf8"); ?>

            <table class="table table-responsive">
              <h2 style="text-align: center;">Datos Personales</h2>
              <thead>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Lugar de Nacimiento</th>
                <th>Fecha de Nacimiento</th>
              </thead>
            <?php while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){ ?>
             <tbody>
               <tr><td><input class="form-control" name='cedula' value='<?php echo $fila["cedula"]; ?>' /></td>
               <td><input class="form-control" name='nombre' value='<?php echo $fila["nombre"]; ?>' /></td>
               <td><input class="form-control" name='apellido' value='<?php echo $fila["apellido"]; ?>' /></td>
               <td><input class="form-control" name='l_nacimiento' value='<?php echo $fila["l_nacimiento"]; ?>'/></td>
               <td><input class="form-control" name='f_nacimiento' value='<?php echo $fila["f_nacimiento"]; ?>' type='date'/></td></tr>
             </tbody>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
       <?php }
          $consulta="SELECT * FROM Ubicacion_Ciudadanos WHERE cedula_uc='$cedula'";
          $resultado=mysqli_query($conexion, $consulta); ?>

          <table class="table table-responsive">
            <h2 style="text-align: center;">Lugar de Residencia</h2>
            <thead>
              <th>ID de Residencia</th>
              <th>Estado</th>
              <th>Municipio</th>
              <th>Calle</th>
              <th>Vivienda</th>
            </thead>
            <tbody>
             <?php while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){ ?>
                <tr><td><input class="form-control" name='id_uc' value='<?php echo $fila["id_uc"]; ?>' /></label></td>
                <td><input class="form-control" name='estado_uc' value='<?php echo $fila["estado_uc"]; ?>'></td>
                <td><input class="form-control" name='municipio_uc' value='<?php echo $fila["municipio_uc"]; ?>' /></td>
                <td><input class="form-control" name='calle_uc' value='<?php echo $fila["calle_uc"]; ?>' /></td>
                <td><input class="form-control" name='vivienda_uc' value='<?php echo $fila["vivienda_uc"]; ?>'></td></tr>
             <?php   } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <?php
            $consulta="SELECT * FROM Crimenes WHERE cedula_c='$cedula'";
            $resultado=mysqli_query($conexion, $consulta); ?>

            <table class="table table-responsive">
              <h2 style="text-align: center;">Datos del Crimen</h2>
              <thead>
                <th>Expediente</th>
                <th>Delito</th>
                <th>Solicitado</th>
              </thead>
              <tbody>
                <?php while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){ ?>
                  <tr><td><input class="form-control" name='expediente' value='<?php echo $fila["expediente"]; ?>' /></td>
                  <td><input class="form-control" name='delito' value='<?php echo $fila["delito"]; ?>' /></td>
                  <?php if($fila["solicitado"]==0){
                    $fila["solicitado"]="No"; ?>
                    <td><input type="hidden" required="required" name="solicitado" value="0"> <input class="form-control" name='solicitado' value='0' type='checkbox' /></td></tr>
                 <?php }
                  else{
                    $fila["solicitado"]="Si"; ?>
                    <td><input type="hidden" required="required" name="solicitado" value="0"> <input class="form-control" name='solicitado' value='0' type='checkbox' checked/></td></tr>
                <?php  }
                } ?>
              </tbody>
            </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <?php

          $consulta="SELECT * FROM Lugar_Crimenes, Crimenes WHERE expediente_lc=expediente AND cedula_c=$cedula";
          $resultado=mysqli_query($conexion, $consulta); ?>

          <table class="table table-responsive">
            <h2 style="text-align: center;">Lugar del Crimen</h2>
            <thead>
              <th>ID del Crimen</th>
              <th>Estado</th>
              <th>Municipio</th>
              <th>Calle</th>
              <th>Lugar</th>
            </thead>
            <tbody>
              <?php while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){ ?>
                <tr><td><input class="form-control" name='id_lc' value='<?php echo $fila["id_lc"]; ?>' /></td>
                <td><input class="form-control" name='estado_lc' value='<?php echo $fila["estado_lc"]; ?>' /></td>
                <td><input class="form-control" name='municipio_lc' value='<?php echo $fila["municipio_lc"]; ?>' /></td>
                <td><input class="form-control" name='calle_lc' value='<?php echo $fila["calle_lc"]; ?>' /></td>
                <td><input class="form-control" name='lugar_lc' value='<?php echo $fila["lugar_lc"]; ?>' /></label></td></tr>
             <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-3">
          <button type="submit" class="btn btn-success">Modificar</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </div>
      </div>
      </form>
       <?php } else { ?>
        <div class="row">
          <div class="col-md-12">
            <h1 style="text-align: center;">El Ciudadano no ha cometido delitos anteriormente</h1>
          </div>
        </div>
       <?php }
        ?>
    </div>
    <footer name="pie" id="id_pie">
<!--En esta seccion se debe colocar la informacion de la institucion y contacto-->
    </footer>
  </body>
</html>
