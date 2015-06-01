<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Baja de Automoviles</title>
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
					<h3 class="title4">Eliminar Autos</h3>
					<br class="clear">
					<div id="jojo">
						<?php 
							$dialy_rate = $hourly_rate = $color = $type = "";


							if($matricula = $_POST['matricula']){
								$script = "SELECT * FROM car NATURAL JOIN cartype WHERE matricula=$matricula;";
								require ("../layout/php/connection.php");
								$result = mysqli_query($con, $script);
								$values = mysqli_fetch_array($result,MYSQLI_NUM);
								$dialy_rate = $values[2];
								$hourly_rate = $values[3];
								$color = $values[4];
								$idType = $values[0];
								$model = $values[5];
							}

						 ?>
						<form id=bajaCar method="post" action="../layout/php/bajaCarScrip.php">
							<label for="matricula">Matricula del carro:</label><br>
							<?php 
								echo "<input type=text id=matricula name=matricula value=$matricula><br>";
							 ?>
							
						
							<label for="dialy_rate">Dialy rate:</label><br>
							<?php 
								echo "<input type=text id=dialy_rate name=dialy_rate value=$dialy_rate><br>";
							 ?>
							
							
							<label for="hourly_rate">Hourly rate:</label><br>
							<?php 
								echo "<input type=text id=hourly_rate name=hourly_rate  value=$hourly_rate><br>";
							 ?>
							
							
							<label for="color">Color:</label><br>
							<?php 
								echo "<input type=text id=color name=color value=$color><br>";
							 ?>
							
							
							<label for="type">Tipo:</label><br>
							<?php 
								echo "<input type=text id=model name=model value=$model>";
								echo "<input type=hidden id=id_type name=id_type value=$idType>";
							 ?>
							<br class="clear">
							<br class="clear">
							
							<input type=submit value=Eliminar>
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
