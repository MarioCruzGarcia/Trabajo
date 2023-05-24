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

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="../img/logo.png">
  <title>Página web</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mario Cruz">
</head>
<body class="user">
  <header>
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

  </header>
  <main>
        <h1 class="titulo1">Tú eliges en qué quieres moverte</h1>
        <h2>Queremos ayudarte...¿Qué estas buscando?</h2>
        <div class="caja">
    <a href="inicioMoto.php" class="caja1">
        <h3>Motos</h3>
        <p class="texto1">Muévete con dos ruedas allá donde vayas</p>
        <img src="../img/moto.png" class="foto1">
    </a>
    <a href="inicioCoches.php" class="caja2">
        <h3>Coches</h3>
        <p class="texto2">De concesionario de calidad garantizada</p>
        <img src="../img/coche.png" class="foto2">
    </a>
        </div>
    </main>
</body>
</html>