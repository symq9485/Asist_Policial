<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>

      <h1>Registrar ciudadano</h1><br /><br /><br />

      <form name="Registro" accion="result_agregar.php" method="post">



        <table border="1">
          <tr><th colspan="2">Datos del ciudadano.</th></tr>
          <tr>
            <td><strong>Cedula de identidad: </strong></td>
            <td><input name="cedula" type="text" value="" maxlength="10" size="10" /></td>
          </tr>
          <tr>
            <td><strong>Nombre: </strong></td>
            <td><input name="nombre" type="text" value="" maxlength="10" size="10" /></td>
          </tr>
          <tr>
            <td><strong>Apellido: </strong></td>
            <td><input name="apellido" type="text" value="" maxlength="10" size="10" /></td>
          </tr>
          <tr>
            <td><strong>Lugar de nacimiento: </strong></td>
            <td><input name="l_nacimiento" type="text" value="" maxlength="10" size="10" /></td>
          </tr>
          <tr>
            <td><strong>Fecha de nacimiento: </strong></td>
            <td><input name="f_nacimiento" type="text" value="" maxlength="10" size="10" /></td>
          </tr>
        </table>

        <br /><br /><br />

        <table border="1">
          <tr><th colspan="2">Recidencia Actual.</th></tr>
          <tr>
            <td><strong>Estado: </strong></td>
            <td><input name=estado_uc type="text" value="" maxlength="30" size="30" /></td>
          </tr>
          <tr>
            <td><strong>Municipio: </strong></td>
            <td><input name=municipio_uc type="text" value="" maxlength="20" size="20" /></td>
          </tr>
          <tr>
            <td><strong>Calle: </strong></td>
            <td><input name=calle_uc type="text" value="" maxlength="20" size="20" /></td>
          </tr>
          <tr>
            <td><strong>Vivienda: </strong></td>
            <td><input name=vivienda_uc type="text" value="" maxlength="10" size="10" /></td>
          </tr>
        </table>

        <br /><br /><br />

        <table border="1">
          <tr><th colspan="2">Datos del crimen.</th></tr>
          <tr>
            <td><strong>Expediente: </strong></td>
            <td><input name="expediente" type="text" value="" maxlength="10" size="10" /></td>
          </tr><tr>
            <td><strong>Delito: </strong></td>
            <td><input name="delito" type="text" value="" maxlength="10" size="10" /></td>
          </tr>
          <tr>
            <td><strong>Solicitado: </strong></td>
            <td><input name="solicitado" type="checkbox" value="checkbox" checked="true" /></td>
          </tr>
        </table>

        <br /><br /><br />

        <table border="1">
          <tr><th colspan="2">Lugar del crimen.</th></tr>
            <td><strong>Estado: </strong></td>
            <td><input name="estado_lc" type="text" value="" maxlength="30" size="30" /></td>
          </tr><tr>
            <td><strong>Municipio: </strong></td>
            <td><input name="municipio_lc" type="text" value="" maxlength="20" size="20" /></td>
          </tr>
          <tr>
            <td><strong>Calle: </strong></td>
            <td><input name="calle_lc" type="text" value="" maxlength="20" size="20" /></td>
          </tr>
          <tr>
            <td><strong>Lugar: </strong></td>
            <td><input name="lugar_lc" type="text" value="" maxlength="10" size="10" /></td>
          </tr>

        </table>

        <br /><br />

        <input value="Registrar" type="submit" />
      </form>
    </center>
  </body>
</html>
