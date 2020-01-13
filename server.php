<?php 

	session_start(); //Регистрация

	// database connection

	$db = new mysqli('localhost', 'root', '', 'userlog');

	if (mysqli_connect_errno()) {
		printf("Соединение не установлено", mysqli_connect_error());
		exit();
	} 
	$db->set_charset('utf8');

// User login case

	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
		$run = mysqli_query($db, $query);

		if ($run) {
			if (mysqli_num_rows($run) > 0) {
				$new_user = mysqli_fetch_assoc($run);

				$_SESSION['username'] = $new_user['username'];
				$_SESSION['firstname'] = $new_user['firstname'];
				$_SESSION['email'] = $new_user['email'];

				$_SESSION['success'] = "<div>Все ок! вы вошли</div>";

				header('location: index.php');
				exit();
			} else {
				$_SESSION['error'] = "<div>Проверь введные данные сука</div>";
				header('location: login.php');
				exit();
			}
		} else {
			echo "Не пошло блдь, вот ошибка: " . mysqli_error();
		}
	}


	//User registration

	if (isset($_POST['register-user'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passconf = $_POST['passconf'];
	

		//User Validity

		if ($password !== $passconf) {
			$_SESSION['error'] = "Wrong combination";
			header('location: register.php');
			exit();
		}

		//Check already user

		$query = "SELECT * FROM users WHERE email = '$email' ";
		$run_query = mysqli_query($db, $query);

		$query_user = "SELECT * FROM users WHERE username = '$username' ";
		$run_query_user= mysqli_query($db, $query);

		if ($run_query) {
			if (mysqli_num_rows($run_query) > 0) {
				$_SESSION['error'] = "Sorry, this login already";
					header('location: register.php');
					exit();
			} else {
				if (mysqli_num_rows($run_query) > 0) {
					$_SESSION['error'] = "Sorry, this email already";
					header('location: register.php');
					exit();
					} else {
					//if user does not already register

					$query = "INSERT INTO users (firstname, lastname, username, email, password) ";
					$query .= "VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";

					$execute_query = mysqli_query($db, $query);

					if ($execute_query) {
						$_SESSION['id'] = $db->insert_id;
						$_SESSION['success'] = "Man shit! Successfully registered";
					} else {
						$_SESSION['error'] = "Try again nigga";
					}

					//If user is registered, redirect

					$query = "SELECT * FROM users WHERE id = " . $_SESSION['id'];
					$results = mysqli_query($db, $query);

					if ($results) {
						if (mysqli_num_rows($results) > 0) {
							$new_user = mysqli_fetch_assoc($results);

							$_SESSION['username']  = $new_user['username'];
							$_SESSION['firstname'] = $new_user['firstname'];
							$_SESSION['email']     = $new_user['email'];

							header('location: index.php');
							exit();
						}
					}
			}	}
		}
	}


function load($db) {
	$echo = "";
	$result = mysqli_query($db,"SELECT * FROM messages"); //Запрашиваем сообщения из базы
		if($result) {
			if(mysqli_num_rows($result) >= 1) {
				while($array = mysqli_fetch_array($result)) {//Выводим их с помощью цикла
						$echo .= "<div $array[message] </div>"; //Добавляем сообщения в переменную $echo
					}
				}
			
			} else {
				$echo = "Нет сообщений!";//В базе ноль записей
			}
		}
	
	return $echo;//Возвращаем результат работы функции
}

function send($db,$message) {

		$message = htmlspecialchars($message);//Заменяем символы ‘<’ и ‘>’на ASCII-код
		$message = trim($message); //Удаляем лишние пробелы
		$message = addslashes($message); //Экранируем запрещенные символы
		$result = mysqli_query($db,"INSERT INTO messages (user_id,message) VALUES ('$_SESSION[id]','$message')");
		//Заносим сообщение в базу данных
	return load($db); //Вызываем функцию загрузки сообщений
}

	//Получаем переменные из супермассива $_POST
//Тут же их можно проверить на наличие инъекций
if(isset($_POST['act'])) {$act = $_POST['act'];}
if(isset($_POST['var1'])) {$var1 = $_POST['var1'];}

switch($_POST['act']) {//В зависимости от значения act вызываем разные функции
	case 'load': 
		$echo = load($db); //Загружаем сообщения
	break;
	
	case 'send': 
		if(isset($var1)) {
			$echo = send($db,$var1); //Отправляем сообщение
		}
	break;
}

echo $echo;//Выводим результат работы кода

?>