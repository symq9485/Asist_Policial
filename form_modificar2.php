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

    echo("<center><h1>Datos registrados</h1></center>");

    $consulta="SELECT * FROM Ciudadanos WHERE cedula='$cedula'";
    $resultado=mysqli_query($conexion, $consulta);

    if($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){

      $consulta="SELECT * FROM Ciudadanos WHERE cedula='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      mysqli_set_charset($conexion, "utf8");

      echo ("<center><table border='1'>");
      echo("<tr><th colspan='2'>Datos Personales</th></tr>");
      while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        echo ("<tr><th>Cedula: </th><br /><td>$fila[cedula]</td></tr>");
        echo ("<tr><th>Nombre: </th><br /><td>$fila[nombre]</td></tr>");
        echo ("<tr><th>Apellido: </th><br /><td>$fila[apellido]</td></tr>");
        echo ("<tr><th>Lugar de Nacimiento: </th><br /><td>$fila[l_nacimiento]</td></tr>");
        echo ("<tr><th>Fecha de Nacimiento: </th><br /><td>$fila[f_nacimiento]</td></tr>");
      }
      echo("</table></center>");

            $consulta="SELECT * FROM Ubicacion_Ciudadanos WHERE cedula_uc='$cedula'";
            $resultado=mysqli_query($conexion, $consulta);

            echo("<center><table border='1'>");
            echo("<tr><th colspan='2'>Lugar de residencia</th></tr>");
            while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
              echo ("<tr><th>Id residencia:</th><td>$fila[id_uc]</td></tr>");
              echo ("<tr><th>Estado: </th><br /><td>$fila[estado_uc]</td></tr>");
              echo ("<tr><th>Municipio: </th><br /><td>$fila[municipio_uc]</td></tr>");
              echo ("<tr><th>Calle: </th><br /><td>$fila[calle_uc]</td></tr>");
              echo ("<tr><th>Vivienda: </th><br /><td>$fila[vivienda_uc]</td></tr>");
              }
            echo("</table></center>");

      $consulta="SELECT * FROM Crimenes WHERE cedula_c='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);


      echo("<center><table border='1'>");
      echo("<tr><th colspan='2'>Datos del Crimen</th></tr>");
      while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        echo ("<tr><th>Expediente: </th><br /><td>$fila[expediente]</td></tr>");
        echo ("<tr><th>Delito: </th><br /><td>$fila[delito]</td></tr>");
        if($fila["solicitato"]==0){
          $fila["solicitado"]="No";
        }
        else{
          $fila["solicitado"]="Si";
        }
        echo ("<tr><th>Solicitado: </th><br /><td>$fila[solicitado]</td></tr>");
        }
      echo("</table></center>");

      $consulta="SELECT * FROM Lugar_Crimenes, Crimenes WHERE expediente_lc=expediente AND cedula_c=$cedula";
      $resultado=mysqli_query($conexion, $consulta);

      echo("<center><table border='1'>");
      echo("<tr><th colspan='2'>Lugar del crimen</th></tr>");
      while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        echo ("<tr><th>Id crimen:</th><td>$fila[id_lc]</td></tr>");
        echo ("<tr><th>Estado: </th><br /><td>$fila[estado_lc]</td></tr>");
        echo ("<tr><th>Municipio: </th><br /><td>$fila[municipio_lc]</td></tr>");
        echo ("<tr><th>Calle: </th><br /><td>$fila[calle_lc]</td></tr>");
        echo ("<tr><th>Lugar: </th><br /><td>$fila[lugar_lc]</td></tr>");
      }
      echo("</table></center>");
    }
    else{
      echo("<h2><center>El ciudadano no ha cometido delitos anteriormente</center></h2>");
    }
    ?>
    <center>
      <p>
  Marque los campos que desea modificar
</p>
<form name="Modificar" action="form_modificar3.php" method="get">

  <table border="1">
    <tr><th colspan='2'>Datos del ciudadano</th></tr>
    <tr>
      <td><strong>Nombre: </strong></td>
      <td><input name="nombre" type="checkbox" value="true"/></td>
    </tr>
    <tr>
      <td><strong>Apellido: </strong></td>
      <td><input name="apellido" type="checkbox" value="true" /></td>
    </tr>
    <tr>
      <td><strong>Lugar de nacimiento: </strong></td>
      <td><input name="l_nacimiento" type="checkbox" value="true" /></td>
    </tr>
    <tr>
      <td><strong>Fecha de nacimiento: </strong></td>
      <td><input name="f_nacimiento" type="checkbox" value="true" /></td>
    </tr>
    <tr><th colspan='2'>Ubicacion de recidencia</th></tr>
    <tr>
      <th>Id residencia:</th>
      <td><input name="id_uc" type="text"</td>
    </tr>
    <tr>
      <td><strong>Estado: </strong></td>
      <td><input name="estado_uc" type="checkbox" value="true" /></td>
    </tr>
    <tr>
      <td><strong>Municipio: </strong></td>
      <td><input name="municipio_uc" type="checkbox" value="true" /></td>
    </tr>
    <tr>
      <td><strong>Calle: </strong></td>
      <td><input name="calle_uc" type="checkbox" value="true" /></td>
    </tr>
    <tr>
      <td><strong>Vivienda: </strong></td>
      <td><input name="vivienda_uc" type="checkbox" value="true" /></td>
    </tr>
    <tr><th colspan='2'>Datos del crimen</th></tr>
    <tr>
      <th>Expediente:</th>
      <td><input name="expediente" type="text"</td>
    </tr>
    <tr>
      <td><strong>Delito: </strong></td>
      <td><input name="delito" type="checkbox" value="true" /></td>
    </tr>
    <tr>
      <td><strong>Solicitado: </strong></td>
      <td><input name="solicitado" type="checkbox" value="true" /></td>
    </tr>
    <tr><th colspan='2'>Lugar del crimen</th></tr>
    <tr>
      <th>Id lugar:</th>
      <td><input name="id_lc" type="text"</td>
    </tr>
    <tr>
      <td><strong>Estado: </strong></td>
      <td><input name="estado_lc" type="checkbox" value="true" /></td>
    </tr>
    <tr>
      <td><strong>Municipio: </strong></td>
      <td><input name="municipio_lc" type="checkbox" value="true" /></td>
    </tr>
    <tr>
      <td><strong>Calle: </strong></td>
      <td><input name="calle_lc" type="checkbox" value="true" /></td>
    </tr>
    <tr>
      <td><strong>Lugar: </strong></td>
      <td><input name="lugar_lc" type="checkbox" value="true" /></td>
    </tr>

  </table>
  <?php
  echo"<input name='cedula' type='hidden' value=$cedula />";
  ?>
  <input value="Modificar" type="submit"/>
</form>
    </center>
  </body>
</html>
