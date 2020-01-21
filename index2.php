<!-- <?php

//print_r($_GET);


  $mysqli = new mysqli('localhost', 'user8147_denis', '21gunsoriginal', 'user8147_mojang');

  if (mysqli_connect_errno()) {
    printf("Соединение не установлено", mysqli_connect_error());
    exit();
  } 
  $mysqli->set_charset('utf8');

  $query = $mysqli->query('SELECT * FROM challenges');

  while ( $row = mysqli_fetch_assoc($query) ) {
  /*  echo $row['text']." ".$row['date']."<br>";*/
    $checkb_1 = $row['text'];
  }

  if (isset($_POST['zadacha'])) {
    $text = $_POST['zadacha'] ;
    if ($text != "") {
      $query = "INSERT INTO challenges VALUES(null, '$text', Now())";
      $mysqli->query($query);
    }
    
  }
  


  $mysqli->close();


?> -->



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>urPlanner</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css"> -->
     <!-- <link rel="stylesheet" href="/mybulma/bulma-0.8.0/css/mystyles.css"> -->
      <link rel="stylesheet" href="css/mystyles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

  <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
  </head>
  <body>


    <style>
  body { background: 
          url(https://storge.pic2.me/cm/1920x1080/748/5bad5b010b82b.jpg) no-repeat,
          url(https://storge.pic2.me/cm/1920x1080/624/fleohweb4mw6.jpg); 

          }
  </style>
<section class="hero is-dark is-bold">

<nav class="navbar is-fixed-top is-dark " role="navigation" aria-label="main navigation">
  
  <div class="navbar-brand">
    <!-- <a class="navbar-item" href="/">
      <img src="https://avatars.mds.yandex.net/get-pdb/2979185/ae145977-9c08-440d-8004-1d2d74220e34/s1200" width="112" height="28">
    </a> -->

    
     <!-- <a class="navbar-item" href="/">
      <img src="https://avatars.mds.yandex.net/get-pdb/2839356/3b141e3f-eec9-4dc5-98c9-24fef9ed772e/s1200" width="112" height="28">
    </a> -->
     

     <!-- <a class="navbar-item" href="https://masedar.github.io/urPlanner">
         <img src="https://avatars.mds.yandex.net/get-pdb/2855700/cd642d75-804b-4e7d-8374-8993e34b8fc4/s1200" width="112" height="28">
        <img>
        </a> НА ГИТЕ ССЫЛКИ -->
     
        <a class="navbar-item" href="C:\Users\molot\Desktop\urPlanner\urPlanner\index.html">
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
      <!-- <a class="navbar-item has-text-white" href="https://masedar.github.io/urPlanner/planer.html"> 
          Profile
      </a>             НА ГИТЕ ПРОВЕРКА   -->
      <a class="navbar-item has-text-white" href="C:\Users\molot\Desktop\urPlanner\urPlanner\planer.html"> 
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
        <a class="navbar-item" href="https://zx053a.siteme.org/">
        v1.1 server
        </a>
        <a class="navbar-item" >
        alpha v1.1.1 (need sass)
        </a> 

        </a>
        </div>
        
      </div>
     </div>

    </div>

    
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
     <!--  </div>
            <div class="buttons" href="https://masedar.github.io/urPlanner/autent.html">
          <a class="button is-primary" href="https://masedar.github.io/urPlanner/autent.html">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light" href="https://masedar.github.io/urPlanner/autent.html">
            Log in
          </a>
        </div>  
     </div> 

      </div>--> 

            <div class="buttons" href="C:\Users\molot\Desktop\urPlanner\urPlanner\autent.html">
          <a class="button is-primary" href="C:\Users\molot\Desktop\urPlanner\urPlanner\autent.html">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light" href="C:\Users\molot\Desktop\urPlanner\urPlanner\autent.html">
            Log in
          </a>
        </div>  
     </div>
     
  </div>

</nav>
</section>



<section class="hero is-medium ">

  <div class="hero-body">
    <div class="container">
    <img src="https://avatars.mds.yandex.net/get-pdb/2836759/bf0e065f-bc52-4586-98bc-278b708e94ca/s1200" width="1920" height="1080">
    
    
    <div class="columns">


      <div class="column is-6 ">
        <div class="box-shadow">
        <div class="tile is-parent">
          
            <article class="tile is-child notification is-dark">
              
              <p class="title">January</p>
              <p class="subtitle">08.01.20</p>
              <div class="content">
                <table class="table has-background-dark has-text-white">
            <thead>
              <tr>
                <th><h5 class="has-text-centered has-text-white">M</h5></th>
                <th><h5 class="has-text-centered has-text-white">T</h5></th>
                <th><h5 class="has-text-centered has-text-white">W</h5></th>
                <th><h5 class="has-text-centered has-text-white">T</h5></th>
                <th><h5 class="has-text-centered has-text-white">F</h5></th>
                <th><h5 class="has-text-centered has-text-white">S</h5></th>
                <th><h5 class="has-text-centered has-text-white">S</h5></th>
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
          <article class="tile is-child is-white is-9">
            <div class="content">
                <form  action="/" method="post">
                  
                     <input class="tile input is-rounded is-dark" name="task" type="text" placeholder="Напиши задачу">
                </form>
            </div>
          </article>

          <article class="tile is-child is-white is-4">
            <div class="content">
                <form  action="/" method="post">
                  <button name="submit" type="submit" class="button is-dark ">   Добавь!</button>
         
                </form>
            </div>
          </article>
          
          
      </div>

    </div>
    <div class="column">
      <div class="tile is-parent ">
          <article class="tile is-child notification is-dark">
            <p class="title">Ваш список</p>
            <p class="subtitle"></p>
            <div class="content">
              
            </div>
          </article>
      </div>
        <div class="tile is-parent ">
          <article class="tile is-child notification is-primary">
            
            <div class="content">
              <table>
                <thead>
                  <tr>
                    <td>#</td>
                    <td></td>
                    <td>User</td>
                    <td></td>
                    <td>Task</td>
                    <td></td>
                    <td>Action</td>
                    <td></td>
                    <td></td>
                    <td>Time</td>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $run_task = mysqli_query($db, "SELECT * FROM tasks LIMIT 20");
                  while ($row = mysqli_fetch_assoc($run_task)) {
                    $id = $row['id'];
                    $task1 = $row['task'];
                    $name = "<i style='color:#999; '>Denis</i>";
                    $time = $row['time'];
                  
                  ?>
                  <tr>
                    <td><?php echo $id; ?></td>
                    <td></td>
                    <td><?php echo $name; ?></td>
                    <td></td>
                    <td><?php echo $task1; ?></td>
                    <td></td>
                    <td><a href="#"></a></td>
                    <td><a href="#"></a></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $time; ?></td>
                    
                  </tr>
                  <?php } 
                  $db->close();
                  ?>

                </tbody>
              </table>
            </div>
          </article>
      </div>
      
      
      
      
      
      
    </div>


     </div>
    
  </div> 




    </div>
  </div>
</section>

  <img src="https://avatars.mds.yandex.net/get-pdb/2352951/9a962537-6054-42dc-b5ef-f53c9183aa58/s1200" width="1920" height="300">
    <img src="https://avatars.mds.yandex.net/get-pdb/2981802/09acfa22-a2ec-4f2b-808e-c4c5a231beef/s1200" width="1920" height="1080">
  </body>
</html>