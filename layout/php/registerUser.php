<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password = md5($password);
	$emailExistente = false;

	require("connection.php");
	$scriptQueryAll = "SELECT * FROM user";
	$resultAll = mysqli_query($con, $scriptQueryAll);
	while ($valuesAll = mysqli_fetch_array($resultAll)) {
		if ($email == $valuesAll[3]) {
			$emailExistente = true;
			break;
		}
	}

	if (!$emailExistente) {
		$scriptQuery = "INSERT INTO user
		(name_user, pass_user, email_user, rol_user) 
		VALUES ('$name', '$password', '$email', 'customer')";
		mysqli_query($con, $scriptQuery);

		echo "<script>
				alert('La cuenta ha sido creada exitosamente.');
				window.location.href='../../pages/register.html';
			</script>";
		require("welcomeMailer.php");
	}else{
		echo "<script>
				alert('Ya existe una cuenta asociada al correo que ingreso.');
				window.location.href='../../pages/register.html';
			</script>";
	}
	mysqli_close($con);
?>
