<?php

//print_r($_GET);
/*INSERT INTO `challenges` (`id`, `text`, `date`) VALUES ('1', 'Отпраздновать нг!', '2019-12-31 08:00:00');*/

	$db = new mysqli('localhost', 'root', '', 'todo');

	if (mysqli_connect_errno()) {
		printf("Соединение не установлено", mysqli_connect_error());
		exit();
	} 
	$db->set_charset('utf8');

	/*$query = $mysqli->query('SELECT * FROM zadachi2');*/

	/*while ( $row = mysqli_fetch_assoc($query) ) {
		echo $row['text']." ".$row['date']."<br>";
	}*/

	if (isset($_POST['submit'])) {
		$task = $_POST['task'];
		if ($task != "") {
			$query = "INSERT INTO tasks (task) VALUES('$task')";
			$run_query = mysqli_query($db, $query);
		}
		
	}
	
	
	
	

	


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dnevniki4</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>

       
   <section class="hero is-dark is-small">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            
            
            <div class="container has-text-centered">
             <figure class="image is-64x64">
              <img src="https://www.pinclipart.com/picdir/big/25-256753_computer-icons-download-blog-symbol-blue-icon-png.png" alt="Logo">
            </figure>
            </div>
          </a>
          <a class="navbar-item">
            
            
            <div class="container has-text-centered">
              <h1 class="title">
                MAJUM
              </h1>
              
            </div>
          </a>
          
          <span class="navbar-burger burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item is-active">
              Home
            </a>
            <a class="navbar-item">
              Helper
            </a>
            </span>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <!-- Hero footer: will stick at the bottom -->
  <div class="hero-foot">
    <nav class="tabs is-boxed">
      <div class="container">
        <ul>
          <li class="is-active"><a>Planer</a></li>
          <li><a href="/planer.html">Profile</a></li>
        
        </ul>
      </div>
    </nav>
  </div>
</section>

  <div class="columns">
    <div class="column is-6">
      <div class="tile is-parent ">
        
          <article class="tile is-child notification is-dark">
            
            <p class="title">December</p>
            <p class="subtitle">30.12.19</p>
            <div class="content">
              <table class="table has-background-dark has-text-white">
          <thead>
            <tr>
              <th><h5 class="has-text-centered has-text-white">M</h5></th>
              <th><h5 class="has-text-centered has-text-white">T</h5></th>
              <th><h5 class="has-text-centered has-text-white">W</h5></th>
              <th><h5 class="has-text-centered has-text-white">T</h5></th>
              <th><h5 class="has-text-centered has-text-white">F</h5></th>
              <th><h5 class="has-text-centered has-text-white">S</h5></th>
              <th><h5 class="has-text-centered has-text-white">S</h5></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td class="has-text-centered">1</td>
            </tr>
            <tr>
              <td class="has-text-centered">2</td>
              <td class="has-text-centered">3</td>
              <td class="has-text-centered">4</td>
              <td class="has-text-centered">5</td>
              <td class="has-text-centered">6</td>
              <td class="has-text-centered">7</td>
              <td class="has-text-centered">8</td>
            </tr>
            <tr>
              <td class="has-text-centered">9</td>
              <td class="has-text-centered">10</td>
              <td class="has-text-centered">11</td>
              <td class="has-text-centered">12</td>
              <td class="has-text-centered">13</td>
              <td class="has-text-centered">14</td>
              <td class="has-text-centered">15</td>
            </tr>
            <tr>
              <td class="has-text-centered">16</td>
              <td class="has-text-centered">17</td>
              <td class="has-text-centered">18</td>
              <td class="has-text-centered">19</td>
              <td class="has-text-centered">20</td>
              <td class="has-text-centered">21</td>
              <td class="has-text-centered">22</td>
            </tr>
            <tr>
              <td class="has-text-centered">23</td>
              <td class="has-text-centered">24</td>
              <td class="has-text-centered">25</td>
              <td class="has-text-centered">26</td>
              <td class="has-text-centered">27</td>
              <td class="has-text-centered">28</td>
              <td class="has-text-centered">29</td>
            </tr>
            <tr>
              <td class="has-text-centered">30</td>
              <td class="has-text-centered">31</td>
              
              
            </tr>
            
            
          </tbody>
        </table>
            </div>
          </article>
        </div>

        <div class="tile is-parent ">
          <article class="tile is-child notification is-white is-10">
            <p class="title"></p>
            <p class="subtitle"></p>
            <div class="content">
              
                <form  action="/" method="post">
                	<input class="input is-rounded is-dark" name="task" type="text" placeholder="Напиши задачу">
                	
                	<button name="submit" type="submit" class="button is-dark ">Добавь!</button>
                </form>
            </div>
            
          </article>
          
         
          
      </div>

    </div>
    <div class="column">
      <div class="tile is-parent ">
          <article class="tile is-child notification is-dark">
            <p class="title">Ваш список</p>
            <p class="subtitle"></p>
            <div class="content">
              
            </div>
          </article>
      </div>
        <div class="tile is-parent ">
          <article class="tile is-child notification is-primary">
            
            <div class="content">
              <table>
              	<thead>
              		<tr>
              			<td>#</td>
              			<td></td>
              			<td>User</td>
              			<td></td>
              			<td>Task</td>
              			<td></td>
              			<td>Action</td>
              			<td></td>
              			<td></td>
              			<td>Time</td>
              			<td></td>
              		</tr>
              	</thead>
              	<tbody>
              		<?php 
              		$run_task = mysqli_query($db, "SELECT * FROM tasks LIMIT 20");
              		while ($row = mysqli_fetch_assoc($run_task)) {
              			$id = $row['id'];
              			$task1 = $row['task'];
              			$name = "<i style='color:#999; '>Denis</i>";
              			$time = $row['time'];
              		
              		?>
              		<tr>
              			<td><?php echo $id; ?></td>
              			<td></td>
              			<td><?php echo $name; ?></td>
              			<td></td>
              			<td><?php echo $task1; ?></td>
              			<td></td>
              			<td><a href="#"></a></td>
              			<td><a href="#"></a></td>
              			<td></td>
              			<td></td>
              			<td><?php echo $time; ?></td>
              			
              		</tr>
              		<?php } 
              		$db->close();
              		?>

              	</tbody>
              </table>
            </div>
          </article>
      </div>
      
      
      
      
      
      
    </div>
    
  </div> 
  
  </body>
</html>