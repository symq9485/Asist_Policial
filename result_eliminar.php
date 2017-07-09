<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resultado de Eliminacion</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/background2.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <form name="Eliminar" action="result_eliminar.php" method="get">
      <div class="jumbotron">

      </div>
        <nav class="navbar navbar-inverse navbar-fixed" name="barra" id="id_barra">
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
                  <li><a href="form_modificar.php">Modificar</a></li>
                  <li class="active"><a href="form_eliminar.php">Eliminar</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
                </ul>
              </div>
          </div>
        </nav>
        <div class="container-fluid">
          <?php
          //Se almacena la cedula recivida por el metodo _GET
          $cedula=$_GET["cedula"];
          //Se incluye conexion.php
          include("conexionBD.php");
          //Consulta SQL
          $consulta="SELECT * FROM Ciudadanos WHERE cedula='$cedula'";
          $resultado=mysqli_query($conexion, $consulta);
          //Si existen datos en la base de dados asociados al numero de cedula se procede a eliminarlos
          if($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
            $consulta="SELECT expediente FROM Crimenes WHERE cedula_c='$cedula'";
            $resultado=mysqli_query($conexion, $consulta);
            $result = $resultado;
            while($fila=mysqli_fetch_array($result, MYSQLI_ASSOC)){
              $consulta="DELETE FROM Lugar_Crimenes WHERE expediente_lc=$fila[expediente]";
              $resultado=mysqli_query($conexion, $consulta);
            }
            $consulta="DELETE FROM Crimenes WHERE cedula_c=$cedula";
            $resultado=mysqli_query($conexion, $consulta);
            $consulta="DELETE FROM Ubicacion_Ciudadanos WHERE cedula_uc=$cedula";
            $resultado=mysqli_query($conexion, $consulta);
            $consulta="DELETE FROM Ciudadanos WHERE cedula=$cedula";
            $resultado=mysqli_query($conexion, $consulta); ?>

            <div class="col-md-3"></div>
            <div class="col-md-6" id="info-bg">
              <?php echo("<p>Se eliminaron todos los datos vinculados al numero de CI: " . $cedula . ".</p>"); ?>
            </div>

          <?php }
          else{ ?>
            <!--En caso de que no existan dados asociados al numero de cedula se muestra el mensaje-->
            <div class="col-md-2"></div>
            <div class="col-md-8" id="info-bg">
              <?php echo("<h2 style='text-align:center;'>No existen datos en la BBDD relacionados al numero de CI: ". $cedula . "</h1>"); ?>
            </div>
          <?php }
          ?>
        </div>
  </body>
