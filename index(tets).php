<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<input type="text" id="name">
	<input type="button" id="send" value="Сохранить">

	<div id="result"></div>
	<script type="text/javascript">
		<script>
			//при клике на кнопку
			$("#send").click(
			function() {
			 
			//отправляем ( куда , что (имя / значение) , получаем ответ)
			 $.post('send.php', { name: $("#name").val() } , function(data) {
			 //ответ заносим в див
			    $('#result').html(data);
			  }  );
			} 
			);
</script>
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/myjavascript.js"></script>
</body>
</html>