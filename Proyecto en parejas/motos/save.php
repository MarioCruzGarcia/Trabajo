<?php

echo $_POST['id'];

//1.Recoger todos los elementos del formulario
$datos= [$_POST['id'], $_POST['marca'], $_POST['modelo'], $_POST['etiqueta'], $_POST['potencia'], $_POST['combustible'], $_POST['consumo'], $_POST['precio']];
//Importar la clase Database.php
require_once('database.php');
//3.Invocar la funcion save de DataBase llevandole los datos
Database::save($datos);

//4.Retornar al index.php
header('Location: ../private/dashboard1.php');
?>