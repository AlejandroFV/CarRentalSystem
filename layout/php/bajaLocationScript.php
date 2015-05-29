<?php 
	$idLocation = $_POST['id_location'];

	/*Este query borrara el registro en la relacion locationcar */
	$queryDeletRelation = "DELETE FROM crs.locationcar WHERE id_location = $idLocation";

	/*Este query borrara el registro en la tabla location */
	$queryDeletLocation = "DELETE FROM crs.location WHERE id_location = $idLocation";

	require("connection.php");

	/*Primero borro lo que hay en la relación*/
	mysqli_query($con, $queryDeletRelation);

	/*Ya que el id_location fue borrado de la relación procedo a eliminar el registro
	de la tabla location*/
	if (mysqli_query($con, $queryDeletLocation)) {
		$alert="<script>
					alert('Local eliminado correctamente');
					window.location.href='../../pages/menuManager.php';
				</script>";
		echo $alert;
	}else{
		$alert="<script>
					alert('No se pudo eliminar el local');
					window.location.href='../../pages/menuManager.php';
				</script>";
		echo $alert;
		
	}

	mysqli_close($con);
?>