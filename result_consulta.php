<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>result_consulta</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/background2.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="jumbotron">
      <h1 style="text-align: center;">Asistente Policial</h1>
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
              <li class="active"><a href="form_consulta.php">Consultar</a></li>
              <li><a href="form_modificar.php">Modificar</a></li>
              <li><a href="form_eliminar.php">Eliminar</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>            
          </div>
      </div>
    </nav>
    <div class="container-fluid" id="body_container">
      <div class="row"></div>
      <div class="row">
      <?php
      $cedula=$_GET["cedula"];

      include("conexionBD.php");
      $consulta="SELECT * FROM Ciudadanos WHERE cedula='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);

      if($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){

        $consulta="SELECT * FROM Ciudadanos WHERE cedula='$cedula' ";
        $resultado=mysqli_query($conexion, $consulta);
        mysqli_set_charset($conexion, "utf8"); ?>

        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="table-responsive" id="ciudadano_tabla">
            <table class="table table-striped">
              <h2 class="cedula" style="text-align: center;">Datos del ciudadano</h2>
              <thead class="cedula">
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Lugar de Nacimiento</th>
                <th>Fecha de Nacimiento</th>
              </thead>
              <?php while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){ ?>

                <tr>
                  <td><?php echo $fila["cedula"]; ?></td>
                  <td><?php echo $fila["nombre"]; ?></td>
                  <td><?php echo $fila["apellido"]; ?></td>
                  <td><?php echo $fila["l_nacimiento"]; ?></td>
                  <td><?php echo $fila["f_nacimiento"]; ?></td>
                </tr>
              <?php
              } ?>              
            </table>
          </div>   
        </div>        
      </div>
      <div class="row">
        <?php
          $consulta="SELECT * FROM Ubicacion_Ciudadanos WHERE cedula_uc='$cedula'";
          $resultado=mysqli_query($conexion, $consulta);
        ?>           
        <div class="col-md-3"></div>
        <div class="col-md-6">        
          <div class="table-responsive">
            <table class="table table-striped">
              <h2 class="residencia" style="text-align: center;">Direccion del Ciudadano</h2>
              <thead class="residencia">
                <tr>
                  <th>Estado</th>
                  <th>Municipio</th>
                  <th>Calle</th>
                  <th>Vivienda</th>                  
                </tr>
              </thead>
              <?php while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){ ?>
                <tr>
                  <td><?php echo $fila["estado_uc"]; ?></td>
                  <td><?php echo $fila["municipio_uc"]; ?></td>
                  <td><?php echo $fila["calle_uc"]; ?></td>
                  <td><?php echo $fila["vivienda_uc"]; ?></td>
                </tr>
                <?php } ?>                
            </table>
          </div>
        </div>        
      </div>
      <div class="row">
        <?php 
        $consulta="SELECT * FROM Crimenes WHERE cedula_c='$cedula'";
        $resultado=mysqli_query($conexion, $consulta); ?>

        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="table-responsive">
            <table class="table table-striped">
              <h2 class="crimen" style="text-align: center;">Datos del Crimen</h2>
              <thead class="crimen">
                <th>Expediente</th>
                <th>Delito</th>
                <th>Solicitado</th>
              </thead>
              <?php while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){ ?>

                <tr><td><?php echo $fila["expediente"]; ?></td>
                <td><?php echo $fila["delito"]; ?></td>
                <?php if($fila["solicitado"]==0){
                  $fila["solicitado"]="No";
                }
                else{
                  $fila["solicitado"]="Si";
                } ?>
                <td><?php echo $fila["solicitado"]; ?></td></tr>
               <?php } ?> 
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="table-responsive">
            <table class="table table-striped">
              <h2 class="crimen_lugar">Lugar del Crimen</h2>
              <thead>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              </thead>            
            </table>
          </div>
        </div>
      </div>
<?php
        $consulta="SELECT * FROM Lugar_Crimenes, Crimenes WHERE expediente_lc=expediente AND cedula_c=$cedula";
        $resultado=mysqli_query($conexion, $consulta);

        echo("<table>");
        echo("<tr><td>Lugar del crimen</td></tr>");
        while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
          echo ("<tr><td>Estado: </td><td>$fila[estado_lc]</td></tr>");
          echo ("<tr><td>Municipio: </td><td>$fila[municipio_lc]</td></tr>");
          echo ("<tr><td>Calle: </td><td>$fila[calle_lc]</td></tr>");
          echo ("<tr><td>Lugar: </td><td>$fila[lugar_lc]</td></tr>");
        }
        echo("</table>");
      }
      else{
        echo("<p>El ciudadano no ha cometido delitos anteriormente</p>");
      }
      ?>      
    </div>
  </body>
</html>
