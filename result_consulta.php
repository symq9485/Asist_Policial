<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>result_consulta.php</title>
  </head>
  <body>
    <?php
    $cedula=(int)$_GET["cedula"];

    require("conexionBD.php");

    $conexion=mysqli_connect($host_db, $usuario_db, $clave_db);

    if(mysqli_connect_errno()){
      echo "fallo al conectar con la BBDD";
      exit();
    }

    mysqli_select_db($conexion, $nombre_db) or die ("No se encuentra la BBDD");
    mysqli_set_charset($conexion, "utf8");

    $consulta="SELECT * FROM Ciudadano WHERE cedula='$cedula'";
    $resultado=mysqli_query($conexion, $consulta);

    while($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC)){
      echo $fila['cedula'];
      echo $fila['nombre'];
      echo $fila['apellido'];
      echo $fila['l_nacimiento'];
      echo $fila['f_nacimiento'];
    }

    ?>

  </body>
</html>
