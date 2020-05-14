<?php 

	//$existingNames = array("Daniel", "Denis", "Danny", "Danielio" );
    
    $existingNames = array(
    "программирование",
    "вебдизайн",
    "графический дизайн",
    "музыка",
    "разработчик",
    "мобильный разработчик",
    "менеджмент",
    "маркетинг",
    "фильм мейкинг",
    ""
);
	

	if (isset($_POST['suggestions'])) {
		$name = $_POST['suggestions'];

    		if (!empty($name)) {
    			foreach ($existingNames as $existingName) {
    			$existingName = mb_strtolower($existingName);
    			if (strpos($existingName, $name) !== false) {
    				echo $existingName;
    				echo "<option value='$existingName'></option>";
    			}

               /* foreach ($existingNames as $existingNameUp) {
                    if (strpos($existingNameUp, $name) !== false) {
                        echo $existingNameUp;
                        echo "</br>";
                    }
                }*/


    		}
		
        }
		
	}

?>