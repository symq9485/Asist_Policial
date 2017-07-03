<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
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

      $consulta="SELECT * FROM Ciudadanos WHERE cedula='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      mysqli_set_charset($conexion, "utf8");

      echo("<article>");
      echo("<form name='Modificar' action='result_modificar.php' method='get'>");
      echo ("<table>");
      echo("<tr><td>Datos Personales</td></tr>");
      while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        echo ("<tr><td><label>Cedula:<input name='cedula' value='$fila[cedula]' /></label></td></tr>");
        echo ("<tr><td><label>Nombre:<input name='nombre' value='$fila[nombre]' /></label></td></tr>");
        echo ("<tr><td><label>Apellido:<input name='apellido' value='$fila[apellido]' /></label></td></tr>");
        echo ("<tr><td><label>Lugar de Nacimiento:<input name='l_nacimiento' value='$fila[l_nacimiento]'/></label></td></tr>");
        echo ("<tr><td><label>Fecha de Nacimiento:<input name='f_nacimiento' value='$fila[f_nacimiento]' type='date'/></label></td></tr>");
      }

            $consulta="SELECT * FROM Ubicacion_Ciudadanos WHERE cedula_uc='$cedula'";
            $resultado=mysqli_query($conexion, $consulta);

            echo("<tr><td>Lugar de residencia</td></tr>");
            while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
              echo ("<tr><td><label>Id residencia:<input name='id_uc' value='$fila[id_uc]' /></label></td></tr>");
              echo ("<tr><td><label>Estado:<input name='estado_uc' value='$fila[estado_uc]'</label></td></tr>");
              echo ("<tr><td><label>Municipio:<input name='municipio_uc' value='$fila[municipio_uc]' /></label></td></tr>");
              echo ("<tr><td><label>Calle: <input name='calle_uc' value='$fila[calle_uc]' /></label></td></tr>");
              echo ("<tr><td><label>Vivienda:<input name='vivienda_uc' value='$fila[vivienda_uc]'</label></td></tr>");
              }

      $consulta="SELECT * FROM Crimenes WHERE cedula_c='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);


      /*echo("<table>");*/
      echo("<tr><td>Datos del Crimen</td></tr>");
      while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        echo ("<tr><td><label>Expediente: <input name='expediente' value='$fila[expediente]' /></label></td></tr>");
        echo ("<tr><td><label>Delito: <input name='delito' value='$fila[delito]' /></label></td></tr>");
        if($fila["solicitado"]==0){
          $fila["solicitado"]="No";
          echo ("<tr><td><label>Solicitado: <input name='solicitado' value='0' type='checkbox' /></label></td></tr>");
        }
        else{
          $fila["solicitado"]="Si";
          echo ("<tr><td><label>Solicitado: <input name='solicitado' value='0' type='checkbox' checked/></label></td></tr>");
        }
        }

      $consulta="SELECT * FROM Lugar_Crimenes, Crimenes WHERE expediente_lc=expediente AND cedula_c=$cedula";
      $resultado=mysqli_query($conexion, $consulta);

      echo("<tr><td>Lugar del crimen</td></tr>");
      while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        echo ("<tr><td><label>Id crimen:<input name='id_lc' value='$fila[id_lc]' /></label></td></tr>");
        echo ("<tr><td><label>Estado: <input name='estado-lc' value='$fila[estado_lc]' /></label></td></tr>");
        echo ("<tr><td><label>Municipio: <input name='municipio_lc' value='$fila[municipio_lc]' /></label></td></tr>");
        echo ("<tr><td><label>Calle: <input name='calle_lc' value='$fila[calle_lc]' /></label></td></tr>");
        echo ("<tr><td><label>Lugar: <input name='lugar_lc' value='$fila[lugar_lc]' /></label></td></tr>");
      }
      echo("</table>");
      echo("<input value='Modificar' type='submit'/>");
      echo("<input type='reset' />");
      echo("</form>");
      echo("</article>");
    }
    else{
      echo("<article>");
      echo("<p>El ciudadano no ha cometido delitos anteriormente</p>");
      echo("</article>");
    }
    ?>
    <footer name="pie" id="id_pie">
<!--En esta seccion se debe colocar la informacion de la institucion y contacto-->
    </footer>
  </body>
</html>
