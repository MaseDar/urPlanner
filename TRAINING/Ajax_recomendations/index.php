<!DOCTYPE html>
<html>
 <head>
   <title>suggestionsAJAX</title>	
   <meta charset="utf-8">
   <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script>
   	$(document).ready(function(){
         $("input").keyup(function() {
            var name = $("input").val();
            $.post("suggestions.php", {
               suggestions: name
            }, function(data, status) {
               $("#test").html(data);
            });
         });
      });
   </script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.css">
 </head>

 <body>
      <div class="section">
         
      <div class="columns">
         <div class="column is-4">
            <p class="title">Введи свое имя</p>
            <input type="test" name="name" class="input is-rounded">
         </div>
         <div class="column is-6">
            <b><p class="subtitle is-3" id="test"></p></b>   
         </div>
      </div>
   </div>
 </body>
</html>