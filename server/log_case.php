<?php 

	include "server.php"; 

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>URPLANNER</title>
    <!-- ------------------ LOGO ------------------ -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/img/site.webmanifest">
    <link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">
    <!-- ------------------  ------------------ -->
    <!-- Подключаем bulma -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="\css/mystyles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
   <!--  -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,500" rel="stylesheet" type="text/css">
   <script src="https://www.google.com/recaptcha/api.js" async defer></script> <!-- //Recapchta -->
  </head>
  <body>
<!-- 32px отступа по бокам -->
		<!-- ----------------------------------NAVBAR----------------------------------------->
		<nav class="navbar " role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
                <a class="navbar-item" href="/preview.php">
                  <img src="https://avatars.mds.yandex.net/get-pdb/2979185/79c8ab7d-99e2-4fed-8bd1-0a77af904cf0/s1200" width="112" height="28">
                </a>
			    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="main-navbar">
			      <span aria-hidden="true"></span>
			      <span aria-hidden="true"></span>
			      <span aria-hidden="true"></span>
			    </a>
			</div>
      		<div class="navbar-menu">
			<div class="navbar-start">		
	</div>
	<div class="navbar-end">
		<div class="navbar-item has-dropdown is-hoverable">	          
	      	 <a class="navbar-link is-arrowless has-text-grey-light">
	          v0.2 The Golden Age
	        </a>
	        <div class="navbar-dropdown is-boxed">
		        <a class="navbar-item" href="https://urplanner.masedar.repl.co/">v0.0.1</a>
		        <a class="navbar-item" href="/version_romeo/index.php">v0.1 Romeo</a> 
		        <a class="navbar-item" href="/version_romeo/index.php">v0.1.1 Balenciaga</a> 
		    </div>
		</div>
		<div class="navbar-item has-dropdown is-hoverable">
  			<a class="navbar-link is-arrowless has-text-grey-light">Developers</a>
		        <div class="navbar-dropdown is-boxed">
		        	<a class="navbar-item"  href="https://vk.com/masedar">MaseDar</a>
		        	<a class="navbar-item" href="https://vk.com/mujjum">Mujjum</a>
		        </div>
		</div>
							<!-- Стоит dropdown из-за расстояния блоков. Если убрать has-dropdown, то между developers и profile будет расстояние -->		
		<div class="navbar-item has-dropdown is-hoverable"></div>
			<?php if($_SESSION['count'] > 3) : ?>
		 		<div class="navbar-item">
		 			<form method="post" action=""  autocomplete="off">
					<button id="sign-button" name="reset_captcha" type="submit" class="button is-warning is-light is-rounded is-outlined is-small">Я робот</button>
					</form>
				</div> 
			<?php endif; ?>
			<div class="navbar-item">
				<a id="sign-button" class="button is-link is-rounded is-small" href="reg_case.php">Sign up</a>
			</div> 
	</div>
		  
</nav>

<!-----------------------------------------окно регистрации------------------------------------------------------ -->
		<div class="columns">
	        <div class="column is-6">
	        	
				<?php if(isset($_SESSION['success'])) : ?>
				  <!--   <script type="text/javascript">alert("Все, пора заканчивать...");</script> -->
       			 	<?session_destroy();?>
				<?php endif; ?>
<!-- ----------------------------------------------------------------------------------------- -->
				<div class="section ">
					<p class="subtitle">‌‌‍‍‌‌‍‍  &#160;</p>
					<!-- Кейс с уведомлениями и ошибками -->
		     		<div class="control">
				    	<div class="tags">
					      	<span class="tag is-warning">
							<?php $test = $_SESSION['count']; 
							switch ($test) {
							    case '0': echo "До рекаптчи 4 попытки";
									break;
								case '1': echo "До рекаптчи 3 попытки";
									break;
								case '2': echo "До рекаптчи 2 попытки";
									break;
								case '3': echo "До рекаптчи 1 попытки";
									break;
								default:
                                echo "Мы должны убедиться что вы не робот";
							}
							?>
							<button class="delete is-small"></button>
							</span>

							<?php if(!empty($_SESSION['error']) || !empty($_SESSION['error_google'])) : ?>
								<span class="tag is-danger">
									<?php echo $_SESSION['error']; unset($_SESSION['error']); echo $_SESSION['error_google']; unset($_SESSION['error_google']); ?>
									<button class="delete is-small"></button>
								</span>
							<?php endif; ?>
				    	</div>
					</div>
					<p class="subtitle">‌‌‍‍‌‌‍‍  &#160;</p>
		     		<p class="title has-text-centered">WELCOME BACK!</p>		
		     		<p class="subtitle has-text-centered">Please log back in to access urPlanner account</p>

					<form method="post" action=""  autocomplete="off">

		            	<div class="field">
		            		<p class="control has-icons-left">
			                	<input  name="email" class="input is-large" type="email" placeholder="Enter Email">
			                		<span class="icon is-small is-left">
			                  			<i class="fas fa-envelope"></i>
			                		</span>
			              	</p>
		          		</div>
			            <div class="field">
			              	<p class="control has-icons-left">
			                	<input  name="password" class="input is-large" type="password" placeholder="Password">
			                		<span class="icon is-small is-left">
			                  			<i class="fas fa-lock-open"></i>
			                		</span>
			              	</p>
			            </div>

			            <p>‌‌‍‍‌‌‍‍  &#160;</p>
			            <div class="control">
						  		<button name="submit" type="submit" class="button is-medium is-fullwidth is-info"><b>Sign in</b></button>
						  	</div>
						<div class="field is-grouped is-grouped-centered">
						  	
							</div>
								<!-- Это каптча не трогать! -->
								<?php if($_SESSION['count']  >  3 ) : ?>
								<div class="field is-grouped is-grouped-centered">
									<div class="g-recaptcha" data-sitekey="6LcI1dMUAAAAAIceMuRFrJLxllZqLyG7z7JVR6Kb"></div>

								</div>
								<?php endif; ?>

							<p>‌‌‍‍‌‌‍‍  &#160;</p>
							<div class="columns">
								<div class="column">
									<div class="control">
										<a id="notReg" href="reg_case.php" class="has-text-primary">Create account</a>
						              	<p  class="subtitle is-6">Not registered? </p>
									</div>

								</div>



								<div class="column">

									<div class="control">
						              	<p class="subtitle is-6 has-text-right"><a class="has-text-primary" href="recovery_case.php">Lost password?</a></p>
					                </div>
				                </div>
				            </div>

					</form>
				</div>
			</div>

			<div class="test1 column">
				<img src="Rock.png">
			</div>
			<!-- <div class="test2 column">
				<img src="Reg.png">
			</div> -->
			

<!-- ----------------------------------------------------------------------------------------------- -->
	</div>	
</div>

    
 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="\js/log.js"></script>
  </body>
</html>