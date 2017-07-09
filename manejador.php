<?php

/*
//Muestra los datos que se reciven por el metodo _POST
echo('<pre>');
print_r($_POST);
echo('</pre>');
*/

require 'conexionBD.php';
//Funcion para trabajar con seciones
session_start();
//Se validan que los campos de usuario y clave contengan datos
if((isset($_POST['usuario'])) && ((isset($_POST['clave'])))){
  $usuario = $_POST['usuario'];
  $clave = $_POST['clave'];
}
else{
  //En caso de no que el metodo _POST este vacio regresa al usuario a la pag index.php
  header("location: index.php");
}
//Se crea la consulta SQL
$consulta = "SELECT privilegio FROM Usuarios WHERE id_usuario = '".$usuario."' AND clave = '".$clave."'";
$resultado=mysqli_query($conexion, $consulta);
//Si verifica si existe coincidencia en la base de datos con los datos de usuario y clave
if($privilegio=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
  $privilegio = $privilegio["privilegio"];
  //Si se realiza el acceso se verifica que tipo de usuario es(Administrador o estandar)
  if($privilegio == 0){
    $_SESSION['privilegio']= $privilegio;
    header("location: form_consulta.php");
  }
  else{
    $_SESSION['privilegio']= $privilegio;
    header("location: form_consulta.php");

  }

}
//En caso de que no exista coincidencia se reenvia a index.php para que muestre el mensaje de error.
else{
  $_SESSION['privilegio'] = "error";
  header("location: index.php");
}

?>
