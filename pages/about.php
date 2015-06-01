<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Acerca de nosotros</title>
		<meta charset='UTF-8' />
		<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
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
							echo "<li class='last'><a href='../layout/php/closeSession.php'>Cerrar sesión</a></li>";
						}else{
					?>
							<li><a href="login.html">Iniciar Sesión</a></li>
							<li class="last"><a href="register.html">Registrarse</a></li>
					<?php
						}
					?>
					
				</ul>
				<br class="clear" />
			</div>
			<?php
				if (!empty($_SESSION['nick_user'])){
					$rol_user = $_SESSION['rol_user'];
					if ($rol_user == "manager") {
						echo "<div id='topbar'>
								<p class='center'><a href='menuManager.php'>Administrar sistema de autos</a></p>
								<br class='clear' />
							</div>";
					}
				}
			?>
			
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
		
		<div class="wrapper col3">
			<div id="topnav">
				<ul>
					<li><a href="../index.php">Inicio</a><span>Página principal</span></li>
					<li><a href="#">Más populares</a><span>Por rating</span>
						<ul>
							<li><a href="popularCarOne.php">Auto 1</a></li>
							<li><a href="popularCarTwo.php">Auto 2</a></li>
							<li><a href="popularCarThree.php">Auto 3</a></li>
						</ul>
					</li>
					<li><a href="paymentTypes.php">Tipos de pago</a><span>Formas de pago aceptadas</span></li>
					<li class="active"><a href="about.php">Acerca de nosotros</a><span>Desarrolladores</span></li>
					<?php
						if (!empty($_SESSION['nick_user'])){
							echo "<li><a href='borrowCar.php'>Reservaciones</a><span>Reserva tu automóvil</span></li>";
						}
					?>
				</ul>
				<br class="clear" />
			</div>
		</div>
		
		<div class="wrapper col5">
			<div id="container">
				<h2>Equipo de desarrolladores</h2>
				<p>Nosotros somos un grupo de estudiantes de la Facultad de Matemáticas de la Universidad Autónoma de Yucatán. Nosotros somos:</p>
				<ul>
					<li>Alejandro Flores Villegas</li>
					<li>Crhistian Uc Vázquez</li>
					<li>Izanami Chin Parra</li>
					<li>Yordi Sel Rodriguez</li>
				</ul>
				<p>Actualmente nos encontramos en sexto y séptimo semestre y este proyecto en desarrollo es para la asignatura de Programación en la Web.</p>
				<p>Este proyecto consiste en simular un sistema de una empresa especializada en renta de vehículos de todo tipo, utilizando tambien una conexión a una base de datos. Entre los servicios que se pretenden ofrecer se encuentran los siguientes:</p>
				<ol>
					<li>Reservación por adelantado de un vehículo (duh!)</li>
					<li>Registro y logueo de usuarios</li>
					<li><s>Historial de vehículos adquiridos</s></li>
					<li><s>Posibilidad de comentar y de valorar vehículos</s></li>
					<li>Listado de vehículos mejor valorados</li>
				</ol>
			</div>
		</div>
		
		<?php require '..\layout\php\subscriptionFromPages.php'; ?>
		
		<div class="wrapper col7">
			<div id="copyright">
				<p class="fl_left">Copyright &copy; 2015 - Todos los derechos reservados - <a href="../index.php">CRS</a></p>
				<br class="clear" />
			</div>
		</div>
	</body>
</html>
