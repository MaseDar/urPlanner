// Функция затухания лого и появления таблицы в preview
// $( "#main_container" ).fadeOut(0);
// $('#image_fade').fadeOut(2000,"linear",function(){
// 	$( "#main_container" ).fadeIn(2500);
// });
//Появление первых блоков, изменение видимости на 1 за 1,5 сек
$('#first_title').animate({opacity:1},0,function(){
  $('#first_subtitle').animate({opacity:1},0,function(){
    $('.calendar_left').animate({opacity:1},0,function(){
      $('.calendar_right').animate({opacity:1},0);
    });
    
  });  
});

$('.dates').one('click', function(){
  
  $('.calendar_left').animate({ "left": "-=240px" }, "slow" );
  $('.calendar_right').animate({ "left": "+=200px" }, "slow" );
})

//Get the element you want to animate
// var testElement = $('.calendar_left');

// function run(v){
//   //Reverse the array
//    var reversed = JSON.parse(JSON.stringify(v)).reverse();

//   $(v[0]).animate(v[1], {
//       //The speed the element moves - lower is faster
//       duration: 2500,
//       step: function(val) {
//         //console.log(val);
//           //Adding the transform to your element
//           testElement.css("transform", `scale(1.4) translateX(${val}px)`); 
//       },
//       done: function(){
//           //Re-running the function but in reverse with the reverse we did above
//           run(reversed)
//       }
//   })
// };

// //Calling our function and passing in the parameters
// run([{y:0}])


// // на мобилках = бургер
$(document).ready(function() {
  
  $(".navbar-burger").click(function() {

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").toggleClass("is-active");

  });
});

// // при выходе кнопка становится крутящейся
// $("#logoutbtn").click(function(){
// 	$("#logoutbtn").toggleClass("is-loading");
// })

// calendar
(function() {
  angular
    .module('calendarApp', ['ngAnimate'])
    .controller('calendarController', calendarController);

  function calendarController($scope) { 
    var vm = this,
      now = new Date(),
      months = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
      jan = daysInMonth(1, now.getFullYear()),
      feb = daysInMonth(2, now.getFullYear()),
      mar = daysInMonth(3, now.getFullYear()),
      apr = daysInMonth(4, now.getFullYear()),
      may = daysInMonth(5, now.getFullYear()),
      jun = daysInMonth(6, now.getFullYear()),
      jul = daysInMonth(7, now.getFullYear()),
      aug = daysInMonth(8, now.getFullYear()),
      sep = daysInMonth(9, now.getFullYear()),
      oct = daysInMonth(10, now.getFullYear()),
      nov = daysInMonth(11, now.getFullYear()),
      dec = daysInMonth(12, now.getFullYear()),
      monthRef = [jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dec],
      month = now.getMonth(),
      monthDay = monthRef[now.getMonth()],
      n = now.getDate(),
      uidi,
      uidm,
      uid;

    vm.id = now.getDate().toString() + now.getMonth().toString();
    vm.dataId =  vm.id;
    vm.events = [];
    vm.description;
    vm.type = 'Работа'; // начальное присваивание 
    vm.month = months[month];
    vm.next = next;
    vm.prev = prev;
    vm.add = add;

    // Place Dates In Correct Place
    function placeIt() {
    	
     if (month === 0) {
        $(".date_item").first().css({
          'margin-left': '100px'
        })
      } else if (month === 1) {
        $("date_item").first().css({
          'margin-left': '250px'
        })
      } else if (month === 2) {
        $(".date_item").first().css({
          'margin-left': '300px'
        })
      } else if (month === 3) {
        $(".date_item").first().css({
          'margin-left': '100px'
        })
      } else if (month === 4) {
        $(".date_item").first().css({
          'margin-left': '200px'
        })
      } else if (month === 5) {
        $(".date_item").first().css({
          'margin-left': '0px'
        })
      } else if (month === 6) {
        $(".date_item").first().css({
          'margin-left': '100px'
        })
      } else if (month === 7) {
        $(".date_item").first().css({
          'margin-left': '250px'
        })
      } else if (month === 8) {
        $(".date_item").first().css({
          'margin-left': '50px'
        })
      } else if (month === 9) {
        $(".date_item").first().css({
          'margin-left': '150px'
        })
      } else if (month === 10) {
        $(".date_item").first().css({
          'margin-left': '300px'
        })
      } else if (month === 11) {
        $(".date_item").first().css({
          'margin-left': '50px'
        })
      }
    }
    // Highlight Present Day
    function presentDay() {
      $(".date_item").eq(n - 1).addClass("present");
    }

    // Print List Of Dates For Current Month
    function showDays(days) {
      for (var i = 1; i < days; i++) {
        var uidi = i;
        var uidm = month;
        var uid = uidi.toString() + uidm.toString();
        $(".dates").append("<div class='date_item' data='" + uid + "'>" + i + "</div>");
      }
    }

    // Get The Current Date
    function daysInMonth(month, year) {
      return new Date(year, month, 0).getDate() + 1;
    }

    // Next Month
    function next() {
      if (month < 11) {
        month++;
        $(".dates").html('');
        vm.month = months[month];
        monthDay = monthRef[month];
        showDays(monthDay);
        placeIt();
      }
    }

    // Previous Month
    function prev() {
      if (month === 0) {
        return false
      } else {
        month--;
        $(".dates").html('');
        vm.month = months[month];
        monthDay = monthRef[month];
        showDays(monthDay);
        placeIt();
      }
    }

    // Add Events To Specified Date
    function add() {

      vm.events.push({
        id: vm.id,
        description: vm.description,
        type: vm.type
      });
     // console.log("sadasd");
      vm.description = "";
    }

    // Fetch Unique ID For Each Date Item
    $(".dates").on("click", ".date_item", function() {
      vm.id = $(this).attr('data');
      vm.dataId = $(this).attr('data');
      $(this).addClass("present").siblings().removeClass("present");
     $scope.$apply();
     // console.log($scope);
    });


    showDays(monthDay);

    presentDay();


    placeIt();

  }

})();

