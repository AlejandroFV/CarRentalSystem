<?php 
	$matricula = $_POST['matricula'];
	$dialy_rate = $_POST['dialy_rate'];
	$hourly_rate = $_POST['hourly_rate'];
	$color = $_POST['color'];
	$model = $_POST['model'];
	$type = $_POST['id_type'];

	
	require("connection.php");
	$script = "UPDATE crs.car SET 
						daily_rate = $dialy_rate,
						hourly_rate = $hourly_rate,
						color = '$color',
						id_type = $type
						WHERE matricula=$matricula";
	$result = mysqli_query($con, $script);
	mysqli_close($con);
	//$values = mysqli_fetch_array($result, MYSQLI_NUM);
	$alert="<script>
				alert('Se han guardado los cambios del automovil');
				window.location.href='../../pages/modificarCar.php';
			</script>";
	echo $alert;

 ?>