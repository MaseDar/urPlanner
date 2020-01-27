<?php 

	session_start(); // Это функция запоминает уникального пользователя, хранит $_SESSION['login'] = 'admin'; и тд.


	$host = 'localhost'; // адрес сервера 
	$user = 'root'; // имя пользователя
	$password = ''; // пароль
	$database = ''; // имя базы данных

	// Подключаемся к базе $database
	$db = new mysqli($host, $user, $password, $database); 

		// Получаем ошибку при неподключении 
		if (mysqli_connect_errno()) { 
			printf("Соединение не установлено", mysqli_connect_error()); 
			exit();
		} 

	// Ставим кодировку в utf
	$db->set_charset('utf8'); 	

	if (isset($_POST[''])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
		$run = mysqli_query($db, $query);
	}
?>