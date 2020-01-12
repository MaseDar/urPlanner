<?php 
	//include the server file
	include "server.php";
	
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

   div.center {
   	text-align: center;
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


      
	  
	    	<div class="column is-4">
		        
	        </div>
	        <div class="column is-4">
	        	<?php if(!empty($_SESSION['error'])) : ?>
					<div class="tile ">
						<article class="tile  notification is-danger">
							<p class="subtitle is-6"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
						</article>
					</div>
				<?php endif; ?>
	        	<div class="tile is-parent ">
		          <article class="tile notification is-dark">
		            <p class="title">Регистрация</p>
		            
		            
		          </article>
		        </div>
	        	<div class="tile center">
		                <form method="post" action="" name="frmRegistration" autocomplete="off">
		                  <input name="firstname" class="input" type="text" placeholder="Имя">
		                  <input  name="lastname" class="input" type="text" placeholder="Фамилия">
		                  <input  name="username" class="input" type="text" placeholder="Никнейм">
		                  <input     name="email" class="input" type="email" placeholder="Email: example@yandex.ru">
		                  
		                  <div class="field is-grouped is-mobile">
		                  		<input  name="password" class="input" type="password" placeholder="Password">
		                  <input  name="passconf" class="input" type="password" placeholder="Password confirm">
					          <button name="register-user" type="submit" class="button is-dark ">Регнуться!</button>
					          </div>
					    </form>  
				</div></div>
	        <div class="column is-4">
		        
	</div>	</div>	 
  </body>
</html>
