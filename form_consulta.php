<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>form_consulta.php</title>
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
      <form name="Consulta" action="result_consulta.php" method="get">
          <label>Cedula:<input name="cedula" id="id_cedula" type="text" value="" maxlength="10" size="10" /></label>
        <input name="boton" id="id_boton" value="Consultar" type="submit"/>
      </form>
    </article>
    <footer name="pie" id="id_pie">
<!--En esta seccion se debe colocar la informacion de la institucion y contacto-->
    </footer>
  </body>
</html>
