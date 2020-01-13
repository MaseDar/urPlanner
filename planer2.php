<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dnevniki4</title>
    <link rel="stylesheet" href="css/mystyles.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>

       <style>
  /*body { background: 
          url(https://storge.pic2.me/cm/1920x1080/748/5bad5b010b82b.jpg) no-repeat,
          url(https://storge.pic2.me/cm/1920x1080/624/fleohweb4mw6.jpg); 

          }*/
  </style>

  <div class="hero is-small">
    <div class="hero-body">
      
    </div>
  </div>
     <!--Чтобы убрать видимость section написать hero  -->
<section class="is-dark is-bold">
    

<nav class="navbar is-fixed-top is-dark is-bold " role="navigation" aria-label="main navigation">
  
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
      <!-- <a class="navbar-item has-text-white" href="https://masedar.github.io/urPlanner/planer.html"> 
          Profile
      </a>             НА ГИТЕ ПРОВЕРКА   -->
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
              <?php if (!isset($_SESSION['username'])) : ?>
          <a class="button is-primary" href="C:\Users\molot\Desktop\urPlanner\urPlanner\autent.html">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light" href="C:\Users\molot\Desktop\urPlanner\urPlanner\autent.html">
            Log in
          </a>
          
          <?php endif; ?>
          <?php if (isset($_SESSION['username'])) : ?> 
            <?php if(isset($_SESSION['success'])) : ?>
        <?php echo $_SESSION['success']; unset($_SESSION['success']);?>
        <?php endif; ?>
                <a class="button is-light" href="/logout.php">
            Logout
          </a>
              <?php endif; ?>
        </div>  
     </div>
     
  </div>

</nav>
</section>

  <div class="tile ">
  <div class="tile is-vertical is-8">
    <div class="tile">
      <div class="tile is-parent is-vertical">
        <article class="tile is-child notification is-primary">
          <p class="title">📬 Day mood</p>
          <p class="subtitle">How was your day?</p>
          <div class="content">
            <div class="columns  is-vcentered is-mobile is-gapless">
              
              <div class="column ">
                <p class="title is-1">😄</p>
              </div>
              <div class="column">
                <p class="title is-1">😊</p>
              </div>
              <div class="column">
                <p class="title is-1">😒</p>
              </div>
              <div class="column">
                <p class="title is-1">😞</p>
              </div>
              <div class="column">
                <p class="title is-1">😢</p>
              </div>
            </div>
            
          
          </div>
        </article>
        
        <article class="tile is-child notification is-warning">
          <p class="title">Past Entry</p>
          <div class="content">
          <p class="subtitle">An utterly enchanting feast of a book, this stunning collector's edition of the full-colour illustrated Harry Potter and the Philosopher's Stone is a volume to treasure for a lifetime. </p>
          
          </div>
          <div class="field is-grouped"> <div class="control"> <a class="button is-primary is-medium" href="#platform">Следующую</a> </div> 
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification is-dark">
          <p class="title">Random Picture</p>
          
          <figure class="image is-16by9">
            <img src="https://randart.ru/art/JD99/wallpapers">
          </figure>
        </article>
      </div>
    </div>
    
  </div>

  <div class="tile is-parent">
    <article class="tile is-child notification is-dark">
      <div class="content ">
        <p class="title">5 minute journal</p>
        
        <div class="content">
          <div class="field is-grouped">
          <span class="icon is-big"><i class="far fa-heart" aria-hidden="true"></i></span>
          <p class="subtitle">Благодарен за...</p>
          </div>
          
          <textarea class="textarea " placeholder="Одна вещь, чтобы поблагодарить за хорошие вибрации" rows="3"></textarea>
          
        </div>
        <div class="content">
          <div class="field is-grouped">
          <span class="icon is-big"><i class="far fa-calendar-check" aria-hidden="true"></i></span>
          <p class="subtitle">Cегодня было бы здорово, если...</p>
          </div>
          
          <textarea class="textarea" placeholder="Одна вещь, которая сделала бы сегодня успех" rows="3"></textarea>
          
        </div>
        <div class="content">
          <div class="field is-grouped">
          <span class="icon is-big"><i class="far fa-compass" aria-hidden="true"></i></span>
          <p class="subtitle">Ежедневное подтверждение, я...</p>
          </div>
          
          <textarea class="textarea" placeholder="Одна вещь, которая мне нравится в себе" rows="3"></textarea>
        </div>
          <div class="field is-grouped"> <div class="control"> <a class="button is-medium" href="#platform">Сохранить запись(не работает)</a> </div> 
          
            </div> 
        </div>
      </div>
    </article>
  </div>
</div>

  
  
  
  </body>
</html>