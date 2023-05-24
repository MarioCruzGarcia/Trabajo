<?php
// 1. Recoger las variables del formulario

  $name = $_POST['nombre'];

  $user = $_POST['correo'];

  $pass = $_POST['contraseña'];




  // 2. Importar la clase Database

  require_once('../coches/database.php');




  // 3. Llamar a la funcion login de la clase Database

  $db = new Database();

  $resultado = $db->register($name, $user, $pass);





  // ...



if ($resultado === false) {
    header('Location: ../registro.php'); 
    exit; 
}else{
  header('Location: ../inicioSesion.php');
  exit;
}




?>