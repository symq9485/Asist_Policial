<?php
//Dados para realizar la conexion con la base de datos
  $host_db="localhost";
  $nombre_db="Asist_Policial";
  $usuario_db="root";
  $clave_db="17847186";
//Consulta para realizar la conexion a la base de datos
  $conexion=mysqli_connect($host_db, $usuario_db, $clave_db, $nombre_db);
//En caso de un error de conexion muestra el mensaje
  if(mysqli_connect_errno()){
    die('Fallo al conectar a la base de datos');
    exit();
  }
?>
