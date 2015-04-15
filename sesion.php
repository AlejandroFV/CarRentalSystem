<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="styles/style.css">
	<script type="text/javascript" src="scripts/sesion.js"></script>
	<title>Rentadora de autos</title>

</head>
<body onload="focusMouseLogIn();">
<!-- Contenedor -->
<div id="container">
	<div id="header">
		<div class="menu">
			<ul id="menu">
				<li class="espacio inline-block"><a href="index.php" class="pacifico verde">Inicio</a></li>
				<li class="espacio inline-block"><a href="..." class="pacifico">Perfil</a></li>
				<li class="espacio inline-block"><a href="sesion.php" class="pacifico">Iniciar Sesión</a></li>
				<li class="espacio inline-block"><a href="registrarse.php" class="pacifico">Registrarse</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div id="log-in">
			<h3 class="title-one">Inicie su sesión</h3>
			<form action="">
				<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUsuario&nbsp<input class="combo-box" type="text" id="user"></label>
				<br><label>Contraseña <input class="combo-box" type="password" id="password"></label>
				<br><label><input class="button" type="submit" value="Iniciar sesión" onclick="enviarInformacion();"></label>
			</form>
		</div>
	</div>
	<div id="footer">
		<div class="column-footer">
			<p>¿Quienes somos?</p>
		</div>
		<div class="column-footer">
			<p>Privacidad y Términos</p>
		</div>
		<div class="column-footer">
			<p>Contactanos</p>
		</div>
	</div>
</div>
</body>
</html>