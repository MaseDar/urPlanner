<?php 

	include "server.php"; 
	include "vk_case.php"; 

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
  	<section class="hero">
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
						</div>
						<div class="navbar-item">
							<div id="log-button" class="button is-rounded is-small" onclick="location.href='log_case.php'">
								<span class="icon has-text-info">
							      <i class="fas fa-magic"></i>
							    </span>
							    <span>Log in</span>
							</div>
							<div class="navbar-item"><span class="has-text-grey-light"> &#160;</span></div>	
						</div>
					</div>
		</nav>
	</section>
<!-- ----------------------------------------окно регистрации------------------------------------------------------ -->
		<div class='calendar_rotate_background'></div>
		<div class="columns">
	    
			<div class="column is-6"> <img src="Reg.png"> </div>

	        <div class="column is-6">
			  	<div class="section">
					<form method="post" action="" name="frmRegistration" autocomplete="off">
					  	<div class="field">
							<!-- Кейс с уведомлениями и ошибками -->
				     		<div class="control ">
						    	<div class="tags">
									<?php if(!empty($_SESSION['error_pass'])) : ?>
									<span class="tag is-danger">
										<?php echo $_SESSION['error_pass']; unset($_SESSION['error_pass']); ?>
										<button class="delete is-small "></button>
									</span>
									<span class="tag is-info">
									Мы сгенерировали вам пароль: 
									<?php
									   	$id = md5(uniqid(rand(),true));
									   	$id = substr($id, 0, 9);
										echo $id;
									?>
									<button class="delete is-small"></button>
									</span>
								<?php endif; ?>
								<?php if(!empty($_SESSION['error_log'])) : ?>
									<span class="tag is-danger">
										<?php echo $_SESSION['error_log']; unset($_SESSION['error_log']); ?>
										<button class="delete is-small "></button>
									</span>
								<?php endif; ?>
								<?php if(!empty($_SESSION['error'])) : ?>
									<span class="tag is-danger">
										<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
										<button class="delete is-small "></button>
									</span>
								<?php endif; ?>
						    	</div>
							</div>
							<p class="subtitle">‌‌‍‍‌‌‍‍  &#160;</p>
				     		<p class="title has-text-centered">JOIN URPLANNER</p>
				     		<p class="subtitle has-text-centered">Take your beautiful notes and keep statistics</p>
						  	
						</div>
						<p>‌‌‍‍‌‌‍‍  &#160;</p>		  
							
						<div class="field is-grouped is-grouped-centered">
		     			<div class="control">
		     			<a class="button is-small is-info is-rounded" href="">
		     				<article class="media">
		     					<div class="media-left">
		     						<i class="fab fa-twitter"></i>
		     					</div>
		     					<div class="media-content">
		     						<div class="content">
		     							<p>Twitter</p>
		     						</div>
		     					</div>
		     				</article>
		     			</a>
		     			</div>
		     			<div class="control">
		     				<a class="button is-small is-dark is-rounded" href="https://vk.com/audios201877953?section=playlists&z=audio_playlist201877953_79295362">
		     				<article class="media">
		     					<div class="media-left">
		     						<i class="fab fa-vk"></i>
		     					</div>
		     					<div class="media-content">
		     						<div class=" content">
		     							<p>Vtentakle</p>
		     						</div>
		     					</div>
		     				</article>
		     			</a>
		     			</div>
		     			<div class="control">
		     			<a class="button is-small is-danger is-rounded" href="https://vk.com/audios201877953?section=playlists&z=audio_playlist201877953_79295362">
		     				<article class="media">
		     					<div class="media-left">
		     						<i class="fab fa-instagram"></i>
		     					</div>
		     					<div class="media-content">
		     						<div class="content">
		     							<p>Instahram</p>
		     						</div>
		     					</div>
		     				</article>
		     			</a>
		     			</div>


		     		</div>
		     		<div class="has-text-centered">
		     		<?php echo '<a href="' . $url . '">Войти через ВКонтакте</a> (Тестируется)'; ?>
		     		</div>

		     		<p>‌‌‍‍‌‌‍‍  &#160;</p>
						<div class="field">
						  	<div class="control has-icons-left has-icons-right">
						    	<input name="username" class="input is-large" type="text" placeholder="Enter name">
						    		<span class="icon is-small is-left">
						     	 		<i class="fas fa-user"></i>
						    		</span>
						    		<span class="icon is-small is-right has-text-danger">
						    	  		<i class="fas fa-exclamation-triangle"></i>
						   			</span>
							</div>
						</div>

						<div class="field">
						  	<div class="control has-icons-left has-icons-right">
						    	<input name="email" class="input is-large" type="email" placeholder="Enter email">
						    		<span class="icon is-small is-left">
						     	 		<i class="fas fa-envelope"></i>
						    		</span>
						    		
							</div>
						</div>
							
						<div class="field">
							<div class="control has-icons-left has-icons-right">
								    <input  name="password" class="input is-large" type="password" placeholder="Password">
								    <span class="icon is-small is-left">
						     	 		<i class="fas fa-lock"></i>
						    		</span>
						    		<span class="icon is-small is-right has-text-danger">
						    	  		<i class="fas fa-eye"></i>
						   			</span>
						    		
							</div>
						</div>

						<!-- <div class="field">
							<div class="control">
							    <input  name="passconf" class="input is-medium" type="password" placeholder="Подтверждение пароля">
							</div>
						</div> -->
						<p>‌‌‍‍‌‌‍‍  &#160;</p>

					  	<div class="control ">
					  		<button  name="register-user" type="submit" class="button is-medium is-fullwidth is-info"><b>Create account</b></button>
					  	</div>
					  	<p>‌‌‍‍‌‌‍‍  &#160;</p>
						<div class="field is-grouped is-grouped-right">
						  	<a class="has-text-primary" href="log_case.php">Зарегистрированы?</a>
						</div>
						
						<div class="field is-grouped is-grouped-centered">
							<hr>
							<p>‌‌‍‍‌‌‍‍  &#160;</p>
							<p>
					            <a class="has-text-grey" href="#">Terms</a> &nbsp;·&nbsp;
					            <a class="has-text-grey" href="#">Privacy</a> &nbsp;·&nbsp;
					            <a class="has-text-grey" href="#">Cookies</a>
					         </p>
				     	</div>
					</form>	
				</section>		
			</div>

		</div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="\js/animation.js"></script>
  </body>
</html>