<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
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
              <li class="active"><a href="form_agregar.php">Agregar</a>
              <li><a href="form_consulta.php">Consultar</a></li>
              <li><a href="form_modificar.php">Modificar</a></li>
              <li><a href="form_eliminar.php">Eliminar</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
            </ul>
          </div>
      </div>
    </nav>
      <?php
      //Variables a las que seles asignan los valores recividos por el metodo _POST
      $cedula = $_POST['cedula'];
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $l_nacimiento = $_POST['l_nacimiento'];
      $f_nacimiento = $_POST['f_nacimiento'];
      $estado_uc = $_POST['estado_uc'];
      $municipio_uc = $_POST['municipio_uc'];
      $calle_uc = $_POST['calle_uc'];
      $vivienda_uc = $_POST['vivienda_uc'];
      $expediente = $_POST['expediente'];
      $delito = $_POST['delito'];
      $solicitado = $_POST['solicitado'];
      $estado_lc = $_POST['estado_lc'];
      $municipio_lc = $_POST['municipio_lc'];
      $calle_lc = $_POST['calle_lc'];
      $lugar_lc = $_POST['lugar_lc'];

      //Valida que todos los campos tengan algun valor
      if($cedula=='' || $nombre=='' || $apellido=='' || $l_nacimiento=='' || $f_nacimiento=='' || $estado_uc=='' || $municipio_uc=='' || $calle_uc=='' || $vivienda_uc=='' || $expediente=='' || $delito=='' || $estado_lc=='' || $municipio_lc=='' || $calle_lc=='' || $lugar_lc==''){
        echo("Debe rellenar todos los campos");
      }

      else{
        //Asigna a la variable solicitado el valor correspondiente
        if(!empty($solicitado)){
          $solicitado=1;
        }
        else{
          $solicitado=0;
        }
        //Se incluye conexion.php
        include("conexionBD.php");
        //Consulta SQL
        $consulta="SELECT cedula FROM Ciudadanos WHERE cedula='$cedula'";
        $resultado=mysqli_query($conexion, $consulta);
        mysqli_set_charset($conexion, "utf8");
        //En caso de que el ciudadano ya este registrado se guardan los nuevos datos y se muestra el mensaje
        if($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){

          ?>    <p>
                  El ciudadano ya se encuentra registrado en la base de datos
                  pero aun asi el resto de los datos fueron agregados.<br />

                  Si desea modificar o eliminar los datos ingrese a la opcion
                  "modificar" o "agregar" en la barra de navegación.
                 </p>
          <?php
          //Se realiza la actualizacion y la incercion de los datos
          $consulta="UPDATE Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc) SET('$cedula', '$estado_uc', '$municipio_uc', '$calle_uc', '$vivienda_uc')";
          $resultado=mysqli_query($conexion, $consulta);

          $consulta="INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c) VALUES('$expediente','$delito', '$solicitado', '$cedula')";
          $resultado=mysqli_query($conexion, $consulta);

          $consulta="INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc) VALUES('$estado_lc', '$municipio_lc', '$calle_lc', '$lugar_lc', '$expediente')";
          $resultado=mysqli_query($conexion, $consulta);

          //echo("$cedula, $nombre, $apellido, $l_nacimiento, $f_nacimiento, $estado_uc, $municipio_uc, $calle_uc, $vivienda_uc, $delito, $solicitado, $estado_lc, $municipio_lc, $calle_lc, $lugar_lc");
        }
        //En caso de que no este registrado previamente solo se realiza la incercion de los datos
        else{
          $consulta="INSERT INTO Ciudadanos(cedula, nombre, apellido, l_nacimiento, f_nacimiento) VALUES('$cedula', '$nombre', '$apellido', '$l_nacimiento', '$f_nacimiento')";
          $resultado=mysqli_query($conexion, $consulta);

          $consulta="INSERT INTO Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc) VALUES('$cedula', '$estado_uc', '$municipio_uc', '$calle_uc', '$vivienda_uc')";
          $resultado=mysqli_query($conexion, $consulta);

          $consulta="INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c) VALUES('$expediente', '$delito', '$solicitado', '$cedula')";
          $resultado=mysqli_query($conexion, $consulta);

          $consulta="INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc) VALUES('$estado_lc', '$municipio_lc', '$calle_lc', '$lugar_lc', '$expediente')";
          $resultado=mysqli_query($conexion, $consulta);

          echo("<center>Todos los datos fueron registrados</center>");

          //echo("$cedula, $nombre, $apellido, $l_nacimiento, $f_nacimiento, $estado_uc, $municipio_uc, $calle_uc, $vivienda_uc, $delito, $solicitado, $estado_lc, $municipio_lc, $calle_lc, $lugar_lc");
        }
      }
      ?>
  </body>
</html>
