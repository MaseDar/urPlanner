<!DOCTYPE html>
<html class="has-navbar-fixed-top" ng-app='preview_calendar' ng-cloak='true'>
  <head>
    <meta charset="UTF-8">
    <title>URPLANNER</title>
    <!-- ------------------ LOGO ------------------ -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">
    <!-- ------------------  ------------------ -->
    <!-- Подключаем bulma и оптимизацию под мобилки -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <!-- -----------ANGULARJS--------------------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular-animate.min.js"></script>
    <!-- ----------------------------------------------- -->
   
    <link rel="stylesheet" href="css/mystyles.css">
    <!-- <link rel="stylesheet" href="css/custom.css"> -->
    <!-- MATERIAL ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> 
  </head>
  
<body class="has-navbar-fixed-top">
  
	<!-- убрать hero для белого фона на navbar  -->
	
		<!-- ----------------------------------NAVBAR----------------------------------------->
		<nav class="navbar is-transparent is-fixed-top " role="navigation" aria-label="main navigation">
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
				
      <div class="navbar-menu" id="navbarBasicExample">
				<div class="navbar-end">
	       	<div class="navbar-item has-dropdown is-hoverable">
		      	<a class="navbar-link is-arrowless has-text-grey-light"> v0.3.1 The Golden Age</a>
		        <div class="navbar-dropdown is-boxed">
			        <a class="navbar-item" href="https://urplanner.masedar.repl.co/">v0.0.1</a>
			        <a class="navbar-item" href="/version_romeo/index.php">v0.1 Romeo</a> 
			        <a class="navbar-item" href="/version_romeo/index.php">v0.1.1 Balenciaga</a> 
			    	</div>
	      	</div>

  				<a class="navbar-link is-arrowless" href="/TRAINING/index.php">Test module</a>
    			<a class="navbar-item" href="blog_page.php"><span>Blog developers</span> </a>
					<a class="navbar-item" onclick="location.href='server/log_case.php'"><span>Login</span></a>

					<div class="navbar-item"><span class="has-text-grey-light">|</span></div>
					<div class="navbar-item">
						<div id="log-button" class="button is-rounded is-small" onclick="location.href='server/reg_case.php'">
							<span class="icon">
						      <i class="fas fa-magic"></i>
						  </span>
						  <span>Create your free note</span>
						</div>
					</div>
					<div class="navbar-item"><span class="has-text-grey-light"> &#160;</span></div>	
				</div>
			</div>
		</nav>
	
		<!-- ----------------------------------END NAVBAR----------------------------------------->
    	<!-- -----------------------------------FIRST TITLE------------------------------------ -->
    	<div  class="content has-text-centered">
    		<h1 id="first_title" class="title has-text-weight-semibold is-1">
    			Появилась идея? 
    		</h1>
    		<h1 id="first_subtitle" class="subtitle has-text-grey-light is-2 has-text-weight-light">
    			Запиши её прямо сейчас!
    		</h1>
    	</div>
    	<!-- --------------------------------END FIRST TITLE------------------------------------ -->
    	<!-- ----------------------------------CALENDAR-------------------------------------- -->
    
		<div class='calendar' ng-controller='preview_calendarController as calendar'>
			<div class='calendar_rotate_background'></div>
			  <div class="padding_cal">
				  <div class='calendar_left'>
				    <div class='cal_header'>
				      <i class='material-icons' ng-click='calendar.prev()'>navigate_before</i>
				      <!-- можно вписать class="is-size-4, но будет не ровно" -->
				      <h1 >{{calendar.month}}</h1>
				      <i class='material-icons' ng-click='calendar.next()'>navigate_next</i>
				    </div>
				    <div class='days'>
				      <div class='day_item'><p class="has-text-weight-light">ПН</p></div>
				      <div class='day_item'><p class="has-text-weight-light">ВТ</p></div>
				      <div class='day_item'><p class="has-text-weight-light">СР</p></div>
				      <div class='day_item'><p class="has-text-weight-light">ЧТ</p></div>
				      <div class='day_item'><p class="has-text-weight-light">ПТ</p></div>
				      <div class='day_item'><p class="has-text-weight-light">СБ</p></div>
				      <div class='day_item'><p class="has-text-weight-light">ВС</p></div>
				    </div>
				    <div class='dates'></div>
				  </div>
			  </div>
		  <div class='calendar_right'>

		    <div class='list2'>

		      <ul>
		        <li class='bounce-in' ng-repeat='events in calendar.events' ng-show='events.id === calendar.dataId'>
		          <span class='type'>{{ events.type }}</span>
		          <span class='description'>{{ events.description }}</span>
		        </li>
		      </ul>
		    </div>
		    <form ng-submit='calendar.add()'>
		      <input ng-model='calendar.description' placeholder='Введите вашу задачу' type='text'>
		        <select ng-model='calendar.type' placeholder='calendar.type'>
		          <option value='Работа'>Работа</option>
		          <option value='Дом'>Дом</option>
		          <option value='Свое'>Свое</option>
		          <option value='Другое'>Другое</option>
		        </select>
		      </input>
		    </form>
		  </div>

		</div>			
	
		

		</div>	

		<!-- -------------------------------END CALENDAR------------------------------------------ -->
		<!-- --------------------------------STATS------------------------------------------------ -->
  		<div id="statist">
		  <div class="tile is-ancestor">
			    <div class="tile">
			      <div class="tile is-parent">
			        <article class="tile is-child">
				        <p class="image is-64x64">
						   <img src="img/moregrap.png">
						</p>
				        <p class="title is-3 has-text-weight-light">Статистика</p>
				        <p class="subtitle is-5 has-text-weight-light has-text-grey-light">Отслеживайте количество выполненных 
	задач в виде графиков.</p>
			        </article>
			      </div>
			      <div class="tile is-parent">
			        <article class="tile is-child">
			        	<p class="image is-64x64">
						   <img src="img/icon_addtask.png">
						</p>
			          <p class="title is-3 has-text-weight-light">Простой интерфейс</p>
			          <p class="subtitle is-5 has-text-weight-light has-text-grey-light">Для вас не будет проблемой добавить новую задачу.</p>
			        </article>
			      </div>
				</div>
			</div>
		</div>
		<!-- --------------------------------END STATS------------------------------------------------ -->
		<!-- ---------------------------------EASY START--------------------------------------------- -->

			<div class="easy-start">
				<div class="easy-start-background"></div>
				<div class="easy-start-content content has-text-centered">
	    		<h1 class="title is-2 has-text-weight-light">
	    			Быстрое начало
	    		</h1>
	    		<h1 class="subtitle is-4 has-text-grey has-text-weight-light">
	    			Просто начните пользоваться URPLANNER 
	    		</h1>
				<a id="sign-button" class="button is-link is-rounded" href="server/reg_case.php">Начать</a>
				
    	</div>
			</div>

		<!-- ---------------------------------END EASY START--------------------------------------------- -->
	<!-- ----------------------------------------FOOTER--------------------------------------------- -->
	<footer class="footer">
		<div class=" content has-text-centered">
		  <p> Этот сервис является итогом длительного и кровопролитного пота двух разработчиков 
		  		<a href="https://vk.com/mujjum">Mujjum</a>  и  <a href="https://vk.com/masedar">MaseDar</a></p>
		  		<p> <a href="/preview.php">
                  <img src="https://avatars.mds.yandex.net/get-pdb/2979185/79c8ab7d-99e2-4fed-8bd1-0a77af904cf0/s1200" width="112" height="28">
                </a>
		  <p>© All rights reserved</p>
		</div>
	</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/preview.js"></script>
  </body>
</html>