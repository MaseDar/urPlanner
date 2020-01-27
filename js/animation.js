// Функция затухания лого и появления таблицы в preview
// $( "#main_container" ).fadeOut(0);
// $('#image_fade').fadeOut(2000,"linear",function(){
// 	$( "#main_container" ).fadeIn(2500);
// });



// на мобилках = бургер
$(document).ready(function() {
  
  $(".navbar-burger").click(function() {

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").toggleClass("is-active");

  });
});

// при выходе кнопка становится крутящейся
$("#logoutbtn").click(function(){
	$("#logoutbtn").toggleClass("is-loading");
})
