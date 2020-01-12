<?php 
	//include the server file
	include "/server.php";



	
?>


<?php if(!empty($_SESSION['error'])) : ?>
	<div class="error">
		<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
	</div>
	<?php endif; ?>