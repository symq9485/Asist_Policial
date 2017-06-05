<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>result_consulta</title>
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
    <article name="contenido" id="id_contenido">
    <?php
    $cedula=$_GET["cedula"];

    include("conexionBD.php");
    $consulta="SELECT * FROM Ciudadanos WHERE cedula='$cedula'";
    $resultado=mysqli_query($conexion, $consulta);

    if($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){

      $consulta="SELECT * FROM Ciudadanos WHERE cedula='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);
      mysqli_set_charset($conexion, "utf8");

      echo ("<table>");
      echo("<tr><td>Datos Personales</td></tr>");
      while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        echo ("<tr><td>Cedula: </td><td>$fila[cedula]</td></tr>");
        echo ("<tr><td>Nombre: </td><td>$fila[nombre]</td></tr>");
        echo ("<tr><td>Apellido: </td><td>$fila[apellido]</td></tr>");
        echo ("<tr><td>Lugar de Nacimiento: </td><td>$fila[l_nacimiento]</td></tr>");
        echo ("<tr><td>Fecha de Nacimiento: </td><td>$fila[f_nacimiento]</td></tr>");
      }
      echo("</table>");

            $consulta="SELECT * FROM Ubicacion_Ciudadanos WHERE cedula_uc='$cedula'";
            $resultado=mysqli_query($conexion, $consulta);

            echo("<table>");
            echo("<tr><td>Lugar de residencia</td></tr>");
            while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
              echo ("<tr><td>Estado: </td><td>$fila[estado_uc]</td></tr>");
              echo ("<tr><td>Municipio: </td><td>$fila[municipio_uc]</td></tr>");
              echo ("<tr><td>Calle: </td><td>$fila[calle_uc]</td></tr>");
              echo ("<tr><td>Vivienda: </td><td>$fila[vivienda_uc]</td></tr>");
              }
            echo("</table>");

      $consulta="SELECT * FROM Crimenes WHERE cedula_c='$cedula'";
      $resultado=mysqli_query($conexion, $consulta);


      echo("<table>");
      echo("<tr><td>Datos del Crimen</td></tr>");
      while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){

        echo ("<tr><td>Expediente: </td><td>$fila[expediente]</td></tr>");
        echo ("<tr><td>Delito: </td><td>$fila[delito]</td></tr>");
        if($fila["solicitado"]==0){
          $fila["solicitado"]="No";
        }
        else{
          $fila["solicitado"]="Si";
        }
        echo ("<tr><td>Solicitado: </td><td>$fila[solicitado]</td></tr>");
        }
      echo("</table>");

      $consulta="SELECT * FROM Lugar_Crimenes, Crimenes WHERE expediente_lc=expediente AND cedula_c=$cedula";
      $resultado=mysqli_query($conexion, $consulta);

      echo("<table>");
      echo("<tr><td>Lugar del crimen</td></tr>");
      while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        echo ("<tr><td>Estado: </td><td>$fila[estado_lc]</td></tr>");
        echo ("<tr><td>Municipio: </td><td>$fila[municipio_lc]</td></tr>");
        echo ("<tr><td>Calle: </td><td>$fila[calle_lc]</td></tr>");
        echo ("<tr><td>Lugar: </td><td>$fila[lugar_lc]</td></tr>");
      }
      echo("</table>");
    }
    else{
      echo("<p>El ciudadano no ha cometido delitos anteriormente</p>");
    }
    ?>
  </article>
  <footer name="pie" id="id_pie">
<!--En esta seccion se debe colocar la informacion de la institucion y contacto-->
  </footer>
  </body>
</html>
