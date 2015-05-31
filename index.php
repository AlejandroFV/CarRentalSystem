<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CRS</title>
		<meta charset='UTF-8' />
		<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
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
			<?php
				if (!empty($_SESSION['nick_user'])){
					$rol_user = $_SESSION['rol_user'];
					if ($rol_user == "manager") {
						echo "<div id='topbar'>
								<p class='center'><a href='pages/menuManager.php'>Administrar sistema de autos</a></p>
								<br class='clear' />
							</div>";
					}
				}
			?>
			
		</div>

		<div class="wrapper col2">
			<div id="header">
				<div class="fl_left">
					<h1><a href="index.php">Car Rental System</a></h1>
					<p>¡Los mejores vehículos al mejor precio!</p>
				</div>
				<br class="clear" />
			</div>
		</div>

		<div class="wrapper col3">
			<div id="topnav">
				<ul>
					<li class="active"><a href="index.php">Inicio</a><span>Página principal</span></li>
					<li><a href="#">Más populares</a><span>Por rating</span>
						<ul>
							<li><a href="pages/popularCarOne.php">Auto 1</a></li>
							<li><a href="pages/popularCarTwo.php">Auto 2</a></li>
							<li><a href="pages/popularCarThree.php">Auto 3</a></li>
						</ul>
					</li>
					<li><a href="pages/paymentTypes.php">Tipos de pago</a><span>Formas de pago aceptadas</span></li>
					<li><a href="pages/about.php">Acerca de nosotros</a><span>Desarrolladores</span></li>
					<?php
						if (!empty($_SESSION['nick_user'])){
							echo "<li><a href='pages/borrowCar.php'>Reservaciones</a><span>Reserva tu automóvil</span></li>";
						}
					?>
				</ul>
				<br class="clear" />
			</div>
		</div>

		<div class="wrapper col4">
			<div id="featured_slide">
				<div id="featured_content">
					<ul>
						<li><a href="#"><img src="images/01.jpg" alt="" /></a></li>
						<li><a href="#"><img src="images/02.jpg" alt="" /></a></li>
						<li><a href="#"><img src="images/03.jpg" alt="" /></a></li>
						<li><a href="#"><img src="images/04.jpg" alt="" /></a></li>
						<!-- <li><a href="#"><img src="images/05.jpg" alt="" /></a></li> -->
						<!-- <li><a href="#"><img src="images/06.jpg" alt="" /></a></li> -->
						<!-- <li><a href="#"><img src="images/07.jpg" alt="" /></a></li> -->
						<!-- <li><a href="#"><img src="images/08.jpg" alt="" /></a></li> -->
						<!-- <li><a href="#"><img src="images/09.jpg" alt="" /></a></li> -->
						<!-- <li><a href="#"><img src="images/10.jpg" alt="" /></a></li> -->
					</ul>
				</div>
			</div>
		</div>

		<div class="wrapper col5">
			<div id="container">
				<div id="content">
					<h2>Acerca de la empresa</h2>
					<img class="imgl" src="images/logo.png" alt="" width="125" height="125" />
					<p align="justify"><strong>Car Rental System</strong></p>
					<p align="justify">Car Rental System (CRS) es una empresa que se dedica al alquiler de vehículos de todo tipo. Desde vehículos grandes para un paseo familiar, hasta automóviles deportivos de último modelo.</p>
					<p align="justify">Nosotros le ofrecemos un excelente servicio y buenas recomendaciones para la elección de su vehículo. Contamos con los mejores automóviles a un excelente precio de alquiler.</p>
					<p align="justify">Ya sea que usted se encuentre visitando la región, o su vehículo no se encuentra disponible en estos momentos, la mejor opción es acudir a su sucursal CRS más cercana.</p>
					<p align="justify">Además de todo esto, usted podrá olvidarse del problema de tiempo y distancia. Usted puede reservar un vehículo en línea y escoger en que sucursal lo recogerá desde días antes de viajar a su destino. Y si tiene que viajar a más de un lugar, puede también escoger en que sucursal devolverá el automóvil. Así que no lo dude más. ¡CRS es la mejor opción!</p>
				</div>
				<div id="column">
					<div class="holder">
						<h2>Enlaces</h2>
						<ul id="latestnews">
							<li><img class="imgl" src="images/GitHub-Mark-120px-plus.png" height="80" width="80" alt="" />
								<p><strong>Car Rental System en GitHub</strong></p>
								<p>Repositorio del proyecto CRS.</p>
								<p class="readmore"><a href="https://github.com/AlejandroFV/CarRentalSystem">Ver más &raquo;</a></p>
							</li>
							<li><img class="imgl" src="images/phpmailer_mini.png" height="80" width="80" alt="" />
								<p><strong>PHPMailer</strong></p>
								<p>The classic email sending library for PHP.</p>
								<p class="readmore"><a href="https://github.com/PHPMailer/PHPMailer">Ver más &raquo;</a></p>
							</li>
							<li class="last"><img class="imgl" src="images/bacon-ipsum.png" height="80" width="80" alt="" />
								<p><strong>Bacon Ipsum</strong></p>
								<p>A Meatier Lorem Ipsum Generator.</p>
								<p class="readmore"><a href="http://baconipsum.com/">Ver más &raquo;</a></p>
							</li>
						</ul>
					</div>
				</div>
				<br class="clear" />
			</div>
		</div>

		<?php require 'layout\php\subscriptionFromIndex.php'; ?>
		
		<div class="wrapper col7">
			<div id="copyright">
				<p class="fl_left">Copyright &copy; 2015 - Todos los derechos reservados - <a href="index.php">CRS</a></p>
				<br class="clear" />
			</div>
		</div>
	</body>
</html>
