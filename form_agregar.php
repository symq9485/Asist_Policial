<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
  </head>
  <body>
    <header>
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
      <form name="Registro" action="result_agregar.php" method="get">
        <table>
          <tr><td>Datos del ciudadano.</td></tr>
          <tr>
            <td><label>Cedula de identidad:<input name="cedula" type="text" value="" maxlength="10" size="10" /></label></td>
          </tr>
          <tr>
            <td><label>Nombre:<input name="nombre" type="text" value="" maxlength="10" size="10" /></label></td>
          </tr>
          <tr>
            <td><label>Apellido:<input name="apellido" type="text" value="" maxlength="10" size="10" /></label></td>
          </tr>
          <tr>
            <td><label>Lugar de nacimiento:<input name="l_nacimiento" type="text" value="" maxlength="10" size="10" /></label></td>
          </tr>
          <tr>
            <td><label>Fecha de nacimiento:<input name="f_nacimiento" type="date" /></label></td>
          </tr>
        </table>

        <table>
          <tr><td colspan="2">Recidencia Actual.</td></tr>
          <tr>
            <td><label>Estado:<input name=estado_uc type="text" value="" maxlength="30" size="30" /></label></td>
          </tr>
          <tr>
            <td><label>Municipio:<input name=municipio_uc type="text" value="" maxlength="20" size="20" /></label></td>
          </tr>
          <tr>
            <td><label>Calle:<input name=calle_uc type="text" value="" maxlength="20" size="20" /></label></td>
          </tr>
          <tr>
            <td><label>Vivienda:<input name=vivienda_uc type="text" value="" maxlength="10" size="10" /></label></td>
          </tr>
        </table>

        <table>
          <tr><td>Datos del crimen.</td></tr>
          <tr>
            <td><label>Expediente:<input name="expediente" type="text" value="" maxlength="10" size="10" /></label></td>
          </tr>
          <tr>
            <td><label>Delito:<input name="delito" type="text" value="" maxlength="10" size="10" /></label></td>
          </tr>
          <tr>
            <td><label>Solicitado:<input name="solicitado" type="checkbox" value="checkbox" checked="true" /></label></td>
          </tr>
        </table>

        <table>
          <tr><td>Lugar del crimen.</td></tr>
            <td><label>Estado:<input name="estado_lc" type="text" value="" maxlength="30" size="30" /></label></td>
          </tr>
          <tr>
            <td><label>Municipio:<input name="municipio_lc" type="text" value="" maxlength="20" size="20" /></label></td>
          </tr>
          <tr>
            <td><label>Calle:<input name="calle_lc" type="text" value="" maxlength="20" size="20" /></label></td>
          </tr>
          <tr>
            <td><label>Lugar:<input name="lugar_lc" type="text" value="" maxlength="10" size="10" /></label></td>
          </tr>
        </table>
        <input name="boton" id="id_boton" value="Agregar" type="submit" />
      </form>
    </article>

      <footer>
        <!--En esta seccion se debe colocar la informacion de la institucion y contacto-->
      </footer>
  </body>
</html>
