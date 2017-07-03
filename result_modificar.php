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
    echo("<article>");
    echo "<table>";
    echo ("<tr><td>Datos modificados</td></tr>");

    if($nombre!=''){
      $consulta="UPDATE Ciudadanos SET nombre='$nombre' WHERE cedula='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Nombre: </td><td>$nombre</td></tr>");
    }

    if($apellido!=''){
      $consulta="UPDATE Ciudadanos SET apellido='$apellido' WHERE cedula='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Apellido: </td><td>$apellido</td></tr>");
    }

    if($l_nacimiento!=''){
      $consulta="UPDATE Ciudadanos SET l_nacimiento='$l_nacimiento' WHERE cedula='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Lugar de Nacimiento: </td><td>$l_nacimiento</td></tr>");
    }

    if($f_nacimiento!=''){
      $consulta="UPDATE Ciudadanos SET f_nacimiento='$f_nacimiento' WHERE cedula='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Fecha de Nacimiento: </td><td>$f_nacimiento</td></tr>");
    }

    if($estado_uc!=''){
      $consulta="UPDATE Ubicacion_Ciudadanos SET estado_uc='$estado_uc' WHERE cedula_uc='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Estado Res: </td><td>$estado_uc</td></tr>");
    }

    if($municipio_uc!=''){
      $consulta="UPDATE Ubicacion_Ciudadanos SET municipio_uc='$municipio_uc' WHERE cedula_uc='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Municipio Res: </td><td>$municipio_uc</td></tr>");
    }

    if($calle_uc!=''){
      $consulta="UPDATE Ubicacion_Ciudadanos SET calle_uc='$calle_uc' WHERE cedula_uc='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Calle Res: </td><td>$calle_uc</td></tr>");
    }

    if($vivienda_uc!=''){
      $consulta="UPDATE Ubicacion_Ciudadanos SET vivienda_uc='$vivienda_uc' WHERE cedula_uc='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Vivienda Res: </td><td>$vivienda_uc</td></tr>");
    }

    if($delito!=''){
      $consulta="UPDATE Crimenes SET delito='$delito' WHERE cedula_c='$cedula' AND expediente='$expediente'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Delito: </td><td>$delito</td></tr>");
    }

    if($solicitado==''){
      $consulta="UPDATE Crimenes SET solicitado=0 WHERE cedula_c='$cedula' AND expediente='$expediente'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Solicitado: </td><td>No</td></tr>");
    }
    if($solicitado=='1'){
      $consulta="UPDATE Crimenes SET solicitado=1 WHERE cedula_c='$cedula' AND expediente='$expediente'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Solicitado: </td><td>Si</td></tr>");
    }

    if($estado_lc!=''){
      $consulta="UPDATE Lugar_Crimenes SET estado_lc='$estado_lc' WHERE id_lc='$id_lc'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Estado Crimen: </td><td>$estado_lc</td></tr>");
    }

    if($municipio_lc!=''){
      $consulta="UPDATE Lugar_Crimenes SET municipio_lc='$municipio_lc' WHERE id_lc='$id_lc'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Municipio Crimen: </td><td>$municipio_lc</td></tr>");
    }

    if($calle_lc!=''){
      $consulta="UPDATE Lugar_Crimenes SET calle_lc='$calle_lc' WHERE id_lc='$id_lc'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Calle Crimen: </td><td>$calle_lc</td></tr>");
    }

    if($lugar_lc!=''){
      $consulta="UPDATE Lugar_Crimenes SET lugar_lc='$lugar_lc' WHERE id_lc='$id_lc'";
      $resultado=mysqli_query($conexion, $consulta);
      echo ("<tr><td>Lugar Crimen: </td><td>$lugar_lc</td></tr>");
    }

    echo ("</table>");
    echo ("</article>");

    ?>
    <footer name="pie" id="id_pie">
<!--En esta seccion se debe colocar la informacion de la institucion y contacto-->
    </footer>
  </body>
</html>
