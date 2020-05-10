<?php session_start(); 
	if (isset($_POST['submit_logout'])) {
	    $_SESSION['username']  = NULL;
	    $_SESSION['firstnam'] = NULL;
	    $_SESSION['email']     = NULL;
	  	header('location: preview.php');
  	}

  	if (!isset($_SESSION['username'])) {
    	header('location: preview.php');
    	exit();
  	} else {
   	 	$username_base = $_SESSION['username']; // присвоиваем переменной никнейм пользователя в сессии*/
 	}

 	$db = new mysqli('localhost', 'root', '', 'bigpopa');

  if (mysqli_connect_errno()) {
    printf("Соединение не установлено", mysqli_connect_error());
    exit();
  } 
  $db->set_charset('utf8');

    //Слушатель кнопки добавить задачу

  if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    if ($task != "") {
      $query = "INSERT INTO `$username_base` (`task`) VALUES ('$task');";
      $run_query = mysqli_query($db, $query);
    }
    
  }
  
    //Удаление задачи из списка

  if (isset($_GET['delete'])) {
   $delete = $_GET['delete'];
   $query = "DELETE FROM `$username_base` WHERE id = '$delete' ";
   $run = mysqli_query($db, $query);
    if (!$run) {
    echo "alert('delete query failed')";
     }
  }

  if (isset($_POST['submit_logout'])) {
    $_SESSION['username']  = NULL;
    $_SESSION['firstname'] = NULL;
    $_SESSION['email']     = NULL;

  header('location: preview.php');

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
   	
      
  <!--Чтобы убрать видимость section написать hero  -->
<section class="is-dark">
    

<nav class="navbar is-fixed-top is-dark is-bold " role="navigation" aria-label="main navigation">
  
  <div class="navbar-brand">
        <a class="navbar-item" href="/index.php">
         <img src="https://avatars.mds.yandex.net/get-pdb/2836759/bf0e065f-bc52-4586-98bc-278b708e94ca/s1200" width="112" height="28">
        <img>
        </a>
        
    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div  class="navbar-menu has-background-dark has-text-white">
    <div class="navbar-start">
    
      <a class="navbar-item has-text-white" href="/planer2.php"> 
          Profile
      </a>

      <div class="navbar-item">
        <div class="navbar-item has-dropdown is-hoverable">
          
        <a class="navbar-link is-arrowless">
          Versions
        </a>
        <div class="navbar-dropdown is-boxed has-background-dark">
        <a class="navbar-item" href="https://urplanner.masedar.repl.co/">
        v1.0
        </a>
        <a class="navbar-item" href="/version_romeo/index.php">
        v1.1 Romeo
        </a>
        

        </a>
        </div>
        
      </div>
     </div>

    </div>
    <a class="navbar-item has-background-dark" x>
    <p class="subtitle is-6  has-text-light" >v1.2 Balenciaga</p>    
    </a>
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="navbar-item has-dropdown is-hoverable">
          
        <a class="navbar-link is-arrowless">
          Developers
        </a>
        <div class="navbar-dropdown is-boxed has-background-dark">
        <a class="navbar-item" href="https://vk.com/masedar/">
        MaseDar
        </a>
        <a class="navbar-item" href="https://vk.com/mujjum/">
        Mujjum
        </a>
        </div>
        </div>
           <div class="buttons" >
            <?php if (!isset($_SESSION['username'])) : ?>
          <a class="button is-primary" href="/register.php">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light" href="/login.php">
            Log in
          </a>
          <?php endif; ?>
          <?php if (isset($_SESSION['username'])) : ?> 
            <?php if(isset($_SESSION['success'])) : ?>
        <!-- <script type="text/javascript">alert("Все ты авторизован, ты лох!");</script>  -->
        <?php endif; ?>
        <form  action="/" method="post" >
                <button  name="submit_logout" type="submit" id="logoutbtn" class="button is-light" >
                  Logout
                </button>
              <?php endif; ?>
          </form>
        </div>  
     </div>
      
  </div>

</nav>

</section>



<section class="hero is-medium ">

  <div class="hero-body">
    
    <?php if (!isset($_SESSION['username'])) : ?>
     <img id="image_fade" src="https://avatars.mds.yandex.net/get-pdb/2836759/bf0e065f-bc52-4586-98bc-278b708e94ca/s1200" width="1920" height="1080">
     <div id="main_container" class="container" >
    <?php else :?>
    <div class="container" >
    <?php endif ?>
    
    <div class="columns">


      <div class="column is-6 ">
        <div class="box-shadow is-parent">
        <div class="tile">
          
            <article class="tile is-child notification is-dark">
              <?php
                    $d = getdate();
                    foreach ( $d as $key => $val );
                    $date_week = date("l"); //Записываем в переменную текущее название дня
 
                    
                  ?>
              <p class="title"><?php echo date( "F" ); ?></p>
              <p class="subtitle"><?php echo "$d[weekday]"; echo date( " j" ); ?></p>

              <div class="content">
                <table class="table has-background-dark has-text-white">
            <thead>
              <tr>
                
                <th><h5 class="week_day "><?php if ($date_week == "Monday") echo "M"; else echo "m";?></h5></th>
                <th><h5 class="week_day "><?php if ($date_week == "Tuesday") echo "T"; else echo "t"; ?></h5></th>
                <th><h5 class="week_day "><?php if ($date_week == "Wednesday") echo "W"; else echo "w";?></h5></th>
                <th><h5 class="week_day "><?php if ($date_week == "Thursday") echo "T"; else echo "t";?></h5></th>
                <th><h5 class="week_day "><?php if ($date_week == "Friday") echo "F"; else echo "f";?></h5></th>
                <th><h5 class="week_day "><?php if ($date_week == "Saturday") echo "S"; else echo "s";?></h5></th>
                <th><h5 class="week_day "><?php if ($date_week == "Sunday") echo "S"; else echo "s";?></h5></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="has-text-centered">1</td>
              </tr>
              <tr>
                <td class="has-text-centered">2</td>
                <td class="has-text-centered">3</td>
                <td class="has-text-centered">4</td>
                <td class="has-text-centered">5</td>
                <td class="has-text-centered">6</td>
                <td class="has-text-centered">7</td>
                <td class="has-text-centered">8</td>
              </tr>
              <tr>
                <td class="has-text-centered">9</td>
                <td class="has-text-centered">10</td>
                <td class="has-text-centered">11</td>
                <td class="has-text-centered">12</td>
                <td class="has-text-centered">13</td>
                <td class="has-text-centered">14</td>
                <td class="has-text-centered">15</td>
              </tr>
              <tr>
                <td class="has-text-centered">16</td>
                <td class="has-text-centered">17</td>
                <td class="has-text-centered">18</td>
                <td class="has-text-centered">19</td>
                <td class="has-text-centered">20</td>
                <td class="has-text-centered">21</td>
                <td class="has-text-centered">22</td>
              </tr>
              <tr>
                <td class="has-text-centered">23</td>
                <td class="has-text-centered">24</td>
                <td class="has-text-centered">25</td>
                <td class="has-text-centered">26</td>
                <td class="has-text-centered">27</td>
                <td class="has-text-centered">28</td>
                <td class="has-text-centered">29</td>
              </tr>
              <tr>
                <td class="has-text-centered">30</td>
                <td class="has-text-centered">31</td>
                
                
              </tr>
              
              
              </tbody>
            </table>
          </div>
        </article>
      
      </div>
    </div>
    

      

    </div>
<!-- <div id="result"></div> -->

    
      

    <div class="column">
      <div class="tile is-parent ">
          <article class="tile is-child notification is-dark">

            
              <?php if (isset($_SESSION['username'])) : ?> 
                <p class="title is-5">Ваш список <?php echo $_SESSION['username'];  ?></p>
              <?php endif; ?>
            <p class="subtitle"></p>
            <div class="content">
              
            </div>
          </article>
      </div>
                  

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

  <a href="server/profile_case.php">Перейти в профиль</a>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/main_page.js"></script>
  </body>
</html>