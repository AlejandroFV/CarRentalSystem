<?php 
	$nameLocation = $_POST['name_location'];
	$capacityLocation = $_POST['capacity_location'];

	if (!empty($nameLocation) && !empty($capacityLocation)) {
		require("connection.php");
		$scriptInsert = "INSERT INTO crs.location (name_location, capacity_location) VALUES
			('$nameLocation', '$capacityLocation')";

		$querySucces = mysqli_query($con, $scriptInsert);
		if ($querySucces) {
			$alert="<script>
					alert('Se ha registrado el local');
					window.location.href='../../pages/altaLocation.php';
				</script>";
			echo $alert;	
		}
		mysqli_close($con);
	}else{
		$alert="<script>
					alert('Llene todos los campos');
					window.location.href='../../pages/altaLocation.php';
				</script>";
		echo $alert;	
	}

 ?>