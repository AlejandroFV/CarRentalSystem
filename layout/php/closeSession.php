<?php
	session_start();
	unset($_SESSION['nick_user']);
	session_destroy();
	header("location:../../index.php");	
?>
