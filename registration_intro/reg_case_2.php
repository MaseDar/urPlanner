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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <!--  -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,500" rel="stylesheet" type="text/css">
  
   <script>
    $(document).ready(function(){
         $("#input_skills").keyup(function() {
            var name = $("#input_skills").val();
            $.post("suggestions.php", {
               suggestions: name
            }, function(data, status) {
               $("#skills").html(data);
            });
         });
      });
   </script>
  </head>
  
  <body>
  	
  	<section class="hero is-fullheight" style="background-color: #f6f9fc">
  <div class="hero-body">
    <div class="container">
      <!-- first page of onboarding -->
      

      <div id="five" style="display: block;">
        
        <div class="column is-4 is-offset-4">
          <div class="field is-grouped is-grouped-centered">
          <figure class="image is-64x64 ">
            <img class="is-rounded" alt="user-profile-photo" src="https://oneprofile-team-assets.s3-us-west-1.amazonaws.com/web-assets/profile-placeholder.jpg">
          </figure>
        </div>
        </div>
        <div class="column">
          <p class="subtitle has-text-centered">About yourself</p>
          
        </div>
        <div class="field is-grouped is-grouped-centered">
          <div class="column  is-4 has-text-centered">

            <form action=""  method="post">
                <input class="input" type="text" placeholder="Some words about yourself">
                <p>‌‌‍‍‌‌‍‍  &#160;</p> 
                <input class="input" type="text" placeholder="Where are you?">
                <p>‌‌‍‍‌‌‍‍  &#160;</p> 
                <input list="skills" id="input_skills" class="input" type="text" placeholder="Where are you?">
                <datalist id="skills">
               </datalist>
                <p>‌‌‍‍‌‌‍‍  &#160;</p> 
                <button id="five_button" name="info_user" type="submit" class="button  is-rounded is-medium">

            
         
                <span>Next</span>
              </button>
              <a href="\main_page.php" class="button">skip</a>
            
            </form>
            </div>
        </div>
        <a class="has-text-left has-text-dark">← back</a>
      </div>
    </div>
  </div>
</section>


  
    <script src="animation_reg.js"></script>
  </body>
</html>