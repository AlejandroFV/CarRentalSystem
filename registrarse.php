<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="styles/style.css">
	<script type="text/javascript" src="scripts/sesion.js"></script>
	<title>Registrarse</title>

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
		<div id="registrarse">
			<h3 class="title-one">Llene los datos</h3>
			<form action="">
				<label>
					Escriba su nombre de usuario <br>
					<input type="text" id="name"> <br><br>
				</label>
				<label>
					Escriba su contraseña <br>
					<input type="password" id="pass"> <br><br>
				</label>
				<label>
					Repita su contraseña su contraseña <br>
					<input type="password" id="pass"> <br><br>
				</label>
				<label>
					<input class="button" type="submit" value="Enviar">
				</label>
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