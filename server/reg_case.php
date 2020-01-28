<?php 

	include "server.php"; 

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>URPLANNER</title>
    <!-- Подключаем bulma -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="css/mystyles.css">
    <link rel="stylesheet" href="css/custom.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
   <!--  -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,500" rel="stylesheet" type="text/css">
  </head>
  <body>
<!-- 32px отступа по бокам -->
	<div class="container is-fluid">
		<!-- ----------------------------------NAVBAR----------------------------------------->
		<nav class="navbar" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
				  <div class="subtitle">
                <a class="navbar-item" href="">
                  <h1 class="has-text-weight-bold">UR</h1>
                  <h1 class="has-text-weight-regular">PLANNER</h1>
                <!-- <p><b>UR</b>PLANNER</p> -->
                </a>
              </div>
			    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="main-navbar">
			      <span aria-hidden="true"></span>
			      <span aria-hidden="true"></span>
			      <span aria-hidden="true"></span>
			    </a>
			</div>
	
			
      <div class="navbar-menu">
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
						        <div class="navbar-dropdown is-boxed" >
						        	<a class="navbar-item"  href="log_case.php">MaseDar</a>
						        	<a class="navbar-item" href="https://vk.com/mujjum">Mujjum</a>
						        </div>
								
							</div>
							<!-- Стоит dropdown из-за расстояния блоков. Если убрать has-dropdown, то между developers и profile будет расстояние -->
						<div class="navbar-item has-dropdown is-hoverable">
							
						</div>
						<!-- <div class="navbar-item">
							<a class="button is-link is-rounded is-small" href="log_case.php">Sign in</a>
						</div> -->
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
			<div class="tile is-parent is-grouped ">
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
						    	<input name="email" class="input" type="email" placeholder="Email: example@yandex.ru">
						    		<span class="icon is-small is-left">
						     	 		<i class="fas fa-envelope"></i>
						    		</span>
						    		<span class="icon is-small is-right ">
						    	  		<i class="fas fa-exclamation-triangle"></i>
						   			</span>
							</div>
						</div>
							
						<div class="field is-grouped is-mobile">
							<div class="">
							    <input  name="password" class="input" type="password" placeholder="Password">
							    	
							</div>

							<div class="">
							    <input  name="passconf" class="input" type="password" placeholder="Password confirm">
							    	
							</div>
						</div>

						<div class="field is-grouped is-grouped-centered">
						  	<div class="control ">
						  		<button name="register-user" type="submit" class="button is-light">Регнуться!</button>
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
	</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/animation.js"></script>
  </body>
</html>