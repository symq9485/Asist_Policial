<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agregar</title>
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
    <form name="Registro" action="result_agregar.php" method="POST">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
          <table class="table table-responsive">
            <thead><th class="datos">Datos del ciudadano.</th></thead>
            <tr>
              <td><label>Cedula de identidad</label><span class="asterisk" style="color:red">*</span><input class="form-control" name="cedula" type="number" required="required" value="" placeholder="ej. 24598590" /></td>
            </tr>
            <tr>
              <td><label>Nombre</label><span id="asterisk" style="color:red">*</span><input class="form-control" name="nombre" type="text" required="required" value="" placeholder="ej. Victoria" /></td>
            </tr>
            <tr>
              <td><label>Apellido</label><span id="asterisk" style="color:red">*</span><input class="form-control" name="apellido" type="text" required="required" value="" placeholder="ej. Borras" /></td>
            </tr>
            <tr>
              <td><label>Lugar de nacimiento</label><input class="form-control" name="l_nacimiento" type="text" value="" placeholder="ej. Caracas" /></td>
            </tr>
            <tr>
              <td><label>Fecha de nacimiento</label><span id="asterisk" style="color:red">*</span><input class="form-control" name="f_nacimiento" type="date" required="required" /></td>
            </tr>
          </table>
        </div>
        <div class="col-md-4">
          <table class="table table-responsive">
            <thead>
              <th colspan="2" class="residencia">Recidencia Actual.</th>
            </thead>
            <tbody>
              <tr>
                <td><label>Estado</label><input class="form-control" name=estado_uc type="text" value="" placeholder="ej. Nueva Esparta" /></td>
              </tr>
              <tr>
                <td><label>Municipio</label><input class="form-control" name=municipio_uc type="text" value="" placeholder="ej. Garcia" /></td>
              </tr>
              <tr>
                <td><label>Calle</label><input class="form-control" name=calle_uc type="text" value="" placeholder="ej. Av. Francisco Fajardo" /></td>
              </tr>
              <tr>
                <td><label>Vivienda</label><input class="form-control" name=vivienda_uc type="text" value="" placeholder="ej. Casa 96" /></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4">
          <table class="table table-responsive">
            <thead><th class="crimen">Datos del crimen.</th></thead>
            <tr>
              <td><label>Expediente</label><span id="asterisk" style="color:red">*</span><input class="form-control" name="expediente" type="number" required="required" value="" placeholder="ej. 434" /></td>
            </tr>
            <tr>
              <td><label>Delito</label><span id="asterisk" style="color:red">*</span><input class="form-control" name="delito" type="text" required="required" value="" placeholder="ej. Homicidio" /></td>
            </tr>
            <tr>
              <td><label>Solicitado</label> <input type="hidden" required="required" name="solicitado" value="0"><input name="solicitado" type="checkbox" value="1"/></td>
            </tr>
          </table>
        </div>
        <div class="col-md-4">
          <table class="table table-responsive">
            <thead><th class="crimen_lugar">Lugar del crimen.</th></thead>
              <td><label>Estado</label><span id="asterisk" style="color:red">*</span><input class="form-control" name="estado_lc" type="text" required="required" value="" placeholder="ej. Nueva Esparta" /></td>
            </tr>
            <tr>
              <td><label>Municipio</label><span id="asterisk" style="color:red">*</span><input class="form-control" name="municipio_lc" type="text" required="required" value="" placeholder="Mariño" /></td>
            </tr>
            <tr>
              <td><label>Calle</label><span id="asterisk" style="color:red">*</span><input class="form-control" name="calle_lc" type="text" required="required" value="" placeholder="ej. Calle Matasiete" /></td>
            </tr>
            <tr>
              <td><label>Lugar</label><span id="asterisk" style="color:red">*</span><input class="form-control" name="lugar_lc" type="text" required="required" value="" placeholder="Ratan" /></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-4">
          <button type="submit" class="btn btn-info" id="buton">Agregar</button>
        </div>
      </div>
    </div>
    </form>

      <footer>
        <!--En esta seccion se debe colocar la informacion de la institucion y contacto-->
      </footer>
  </body>
</html>
