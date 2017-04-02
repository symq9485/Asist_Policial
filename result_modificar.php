<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    /*
    echo('<pre>');
    print_r($_GET);
    echo('</pre>');
    */
    $solicitado='p';
    $cedula=$_GET['cedula'];
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $l_nacimiento = $_GET['l_nacimiento'];
    $f_nacimiento = $_GET['f_nacimiento'];
    $estado_uc = $_GET['estado_uc'];
    $municipio_uc = $_GET['municipio_uc'];
    $calle_uc = $_GET['calle_uc'];
    $vivienda_uc = $_GET['vivienda_uc'];
    $delito = $_GET['delito'];
    $solicitado = $_GET['solicitado'];
    $estado_lc = $_GET['estado_lc'];
    $municipio_lc = $_GET['municipio_lc'];
    $calle_lc = $_GET['calle_lc'];
    $lugar_lc = $_GET['lugar_lc'];
    $id_uc=$_GET['id_uc'];
    $expediente = $_GET['expediente'];
    $id_lc=$_GET['id_lc'];

    include ("conexionBD.php");

    echo "<center><h1>Datos Modificados</h1></center>";

    echo "<center><table border='1'>";
    echo ("<tr><th colspan='2'>Datos modificados</th></tr>");

    if($nombre!=''){
      $consulta="UPDATE Ciudadanos SET nombre='$nombre' WHERE cedula='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Nombre: </th><td>$nombre</td></tr>");
    }

    if($apellido!=''){
      $consulta="UPDATE Ciudadanos SET apellido='$apellido' WHERE cedula='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Apellido: </th><td>$apellido</td></tr>");
    }

    if($l_nacimiento!=''){
      $consulta="UPDATE Ciudadanos SET l_nacimiento='$l_nacimiento' WHERE cedula='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Lugar de Nacimiento: </th><td>$l_nacimiento</td></tr>");
    }

    if($f_nacimiento!=''){
      $consulta="UPDATE Ciudadanos SET f_nacimiento='$f_nacimiento' WHERE cedula='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Fecha de Nacimiento: </th><td>$f_nacimiento</td></tr>");
    }

    if($estado_uc!=''){
      $consulta="UPDATE Ubicacion_Ciudadanos SET estado_uc='$estado_uc' WHERE cedula_uc='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Estado Res: </th><td>$estado_uc</td></tr>");
    }

    if($municipio_uc!=''){
      $consulta="UPDATE Ubicacion_Ciudadanos SET municipio_uc='$municipio_uc' WHERE cedula_uc='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Municipio Res: </th><td>$municipio_uc</td></tr>");
    }

    if($calle_uc!=''){
      $consulta="UPDATE Ubicacion_Ciudadanos SET calle_uc='$calle_uc' WHERE cedula_uc='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Calle Res: </th><td>$calle_uc</td></tr>");
    }

    if($vivienda_uc!=''){
      $consulta="UPDATE Ubicacion_Ciudadanos SET vivienda_uc='$vivienda_uc' WHERE cedula_uc='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Vivienda Res: </th><td>$vivienda_uc</td></tr>");
    }

    if($delito!=''){
      $consulta="UPDATE Crimenes SET delito='$delito' WHERE cedula_c='$cedula' AND expediente='$expediente'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Delito: </th><td>$delito</td></tr>");
    }

    if($solicitado==''){
      $consulta="UPDATE Crimenes SET solicitado=0 WHERE cedula_c='$cedula' AND expediente='$expediente'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Expediente: </th><td>No</td></tr>");
    }
    if($solicitado=='1'){
      $consulta="UPDATE Crimenes SET solicitado=1 WHERE cedula_c='$cedula' AND expediente='$expediente'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Solicitado: </th><td>Si</td></tr>");
    }

    if($estado_lc!=''){
      $consulta="UPDATE Lugar_Crimenes SET estado_lc='$estado_lc' WHERE id_lc='$id_lc'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Estado Crimen: </th><td>$estado_lc</td></tr>");
    }

    if($municipio_lc!=''){
      $consulta="UPDATE Lugar_Crimenes SET municipio_lc='$municipio_lc' WHERE id_lc='$id_lc'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Municipio Crimen: </th><td>$municipio_lc</td></tr>");
    }

    if($calle_lc!=''){
      $consulta="UPDATE Lugar_Crimenes SET calle_lc='$calle_lc' WHERE id_lc='$id_lc'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Calle Crimen: </th><td>$calle_lc</td></tr>");
    }

    if($lugar_lc!=''){
      $consulta="UPDATE Lugar_Crimenes SET lugar_lc='$lugar_lc' WHERE id_lc='$id_lc'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><th>Lugar Crimen: </th><td>$lugar_lc</td></tr>");
    }

    echo "</table></center>";

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
