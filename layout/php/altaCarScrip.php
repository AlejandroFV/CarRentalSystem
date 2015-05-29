<?php 
	$matricula = $_POST['matricula'];
	$daily_rate = $_POST['daily_rate'];
	$hourly_rate = $_POST['hourly_rate'];
	$color = $_POST['color'];
	$type = $_POST['type'];
	$idLocation = $_POST['location'];

	
	require("connection.php");
	$scriptInsertCar = "INSERT INTO crs.car (matricula,daily_rate, hourly_rate, color, id_type) VALUES 
		('$matricula', $daily_rate, $hourly_rate, '$color', $type)";
	$scriptInsertLocationCar = "INSERT INTO crs.locationcar (id_location, matricula) VALUES 
		('$idLocation', '$matricula')";
	$result = mysqli_query($con, $scriptInsertCar);
	$result = mysqli_query($con, $scriptInsertLocationCar);
	mysqli_close($con);
	//$values = mysqli_fetch_array($result, MYSQLI_NUM);
	$alert="<script>
				alert('Se ha registrado el automovil');
				window.location.href='../../pages/altaCar.php';
			</script>";
	echo $alert;

 ?>