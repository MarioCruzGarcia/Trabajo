<?php
require_once('Database.php');
$database = new Database();
$resultado = $database->getAll();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo2.css">
    <title>Ordenadores</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    

</head>

<body>
    <a href="create.php">Crear</a>
    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($resultado as $row) {
                echo "<tr>";
                echo "<td>". $row['id'] . "</td>";
                echo "<td>". $row['marca'] . "</td>";
                echo "<td>". $row['modelo'] . "</td>";
                echo "<td>". $row['etiqueta'] . "</td>";
                echo "<td>". $row['potencia'] . "</td>";
                echo "<td>". $row['combustible'] . "</td>";
                echo "<td>". $row['consumo'] . "</td>";
                echo "<td>". $row['precio'] . "</td>";
                echo "<td> <a href='edit.php?id=".$row['id']."'>Editar</a>
                      <a href='delete.php?id=".$row['id']."'>Eliminar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>
