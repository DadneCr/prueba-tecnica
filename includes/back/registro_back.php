<?php

if($_POST){
    $nombre= $_POST['nombre'];
    $institucion = $_POST['institucion'];
    $correo= $_POST['correo'];
    $password = $_POST['password'];

    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

    include_once '../funciones/conexiones.php';

    try{
      $stmt = $conn->prepare("INSERT INTO usuarios(nombre, institucion_salud, correo, password ) VALUES (?,?,?,?)");

            $stmt->bind_param("ssss",  $nombre, $institucion, $correo, $password_segura);
            echo ' hola';
            $stmt->execute() or die ('Error '.$stmt->error.'');
            var_dump($stmt);
            $stmt->close();
            $conn->close();

    }catch(Exception $e){
          $error = $e->getMessage();
    }
  


}

header('Location: ../../registro.php?registro=ok');


?>