<?php
  
  
    session_start(); // Регистрация
  


  $db = new mysqli('localhost', 'root', '', 'todo');

  if (mysqli_connect_errno()) {
    printf("Соединение не установлено", mysqli_connect_error());
    exit();
  } 
  $db->set_charset('utf8');

  if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    if ($task != "") {
      $query = "INSERT INTO tasks (task) VALUES('$task')";
      $run_query = mysqli_query($db, $query);
    }
    
  }
  
  if (isset($_GET['delete'])) {
   $delete = $_GET['delete'];
   $query = "DELETE FROM tasks WHERE id = '$delete' ";
   $run = mysqli_query($db, $query);
    if (!$run) {
    echo "alert('delete query failed')";
     }
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
    
      <a class="navbar-item has-text-white" href="/planer2.html"> 
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
    <a class="navbar-item ">
    <p class=" subtitle is-6  has-text-light ">v1.2 Balenciaga</p>    
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
          <a class="button is-primary" href="/register.php">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light" href="/login.php">
            Log in
          </a>
        </div>  
     </div>
      
  </div>

</nav>
</section>



<section class="hero is-medium ">

  <div class="hero-body">
     <img id="image_fade" src="https://avatars.mds.yandex.net/get-pdb/2836759/bf0e065f-bc52-4586-98bc-278b708e94ca/s1200" width="1920" height="1080">
    
    <div id="content_fade" class="container" >
   
    
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
    

      <div class="tile is-parent ">
          <article class="tile is-child is-white">
            <div class="content">
                <form  action="/" method="post">
                  <div class="field is-grouped">
                     <input class="tile input is-rounded is-dark" name="task" type="text" placeholder="Напиши задачу">
                     <div>
                      <p class="subtitle">‌‌‍‍‌‌‍‍  &#160;</p>
                     </div>
                     <button name="submit" type="submit" class="button is-dark ">   Добавь!</button>

                  </div>
                </form>
            </div>
          </article>
      </div>

    </div>

    
      

    <div class="column">
      <div class="tile is-parent ">
          <article class="tile is-child notification is-dark">

            
              <?php if (isset($_SESSION['username'])) : ?> 
                <p class="title">Ваш список <?php echo $_SESSION['username']; ?></p>
              <?php endif ?>
            <p class="subtitle"></p>
            <div class="content">
              
            </div>
          </article>
      </div>
                  
              
              

                  <?php 
                  $run_task = mysqli_query($db, "SELECT * FROM tasks LIMIT 20");
                  while ($row = mysqli_fetch_assoc($run_task)) {
                    $id = $row['id'];
                    $task1 = $row['task'];
                    $name = "<i style='color:#999; '>Denis</i>";
                    $time = $row['time'];
                  
                  ?>
                

                    <div class="tile is-parent ">
                        <article class="tile is-child notification is-dark ">
                          <div class="content">
                            <div class="columns is-mobile">
                              <div class="column ">
                                <p class="subtitle is-5"><?php echo $task1;  ?></p>
                              </div>
                              <div class="column is-1 ">
                                <div class="field is-grouped">
                               
                                <td class="delete"><a href="index.php?delete=<?php echo $id; ?>"> <i class="fas fa-times has-text-danger"></i></a></td>
                                </div>
                              </div>
                            </div>
                          </div>
                        </article>
                    </div>

                    
                    


                   
                 
                 
                  <?php } 

                  $db->close();
                  ?>

                
       
      
      
      
      
      
      
    </div>


     </div>
    
  </div> 




    </div>
  </div>
</section>

  <!-- <img src="https://avatars.mds.yandex.net/get-pdb/2352951/9a962537-6054-42dc-b5ef-f53c9183aa58/s1200" width="1920" height="300">
    <img src="https://avatars.mds.yandex.net/get-pdb/2981802/09acfa22-a2ec-4f2b-808e-c4c5a231beef/s1200" width="1920" height="1080"> -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/myjavascript.js"></script>
  </body>
</html>