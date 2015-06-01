<?php
	$email = $_POST['email'];

	require("connection.php");

	$scriptQuery = "SELECT pass_user FROM crs.user WHERE email_user = '$email'";
	
	if ($result = mysqli_query($con, $scriptQuery)) {
		$encryptedPassword = mysqli_fetch_array($result, MYSQL_ASSOC);
		$decryptedPassword = convert_uudecode($encryptedPassword['pass_user']);
		echo "<script>
				alert('Se le ha enviado un email con las instrucciones para volver a loguearse');
				window.location.href='../../index.php';
			</script>";
		require("passwordMailer.php");
	} else {
		echo "<script>
				alert('Email no existente: $email');
				window.location.href='../../pages/forgotPassword.html';
			</script>";
	}

	mysqli_close($con);
?>