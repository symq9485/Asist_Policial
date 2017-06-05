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
      <form name="Eliminar" action="result_eliminar.php" method="get">
        <table>
          <tr>
            <td><label>Cedula: <input name="cedula" type="text" value="" maxlength="10" size="10" /></label></td>
          </tr>
        </table>
        <input value="Eliminar" type="submit"/>
      </form>
    </article>

    <footer name="pie" id="id_pie">
<!--En esta seccion se debe colocar la informacion de la institucion y contacto-->
    </footer>
  </body>
</html>
