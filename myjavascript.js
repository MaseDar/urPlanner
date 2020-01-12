$( ".container" ).fadeOut(0);
$('#image_fade').fadeOut(5000,"linear",function(){
	$( ".container" ).fadeIn(2500);
});

$( ".table" ).click(function(){ // задаем функцию при нажатиии на элемент с классом in
	    $( ".table" ).fadeIn(); // плавно изменяя прозрачность отображаем все элементы <div>
	  });
	
$(document).ready(function() {

  // Check for click events on the navbar burger icon
  $(".navbar-burger").click(function() {

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").toggleClass("is-active");

  });
});