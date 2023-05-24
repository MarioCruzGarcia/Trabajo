<?php
// 0. Inicio sesion o continuo con sesion iniciada
session_start();

// 1. Comprobar si la session esta iniciada
if(isset($_SESSION['user'])){
  // Existe
  if($_SESSION['user']['rol_id'] == 2){
  // 3. Si session iniciada y rol de usuario, te mando al usuario
  header('Location: ../private/dashboard-user.php');
  }else{
    // 4. Si session iniciada y rol admin, todo ok
    // Fabuloso
  }
}else{
  // 2. Si no esta iniciada, te mando al login
  header('Location: ../inicioSesion.php');
}

?>
<?php
require_once('../coches/Database.php');
$database = new Database();
$resultado = $database->getAll();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Página web</title>
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="admin">
  <header>
    <nav class="navbar">
      <div class="navbar-brand">
        <a href="">Logo</a>
      </div>
      <a href="dashboard1.php" class="moto">Motos</a>
      <div class="user-profile">
        <img src="../img/profile-pic.jpg" alt="Foto de perfil" class="profile-pic" id="dropdownMenuLink">
        <a href="#" class="username" id="dropdownMenuLink"><?php echo $_SESSION['user']['nombre']?> <i class="fas fa-caret-down"></i></a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="../auth/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>
      </div>

    </nav>
  </header>    
  <main>
    
    <h1>PAGINA DE ADMINISTRADOR</h1>
    <a href="../coches/create.php" class='button create'>Crear</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Etiqueta</th>
                <th>Potencia</th>
                <th>Combustible</th>
                <th>Consumo</th>
                <th>Precio</th>
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
                echo "<td> <a href='../coches/edit.php?id=".$row['id']."'class='button edit'>Editar</a>
                      <a href='../coches/delete.php?id=".$row['id']."'class='button delete'>Eliminar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
  </main>
  
</body>
</html>
