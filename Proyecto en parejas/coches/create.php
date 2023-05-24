<?php 



?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/styleEdit.css">
    <title>Insercciones</title>
</head>
<body>
    <form action="save.php" method="POST">
        <input type="text" name="marca" placeholder="Inserta una marca(Audi, Mercedes-Benz, Tesla...)">
        <input type="text" name="modelo" placeholder="Inserta un modelo(A1, EQC, Model 3...)">
        <input type="text" name="etiqueta" placeholder="Inserta una etiqueta(0, ECO, C, B...)">
        <input type="text" name="potencia" placeholder="Inserta una potencia(90cv, 120cv, 150cv...)">
        <input type="text" name="combustible" placeholder="Inserta un combustible(Gasolina, Diesel, Electrico...)">
        <input type="text" name="consumo" placeholder="Inserta un consumo(4,3l/100, 0l/100, 6.4l/100)">
        <input type="text" name="precio" placeholder="Inserta un precio(15000, 30000, 50000)">
        <a href=""><button type="submit">Enviar</button></a>
    </form>
</body>
</html>