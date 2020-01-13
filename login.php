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
    
    body,html { 
    background: url(https://storge.pic2.me/cm/1920x1080/748/5bad5b010b82b.jpg);
    background-size:auto auto; 
    }
  </style>

  </head>
  <body>


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
          <a class="button is-light" href="/register.php">
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

				<?php if(isset($_SESSION['success'])) : ?>
				<?php echo $_SESSION['success']; unset($_SESSION['success']); session_destroy();?>
				<?php endif; ?>
				
<!-- ----------------------------------------------------------------------------------------- -->
			<div class="tile is-parent is-dark">
				<div class="tile is-child notification is-dark ">

						
					<form method="post" action=""  autocomplete="off">
					
            <div class="field">
            <label class="label has-text-light">Username</label>
            <div class="control">
              <input name="username" class="input is-success" type="text" placeholder="Никнейм" >
            </div>
          </div>

            <div class="field">
            <label class="label has-text-light">Password</label>
              <p class="control has-icons-left">
                <input  name="password" class="input" type="password" placeholder="Password">
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
            </div>

						<div class="field is-grouped is-grouped-centered">
						  <div class="control ">
						  <button name="submit" type="submit" class="button is-primary ">Войти!</button>
						  </div>
						</div>
						<div class="field is-grouped is-grouped-centered">
            <div class="control">
              <p class="subtitle is-6"><a class="has-text-primary" href="/login.php">Зарегистрироваться</a></p>

            </div>
          </div>
					</form>
				</div>
			</div>
<!-- ----------------------------------------------------------------------------------------------- -->
			</div>

		        
	</div>
</div>	 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/myjavascript.js"></script>
  </body>
</html>


