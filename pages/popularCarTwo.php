<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>BUGATTI VEYRON</title>
		<meta charset='UTF-8' />
		<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
		<script src="../layout/scripts/galeryTwoCar.js"></script>
	</head>

	<body id="top" onload="inicializarVariables();">
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
					<li class="active"><a href="#">Más populares</a><span>Por rating</span>
						<ul>
							<li><a href="popularCarOne.php">Auto 1</a></li>
							<li><a href="popularCarTwo.php">Auto 2</a></li>
							<li><a href="popularCarThree.php">Auto 3</a></li>
						</ul>
					</li>
					<li><a href="paymentTypes.php">Tipos de pago</a><span>Formas de pago aceptadas</span></li>
					<li><a href="about.php">Acerca de nosotros</a><span>Desarrolladores</span></li>
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
				<div >
					<h1>Auto popular #2: <strong>BUGATTI VEYRON</strong></h1>
					<img src="../images/PopularCarTwo/two-01.png" width="577" height="393" alt="">
					<p><h1 class="title3">¿¿Quién ya escucho hablar del <strong>“NUEVO”</strong> BUGATTI VEYRON??</h1></p>
					<div class="center">
						<p>
							<h3 class="title4">Para quién nunca oyo hablar de el:</h3>
						</p>
						<h1>Descripción</h1>
						<p class="justify">
							Es un automovil que tiene un motor de 8OOO cc de cilindrada V16 (o mejor: son 2 motores de 4000 cc V8 que juntos forman un 8000 V16!!! ) , con 1001 CV a 6000 RPM, 1250 NM de torque, 4 TURBOS y una caja de 7 velocidades!!.
						</p>
						<p class="justify">
							Va de 0 a 100 KM/H en 2.5segundos (una <strong>suzuki hayabusa</strong> 1,300 va de los 0 a los 100 KM/H en 2.8 segundos).
						</p>
						<p class="justify">
							Si colocamos al <strong>McLaren</strong> y al <strong>Bugatti</strong> lado a lado en una recta, podremos dejar al <strong>McLaren</strong> arrancar primero hasta llegar a los 193Km/h, solo despues arrancar el Bugatti, y este todavia conseguira llegar primero a los 321Km/h!!! (Cuesta creer, no es cierto???). El depósito de combustíble tiene una capacidad de 100 litros de gasolina, pero si fuese posible andar con el pie siempre a fondo, conseguiríamos andar solamente 12 minutos sin abastecer!!! Ese es uno de los motivos que me hacen vender el auto, mi mujer ya me esta molestando mucho...... Con toda esa potencia, el auto literalmente quema neumático tan rápido que la Volkswagen tuvo que pedir a Michelin que crease un nuevo tipo de compuesto para los neumáticos del Veyron. Los neumáticos son de medidas 265/30R 20 adelante y 335/30R 20 atrás. En cuanto a los frenos ... son "garantizados" pues permiten bajar de los 402Km/h a los 0 en apenas 10 segundos!!! 
						</p>
					</div>
				</div>
				<div class="center">
					<h3><span class="title2">Galeria de imágenes: <strong>BUGATTI VEYRON</strong></span></h3>
					<img src="../images/PopularCarTwo/two-01.png" width="477" height="393" id="galeryImage">
					<p>
					<button onclick="firstImage();" value="<<-"><img src="../images/buttons/first.png" alt=""></button>
					<button onclick="previousImage();" value="<<-"><img src="../images/buttons/previous.png" alt=""></button>
					<button onclick="nextImage();" value="<<-"><img src="../images/buttons/next.png" alt=""></button>
					<button onclick="lastImage();" value="<<-"><img src="../images/buttons/last.png" alt=""></button>
					</p>
				</div>
				<p>Para mayor información, comuníquese al telefono (999) 2 - 19 - 43 - 79 o mándenos un email a <a href="mailto:AlejandroFV@mail.com">AlejandroFV@mail.com</a></p>
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
