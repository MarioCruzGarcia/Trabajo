<?php

echo $_POST['marca'];

// 1. Recoger todos los elementos del formulario
$datos = [$_POST['id'], $_POST['marca'], $_POST['modelo'], $_POST['etiqueta'], $_POST['potencia'], $_POST['combustible'], $_POST['consumo'], $_POST['precio']];
// Importar la clase Database.php
require_once('Database.php');
// 2. Invocar la función update de DataBase llevándole los datos
Database::update($datos);

// 3. Retornar al index.php
header('Location: ../private/dashboard.php');

?>