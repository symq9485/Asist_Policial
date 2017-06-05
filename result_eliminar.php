<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
  </head>
  <body>
    <header name="cabecera" id="id_cabecera">
<!--Aqui hay que poner el encabezado de la pag junto con un logo-->
    </header>

    <nav name="barra" id="id_barra">
      <table>
            <form action="form_consulta.php">
              <input name="boton" id="id_boton" value="Consultar" type="submit"/>
            </form>
            <form action="form_agregar.php">
              <input name="boton" id="id_boton" value="Agregar" type="submit"/>
            </form>
            <form action="form_modificar.php">
              <input name="boton" id="id_boton" value="Modificar" type="submit"/>
            </form>
            <form action="form_eliminar.php">
              <input name="boton" id="id_boton" value="Eliminar" type="submit"/>
            </form>
      </table>
    </nav>
    <?php

    $cedula=$_GET["cedula"];

    include("conexionBD.php");

    $consulta="SELECT * FROM Ciudadanos WHERE cedula='$cedula'";
    $resultado=mysqli_query($conexion, $consulta);

    if($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){


      $consulta="SELECT expediente FROM Crimenes WHERE cedula_c='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        $consulta="DELETE FROM Lugar_Crimenes WHERE expediente_lc=$fila[expediente]";
        $resultado=mysqli_query($conexion, $consulta);
      }

      $consulta="DELETE FROM Crimenes WHERE cedula_c=$cedula";
      $resultado=mysqli_query($conexion, $consulta);

      $consulta="DELETE FROM Ubicacion_Ciudadanos WHERE cedula_uc=$cedula";
      $resultado=mysqli_query($conexion, $consulta);

      $consulta="DELETE FROM Ciudadanos WHERE cedula=$cedula";
      $resultado=mysqli_query($conexion, $consulta);


      echo "<p>Se eliminaron todos los datos vinculados al numero de CI: " . $cedula . ".</p>";
    }
    else{
      echo"<p>No existen datos en la BBDD relacionados al numero de CI: ". $cedula . "</p>";
    }
    ?>
    <footer name="pie" id="id_pie">
<!--En esta seccion se debe colocar la informacion de la institucion y contacto-->
    </footer>
  </body>
</html>
