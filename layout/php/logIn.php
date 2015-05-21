<?php
	$email = $_POST['email'];
	$password = $_POST['password'] ;
	$password = md5($password);
	$scriptQuery = "SELECT * FROM user WHERE email_user = '$email'";
	require("connection.php");
	$result = mysqli_query($con, $scriptQuery);
	$values = mysqli_fetch_array($result, MYSQLI_NUM);
	mysqli_close($con);
	$email_user = $values[3];
	$password_user = $values[2];
	$name_user = $values[1];

	if ($email == $email_user && $password == $password_user) {
		echo "Usuario correcto <br>";
		session_start();
		$_SESSION['nick_user'] = $name_user;
		header("location:../../index.php");
	}else{
		echo "<script>
				alert('Correo o contraseña incorrectos.');
				window.location.href='../../pages/login.html';
			</script>";
	}

	
?>
