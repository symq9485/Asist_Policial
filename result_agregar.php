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
    <article>
      <?php
      $cedula = $_GET['cedula'];
      $nombre = $_GET['nombre'];
      $apellido = $_GET['apellido'];
      $l_nacimiento = $_GET['l_nacimiento'];
      $f_nacimiento = $_GET['f_nacimiento'];
      $estado_uc = $_GET['estado_uc'];
      $municipio_uc = $_GET['municipio_uc'];
      $calle_uc = $_GET['calle_uc'];
      $vivienda_uc = $_GET['vivienda_uc'];
      $expediente = $_GET['expediente'];
      $delito = $_GET['delito'];
      $solicitado = $_GET['solicitado'];
      $estado_lc = $_GET['estado_lc'];
      $municipio_lc = $_GET['municipio_lc'];
      $calle_lc = $_GET['calle_lc'];
      $lugar_lc = $_GET['lugar_lc'];

      if($cedula=='' || $nombre=='' || $apellido=='' || $l_nacimiento=='' || $f_nacimiento=='' || $estado_uc=='' || $municipio_uc=='' || $calle_uc=='' || $vivienda_uc=='' || $expediente=='' || $delito=='' || $estado_lc=='' || $municipio_lc=='' || $calle_lc=='' || $lugar_lc==''){
        echo("Debe rellenar todos los campos");
      }

      else{
        if($solicitado=checkbox){
          $solicitado=1;
        }
        else{
          $solicitado=0;
        }

        include("conexionBD.php");

        $consulta="SELECT cedula FROM Ciudadanos WHERE cedula='$cedula'";
        $resultado=mysqli_query($conexion, $consulta);
        mysqli_set_charset($conexion, "utf8");

        if($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){

          echo ("<p>
                  El ciudadano ya se encuentra registrado en la base de datos
                  pero aun asi el resto de los datos fueron agregados.<br />

                  Si desea modificar o eliminar los datos ingrese a la opcion
                  \"modificar\" o \"agregar\" en la barra de navegación.
                 </p>");
          $consulta="INSERT INTO Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc) VALUES('$cedula', '$estado_uc', '$municipio_uc', '$calle_uc', '$vivienda_uc')";
          $resultado=mysqli_query($conexion, $consulta);

          $consulta="INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c) VALUES('$expediente','$delito', '$solicitado', '$cedula')";
          $resultado=mysqli_query($conexion, $consulta);

          $consulta="INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc) VALUES('$estado_lc', '$municipio_lc', '$calle_lc', '$lugar_lc', '$expediente')";
          $resultado=mysqli_query($conexion, $consulta);

          //echo("$cedula, $nombre, $apellido, $l_nacimiento, $f_nacimiento, $estado_uc, $municipio_uc, $calle_uc, $vivienda_uc, $delito, $solicitado, $estado_lc, $municipio_lc, $calle_lc, $lugar_lc");
        }
        else{
          $consulta="INSERT INTO Ciudadanos(cedula, nombre, apellido, l_nacimiento, f_nacimiento) VALUES('$cedula', '$nombre', '$apellido', '$l_nacimiento', '$f_nacimiento')";
          $resultado=mysqli_query($conexion, $consulta);

          $consulta="INSERT INTO Ubicacion_Ciudadanos(cedula_uc, estado_uc, municipio_uc, calle_uc, vivienda_uc) VALUES('$cedula', '$estado_uc', '$municipio_uc', '$calle_uc', '$vivienda_uc')";
          $resultado=mysqli_query($conexion, $consulta);

          $consulta="INSERT INTO Crimenes(expediente, delito, solicitado, cedula_c) VALUES('$expediente', '$delito', '$solicitado', '$cedula')";
          $resultado=mysqli_query($conexion, $consulta);

          $consulta="INSERT INTO Lugar_Crimenes(estado_lc, municipio_lc, calle_lc, lugar_lc, expediente_lc) VALUES('$estado_lc', '$municipio_lc', '$calle_lc', '$lugar_lc', '$expediente')";
          $resultado=mysqli_query($conexion, $consulta);

          echo("<center>Todos los datos fueron registrados</center>");

          //echo("$cedula, $nombre, $apellido, $l_nacimiento, $f_nacimiento, $estado_uc, $municipio_uc, $calle_uc, $vivienda_uc, $delito, $solicitado, $estado_lc, $municipio_lc, $calle_lc, $lugar_lc");
        }
      }
      ?>
    </article>
    <footer name="pie" id="id_pie">
<!--En esta seccion se debe colocar la informacion de la institucion y contacto-->
    </footer>
  </body>
</html>
