<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Opcion</title>
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
              <li><a href="form_eliminar.php">Eliminar</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="form-group row">
            <table class="table table-responsive">
              <tr>
                <td>
                  <label>Usuario:<input class="form-control" type="text" placeholder="usuario" value="" /></label>
                </td>
              </tr>
              <tr>
                <td>
                  <label>Contraseña:<input class="form-control" type="password" placeholder="Contraseña" value="" /></label>
                </td>
              </tr>
            </table>
            <div class="form-group row">
              <div class="offset-md-2 col-md-3">
                <button type="submit" class="btn btn-default">Log In</button>
              </div>
            </div>
          </div>            
        </div>
      </div>
    </div>  
  </body>
</html>
