$( "#main_container" ).fadeOut(0);
$('#image_fade').fadeOut(2000,"linear",function(){
	$( "#main_container" ).fadeIn(2500);
});

var success = "Все ок, ты лох!";

$(document).ready(function() {


  // Check for click events on the navbar burger icon
  $(".navbar-burger").click(function() {

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").toggleClass("is-active");

  });
});
$("#logoutbtn").click(function(){
	$("#logoutbtn").toggleClass("is-loading");
})