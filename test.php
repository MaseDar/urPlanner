


<!doctype html>
<html ng-app='calendarApp' ng-cloak='true'>
  <head>
  	<meta charset="UTF-8">
	<title>TEST</title>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.9/angular-animate.min.js"></script>

  </head>
  <body>
<div class='calendar' ng-controller='calendarController as calendar'>
  <div class='calendar_left'>
    <div class='header'>
      <i class='material-icons' ng-click='calendar.prev()'>navigate_before</i>
      <h1>{{calendar.month}}</h1>
      <i class='material-icons' ng-click='calendar.next()'>navigate_next</i>
    </div>
    <div class='days'>
      <div class='day_item'>Mon</div>
      <div class='day_item'>Tue</div>
      <div class='day_item'>Wed</div>
      <div class='day_item'>Thu</div>
      <div class='day_item'>Fri</div>
      <div class='day_item'>Sat</div>
      <div class='day_item'>Sun</div>
    </div>
    <div class='dates'></div>
  </div>
  <div class='calendar_right'>
    <div class='list2'>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 <script src="/js/animation.js"></script>
  </body>
</html>
