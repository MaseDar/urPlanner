
// Функция затухания лого и появления таблицы в preview
$( "#main_container" ).fadeOut(0);
$('#image_fade').fadeOut(2000,"linear",function(){
	$( "#main_container" ).fadeIn(2500);
});



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


// $.ajax({
//   url: "index.php",
//   success: function(data){
//     alert( "Прибыли данные: " + data );
//   }
// });


// $('#todoform').submit(function(e) {
//   e.preventDefault();
//   $.ajax({
//     type: $(this).attr('method'),
//     url: '/index.php',
//     data: $(this).serialize(),
//     async: false,
//     dataType: "text",
//     success: function(result){
//       alert(data);
//       $.get(
// 			 '/index.php',          // адрес отправки запроса
			 
// 			  function(data) { 
// 			  	//alert(data);             
// 			    $('#tasksjs').append('<div class="tile is-parent ">\
//                         <article class="tile is-child notification is-dark ">\
//                           <div class="content">\
//                             <div class="columns is-mobile">\
//                               <div class="column ">\
//                                 <p class="subtitle is-5">УРА!</p>\
//                               </div>\
//                               <div class="column is-1 ">\
//                                 <div class="field is-grouped">\
//                                 <td class="delete"><a href="index.php?delete=<?php echo $id; ?>"> <i class="fas fa-times has-text-danger"></i></a></td>\
//                                 </div>\
//                               </div>\
//                             </div>\
//                           </div>\
//                         </article>\
//                     </div>\ ')
// 			  },

// 		   );
      
//     }
//   });
// });


// $(function(){
//  $('#todoform').submit(function(e){
//   console.log('Отправка формы...');
//   e.preventDefault(); // или return false;
//  });
// });

// $(function(){
//  $('#todoform').submit(function(e){
//   var data = $(this).serialize()
//   console.log(data);
//   e.preventDefault(); // или return false;
//  });
// });

// $(function(){
//  $('#todoform').submit(function(e){
//   var data = $(this).serialize()
//   $.ajax({
//  url: 'index.php',
//  type: 'POST',
//  data: data,
//  success: function(res){
//  console.log(res);
//  },
//  error: function(){
//  console.log('Произошла ошибка!');
//  }
//   });
//   e.preventDefault(); // или return false;
//  });
// });


//при клике на кнопку
$("#send").click(
function() {
 
//отправляем ( куда , что (имя / значение) , получаем ответ)
 $.post('index.php', { name: $("#task").val() } , function(data) {
 //ответ заносим в див
    $('#result').html(data);
  }  );
} 
 
);
