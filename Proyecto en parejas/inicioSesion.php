<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inicioSesion.css">
    <title>Inicio De Sesion</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="coches.php">Coches</a></li>
            <li><a href="motos.php">Motos</a></li>
            <li><a href="inicioSesion.php">Inicio Sesion</a></li>
            <li><a href="registro.php">Registro</a></li>
        </ul>
    </nav>
    <div class="container">
    <form id="login-form" action="auth/comprobar.php" method="post">
      <h2>Iniciar sesión</h2>
      <div class="form-group">
        <label for="username">Usuario:</label>
        <input type="text" name="user" id="username" required>
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" name="pass" id="password" required>
      </div>
      <div class="form-group">
        <h1><button  class="inicio" type="submit" id="login-button" disabled>Iniciar sesion</button></h1>
      </div>
    </form>
  </div>
</body>
<script src="auth/script.js"></script>
</html>

