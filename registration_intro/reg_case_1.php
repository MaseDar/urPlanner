<?php 

	include "../server/server.php"; 
  include "file-handler.php"; 
	$username_base = $_SESSION['username'];  
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
   <!-- -----------ANGULARJS--------------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular-animate.min.js"></script>
    <!-- ----------------------------------------------- -->
    <!-- Подключаем bulma -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <!-- <link rel="stylesheet" href="css/mystyles.css">
    <link rel="stylesheet" href="css/custom.css"> -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
   <!--  -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,500" rel="stylesheet" type="text/css">
  

  </head>
  
  <body>
  	
  	<section class="hero is-fullheight" style="background-color: #f6f9fc">
  <div class="hero-body">
    <div class="container">
      <!-- first page of onboarding -->
      <div id="one">
        <div class="column">
        	<div class="field is-grouped is-grouped-centered">
          <figure class="image is-96x96">
            <img src="https://www.pngkey.com/png/full/51-512118_message-icon-message-icon-png-black.png">
          </figure>
          </div>
        </div>
        <br>
        <div class="column">
          <p class="title is-2 has-text-centered">Hi, <?php echo "$username_base"; ?> <span>👋</span></p>
        </div>
        <div class="column">
          <p class="title is-2 has-text-centered">Welcome to urPlanner</p>
          <p class="subtitle is-4 has-text-centered">you are in for the best experience, <span class="underline-green">ever</span>.</p>
        </div>
        <div class="column">
          <div class="buttons is-centered">
            <a id="lets_start" class="button  is-rounded is-medium">
              <span>Let's get started</span>
              <span class="icon has-text-primary">
                <i class="fas fa-magic" aria-hidden="true"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Second page of onboarding -->
      <div id="two" style="display: none;">
        <div class="column">
          <p class="title is-2 has-text-centered">A quick walkthrough</p>
          <p class="subtitle is-4 has-text-centered">The best feature on urPlanner</p>
        </div>
        <br><br>

        <div class="columns">
          <div class="column margin-center">
            <div class="columns">
              <div class="column is-2 margin-center has-text-centered is-hidden-touch">
                <span class="icon has-text-danger">
                  <i class="fab fa-buromobelexperte" aria-hidden="true"></i>
                </span>
              </div>
              <div class="column is-2 is-hidden-desktop">
                &nbsp;&nbsp;
                <span class="icon has-text-danger">
                  <i class="fad fa-3x fa-shapes" aria-hidden="true"></i>
                </span>
              </div>
              <div class="column">
                <p class="title is-2">Custom</p>
                <p class="subtitle is-4 has-text-grey">И так как сторожевые отряды задержались в степи, князь великий вторую заставу
послал: Клементия Полянина, Ивана Святославича Свесланина, Григория Судакова и
других с ними, - приказав им скорее возвращаться. <br><br>Степные реки, текущие со склонов Алтая, Тарбагатая. Тянь-Шаня и Памира,
становятся многоводными. Балхаш и Аральское море наполняются водой и
увеличиваются в размерах. <br><br>Но самым главным пороком этого метода является те, что исследование предмета
подменяется изучением текстов, упоминающих о нем.</p>
              </div>
            </div>
          </div>
          <div class="column margin-center">
          	<p>‌‌‍‍‌‌‍‍  &#160;</p>	
          	<p>‌‌‍‍‌‌‍‍  &#160;</p>	
          	<p>‌‌‍‍‌‌‍‍  &#160;</p>	
            <div class="box box-shadow-lift" style="box-shadow: #ff3860 0 7px 25px 0;">
              <iframe width="620" height="315" src="https://www.youtube.com/embed/6gz9x4znvZk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>

        <br><br>

        <div class="column has-text-centered">
          <a id="three-box" class="button button-special box-shadow-lift is-rounded is-medium">
            <span>Are you done, <?php echo "$username_base"; ?> Now let's...</span>
            <span class="icon has-text-link">
              <i class="fas fa-chevron-circle-right" aria-hidden="true"></i>
            </span>
          </a>
        </div>
        <div class="column">
          <a id="one-box" class="has-text-left has-text-dark">← back</a>
        </div>
      </div>
      <!-- Third page of onboarding -->
      <div id="three" style="display: none;">
        
        <div class="column is-4 is-offset-4">
          <figure class="image is-square">
            <img style="border-radius: 4px" src="https://www.clipartmax.com/png/full/140-1406570_image-result-for-confetti-emoji-party-emoji-svg.png">
          </figure>
        </div>
        <div class="column">
          <p class="title has-text-centered">Get this party started!</p>
          <p class="subtitle has-text-centered">it'll take less than 1 min to setup.</p>
        </div>
        <div class="column has-text-centered">
          <a id="four_button" class="button button-special box-shadow-lift is-rounded is-medium">
            <span>Get Started</span>
          </a>
        </div>
        <a class="has-text-left has-text-dark">← back</a>
      </div>

      <div id="four" style="display: none;">
        
        <div class="column is-4 is-offset-4">
          <div class="field is-grouped is-grouped-centered">
            <figure class="image is-128x128">
              <img class="is-rounded" alt="user-profile-photo" src="https://oneprofile-team-assets.s3-us-west-1.amazonaws.com/web-assets/profile-placeholder.jpg">
            </figure>
          </div>
        </div>
        <div class="column">
          <p class="subtitle has-text-centered">Let's customize your avatar</p>
        </div>
        <div class="field is-grouped is-grouped-centered">
          <form action="file-handler.php" method="post" enctype="multipart/form-data">
            <div class="file is-boxed">
              <label class="file-label">
                <input class="file-input" type="file" name="upload">
                <span class="file-cta">
                  <span class="file-icon">
                    <i class="fas fa-upload"></i>
                  </span>
                  <span class="file-label">
                    Choose a file…
                  </span>
                </span>
              </label>
            </div>
            <button>Загрузить</button>
          </form>
        </div>
        <div class="column has-text-centered">
          <a href="reg_case_2.php" class="button button-special box-shadow-lift is-rounded is-medium">
            <span>Skip</span>
          </a>
        </div>
        <a class="has-text-left has-text-dark">← back</a>
      </div>

      <div id="five" style="display: none;">
        
        <div class="column is-4 is-offset-4">
          <figure class="image is-square">
            <img class="is-rounded" alt="user-profile-photo" src="https://oneprofile-team-assets.s3-us-west-1.amazonaws.com/web-assets/profile-placeholder.jpg">
          </figure>
        </div>
        <div class="column">
          <p class="subtitle has-text-centered">About yourself</p>
        </div>
        <div class="column has-text-centered">
        <form action=""  method="post">
          <div class="control">
            <input class="input" type="text" placeholder="Some words about yourself">
            <input class="input" type="text" placeholder="Where are you?">
            <button id="five_button" name="info_user" type="submit" class="button button-special box-shadow-lift is-rounded is-medium">
            <span>Next</span>
          </button>
          </div>
        </form>
        
          
        </div>
        <a class="has-text-left has-text-dark">← back</a>
      </div>
    </div>
  </div>
</section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="animation_reg.js"></script>
  </body>
</html>