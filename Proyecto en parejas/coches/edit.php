<?php 


$id = $_GET['id'];

require_once('Database.php');

$coches = new Database();
$datos = $coches->findById($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link type="text/css" rel="stylesheet" href="../css/styleEdit.css">

</head>
<body>
<div class="container">
<h1>Estas editando un vehiculo </h1>
<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="text" name="marca" value="<?php echo $datos['marca']; ?>";placeholder="Actualiza la marca">
        <input type="text" name="modelo" value="<?php echo $datos['modelo']; ?>" ;placeholder="Actualiza el modelo">
        <input type="text" name="etiqueta" value="<?php echo $datos['etiqueta']; ?>" p;laceholder="Actualiza la etiqueta">
        <input type="text" name="potencia" value="<?php echo $datos['potencia']; ?>" pl;aceholder="Actualiza la potencia">
        <input type="text" name="combustible" value="<?php echo $datos['combustible']; ?>" pla;ceholder="Actualiza el combustible">
        <input type="text" name="consumo" value="<?php echo $datos['consumo']; ?>" plac;eholder="Actualiza el consumo">
        <input type="text" name="precio" value="<?php echo $datos['precio']; ?>" place;holder="Actualiza el precio">
        <button type="submit">Enviar</button>
    </form>
</div>   
</body>
</html>


<?php 


