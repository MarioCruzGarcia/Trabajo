<?php
require_once('motos/database.php');
$resultado = Database::getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/coches.css">

    <title>Document</title>
</head>
<nav>
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="coches.php">Coches</a></li>
            <li><a href="motos.php">Motos</a></li>
        </ul>
    </nav>
<body>
<div class="search-container">
    <form method="GET" action="motos.php">
        <input type="text" name="search" placeholder="Buscar moto..." id="search-input">
        <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" />
            </svg>
        </button>
    </form>
</div>


<div class="card-container">
    <?php foreach ($resultado as $row): ?>
        
        
    <div class="card">
    <img src="imgMotos/<?php echo strtolower($row['modelo']); ?>.png" alt="" srcset="">
        <p><?php echo $row['marca']; ?></p>
        <p><?php echo $row['modelo']; ?></p>
        <p><?php echo $row['etiqueta']; ?></p>
        <p><?php echo $row['potencia']; ?></p>
        <p><?php echo $row['combustible']; ?></p>
        <p><?php echo $row['consumo']; ?></p>
        <p><?php echo $row['precio']; ?>&euro;</p>
    </div>
    <?php endforeach; ?>
</div>
</body>
<script src="buscador.js"></script>
</html>
