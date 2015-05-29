<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PAGANI ZONDA C12 S</title>
		<meta charset='UTF-8' />
		<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
		<script src="../layout/scripts/galeryThreeCar.js"></script>
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
					<h1>Auto popular #3: <strong>PAGANI ZONDA C12 S</strong></h1>
					<img src="../images/PopularCarThree/three-01.png" width="577" height="393" alt="">
					<div class="center">
						<h1 class="title3">Descripción</h1>
						<p class="justify">
							El Zonda C12 S es la primera evolución del automóvil creado por el argentino Horacio Pagani. Este biplaza es una muestra de la gran capacidad de desarrollo y búsqueda de soluciones de diseño por parte de Pagani. Incorpora un V12 más potente y acelera de 0 a 100 km/h en apenas 3,6 segundos.
						</p>
						<h1 class="title3">Diseño del <strong>PAGANI ZONDA C12 S</strong></h1>
						<p class="justify">
							El Pagani Zonda C12 S se destaca por un gran diseño y construcción del chasis. Utilizando criterios de ingeniería aeronáutica, la estructura tubular de acero al cromo-molibdeno tiene una altísima rigidez torsional. Esta característica sumada al uso materiales livianos y resistentes como la fibra de carbono en la carrocería conforma un conjunto ideal para un auto de máximo rendimiento.
						</p>
						<p class="justify">
							Gracias al excelente diseño del chasis, el nivel de vibraciones transmitidas por el mejorado V12 es muy bajo, tan sorprendentemente bajo como el nivel de decibeles percibido desde el habitáculo. La insonorización es óptima.
						</p>
						<p class="justify">
							Son tantos los factores a destacar, que resulta más justo hablar del trabajo del fabricante que de los detalles particulares. El grado de atención prestado a cada elemento y el funcionamiento en conjunto merecen la admiración de cualquier otro fabricante. Y más sorpresivo resulta saber que éste es el primer automóvil desarrollado por esta joven empresa con base en Italia.
						</p>
						<h1 class="title3">Motor AMG V12 - <strong>Pagani Zonda C12 S</strong></h1>
						<p>
							El nuevo motor V12 Mercedes AMG tiene una mayor cilindrada de 7.291 cm3 e inyección de combustible Bosch. También se rediseñó el sistema de admisión de aire, que ahora se fabrica artesanalmente. Este sistema de admisión está ubicado en un punto de alta presión, así se logra mayor eficiencia en el consumo de combustible y mejor rendimiento.
						</p>
						<p>
							El renovado V12 entrega una potencia de 555 hp a 5.900 rpm que impulsa al Zonda de 0 a 100 km/h en 3,6 segundos. El comportamiento dinámico del auto es excelente y las pruebas en pista realizadas por expertos lo destacan frente a otros súper-deportivos.
						</p>
					</div>
				</div>
				<div class="center">
					<h3><span class="title2">Galeria de imágenes: <strong>PAGANI ZONDA C12 S</strong></span></h3>
					<img src="../images/PopularCarThree/three-01.png" width="477" height="393" id="galeryImage">
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
		
		<div class="wrapper col6">
			<div id="footer">
				<div id="newsletter">
					<h2>¡Mantente informado de nuestras novedades!</h2>
					<p>Ingresa tu email para recibir noticias de promociones, nuevos vehículos, etc.</p>
					<form action="#" method="post">
					<fieldset>
						<legend>Novedades</legend>
						<input type="text" value="Escribe tu Email&hellip;"	size="100" onfocus="this.value=(this.value=='Escribe tu Email&hellip;')? '' : this.value ;" />
						<input type="submit" name="news_go" id="news_go" value="Enviar" />
					</fieldset>
					</form>
					<p>Para cancelar suscripción <a href="#">haz clic aquí &raquo;</a></p>
				</div>
				<div class="footbox">
					<h2>Nuestros Integrantes</h2>
					<ul>
						<li><a href="https://github.com/AlejandroFV">Alejandro Flores Villegas</a></li>
						<li><a href="https://github.com/BuiRai">Crhistian Uc Vázquez</a></li>
						<li><a href="https://github.com/IzanamiAlex">Izanami Chin Parra</a></li>
						<li class="last"><a href="https://github.com/YordiSel">Yordi Sel Rodriguez</a></li>
					</ul>
				</div>
				<br class="clear" />
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
