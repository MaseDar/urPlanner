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
				header('locatin: login.php');
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

		if ($run_query) {
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
			}
		}
	}

?>