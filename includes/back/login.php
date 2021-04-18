<?php

if(isset($_POST)){


//Array de errores
$errores = array();

include_once '../funciones/conexiones.php';

// Validar correo
if(!empty($_POST['correo'])){

  $correo = $conn->real_escape_string(trim($_POST['correo']));

  if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
    $correo_validado = true;
  }else{
    $correo_validado = false;
    $errores['correo'] = 'El correo es invalido';
  }

}else{
  $correo_validado = false;
  $errores['correo'] = 'El correo viene vacío';
}


if(!empty($_POST['password'])){

  $password = $conn->real_escape_string($_POST['password']);
  $password_validado = true;

}else{
  $password_validado = false;
  $errores['password'] = 'El password viene vacío';
}

if(count($errores)==0){


  try{

    $sql = "SELECT * FROM usuarios where correo='$correo' LIMIT 1";
          $login = $conn->query($sql);

          $conn->close();

  }catch(Exception $e){
        $error = $e->getMessage();
      }


  if($login and $login->num_rows == 1){
    $user = $login->fetch_assoc();

      $verify = password_verify($password, $user['password']);
      if($verify){

        session_start();

        $_SESSION['usuario']=$user;

              header('Location: ../../webcast.php');
         
    
        //echo 'password correcto';
      }else{
        header('Location: ../../index.php?datos=datos_incorrectos');
        // echo 'password incorrecto';
      }
    

  }else{
    header('Location: ../../index.php?datos=datos_incorrectos');
    // echo 'error de usuario';
  }

}else{
  $datos = 'datos_incorrectos';
  header('Location:../../index.php?datos='.$datos);
}

}
?>