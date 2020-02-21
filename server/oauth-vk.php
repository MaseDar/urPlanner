<?php
if (!empty($_GET['code'])) {
	$params = array(
		'client_id'     => 'ID приложения',
		'client_secret' => 'Защищённый ключ',
		'redirect_uri'  => 'https://example.com/oauth-vk.php',
		'code'          => $_GET['code']
	);
	
	// Получение access_token
	$data = file_get_contents('https://oauth.vk.com/access_token?' . urldecode(http_build_query($params)));
	$data = json_decode($data, true);
	if (!empty($data['access_token'])) {
		// Получили email
		$email = $data['email'];
 
		// Получим данные пользователя
		$params = array(
			'v'            => '5.52',
			'uids'         => $data['user_id'],
			'access_token' => $data['access_token'],
			'fields'       => 'photo_big',
		);
 
		$info = file_get_contents('https://api.vk.com/method/users.get?' . urldecode(http_build_query($params)));
		$info = json_decode($info, true);	
		
		echo $email;
		print_r($info);
	}
}