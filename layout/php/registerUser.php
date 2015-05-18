<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];

	require("connection.php");
	$password = md5($password);

	$scriptQuery = "INSERT INTO customer 
	(name_customer, pass_customer, email_customer) 
	VALUES ('$name', '$password', '$email')";

	echo $scriptQuery;

	mysqli_query($con, $scriptQuery);
	mysqli_close($con);

	header("location:../../pages/register.html");
?>
