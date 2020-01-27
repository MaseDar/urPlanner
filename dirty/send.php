<?php 

	$db = new mysqli('localhost', 'root', '', 'userlog');

	if (mysqli_connect_errno()) {
		printf("Соединение не установлено", mysqli_connect_error());
		exit();
	} 
	$db->set_charset('utf8');
	
?>