<!DOCTYPE html>
<html>

<head>
<link rel="icon" href="img/logo.png">
	<title>Registro de usuario</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/css" rel="stylesheet" href="css/registro.css">

</head>

<body>
	<nav>
		<ul class="menu">
			<li><a href="index.php">Inicio</a></li>
			<li><a href="coches.php">Coches</a></li>
			<li><a href="motos.php">Motos</a></li>
			<li><a href="inicioSesion.php">Inicio Sesión</a></li>
			<li><a href="registro.php">Registro</a></li>
		</ul>
	</nav>
	<h1>REGISTRO DE USUARIO</h1>
	<form method="POST" action="auth/insertar_usuario.php">
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br>
		
		<label>Correo electrónico:
		<input type="email" onblur="validarCorreo()" name="correo" required><br>
		<span></span>
		</label>

		<label>Contraseña:
		<input type="password" onblur="validarContraseña()" name="contraseña" required><br>
		<span></span>
		</label>

			<label>
			<input type="checkbox" id="aceptar_terminos" name="aceptar_terminos" required>
			Acepto las condiciones y términos de uso
		</label>

		<h1><button type="submit" class="inicio">INICIO</button></h1>
	</form>
	<script src="app.js"></script>
</body>

</html>
