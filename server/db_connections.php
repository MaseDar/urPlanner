
<?php
session_start(); 
$db = new mysqli('localhost', 'root', '', 'bigpopa');

  if (mysqli_connect_errno()) {
    printf("Соединение не установлено", mysqli_connect_error());
    exit();
  } 
  $db->set_charset('utf8');

  if (!isset($_SESSION['username'])) {
    	header('location: preview.php');
    	exit();
  	} else {
   	 	$username_base = $_SESSION['username']; // присвоиваем переменной никнейм пользователя в сессии
 	}

  ?>