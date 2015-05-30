<?php 
	session_start(); 
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tipos de pago</title>
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
					<li class="active"><a href="paymentTypes.php">Tipos de pago</a><span>Formas de pago aceptadas</span></li>
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
				<h2>Métodos de pago aceptados</h2>
				<p>La información que se muestra aquí aplica con los pagos recibidos al rentar un vehículo en CRS.</p>
				<p>Todos los usuarios pueden utilizar tarjetas:</p>
				<ul>
					<li>Visa</li>
					<li>Visa Debit</li>
					<li>Visa Electron</li>
					<li>Mastercard</li>
					<li>American Express</li>
				</ul>
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
