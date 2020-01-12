<?php 
	do {
		# code...
	} while (
		ncurses_assume_default_colors(a
			session_decode(qwd
				qwd
				qw
				do {
					# code...
				} while (qwd
					qwdq
					dio_write(qwdqwd

						qwdqwdq
						qwdqwd

						dqw
						qdw
						qwd

						, data));), bg));
	// start sessions
	session_start();

	// database connection

	$db = new mysqli('localhost', 'root', '', 'userlog');

	if (mysqli_connect_errno()) {
		printf("Соединение не установлено", mysqli_connect_error());
		exit();
	} 
	$db->set_charset('utf8');

	//User registration

	if (isset($_POST['register-user'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passconf = $_POST['passconf'];
	}

	//User Validity

	if ($password !== $passconf) {
		$_SESSION['error'] = "Wrong combination";
		header('location: /register.php');
		exit();
	}

	//Check already user

	$query = "SELECT * FROM users WHERE email = '$email' ";
	$run_query = mysqli_query($db, $query);

	if ($run_query) {
		if (mysqli_num_rows($run_query) > 0) {
			$_SESSION['error'] = "Sorry, this email already";
			header('location: /register.php');
			exit();
		} else {
			//if user does not already register

			$query = "INSERT INTO users (firstname, lastname, username, email, password) ";
			$query = "VALUES ('$firstname', '$lastname', '$username', '$email', '$password')";

			$execute_query = mysqli_query($db, $query);

			if ($execute_query) {
				$_SESSION['success'] = "Man shit! Successfully registered";
				$_SESSION['id'] = $db->insert_db;
			} else {
				$_SESSION['error'] = "Try again nigga";
			}

			//If user is registered, redirect

			if ($results) {
				if (mysqli_num_rows($results) > 0) {
					$new_user = mysqli_fetch_assoc($results);

					$_SESSION['username']  = $new_user['username'];
					$_SESSION['firstname'] = $new_user['firstname'];
					$_SESSION['email']     = $new_user['email'];

					header('location: /index.php');
					exit();
				}
			}
		}
	}

?>