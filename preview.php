<!DOCTYPE html>
<html ng-app='calendarApp' ng-cloak='true'>
  <head>
    <meta charset="-8">
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
    <!-- Подключаем bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <!-- -----------ANGULARJS--------------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular-animate.min.js"></script>
    <!-- ----------------------------------------------- -->
   
    <link rel="stylesheet" href="css/mystyles.css">
    <!-- <link rel="stylesheet" href="css/custom.css"> -->
  </head>
  

  <body>
<!-- 32px отступа по бокам -->
	<div class="container is-fluid">
		<!-- ----------------------------------NAVBAR----------------------------------------->
		<nav class="navbar" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
			
                <a class="navbar-item" href="/preview.php">
                  <img src="https://avatars.mds.yandex.net/get-pdb/2979185/79c8ab7d-99e2-4fed-8bd1-0a77af904cf0/s1200" width="112" height="28">
                </a>
              

			    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="main-navbar">
			      <span aria-hidden="true"></span>
			      <span aria-hidden="true"></span>
			      <span aria-hidden="true"></span>
			    </a>
			</div>
			
			
      <div class="navbar-menu">
					<div class="navbar-start">		
					</div>
			

						<div class="navbar-end">

						
					       	<div class="navbar-item has-dropdown is-hoverable">
					          
						       <a class="navbar-link is-arrowless has-text-grey-light">
						          v0.2 The Golden Age
						        </a>
						        <div class="navbar-dropdown is-boxed">
							        <a class="navbar-item" href="https://urplanner.masedar.repl.co/">
								        v0.0.1
							        </a>
							        <a class="navbar-item" href="/version_romeo/index.php">
								        v0.1 Romeo
							        </a> 
							        <a class="navbar-item" href="/version_romeo/index.php">
								        v0.1.1 Balenciaga
							        </a> 
							    </div>
			      			</div>
			      			<div class="navbar-item has-dropdown is-hoverable">
				      			<a class="navbar-link is-arrowless has-text-grey-light">
						         	Developers 
						        </a>
						        <div class="navbar-dropdown is-boxed">
						        	<a class="navbar-item"  href="https://vk.com/masedar">MaseDar</a>
						        	<a class="navbar-item" href="https://vk.com/mujjum">Mujjum</a>
						        </div>
								
							</div>
							<!-- Стоит dropdown из-за расстояния блоков. Если убрать has-dropdown, то между developers и profile будет расстояние -->
						
						<div class="navbar-item ">
							<div class="buttons">
								<a class="button is-link is-small is-rounded" href="server/reg_case.php"><b>Sign in</b></a>
								<a class="button is-link is-light is-small is-rounded" href="server/log_case.php">Log in</a>
							</div>
						</div>
					</div>
		  
		</nav>

		<!-- ----------------------------------NAVBAR----------------------------------------->
    	<div  class="content has-text-centered">
    		<h1 id="first_title" class="title has-text-weight-semibold is-1">
    			Появилась идея? 
    		</h1>
    		<h1 id="first_subtitle" class="subtitle has-text-grey-light is-2 has-text-weight-light">
    			Запиши её прямо сейчас!
    		</h1>
    	</div>
    	<div id="rotate_background">

    	</div>
    	<!-- ----------------------------------CALENDAR-------------------------------------- -->
    	
		<div class='calendar' ng-controller='calendarController as calendar'>
		  <div class='calendar_left'>
		    <div class='cal_header'>
		      <i class='material-icons is-size-4' ng-click='calendar.prev()'></i>
		      <h1 class="is-size-4">{{calendar.month}}</h1>
		      <i class='material-icons is-size-4' ng-click='calendar.next()'></i>
		    </div>
		    <div class='days'>
		      <div class='day_item'>ПН</div>
		      <div class='day_item'>ВТ</div>
		      <div class='day_item'>СР</div>
		      <div class='day_item'>ЧТ</div>
		      <div class='day_item'>ПТ</div>
		      <div class='day_item'>СБ</div>
		      <div class='day_item'>ВС</div>
		    </div>
		    <div class='dates'></div>
		  </div>
		  <div class='calendar_right'>

		    <div class='list2'>

		    <div class='calendar_list'>

		      <ul>
		        <li class='bounce-in' ng-repeat='events in calendar.events' ng-show='events.id === calendar.dataId'>
		          <span class='type'>It's a {{ events.type }} thing -</span>
		          <span class='description'>{{ events.description }}</span>
		        </li>
		      </ul>
		    </div>
		    <form ng-submit='calendar.add()'>
		      <input ng-model='calendar.description' placeholder='Enter a task for this day' type='text'>
		        <select ng-model='calendar.type' placeholder='calendar.type'>
		          <option value='Social'>Social</option>
		          <option value='Work'>Work</option>
		        </select>
		      </input>
		    </form>
		  </div>

		</div>			
	</div>
		

		</div>	

		<!-- -------------------------------------------------------------------------------- -->
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/animation.js"></script>
  </body>
</html>