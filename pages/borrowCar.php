<!DOCTYPE html>
<html>
	<head>
		<title>Iniciar sesión</title>
		<meta charset='UTF-8' />
		<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
		<script src="../layout/scripts/default.js"></script>
	</head>

	<body id="top">
		<div class="wrapper col1">
			<div id="topbar">
				<p>Tel: (999)2-19-43-79 | Mail: <a href="mailto:AlejandroFV@mail.com">AlejandroFV@mail.com</a></p>
				<ul>
					<li><a href="login.html">Iniciar Sesión</a></li>
					<li class="last"><a href="register.html">Registrarse</a></li>
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
					<h2>Escoge el auto que desees reservar</h2>
					<table>

						<!--Cabezera de la tabla-->
						<thead>
							<th>Tarifa diaria</th>
							<th>Tarifa por hora</th>
							<th>Color de auto</th>
							<th>Modelo de auto</th>
							<th>Localización del auto</th>
							<th>Reservar auto</th>
						</thead>
						<!--Fin de la cabezera de la tabla-->

						<!--Cuerpo de la tabla-->
						<tbody>
							<?php
								require("../layout/php/connection.php");
								$query = "SELECT * FROM car NATURAL JOIN cartype NATURAL JOIN locationcar NATURAL JOIN location";
								$result = mysqli_query($con, $query);
								while ($values = mysqli_fetch_array($result)) {
									echo "<tr class='dark'>";
									echo "<td>$values[3]</td>";
									echo "<td>$values[4]</td>";
									echo "<td>$values[5]</td>";
									echo "<td>$values[6]</td>";
									echo "<td>$values[7]</td>";
									echo "<td><button>Reservar</button></td>";
									echo "</tr>";
								}
							?>
						</tbody>
						<!--Fin del cuerpo de la table-->

					</table>
				</div>
				<div id="column">
					<div class="holder">
						<h2><span>¿Por qué reservar automóviles en nuestro negocio?</span></h2>
						<ul>
							<li><strong>Autos muy económicos:</strong>
								Los automóviles que prestamos a los clientes es especialmente para que ellos utilicen, siempre y cuando le den un buen uso. Mientras más sean las personas que soliciten nuestro servicio más mantenimiento le daremos a los automóviles y por lo tanto nuestros precios bajaran y se harán accesibles a mas usuarios. br.clear
							</li>
							<br class="clear">
							<li><strong>Diversificación de autos:</strong>
								Contamos con varias clases de automóviles, para mujeres y para hombres, para jovenes y adultos, para todo tipo de persona. Ademas de que los modelos con los que contamos son muy variados, tienes MUCHO de donde escoger.
							</li>
							<br class="clear">
							<li><strong>Promociones:</strong>
								Accede a promociones exclusivas disponibles solo para miembros registrados.
							</li>
						</ul>
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
