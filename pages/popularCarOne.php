<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>MAYBACH</title>
		<meta charset='UTF-8' />
		<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
		<script src="../layout/scripts/galeryOneCar.js"></script>
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
					<h1>Auto popular #1: <strong>MAYBACH</strong></h1>
					<img src="../images/PopularCarOne/one-01.png" width="577" height="393" alt="">
					<p>
						<h2>Caracteristicas del motor</h2>
						<ul class="noList">
							<li>Contiene doce cilindros.</li>
							<li>5,5 litros con dos turbocompresores</li>
							<li>551 CV</li>
						</ul>
					</p>
					<div class="center">
						<h1>Descripción</h1>
						<p class="justify">
							Los asientos tienen una función de masaje, con siete motores eléctricos.
						</p>
						<p class="justify">
							<strong>Instrumentación trasera:</strong> velocímetro, termómetro exterior y reloj. Techo de cristal para las plazas traseras. Tiene una membrana de cristal líquido, con polímeros de plástico conductores de la electricidad. Cuando la membrana está excitada (con una tensión de 90 voltios), los polímeros se ordenan de manera que el cristal es transparente. Cuando se interrumpe la corriente eléctrica, el cristal se vuelve translúcido y bloquea la luz. 
						</p>
						<p class="justify">
							Dos teléfonos con conexión <strong>«bluetooth»</strong>, un frigorífico (con un compresor eléctrico), huecos para botellas y copas. Internet vía WAP Acceso al portal de Mercedes Benz sólo en Alemania, Austria y Suiza.Cargador de seis CD, monitor, reproductor de DVD, conexiones para reproductores de MP3 y video.
						</p>
						<p class="justify">
							El escudo, la doble M es semejante al que tenía en el pasado. Anteriormente significaba <strong>«Maybach-Motorenbau»</strong> (fábrica de motores Maybach) y ahora <strong>«Maybach Manufaktur»</strong>.
						</p>
					</div>
				</div>
				<div class="center">
					<h3><span class="title2">Galeria de imágenes: <strong>MAYBACH</strong></span></h3>
					<img src="../images/PopularCarOne/one-01.png" width="477" height="393" id="galeryImage">
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
