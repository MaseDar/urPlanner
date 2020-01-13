
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


// Попытка сделать обгновление задач без обновления страницы №1
var messages__container = document.getElementById('messages'); 
//Контейнер сообщений — скрипт будет добавлять в него сообщения

var interval = null; //Переменная с интервалом подгрузки сообщений

var sendForm = document.getElementById('chat-form'); //Форма отправки
var messageInput = document.getElementById('message-text'); //Инпут для текста сообщения

function send_request(act) {//Основная функция
	//Переменные, которые будут отправляться
	var var1 = null;
	
	if(act == 'send') {
//Если нужно отправить сообщение, то получаем текст из поля ввода
		var1 = messageInput.value;
	}
	
	$.post('includes/server.php',{ //Отправляем переменные
		act: act,
		var1: var1
	}).done(function (data) { 
		//Заносим в контейнер ответ от сервера
		messages__container.innerHTML = data;
		if(act == 'send') {
			//Если нужно было отправить сообщение, очищаем поле ввода
			messageInput.value = '';
		}
	});
}

function update() {
	send_request('load');
}
interval = setInterval(update,500);

sendForm.onsubmit = function () {
	send_request('send');
	return false; //Возвращаем ложь, чтобы остановить классическую отправку формы
};