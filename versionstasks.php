<?php
  
  
    session_start(); // Регистрация 




  $db = new mysqli('localhost', 'root', '', 'bigpopa');

  if (mysqli_connect_errno()) {
    printf("Соединение не установлено", mysqli_connect_error());
    exit();
  } 
  $db->set_charset('utf8');

// Перенаправка пользователя, если он не авторизован

  // if (!isset($_SESSION['username'])) {
  //   header('location: preview.php');
  //   exit();
  // } else {
  //   $username_base = $_SESSION['username']; // присвоиваем переменной никнейм пользователя в сессии
  // }


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
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>urPlanner</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css"> -->
     <!-- <link rel="stylesheet" href="/mybulma/bulma-0.8.0/css/mystyles.css"> -->
      <link rel="stylesheet" href="css/mystyles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <style>
   
   h5.week_day { 
    text-align: center;
    color: white;
   } 
    
    body,html { 
    background: url(https://storge.pic2.me/cm/1920x1080/748/5bad5b010b82b.jpg);
    background-size:auto auto; 
    }
  </style>

  <link rel="shortcut icon" href="/img/favicon.png" type="image/png">


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
    <a class="navbar-item has-background-dark ">
    <p class="subtitle is-6  has-text-light ">v1.2 Balenciaga</p>    
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

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/myjavascript.js"></script>
  </body>
</html> 