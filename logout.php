<?php 
	session_start();

	$_SESSION['username']  = NULL;
	$_SESSION['firstnamw'] = NULL;
	$_SESSION['email']     = NULL;

	header('refresh: 3, login.php');

	$_SESSION['success'] = "<div class='success'>You successfully registered</div>";

	echo "<small> wait loggining...</small>";

?>