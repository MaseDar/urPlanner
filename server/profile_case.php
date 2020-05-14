<?php session_start(); 
include '../registration_intro/file-handler.php';

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

  //$name = "9839d52eca63e72484c8853509013a3c.jpg" //картинка для профиля

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


 


 <!--  <div class="section">
    <?php if (isset($_SESSION['username'])) : ?> 
        <form  action="" method="post" >
              <button  name="submit_logout" type="submit" id="logoutbtn" class="button is-rounded" >
                <icon class="icon ">
                    <i class="fas fa-sign-out-alt"></i>
                </icon>
              </button>
      <?php endif; ?>
  </div> -->
<div >
  <div class="columns">
    <div class="column is-3  is-home-left-column is-vertical has-background-info">
      
    </div>

        <div class="column is-9  has-background-">
          <nav class="panel">
            <div class="panel-block">
              <p class="panel-tabs">
                <div class="navbar-item has-dropdown is-hoverable">
                   <a class="navbar-item">
                      Все категории
                    </a>
                    <div class="navbar-dropdown ">
                      <a class="navbar-item" href="https://urplanner.masedar.repl.co/">
                        Работа
                      </a>
                      <a class="navbar-item" href="https://urplanner.masedar.repl.co/">
                        Учеба
                      </a>
                  </div>
                </div>

              </p>
              <p class="control has-icons-right">
                <input class="input is-rounded" type="text" placeholder="Поиск здесь...">
                <span class="icon is-right">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </span>
              </p>
              <span class="icon is-large">
                <a href="https://vk.com/feed"><span class="far fa-bell">
                </span></a>
              </span>
              <span class="icon is-large">
                <a href="https://vk.com/feed"><span class="fa-stack fa-lg">
                  <i class="fas fa-camera fa-stack-1x"></i>
                  <i class="fas fa-ban fa-stack-2x has-text-danger"></i>
                </span></a>
              </span>
                              <span>
                                <figure class="image is-48x48">
                                  <img class="is-rounded" src="\registration_intro/pics/<?php echo $name ?>"> 
                                </figure>
                                </span>

              <span class="icon is-large">
                <a href="https://vk.com/feed"><span class="fas fa-ellipsis-v">
                </span></a>
              </span>
              
            </div>

          </nav>

        </div>

  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/main_page.js"></script>
  </body>
</html>