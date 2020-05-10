<?php 
	include 'dbh.php';
	$commentsNewCount = $_POST['commentsNewCount'];

	$sql = "SELECT * FROM comments LIMIT $commentsNewCount";
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
?>