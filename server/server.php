<?php 

	session_start(); // Это функция запоминает уникального пользователя, хранит $_SESSION['id] = '1; и тд.


	$host = 'localhost'; // адрес сервера 
	$user = 'root'; // имя пользователя
	$password = ''; // пароль
	$database = 'userlog'; // имя базы данных

	// Подключаемся к базе $database
	$db = new mysqli('localhost', 'root', '', 'userlog'); 

		// Получаем ошибку при неподключении 
		if (mysqli_connect_errno()) { 
			printf("Соединение не установлено", mysqli_connect_error()); 
			exit();
		} 

	// Ставим кодировку в utf
	$db->set_charset('utf8'); 	

	// Логиню пользователя
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		//
		$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
		$run = mysqli_query($db, $query);

		if ($run) {
			// Проверяю есть ли такие ряды в базе данных
			if (mysqli_num_rows($run) > 0) {
				//Преобразую в массив и его записываю в переменную
				$new_user = mysqli_fetch_assoc($run);
				$_SESSION['username'] = $new_user['username'];
				$_SESSION['success'] = '<div>Все окей! Вы вошли</div>';
				header('location: \main_page.php');
				exit();
			} else { 
				header('location: log_case.php'); 
				exit(); 
			}
		} else {
			echo "Переменная run = false Подробнее: " . mysqli_error();
		}
	}

	//Регистрирую пользователя
	if (isset($_POST['register-user'])) {
		   $email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$passconf = $_POST['passconf'];

		//Сравниваю пароли
		if ($password !== $passconf) {
			$_SESSION['error'] = "Пароли не совпали";
			header('location: reg_case.php');
			exit();
		}

		//Беру столбец с емаилом, если есть
		$query = "SELECT * FROM users WHERE email = '$email' ";
		$run_query = mysqli_query($db, $query);

		//Беру столбец с ником, если есть
		$query_user = "SELECT * FROM users WHERE username = '$username' ";
		$run_query_user = mysqli_query($db, $query);

		if ($run_query) {
			if (mysqli_num_rows($run_query_user) > 0 || mysqli_num_rows($run_query_user) > 0) {
				$_SESSION['error'] = "Этот никнейм/почта уже занята";
				header('location: reg_case.php');
				exit();
			} else {
				//Отправляю данные инфу о пользователе в базу данных
				$query = "INSERT INTO users (username, email, password)";
				$query .= "VALUES ('$username', '$email', '$password')";
				$execute_query = mysqli_query($db, $query);

				if ($execute_query) {
					$_SESSION['id'] = $db->insert_id;
					$_SESSION['success'] = "Добро пожалость -ник-!";
				} else { 
					$_SESSION['error'] = "Ошибка кокаята"; 
				}

				//Берем из базы данные, о только что зарегстрированно мпользваотеле по его id
				$query = "SELECT * FROM users WHERE id = " . $_SESSION['id'];
				$results = mysqli_query($db, $query);
				if ($results) {
					if (mysqli_num_rows($results) > 0) {
						$new_user = mysqli_fetch_assoc($results);
						$_SESSION['username'] = $new_user['username'];
						   $_SESSION['email'] = $new_user['email'];
						//Имя этой переменной, название новой таблицы
						$user_unique_base = $_SESSION['username'];
						$db2 = new mysqli('localhost', 'root', '', 'bigpopa');
						$db2->set_charset('utf8');
						//Создаю таблицу с именем пользователя
						$sql = "CREATE TABLE `$user_unique_base` (
						id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,	
						task VARCHAR(200),	
						time TIMESTAMP
							)";
							if ($db2->query($sql) === TRUE) {
							   echo $user_unique_base ." таблица создана успешно!";
							} else {
							   echo "Ошибка создания таблицы: " . $conn->error;
							}
							header('location: \main_page.php');
							exit();
					}
				}
			}
		}
	}
?>
