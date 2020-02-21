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
<html >
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
    <!------------- Подключаем bulma ------------>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
   <!--  -->
   <!-- -----------ANGULARJS--------------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular-animate.min.js"></script>
    <!-- ----------------------------------------------- -->

   <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/mystyles.css">
  </head>

  <body>
   	<nav class="navbar clcolor" role="navigation" aria-label="profile navigation">
		<!-- <a id="navigation-trigger" class="navbar-item hamburger-btn" href="javascript:void(0);" style="opacity: 1;">
                <span class="menu-toggle">
                    <span class="icon-box-toggle">
                        <span class="rotate">
                            <i class="icon-line-top"></i>
                            <i class="icon-line-center"></i>
                            <i class="icon-line-bottom"></i>
                        </span>
                    </span>
                </span>
            </a> -->

            <a class="" role="navigation" aria-label="profile navigation">
            	<div class="profile-burger">
            		
            		
            	</div>
            </a>

		<div class="navbar-menu">
			
		</div>
    
 
	</nav>

  <div class="section">
    <?php if (isset($_SESSION['username'])) : ?> 
                    <form  action="" method="post" >
                          <button  name="submit_logout" type="submit" id="logoutbtn" class="button  is-large is-rounded" >
                            <icon class="icon is-large">
                                <i class="fas fa-sign-out-alt"></i>
                            </icon>
                          </button>
                  <?php endif; ?>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/main_page.js"></script>
  </body>
</html>