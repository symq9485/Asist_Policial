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
              <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>            
          </div>
      </div>
    </nav>
        <?php
    /*
    echo('<pre>');
    print_r($_GET);
    echo('</pre>');
    */
    $solicitado='p';
    $cedula=$_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $l_nacimiento = $_POST['l_nacimiento'];
    $f_nacimiento = $_POST['f_nacimiento'];
    $estado_uc = $_POST['estado_uc'];
    $municipio_uc = $_POST['municipio_uc'];
    $calle_uc = $_POST['calle_uc'];
    $vivienda_uc = $_POST['vivienda_uc'];
    $delito = $_POST['delito'];
    $solicitado = $_POST['solicitado'];
    $estado_lc = $_POST['estado_lc'];
    $municipio_lc = $_POST['municipio_lc'];
    $calle_lc = $_POST['calle_lc'];
    $lugar_lc = $_POST['lugar_lc'];
    $id_uc=$_POST['id_uc'];
    $expediente = $_POST['expediente'];
    $id_lc=$_POST['id_lc'];

    include ("conexionBD.php"); ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="table-responsive">
            <table class="table table-responsive">
              <h2 style="text-align: center">Datos Modificados</h2>
                <?php if($nombre!=''){
                  $consulta="UPDATE Ciudadanos SET nombre='$nombre' WHERE cedula='$cedula'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Nombre: </b></td><td>$nombre</td></tr>");
                }

                if($apellido!=''){
                  $consulta="UPDATE Ciudadanos SET apellido='$apellido' WHERE cedula='$cedula'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Apellido: </b></td><td>$apellido</td></tr>");
                }

                if($l_nacimiento!=''){
                  $consulta="UPDATE Ciudadanos SET l_nacimiento='$l_nacimiento' WHERE cedula='$cedula'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Lugar de Nacimiento: </b></td><td>$l_nacimiento</td></tr>");
                }

                if($f_nacimiento!=''){
                  $consulta="UPDATE Ciudadanos SET f_nacimiento='$f_nacimiento' WHERE cedula='$cedula'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Fecha de Nacimiento: </b></td><td>$f_nacimiento</td></tr>");
                }

                if($estado_uc!=''){
                  $consulta="UPDATE Ubicacion_Ciudadanos SET estado_uc='$estado_uc' WHERE cedula_uc='$cedula'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Estado Res: </b></td><td>$estado_uc</td></tr>");
                }

                if($municipio_uc!=''){
                  $consulta="UPDATE Ubicacion_Ciudadanos SET municipio_uc='$municipio_uc' WHERE cedula_uc='$cedula'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Municipio Res: </b></td><td>$municipio_uc</td></tr>");
                }

                if($calle_uc!=''){
                  $consulta="UPDATE Ubicacion_Ciudadanos SET calle_uc='$calle_uc' WHERE cedula_uc='$cedula'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Calle Res: </b></td><td>$calle_uc</td></tr>");
                }

                if($vivienda_uc!=''){
                  $consulta="UPDATE Ubicacion_Ciudadanos SET vivienda_uc='$vivienda_uc' WHERE cedula_uc='$cedula'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Vivienda Res: </b></td><td>$vivienda_uc</td></tr>");
                }

                if($delito!=''){
                  $consulta="UPDATE Crimenes SET delito='$delito' WHERE cedula_c='$cedula' AND expediente='$expediente'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Delito: </b></td><td>$delito</td></tr>");
                }

                if($solicitado==''){
                  $consulta="UPDATE Crimenes SET solicitado=0 WHERE cedula_c='$cedula' AND expediente='$expediente'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Solicitado: </b></td><td>No</td></tr>");
                }
                if($solicitado=='1'){
                  $consulta="UPDATE Crimenes SET solicitado=1 WHERE cedula_c='$cedula' AND expediente='$expediente'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Solicitado: </b></td><td>Si</td></tr>");
                }

                if($estado_lc!=''){
                  $consulta="UPDATE Lugar_Crimenes SET estado_lc='$estado_lc' WHERE id_lc='$id_lc'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Estado Crimen: </b></td><td>$estado_lc</td></tr>");
                }

                if($municipio_lc!=''){
                  $consulta="UPDATE Lugar_Crimenes SET municipio_lc='$municipio_lc' WHERE id_lc='$id_lc'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Municipio Crimen: </b></td><td>$municipio_lc</td></tr>");
                }

                if($calle_lc!=''){
                  $consulta="UPDATE Lugar_Crimenes SET calle_lc='$calle_lc' WHERE id_lc='$id_lc'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Calle Crimen: </b></td><td>$calle_lc</td></tr>");
                }

                if($lugar_lc!=''){
                  $consulta="UPDATE Lugar_Crimenes SET lugar_lc='$lugar_lc' WHERE id_lc='$id_lc'";
                  $resultado=mysqli_query($conexion, $consulta);
                  echo ("<tr><td><b>Lugar Crimen: </b></td><td>$lugar_lc</td></tr>");
                } ?> 
            </table>
          </div>          
        </div>
      </div>
    </div>
<b>
    <footer name="pie" id="id_pie">
<!--En esta seccion se debe colocar la informacion de la institucion y contacto-->
    </footer>
  </body>
</html>
