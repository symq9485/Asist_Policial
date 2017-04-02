<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
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
    //echo("$cedula, $nombre, $apellido, $l_nacimiento, $f_nacimiento, $estado_uc, $municipio_uc, $calle_uc, $vivienda_uc, $expediente, $delito, $solicitado, $estado_lc, $municipio_lc, $calle_lc, $lugar_lc, $id_uc, $id_lc");
    ?>
    <center>
    <h1>Modificar</h1>
    <p>
      Ingrese los datos nuevos.
    </p>
    <form name="Modificar3" action="result_modificar.php" method="get">

      <table border="1">
        <tr><th colspan="4">Datos del ciudadano.</th></tr>
        <?php
        if($nombre=="true"){
          echo('<tr>
            <td><strong>Nombre: </strong></td>
            <td><input name="nombre" type="text" value="" maxlength="10" size="10" /></td>
            </tr>');
        }
        if($apellido=="true"){
          echo('<tr>
            <td><strong>Apellido: </strong></td>
            <td><input name="apellido" type="text" value="" maxlength="10" size="10" /></td>
            </tr>');
        }
        if($l_nacimiento=="true"){
          echo('<tr>
            <td><strong>Lugar de nacimiento: </strong></td>
            <td><input name="l_nacimiento" type="text" value="" maxlength="10" size="10" /></td>
            </tr>');

        }
        if($f_nacimiento=="true"){
          echo('<tr>
            <td><strong>Fecha de nacimiento: </strong></td>
            <td><input name="f_nacimiento" type="text" value="" maxlength="10" size="10" /></td>
            </tr>');
        }
        ?>
      </table>

      <br /><br /><br />

      <table border="1">
        <tr><th colspan="4">Recidencia Actual.</th></tr>
        <?php
        if($estado_uc=="true"){
          echo('<tr>
            <td><strong>Estado: </strong></td>
            <td><input name=estado_uc type="text" value="" maxlength="30" size="30" /></td>
          </tr>');
        }
        if($municipio_uc=="true"){
          echo('<tr>
            <td><strong>Municipio: </strong></td>
            <td><input name=municipio_uc type="text" value="" maxlength="20" size="20" /></td>
          </tr>');
        }
        if($calle_uc=="true"){
          echo('<tr>
            <td><strong>Calle: </strong></td>
            <td><input name=calle_uc type="text" value="" maxlength="20" size="20" /></td>
          </tr>');
        }
        if($vivienda_uc=="true"){
          echo('<tr>
            <td><strong>Vivienda: </strong></td>
            <td><input name=vivienda_uc type="text" value="" maxlength="10" size="10" /></td>
          </tr>');
        }
        ?>
      </table>

      <br /><br /><br />

      <table border="1">
        <tr><th colspan="4">Datos del crimen.</th></tr>
        <?php
        if($delito=="true"){
          echo('<tr>
            <td><strong>Delito: </strong></td>
            <td><input name="delito" type="text" value="" maxlength="10" size="10" /></td>
          </tr>');
        }
        if($solicitado=="true"){
          echo('<tr>
            <td><strong>Solicitado: </strong></td>
            <td><input name="solicitado" type="checkbox" value="1" checked /></td>
          </tr>');
        }
        else{
          echo('<input name="solicitado" type="hidden" value="No"');
        }
        ?>
      </table>

      <br /><br /><br />

      <table border="1">
        <tr><th colspan="4">Lugar del crimen.</th></tr>
        <?php
        if($estado_lc=="true"){
          echo('<tr>
            <td><strong>Estado: </strong></td>
            <td><input name="estado_lc" type="text" value="" maxlength="30" size="30" /></td>
          </tr>');
        }
        if($municipio_lc=="true"){
          echo('<tr>
            <td><strong>Municipio: </strong></td>
            <td><input name="municipio_lc" type="text" value="" maxlength="20" size="20" /></td>
          </tr>');
        }
        if($calle_lc=="true"){
          echo('<tr>
            <td><strong>Calle: </strong></td>
            <td><input name="calle_lc" type="text" value="" maxlength="20" size="20" /></td>
          </tr>');
        }
        if($lugar_lc=="true"){
          echo('<tr>
            <td><strong>Lugar: </strong></td>
            <td><input name="lugar_lc" type="text" value="" maxlength="10" size="10" /></td>
          </tr>');
        }
        echo"<input name='cedula' type='hidden' value=$cedula />";
        echo"<input name='expediente' type='hidden' value=$expediente />";
        echo"<input name='id_uc' type='hidden' value=$id_uc />";
        echo"<input name='id_lc' type='hidden' value=$id_lc />";
        ?>
      </table>
      <input value='Modificar' type='submit'/>
    </center>
    </form>
  </body>
</html>
