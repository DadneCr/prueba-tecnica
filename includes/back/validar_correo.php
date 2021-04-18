<?php

if ($_POST) {
  $correo = trim(strtoupper($_POST['correo']));

  include_once '../funciones/conexiones.php';

  try {

    $sql = "SELECT COUNT(*) FROM usuarios WHERE correo='$correo'";
    $consulta = $conn -> query($sql);

  } catch (Exception $e) {
    echo $e->getMessage();
  }

  while($row = $consulta->fetch_row()){
    if ($row[0]>0) {
      echo 1;
    }else{
      echo 0;
    }
  }

}



 ?>
