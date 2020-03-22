<?php 

	session_start(); // Это функция запоминает уникального пользователя, хранит $_SESSION['id] = '1; и тд.

	// ('localhost', 'user8147_denis', '21gunsoriginal', 'user8147_userlog')

	// Подключаемся к базе $database
	$db = new mysqli('localhost', 'root', '', 'userlog'); 

		// Получаем ошибку при неподключении 
		if (mysqli_connect_errno()) { 
			printf("Соединение не установлено", mysqli_connect_error()); 
			exit();
		} 

	// Ставим кодировку в utf
	$db->set_charset('utf8'); 	

	//Присваем новой сессии 0 значение
	if(!isset($_SESSION['count']))  $_SESSION['count']  =  0;

	//Сброс каптчи (временная мера)
	if (isset($_POST['reset_captcha']) && $_SESSION['count'] > 0) {
		unset($_SESSION['count']);
		header('location: log_case.php');
	}

	//Recaptcha для логина, если номер сессии больше 3
    if($_SESSION['count'] > 3)
    {
	    if (isset($_POST['g-recaptcha-response'])) {
			$recaptcha = $_POST['g-recaptcha-response'];
			if(!empty($recaptcha)) {
		    $recaptcha = $_REQUEST['g-recaptcha-response'];
		    $secret = '6LcI1dMUAAAAAIAllKNkUuTRFrWy_1HU0Xf4_haC';
		    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
		    $curl = curl_init();
		    curl_setopt($curl, CURLOPT_URL, $url);
		    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
		    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0");
		    $curlData = curl_exec($curl);
		    curl_close($curl); 
		    $curlData = json_decode($curlData, true);
			    if($curlData['success']) {
			    	//Если выполнить проверку я не робот, сбрасываю счетчик номера сессии до 0
			    	unset($_SESSION['count']);
			    	// Логиню пользователя
			        if (isset($_POST['submit'])) {
						$email = $_POST['email'];
						$password = $_POST['password'];

						$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
						$run = mysqli_query($db, $query);

						if ($run) {
							// Проверяю есть ли такие ряды в базе данных
							if (mysqli_num_rows($run) > 0) {
								//Преобразую в массив и его записываю в переменную
								$new_user = mysqli_fetch_assoc($run);
								$_SESSION['email'] = $new_user['email'];
								$_SESSION['success'] = '<div>Все окей! Вы вошли</div>';
								header('location: \main_page.php');
								exit();
							} else { 
								header('location: log_case.php'); 
								exit(); 
							}
						}
					}
			    } else {
			        $_SESSION['error_google'] = "Ошибка рекапчти, попробуйте снова";
			    }
			}
			else {
			    $_SESSION['error_google'] = "Поставьте галочку что вы не робот";
			}
		}
    } else {
    	if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			//Прибавляем к номеру текущей сессии +1
   			$_SESSION['count']++;
			$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'  ";
			$run = mysqli_query($db, $query);

			if ($run) {
				// Проверяю есть ли такие ряды в базе данных
				if (mysqli_num_rows($run) > 0) {
					//Преобразую в массив и его записываю в переменную
					$new_user = mysqli_fetch_assoc($run);
					$_SESSION['email'] = $new_email['email'];
					$_SESSION['username'] = $new_user['username'];
					$_SESSION['success'] = '<div>Все окей! Вы вошли</div>';
					header('location: \main_page.php');
					exit();
				} else { 
				    $_SESSION['error'] = 'Неправильная почта/логин';
					header('location: log_case.php'); 
					exit(); 
				}
			} 
		}
    }

	//Восстановление пароля по почте
	if (isset($_POST['submit_recovery'])) {
		$email = $_POST['email'];
		$query = "SELECT * FROM users WHERE email = '$email' ";
		$run_query = mysqli_query($db, $query);
		if (mysqli_num_rows($run_query) < 0) {
			$_SESSION['error'] = "Нету такого пользователя";
			header('location: recovery_case.php');
			exit();
		} else {
			$user = mysqli_fetch_assoc($run_query);
			$password = $user['password'];
			if (mail("$email", "Заявка с сайта", "Пароль:".$password.". E-mail: ".$email ,"From: user8147@urplanner.ru \r\n")) {
				$_SESSION['success_recovery'] = "Проверьте ваш почтовый ящик";
			} else {
				$_SESSION['error_recovery'] = "Такая почта не зарегистрирована";
			}
		}
	}

	//Регистрирую пользователя
	if (isset($_POST['register-user'])) {
		   $email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		//$passconf = $_POST['passconf'];
		     $email = trim($email);
		  $username = trim($username);

		//Сравниваю пароли и никнейм
		if ($username == "" || strlen($username) <= 5) {
			$_SESSION['error_log'] = "Слишком короткий логин";
			header('location: reg_case.php');
			exit;
		} else if (strlen($password) <= 5) {
			$_SESSION['error_pass'] = "Пароль должен содержать минимум 6 символов";
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
			if (mysqli_num_rows($run_query_user) > 0 || mysqli_num_rows($run_query) > 0) {
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
