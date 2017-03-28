<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>result_consulta.php</title>
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
        echo ("<tr><th>Estado: </th><br /><td>$fila[estado_lc]</td></tr>");
        echo ("<tr><th>Municipio: </th><br /><td>$fila[municipio_lc]</td></tr>");
        echo ("<tr><th>Calle: </th><br /><td>$fila[calle_lc]</td></tr>");
        echo ("<tr><th>Lugar: </th><br /><td>$fila[lugar_lc]</td></tr>");
      }
      echo("</table></center>");
    }
    else{
      echo("<h2>El ciudadano no a cometido delitos anteriormente</h2>");
    }
    ?>

  </body>
</html>
