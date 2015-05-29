<?php 
	$idLocation = $_POST['id_location'];
	$nameLocation = $_POST['name_location'];
	$capacityLocation = $_POST['capacity_location'];
	
	$queryDelet = "UPDATE crs.location SET 
		name_location = '$nameLocation',
		capacity_location = '$capacityLocation'
		WHERE id_location = $idLocation";

	require("connection.php");
	$querySucces = mysqli_query($con, $queryDelet);
	mysqli_close($con);

	if ($querySucces) {
		$alert="<script>
					alert('Local modificado correctamente');
					window.location.href='../../pages/menuManager.php';
				</script>";
		echo $alert;	
	}
?>