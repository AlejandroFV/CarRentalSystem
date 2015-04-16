<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="styles/style.css">
	<script type="text/javascript" src="scripts/session.js"></script>
	<title>Registrarse</title>

</head>
<body onload="focusMouseLogIn();">
<!-- Contenedor -->
<div id="container">
	<div id="header">
		<div class="menu">
			<ul id="menu">
				<li class="space inline-block"><a href="index.php" class="pacifico verde">Inicio</a></li>
				<li class="space inline-block"><a href="..." class="pacifico">Perfil</a></li>
				<li class="space inline-block"><a href="login.php" class="pacifico">Iniciar Sesión</a></li>
				<li class="space inline-block"><a href="signup.php" class="pacifico">Registrarse</a></li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div id="sign-up">
			<h3 class="title-one">Llene los datos</h3>
			<form action="">
				<label>
					Escriba su nombre de usuario:<br>
					<input type="text" id="name"> <br><br>
				</label>
				<label>
					Escriba su contraseña:<br>
					<input type="password" id="pass"> <br><br>
				</label>
				<label>
					Repita su contraseña:<br>
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
			<p>¿Quiénes somos?</p>
		</div>
		<div class="column-footer">
			<p>Privacidad y Términos</p>
		</div>
		<div class="column-footer">
			<p>Contáctanos</p>
		</div>
	</div>
</div>
</body>
</html>