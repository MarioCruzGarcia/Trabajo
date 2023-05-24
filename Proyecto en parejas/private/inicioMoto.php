<?php
// 0. Inicio sesion o continuo con sesion iniciada
session_start();

// 1. Comprobar si la session esta iniciada
if(isset($_SESSION['user'])){
  // Existe
  if($_SESSION['user']['rol_id'] == 1){
  // 3. Si session iniciada y rol de usuario, te mando al usuario
  header('Location: ../private/dashboard.php');
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
require_once('../motos/database.php');
$resultado = Database::getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="../img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicio.css">

    <title>Motos</title>
</head>
<nav class="navbar">
      <div class="navbar-brand">
        <a href="dashboard-user.php">Logo</a>
      </div>
      <ul class="menu">
            <li><a href="inicioCoches.php">Coches</a></li>
            <li><a href="inicioMoto.php">Motos</a></li>
        </ul>
      <div class="user-profile">
        <img src="../img/profile-pic.jpg" alt="Foto de perfil" class="profile-pic" id="dropdownMenuLink">
        
        <a href="#" class="username" id="dropdownMenuLink"><?php echo $_SESSION['user']['nombre']?> <i class="fas fa-caret-down"></i></a>
        
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="../auth/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>
      </div>
      
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
        <img src="../imgMotos/<?php echo strtolower($row['modelo']); ?>.png" alt="" srcset="">
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
<script src="../buscador.js"></script>
</html>
