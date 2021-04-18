<?php

//Conexión a localhost
$conn = new mysqli('127.0.0.1', 'root', '', 'webcast');

if($conn->connect_error){
  echo $error->$conn->connect_error;
}
$conn->set_charset("utf8");

?>
