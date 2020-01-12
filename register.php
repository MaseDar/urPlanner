<?php 
	//include the server file
	include "/server.php";



	
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
<section class="is-dark is-bold">
    

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

  <div  class="navbar-menu">
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
           
     </div>
     
  </div>

</nav>
</section>



<section class="hero is-medium ">

  <div class="hero-body">
    
         
      </div>
                 
                  <input class="input" type="text" placeholder="1">
                  <input class="input" type="text" placeholder="2">
                  <input class="input" type="text" placeholder="3">
                  <input class="input" type="text" placeholder="4">
                  <input class="input" type="text" placeholder="5">
                  <input class="input" type="text" placeholder="6">
                   <div class="buttons" >
			          <a class="button is-light" href="/register.php">
			            Log in
			          </a>
		        </div>  
  </body>
</html>