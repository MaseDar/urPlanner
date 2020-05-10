<!DOCTYPE html>
<html>
 <head>
   <title>validateAJAX</title>	
   <meta charset="utf-8">
   <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

   <script>
   	$(document).ready(function() {
         $("form").submit(function(event) {
            event.preventDefault();
            var name = $("#mail-name").val();
            var email = $("#mail-email").val();
            var gender = $("#mail-gender").val();
            var message = $("#mail-message").val();
            var submit = $("#mail-submit").val();
            $(".form-message").load("mail.php", {
               name: name,
               email: email,
               gender: gender,
               message: message,
               submit: submit
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
            <form action="mail.php" method="POST">
               <input class="input" id="mail-name" type="text" name="name" placeholder="Full name">
               <br>
               <input class="input" id="mail-email" type="text" name="email" placeholder="Email">
               <br>
               <select id="mail-gender" name="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
               </select>
               <br>
               <textarea class="textarea" id="mail-message" name="message" placeholder="message"></textarea>
               <br>
               <button class="button" id="mail-submit" type="submit" name="submit" class="button">Send email</button>
               <p class="form-message"><p>
            </form>
         </div>
      </div>
   </div>
 </body>
</html>