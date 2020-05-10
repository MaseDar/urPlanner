<?php 

include 'dbh.php';
?>

<!DOCTYPE html>
<html>
 <head>
   <title>CommentsAJAX</title>	
   <meta charset="utf-8">
   <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

   <script>
   	$(document).ready(function(){
   		var commentsCount = 0;
   		$("#button").click(function(){
   			commentsCount = commentsCount + 2;
   			$("#comments").load("load-comments.php", {
   				commentsNewCount: commentsCount,

   			});
   		})
   	});
   </script>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.2/css/bulma.css">
 </head>
 <body>
 	<div class="section">
 	<div id="comments">
 		<!-- <?php 
 			$sql = "SELECT * FROM comments LIMIT 2";
 			$result = mysqli_query($conn, $sql);
 			if (mysqli_num_rows($result) > 0) {
 				while ($row = mysqli_fetch_assoc($result)) {
 					echo "<p>";
 					$author = $row['author'];
 					echo "<b>$author</b>";
 					echo "<br>";
 					$message = $row['message'];
 					echo "$message";
 					echo "<p>";
 				}
 			} else {
 				echo "There are no comments!";
 			}
 		?> -->
 	</div>
 	<br>
 	<div class="button is-dark is-small" id="button">Show more comments</div>
 	</div>
 </body> 
</html>