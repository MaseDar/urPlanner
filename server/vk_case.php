<?php //session_start(); 

	$params = array(
	'client_id'     => '7329753',
	'redirect_uri'  => 'https://www.urplanner.ru/server/oauth-vk.php',
	'scope'         => 'email',
	'response_type' => 'code',
	'state'         => 'https://vk.com/masedar'
	);
 
	$url = 'https://oauth.vk.com/authorize?' . urldecode(http_build_query($params));
	//echo '<a href="' . $url . '">Войти через ВКонтакте</a>';
?>