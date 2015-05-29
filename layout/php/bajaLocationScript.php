<?php 
	$idLocation = $_POST['id_location'];
	
	$queryDelet = "DELETE FROM crs.location WHERE id_location = $idLocation";
	require("connection.php");
	$querySucces = mysqli_query($con, $queryDelet);
	mysqli_close($con);

	if ($querySucces) {
		$alert="<script>
					alert('Local eliminado correctamente');
					window.location.href='../../pages/menuManager.php';
				</script>";
		echo $alert;	
	}
?>