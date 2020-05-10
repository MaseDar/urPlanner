<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$message = $_POST['message'];

	$errorEmpty = false;
	$errorEmail = false;

	if (empty($name) || empty($email) || epmty($message)) {
		echo "<p class='subtitle is-danger'>Заполни ало</p>";
		$errorEmpty = true;
	} 
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<p class='subtitle is-danger'>Ты чо китаец? Почини почту?</p>";
		$errorEmail = true;
	} 
	else {
		echo "<p class='subtitle is-success'>Good</p>";
	}

}

else {
	echo "There was an error!";
}

?>

<script>

	$("#mail-name, #mail-email, #mail-message, #mail-gender").removeClass("is-warning");

	var errorEmpty = "<?php echo $errorEmpty; ?>";
	var errorEmail = "<?php echo $errorEmail; ?>";

	if (errorEmpty == true) {
		$("#mail-name, #mail-email, #mail-message").addClass("is-warning");
	}

	if (errorEmail == true) {
		$("#mail-email").addClass("is-warning");
	}

	if (errorEmpty == false && errorEmail == false) {
		$("#mail-name, #mail-email, #mail-message").val("");
	}
</script>