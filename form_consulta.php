<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>form_consulta.php</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
  </head>
  <body>
    <center>
      <h1>Consulta</h1><br />
      <form name="Consulta" action="result_consulta.php" method="get">
        <table border="1">
          <tr>
            <td><strong>Cedula: </strong></td>
            <td><input name="cedula" type="text" value="" maxlength="10" size="10" /></td>
          </tr>
        </table>
        <br/>
        <input value="Consultar" type="submit"/>
      </form>
    </center>
  </body>
</html>
