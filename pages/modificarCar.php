<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Modificar informacion de automoviles</title>
		<meta charset='UTF-8' />
		<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
		<script src="../layout/scripts/default.js"></script>
	</head>

	<body id="top">
		<div class="wrapper col1">
			<div id="topbar">
				<p>Tel: (999)2-19-43-79 | Mail: <a href="mailto:AlejandroFV@mail.com">AlejandroFV@mail.com</a></p>
				<ul>
					<?php
						if (!empty($_SESSION['nick_user'])){
							$name_user = $_SESSION['nick_user'];
							//$rol_user = $_SESSION['rol_user'];
							echo "<li> Bienvenido: ".$name_user."</li>";
							echo "<li class='last'><a href='layout/php/closeSession.php'>Cerrar sesión</a></li>";
						}else{
					?>
							<li><a href="pages/login.html">Iniciar Sesión</a></li>
							<li class="last"><a href="pages/register.html">Registrarse</a></li>
					<?php
						}
					?>
				</ul>
				<br class="clear" />
			</div>
		</div>

		<div class="wrapper col2">
			<div id="header">
				<div class="fl_left">
					<h1><a href="../index.php">Car Rental System</a></h1>
					<p>¡Los mejores vehículos al mejor precio!</p>
				</div>
				<br class="clear" />
			</div>
		</div>

		<div class="wrapper col5">
			<div id="container">
				<div id="content">
					<h2 class="title2">Administra tu negocio</h2>
					<br class="clear">
					<h3 class="title4">Modificar Autos</h3>
					<br class="clear">
					<div id="jojo">
						<?php 
							
						 ?>
						<form id=modificarCar method="post" action=modificarCar2.php>
							<label for="matricula">Matricula del carro:</label><br>
							<input type="text" id=matricula name="matricula"><br>
						
							<br class="clear">
							<br class="clear">

							<input type=submit value=buscar>
						</form>				
					</div>
					<br class="clear">	
				</div>
				<br class="clear" />
				<a href="menuManager.php">Regresar al menu.</a>
			</div>
		</div>

		<div class="wrapper col7">
			<div id="copyright">
				<p class="fl_left">Copyright &copy; 2015 - Todos los derechos reservados - <a href="../index.php">CRS</a></p>
				<br class="clear" />
			</div>
		</div>
	</body>
</html>
