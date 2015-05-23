<?php
	session_start();
?>

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
					<h2>Información del auto que desea reservar</h2>
					<form action="" method="post">
					<table>

						<!--Cabezera de la tabla-->
						<thead>
							<th>Tarifa diaria</th>
							<th>Tarifa por hora</th>
							<th>Color</th>
							<th>Modelo de auto</th>
							<th>Localización del auto</th>
							<th>Tipo de pago</th>
						</thead>
						<!--Fin de la cabezera de la tabla-->

						<!--Cuerpo de la tabla-->
						<tbody>
							<?php
								$idCar = $_GET['ID'];
								require("../layout/php/connection.php");
								$queryInformationCar = "SELECT * FROM car NATURAL JOIN cartype NATURAL JOIN locationcar NATURAL JOIN location 
									WHERE id_car = $idCar";
								$result = mysqli_query($con, $queryInformationCar);
								while ($values = mysqli_fetch_array($result)) {
									$tarifaPorDia = $values[3];
									$tarifaPorHora = $values[4];
									echo "<tr class='dark'>";
									echo "<td>$values[3]</td>";
									echo "<td>$values[4]</td>";
									echo "<td>$values[5]</td>";
									echo "<td>$values[6]</td>";
									echo "<td>$values[7]</td>";
									echo "<td>
										      <select name='typePayment' id='typePayment'>
											      <option value='Visa'>Visa</option>
												  <option value='Visa Debit'>Visa Debit</option>
												  <option value='Visa Electron'>Visa Electron</option>
												  <option value='Mastercard'>Mastercard</option>
												  <option value='American Express'>American Express</option>
											  </select>
										  </td>";
									echo "</tr>";
								}
								echo "<h3>Usted pagara un total de <strong>$tarifaPorDia</strong> por la tarifa diaria o un total de <strong>$tarifaPorHora</strong> por la tarida por hora</h3>";
							?>

						</tbody>
						<!--Fin del cuerpo de la table-->
					</table>
					<input type="submit" value="Confirmar Reservación" name="confirmReservation">
					</form>

					<!--Aqui es donde ya se realiza la transacción de la reservación de un automóvil-->
					<?php
						if (isset($_POST['confirmReservation'])) {
							$nameUser = $_SESSION['nick_user'];
							$hoy = date("y-m-d h:m:s");
							$typePayment = $_POST['typePayment'];
							
							$queryInvoice = "INSERT INTO crs.invoice (date_invoice, type_payment, aval_invoice, total_cost) 
								VALUES ('$hoy','$typePayment','$nameUser',$tarifaPorDia)";
							require("../layout/php/connection.php");
							mysqli_query($con, $queryInvoice);
							echo "<script>alert('Has reservado un auto');</script>";

							$queryInvoiceSelect = "SELECT * FROM crs.invoice WHERE date_invoice = '$hoy'";
							$resultadoInvoiceSelect = mysqli_query($con, $queryInvoiceSelect);
							$fila = mysqli_fetch_row($resultadoInvoiceSelect);
							$id_invoice = $fila[0];

							$id_user = $_SESSION["id_user"];
							$queryServe = "INSERT INTO crs.serve(id_customer, id_invoice) VALUES ($id_user,$id_invoice)";
							mysqli_query($con, $queryServe);
							mysqli_close($con);
						}
					?>
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
