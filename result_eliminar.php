<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
  </head>
  <body>
    <?php

    $cedula=$_GET["cedula"];

    include("conexionBD.php");

    echo("<center><h1>Datos Eliminados</h1></center>");

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


      echo "<center><p>Se eliminaron todos los datos vinculados al numero de CI: " . $cedula . ".</p></center>";
    }
    else{
      echo"<center><p>No existen datos en la BBDD relacionados al numero de CI: ". $cedula . "</p></center>";
    }
    ?>

    <center><table border="1">
      <tr>
        <th colspan="4">Elija una opcion</th>
      </tr>
      <tr>
        <td>
          <form action="form_consulta.php">
            <input value="Consultar" type="submit"/>
          </form>
        </td>
        <td>
          <form action="form_agregar.php">
            <input value="Agregar" type="submit"/>
          </form>
        </td>
        <td>
          <form action="form_modificar.php">
            <input value="Modificar" type="submit"/>
          </form>
        </td>
        <td>
          <form action="form_eliminar.php">
            <input value="Eliminar" type="submit"/>
          </form>
        </td>
      </tr>
    </table></center>
  </body>
</html>
