<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Alta de Automoviles</title>
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
					<h3 class="title4">Agregar Autos</h3>
					<br class="clear">
					<div id="jo">
						<form id=altaCar action="../layout/php/altaCarScrip.php" method="post">
							
							<label for="matricula">Matricula del carro:</label><br>
							<input type="text" id=matricula name="matricula"><br>

							<label for="daily_rate">Daily rate:</label><br>
							<input type="text" id="daily_rate" name="daily_rate"><br>
							
							<label for="hourly_rate">Hourly rate:</label><br>
							<input type="text" id="hourly_rate" name="hourly_rate"><br>
							
							<label for="color">Color:</label><br>
							<input type="text" id="color" name="color"><br>
							
							<label for="type">Tipo:</label><br>
							
							<select id="type" name="type">
								<?php  
									$scriptType = "SELECT * FROM cartype";
									require("../layout/php/connection.php");
									$resultType = mysqli_query($con, $scriptType);
									while ($fila = mysqli_fetch_array($resultType,MYSQLI_NUM)){
										// Operaciones con los resultados que tenemos en $fila
									 	$id_type = $fila[0];
									 	$model = $fila[1];
									 	$mensaje = "<option name='$model' value= '$id_type'> $model </option>";
									 	echo $mensaje;
									 }
									 mysqli_close($con);

								?>
							</select><br><br>
							
							<label for="type">Local en donde estará alojadoel automóvil:</label><br>
							<select id="type" name="location">
								<?php  
									$scriptType = "SELECT * FROM location";
									require("../layout/php/connection.php");
									$resultType = mysqli_query($con, $scriptType);
									while ($fila = mysqli_fetch_array($resultType,MYSQLI_NUM)){
										// Operaciones con los resultados que tenemos en $fila
									 	$id_type = $fila[0];
									 	$location = $fila[1];
									 	$mensaje = "<option name='$location' value= '$id_type'> $location </option>";
									 	echo $mensaje;
									 }
									 mysqli_close($con);

								?>
							</select>
							<br class="clear">
							<br class="clear">
							<input type=reset value=limpiar> 
							<input type=submit value=registrar>
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
