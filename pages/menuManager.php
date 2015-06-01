<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Administrar Negocio</title>
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

		<div class="wrapper col5">
			<div id="container">
				<div id="content">
					<h2 class="title2">Administra tu negocio</h2>
					<br class="clear">
					<h3 class="title4">Administrar Autos</h3>
					<div id="menuManager">
						<div>
							<h3 class="title3"> <a href="altaCar.php">Alta de autos</a></h3>
						</div>
						<div>
							<h3 class="title3"> <a href="bajaCar.php">Baja de autos</a></h3>
						</div>
						<div>
							<h3 class="title3"> <a href="modificarCar.php">Modificar autos </a></h3>
						</div>
						<div>
							<h3 class="title3"> <a href="listaAutos.php">Lista de Automoviles.</a></h3>
						</div>
					</div>

					<h3 class="title4">Administrar Locales</h3>
					<div id="menuManager">
						<div>
							<h3 class="title3"><a href="altaLocation.php">Alta de local</a></h3>
							<ul>
							</ul>
						</div>
						<div>
							<h3 class="title3"><a href="bajaLocation.php">Baja de local</a></h3>
							<ul>
							</ul>
						</div>
						<div>
						<h3 class="title3"> <a href="modificarLocation.php">Modificar local</a></h3>
							<ul>
							</ul>
						</div>
					</div>
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
