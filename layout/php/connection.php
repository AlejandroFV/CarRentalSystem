<?php
	/*
		$DB_host = El host del servidor, en este caso localhost
		$DB_user = El usuario
		$DB_password = La contraseña
	*/
	$DB_host = "127.0.0.1";
	$DB_user = "root";
	$DB_password = "";
	$DB_name = "CRS";

	// Init the connection
	$con = mysqli_connect($DB_host, $DB_user, $DB_password);
	// Check connection
	if (mysqli_connect_errno()) {
  		echo "Error en la conexión con MySQL: " . mysqli_connect_error();
	}

	// Select the data base
	mysqli_select_db($con, $DB_name);

	// Set the default character set for the current connection.
	mysqli_query($con, "SET NAMES 'utf8'");
?>
