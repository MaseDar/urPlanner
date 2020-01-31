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
   <!-- -----------ANGULARJS--------------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular-animate.min.js"></script>
    <!-- ----------------------------------------------- -->
    <!-- Подключаем bulma -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <!-- <link rel="stylesheet" href="css/mystyles.css">
    <link rel="stylesheet" href="css/custom.css"> -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
   <!--  -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,500" rel="stylesheet" type="text/css">
  

  </head>
  



  <body>
<!-- 32px отступа по бокам -->

		<!-- ----------------------------------NAVBAR----------------------------------------->
		<nav class="navbar" role="navigation" aria-label="main navigation">
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
							        <a class="navbar-item" href="https://urplanner.masedar.repl.co/">
								        v0.0.1
							        </a>
							        <a class="navbar-item" href="/version_romeo/index.php">
								        v0.1 Romeo
							        </a> 
							        <a class="navbar-item" href="/version_romeo/index.php">
								        v0.1.1 Balenciaga
							        </a> 
							    </div>
			      			</div>
			      			<div class="navbar-item has-dropdown is-hoverable">
				      			<a class="navbar-link is-arrowless has-text-grey-light">
						         	Developers 
						        </a>
						        <div class="navbar-dropdown is-boxed">
						        	<a class="navbar-item"  href="https://vk.com/masedar">MaseDar</a>
						        	<a class="navbar-item" href="https://vk.com/mujjum">Mujjum</a>
						        </div>
								
							</div>
							<!-- Стоит dropdown из-за расстояния блоков. Если убрать has-dropdown, то между developers и profile будет расстояние -->
						<div class="navbar-item has-dropdown is-hoverable">
							
						</div>
						 <div class="navbar-item">
							<a id="sign-button" class="button is-link is-rounded is-small" href="log_case.php">Sign in</a>
						</div> 
					</div>
		</nav>
<!-- ----------------------------------------окно регистрации------------------------------------------------------ -->
		<div class="columns">
	    	<div class="column is-4">
		        
	        </div>

	        <div class="column is-4">
	        	<p class="subtitle">‌‌‍‍‌‌‍‍  &#160;</p>
	        	<p class="subtitle">‌‌‍‍‌‌‍‍  &#160;</p>
	        	<?php if(!empty($_SESSION['error'])) : ?>
					<div class="tile ">
						<article class="tile  notification is-danger">
							<p class="subtitle is-6"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
						</article>
					</div>
				<?php endif; ?>
				

			<!-- <div class="has-background-dark"> -->
			
			  	<div class="box">
					<form method="post" action="" name="frmRegistration" autocomplete="off">
					  	<div class="field">
					  		<p class="title">Регистрация</p>
						  	<div class="control has-icons-left has-icons-right">
							    <input  name="username" class="input" type="text" placeholder="Никнейм">
							    	<span class="icon is-small is-left">
							     		<i class="fas fa-user"></i>
							    	</span>
							    	<span class="icon is-small is-right has-text-success">
							      		<i class="fas fa-check "></i>
							    	</span>
							 </div>
						</div>
								  
							

						<div class="field">
						  	<div class="control has-icons-left has-icons-right">
						    	<input name="email" class="input" type="email" placeholder="example@gmail.com">
						    		<span class="icon is-small is-left">
						     	 		<i class="fas fa-envelope"></i>
						    		</span>
						    		<span class="icon is-small is-right has-text-danger">
						    	  		<i class="fas fa-exclamation-triangle"></i>
						   			</span>
							</div>
						</div>
							
						<div class="field">
							<div class="control">
								    <input  name="password" class="input" type="password" placeholder="Пароль">
							</div>
						</div>

						<div class="field">
							<div class="control">
							    <input  name="passconf" class="input" type="password" placeholder="Подтверждение пароля">
							</div>
						</div>

						<div class="field is-grouped is-grouped-centered">
						  	<div class="control ">
						  		<button name="register-user" type="submit" class="button is-light"><b>Далее</b></button>
						  	</div>
						</div>
					


						<div class="field is-grouped is-grouped-centered">
						  	<div class="control">
						  		<style type="text/css"></style>
						  			<p class="subtitle is-6"><a class="has-text-primary" href="log_case.php">Зарегистрированы?</a></p>
						  	</div>
						</div>
					</form>	
				</div>		
			</div>
		</div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="\js/animation.js"></script>
  </body>
</html>