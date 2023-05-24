<?php

    // Fichero que se encarga de recibir los datos del formulario y llamar al login

    // 1. Recoger las variables del formulario
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // 2. Importar la clase Database
    require_once('../coches/Database.php');

    // 3. Llamar a la funcion login de la clase Database
    $resultado = Database::login($user, $pass);

    // 4. Realizar comprobación del retorno
    if($resultado == null){
        header('Location: ../inicioSesion.php');
    } else{
        if($resultado['rol_id'] == 1){
            session_start();
            $_SESSION['user'] = $resultado;
            header('Location: ../private/dashboard.php');
        } else if($resultado['rol_id'] == 2){
            session_start();
            $_SESSION['user'] = $resultado;
            header('Location: ../private/dashboard-user.php');
        } else{
            header('Location: ../inicioSesion.php');
        }
    }
?>
