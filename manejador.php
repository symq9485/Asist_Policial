<?php

/*
echo('<pre>');
print_r($_POST);
echo('</pre>');
*/

require 'conexionBD.php';

session_start();

if((isset($_POST['usuario'])) && ((isset($_POST['clave'])))){
  $usuario = $_POST['usuario'];
  $clave = $_POST['clave'];
}
else{
  header("location: index.php");
}

$consulta = "SELECT privilegio FROM Usuarios WHERE id_usuario = '".$usuario."' AND clave = '".$clave."'";
$resultado=mysqli_query($conexion, $consulta);

  if($privilegio=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
    $privilegio = $privilegio["privilegio"];

    if($privilegio == 0){
      $_SESSION['privilegio']= $privilegio;
      header("location: form_consulta.php");
    }
    else{
      $_SESSION['privilegio']= $privilegio;
      header("location: form_consulta.php");

    }

  }
  else{
    $_SESSION['privilegio'] = "error";
    header("location: index.php");
  }

?>
