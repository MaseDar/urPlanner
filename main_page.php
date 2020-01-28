<?php session_start(); 
	if (isset($_POST['submit_logout'])) {
	    $_SESSION['username']  = NULL;
	    $_SESSION['firstname'] = NULL;
	    $_SESSION['email']     = NULL;
	  	header('location: preview.php');
  	}

  	if (!isset($_SESSION['username'])) {
    	header('location: preview.php');
    	exit();
  	} else {
   	 	$username_base = $_SESSION['username']; // присвоиваем переменной никнейм пользователя в сессии*/
 	}

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
							<a class="navbar-item" href="">Profile</a>
						</div>
						<div class="navbar-item">
							<?php if (!	isset($_SESSION['username'])) : ?> 
							<a class="button is-link is-rounded is-small" href="https://vk.com/masedar">Sign in</a>
							 <?php endif; ?>
							
							<?php if (isset($_SESSION['username'])) : ?> 
					        	<form  action="" method="post" >
					                <button  name="submit_logout" type="submit" id="logoutbtn" class="button  is-small is-rounded" >
					                	<icon class="icon is-large">
					                  		<i class="fas fa-sign-out-alt"></i>
					              		</icon>
					                </button>
					        <?php endif; ?>
					          	</form>
						</div>

					</div>
		  
		</nav>

		<!-- ----------------------------------NAVBAR----------------------------------------->
    	<div  class="content has-text-centered">
    		<h1 id="first_title" class="title has-text-weight-semibold is-1">
    			"Домашняя страница" 
    		</h1>
    		<h1 id="first_subtitle" class="subtitle has-text-grey-light is-2 has-text-weight-light">
    			Ты авторизовался!
    		</h1>
    	</div>

    
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/animation.js"></script>
  </body>
</html>