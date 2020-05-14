

<?php 

include 'server/db_connections.php';

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
   	 	$username_base = $_SESSION['username']; // присвоиваем переменной никнейм пользователя в сессии
 	}



    //Слушатель кнопки добавить задачу

 if (isset($_POST['submit_task'])) {
    $task = $_POST['task'];
    if ($task != "") {
      $query = "INSERT INTO `$username_base` (`task`) VALUES ('$task');";
      $run_query = mysqli_query($db, $query);

    }
    
  }
  
    //Удаление задачи из списка


  if (isset($_GET['delete'])) {
   $delete = $_GET['delete'];
   echo "$delete";
   mysqli_query($db, "DELETE FROM `$username_base` WHERE id = '$delete' ");
   header('location: main_page.php');
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

    <style>
      body { background: 
              url(https://images.squarespace-cdn.com/content/5a20387690bccee5e702f9c7/1542824914477-EC3M6PUCOIT02Z1W05NL/khai-sze-ong-308080-unsplash.jpg?format=2500w&content-type=image%2Fjpeg) no-repeat,
              url(https://storge.pic2.me/cm/1920x1080/624/fleohweb4mw6.jpg); 

              }
      table {
        margin: -5% 0 0 0;
      }
    </style>
  </head>

  <body>
   	
      
  <!--Чтобы убрать видимость section написать hero  -->
<section class="is-link">
  <nav class="navbar is-transparent is-hidden-touch is-fixed-top " role="navigation" aria-label="main navigation">
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

    <div  class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="server/profile_case.php"><span>Profile</span></a>
      </div>  
      <div class="navbar-item "><span>To-Do (В разработке)</span></div>
      <div class="navbar-end">
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link is-arrowless" href="server/profile_case.php">Versions</a>
            <div class="navbar-dropdown is-boxed">
              <a class="navbar-item" href="https://urplanner.masedar.repl.co/">v0.0.1</a>
              <a class="navbar-item" href="/version_romeo/index.php">v0.1 Romeo</a> 
              <a class="navbar-item" href="/version_romeo/index.php">v0.1.1 Balenciaga</a> 
            </div>
        </div>
        <div class="navbar-item">
          <?php if (isset($_SESSION['username'])) : ?> 
            <form  action="" method="post" >
              <button  name="submit_logout" type="submit" id="logoutbtn" class="button is-white" >
                <span class="icon is-large">
                  <i class="fas fa-sign-out-alt"></i>
                </span>
                <span>Logout</span>
              </button>
            </form>
          <?php endif; ?>
        </div>
      </div>
    </div>  
  </nav>
</section>



<section class="hero is-medium">

  <div class="hero-body">
    
    <?php if (!isset($_SESSION['username'])) : ?>
     <img id="image_fade" src="https://avatars.mds.yandex.net/get-pdb/2836759/bf0e065f-bc52-4586-98bc-278b708e94ca/s1200" width="1920" height="1080">
     <div id="main_container" class="container" >
    <?php else :?>
    <div class="container" >
    <?php endif ?>
    
    <div  style="margin-top: -3%; "class="columns">


      <div class="column is-4 ">
        <div class="box-shadow is-parent">
        <div class="tile">
          
            <article class="tile is-child notification">
              <?php
                    $d = getdate();
                    foreach ( $d as $key => $val );
                    $date_week = date("l"); //Записываем в переменную текущее название дня
 
                    
                  ?>
              <p class="title has-text-black"><?php echo date( "F" ); ?></p>
              <p class="subtitle has-text-black"><?php echo "$d[weekday]"; echo date( " j" ); ?></p>

              <div class="content ">
                <table class="table has-background-light has-text-black">
            <thead>
              <tr>
                
                <th><h5 class="week_day  has-text-centered"><?php if ($date_week == "Monday") echo "<i class='has-text-success fas fa-caret-down'></i><br>M"; else echo "<i class='has-text-light fas fa-caret-down'></i><br>M";?></h5></th>
                <th><h5 class="week_day  has-text-centered"><?php if ($date_week == "Tuesday") echo "<i class='has-text-success fas fa-caret-down'></i><br>T"; else echo "<i class='has-text-light fas fa-caret-down'></i><br>T"; ?></h5></th>
                <th><h5 class="week_day  has-text-centered"><?php if ($date_week == "Wednesday") echo "<i class='has-text-success fas fa-caret-down'></i><br>W"; else echo "<i class='has-text-light fas fa-caret-down'></i><br>W";?></h5></th>
                <th><h5 class="week_day  has-text-centered"><?php if ($date_week == "Thursday") echo "<i class='has-text-success fas fa-caret-down'></i><br>T"; else echo "<i class='has-text-light fas fa-caret-down'></i><br>T";?></h5></th>
                <th><h5 class="week_day  has-text-centered"><?php if ($date_week == "Friday") echo "<i class='has-text-success fas fa-caret-down'></i><br>F"; else echo "<i class='has-text-light fas fa-caret-down'></i><br>F";?></h5></th>
                <th><h5 class="week_day  has-text-centered"><?php if ($date_week == "Saturday") echo "<i class='has-text-success fas fa-caret-down'></i><br>S"; else echo "<i class='has-text-light fas fa-caret-down'></i><br>S";?></h5></th>
                <th><h5 class="week_day  has-text-centered"><?php if ($date_week == "Sunday") echo "<i class='has-text-success fas fa-caret-down'></i><br>S"; else echo "<i class='has-text-light fas fa-caret-down'></i><br>S";?></h5></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="has-text-centered">1</td>
                <td class="has-text-centered">2</td>
                <td class="has-text-centered">3</td>
              </tr>
              <tr>
                <td class="has-text-centered">4</td>
                <td class="has-text-centered">5</td>
                <td class="has-text-centered">6</td>
                <td class="has-text-centered">7</td>
                <td class="has-text-centered">8</td>
                <td class="has-text-centered">9</td>
                <td class="has-text-centered">10</td>
              </tr>
              <tr>
                <td class="has-text-centered">11</td>
                <td class="has-text-centered">12</td>
                <td class="has-text-centered">13</td>
                <td class="has-text-centered">14</td>
                <td class="has-text-centered">15</td>
                <td class="has-text-centered">16</td>
                <td class="has-text-centered">17</td>
              </tr>
              <tr>
                <td class="has-text-centered">18</td>
                <td class="has-text-centered">19</td>
                <td class="has-text-centered">20</td>
                <td class="has-text-centered">21</td>
                <td class="has-text-centered">22</td>
                <td class="has-text-centered">23</td>
                <td class="has-text-centered">24</td>
              </tr>
              <tr>
                <td class="has-text-centered">25</td>
                <td class="has-text-centered">26</td>
                <td class="has-text-centered">27</td>
                <td class="has-text-centered">28</td>
                <td class="has-text-centered">29</td>
                <td class="has-text-centered">30</td>
                <td class="has-text-centered">31</td>
              </tr>
              <tr>
                <td class="has-text-centered"></td>
                <td class="has-text-centered"></td>
                
                
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
      <div class="tile">
          <article class="tile is-child notification is-light">
              <?php if (isset($_SESSION['username'])) : ?> 
                <p class="title is-5 has-text-black">Ваш список <?php echo $_SESSION['username'];  ?></p>
              <?php endif; ?>
            
            <form method="POST" name="submit_task" id="to_do_form">
              <div class="field is-grouped">
                <input class="input" type="text" name="task" id="task_name" placeholder="Добавь задачу">
                  <p>‌‌‍‍‌‌‍‍  &#160;</p>   
                <button class="button" type="submit" id="submit" name="submit_task">Добавить</button>
              </div>
            </form>
          </article>

      </div>

                <?php 

                    $run_task = mysqli_query($db, "SELECT * FROM $username_base ORDER BY id DESC");
                    while ($row = mysqli_fetch_array($run_task)) {
                      $id = $row['id'];
                      $task1 = $row['task'];
                      $name = "<i style='color:#999; '>Denis</i>";
                      $time = $row['time'];
                    
                    ?>
                  
                    <div id="tasksjs">
                      <div  class="tile is-parent ">
                          <article class="tile is-child notification is-light ">
                            <div class="content">
                              <div class="columns is-mobile">
                                <div class="column ">
                                  <p class="subtitle is-5"><?php echo $task1;  ?></p>
                                </div>
                                <div class="column is-1 ">
                                  <div class="field is-grouped">
                                 
                                  <td class="delete"><a href="main_page.php?delete=<?php echo $id; ?>"> <i class="fas fa-times has-text-danger"></i></a></td>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </article>
                      </div>
                    </div>
                      
                      


                     
                   
                   
                    <?php } 

                      $db->close();
                    ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/main_page.js"></script>
  </body>
</html>

