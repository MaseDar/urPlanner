<?php 

if (isset($_POST['submit'])) 

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