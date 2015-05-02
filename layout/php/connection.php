<?php
	/*
	$DB_host = El host del servidor, en este caso localhost
	$DB_user = El usuario
	$DB_password = La contraseña
	*/
	$DB_host = "127.0.0.1";
	$DB_user = "root";
	$DB_password = "";
	$DB_name = "CarRentalSystem";

	/*
	Init the connection
	*/
	$link = mysql_connect($DB_host, $DB_user, $DB_password)
		or die("Could not connect to the database, ".mysql_error());
	echo "Connected successfully";

	/*
	Select the data base
	*/
	mysql_select_db($DB_name)
		or die("Couldn't select the database.");

	/*
	Set the default character set for the current connection.
	*/
	mysql_query("SET NAMES 'utf8'");
?>
