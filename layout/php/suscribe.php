<?php
	$email = $_POST['email'];

	require("connection.php");

	$scriptQuery = "INSERT INTO emails (email) VALUES ('$email')";
	mysqli_query($con, $scriptQuery);

	echo "<script>
			alert('Ahora le mantendremos informado de nuestras promociones.');
			window.location.href='../../index.php';
		</script>";
	require("subscriptionMailer.php");

	mysqli_close($con);
?>
