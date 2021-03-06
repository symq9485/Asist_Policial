<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Consultar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/background2.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>
  <div class="jumbotron">

  </div>
    <nav class="navbar navbar-inverse navbar-fixed" name="barra" id="id_barra"><!--Comienzo de la barra de navegacion-->
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
              <li class="active"><a href="form_consulta.php">Consultar</a></li>
              <?php
              //Se valida el tipo de usuario que es y se muestran las opciones que puede realizar el usuario
              if($_SESSION['privilegio'] == 0){
                echo '<li><a href="form_agregar.php">Agregar</a>';
                echo '<li><a href="form_modificar.php">Modificar</a></li>';
                echo '<li><a href="form_eliminar.php">Eliminar</a></li>';
              }
              ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
            </ul>
          </div>
      </div>
    </nav>
    <div class="container-fluid">
        <div class="col-md-5"></div>
        <div class="col-md-4">
          <div class="form-group">
            <div class="form-group row">
              <form name="Consulta" action="result_consulta.php" method="GET"> <!--Formulario de consulta-->
                <!--Input de la cedula-->
                <label for="id_cedula" class="cedula">Cedula:<input class="form-control" name="cedula" id="id_cedula" type="text" value="" placeholder="Num de cedula" /></label>
                <button type="submit" class="btn btn-default">Buscar</button>
              </form>
            </div>
          </div>
      </div>
  </div>
  </body>
</html>
