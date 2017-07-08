<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>View</title>
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
    <div class="container-fluid">
	    <?php
	    	require_once('conexionBD.php');
	    	$sql = "SELECT * FROM Criminales";
	    	$result = mysqli_query($conexion, $sql);
	     ?>
	     <div class="table-responsive">
	     	<table class="table table-hover">
	     		<tr>
	     			<th>Cedula</th>
	     			<th>Nombre</th>
	     			<th>Apellido</th>
	     			<th>Delito</th>
	     		</tr>
	     		<?php
	     			while($row = mysqli_fetch_array($result))
	     				{
	     				?>
		     				<tr>
		     					<td><?php echo $row["cedula"]; ?></td>
		     					<td><?php echo $row["nombre"]; ?></td>
		     					<td><?php echo $row["apellido"]; ?></td>
		     					<td><?php echo $row["delito"]; ?></td>
		     				</tr>
	     			<?php
	     			}
	     			require_once('cerrar.php');
	     			?>
	     	</table>
	     </div>
    </div>
</body>
</html>
