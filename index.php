<?php
session_start();
?>
<!DOCTYPE html>
<!--
  Sistema de asistencia policial
  Proyecto de Sistemas 2
  Desarrollado por:
      Victoria Borras
      Samy Mahmod
-->
<html>
  <head>
    <meta charset="utf-8">
    <title>Asistente Policial</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="jumbotron">
    <h1 style="text-align: center;">Asistente Policial</h1>
  </div>
  <!--Se crea la barra de navegacion-->
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
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <form class="form-singin" method="post" action="manejador.php"> <!--Aqui comienza el formulario para ingresar el usuario y la clave-->
            <div class="form-group row">
              <table class="table table-responsive">
                <tr>
                  <td><!--Input del usuario-->
                    <label>Usuario:<input class="form-control" name='usuario' type="text" placeholder="usuario" value="" required/></label>
                  </td>
                </tr>
                <tr>
                  <td><!--Input de la contraseña-->
                    <label>Contraseña:<input class="form-control" name='clave' type="password" placeholder="Contraseña" value="" required/></label>
                  </td>
                </tr>
                <tr>
                  <?php
                  //En caso de que el usuario o la contraseña no coincdan se niega el acceso y muestra el error
                  if($_SESSION['privilegio']== "error"){
                    echo "<label>El usuario o la contraseña no coinciden</label>";
                    $_SESSION['privilegio'] = 'nada';
                  }
                  ?>
                </tr>
              </table>
              <div class="form-group row">
                <div class="offset-md-2 col-md-3">
                  <button type="submit" name="submit" class="btn btn-default" value=" Sing in">Log In</button>
                </div>
              </div>
            </div>
          </form> <!--Aqui termina el formulario-->
        </div>
      </div>
    </div>
  </body>
</html>
