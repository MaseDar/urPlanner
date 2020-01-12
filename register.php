<?php 
	//include the server file
	include "server.php";
	
?>


<?php if(!empty($_SESSION['error'])) : ?>
	<div class="error">
		<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
	</div>
	<?php endif; ?>



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
    
  </style>

  </head>
  <body>

    <!-- Подключаем внешний файл Javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/myjavascript.js"></script>

    <style>
  body { background: 
          url(https://storge.pic2.me/cm/1920x1080/748/5bad5b010b82b.jpg) no-repeat,
          url(https://storge.pic2.me/cm/1920x1080/624/fleohweb4mw6.jpg); 
          }
  </style>
  <!--Чтобы убрать видимость section написать hero  -->




<section class="hero is-medium ">

  <div class="hero-body">
    <div class="container">
        
    
    <div class="columns">


      <div class="column is-6 ">

    

      

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
                  
                  <input name="firstname" class="input" type="text" placeholder="1">
                  <input  name="lastname" class="input" type="text" placeholder="2">
                  <input  name="username" class="input" type="text" placeholder="3">
                  <input     name="email" class="input" type="email" placeholder="4">
                  <input  name="password" class="input" type="password" placeholder="5">
                  <input  name="passconf" class="input" type="password" placeholder="6">
                   <div class="buttons" >
			          <a class="button is-light" href="/register.php">
			            Log in
			          </a>
		        </div>  
  </body>
</html>
