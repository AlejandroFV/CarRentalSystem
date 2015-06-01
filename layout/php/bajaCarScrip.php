<?php 
	$matricula = $_POST['matricula'];
	
	require("connection.php");
	$scriptDelLocations = "DELETE FROM `crs`.`locationcar` WHERE `matricula`='$matricula';";
	$scriptDelCar = "DELETE FROM `crs`.`car` WHERE `matricula`='$matricula';";
	$result = mysqli_query($con, $scriptDelLocations);
	$result = mysqli_query($con, $scriptDelCar);
	mysqli_close($con);
	//$values = mysqli_fetch_array($result, MYSQLI_NUM);
	$alert="<script>
				alert('Se ha eliminado el automovil');
				window.location.href='../../pages/bajaCar.php';
			</script>";
	echo $alert;

 ?>