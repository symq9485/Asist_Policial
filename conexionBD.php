<?php
  $host_db="localhost";
  $nombre_db="Asist_Policial";
  $usuario_db="root";
  $clave_db="17847186";

  $conexion=mysqli_connect($host_db, $usuario_db, $clave_db, $nombre_db);

  if(mysqli_connect_errno()){
    echo "fallo al conectar con la BBDD";
    exit();
  }
?>
