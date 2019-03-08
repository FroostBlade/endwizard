<?php
	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
	header('Content-Type: text/html; charset= utf-8');
	define ( 'INCLUDE_CHECK', true );
	include (ROOT_PATH.'/libs/DBConnect.php');
	include(ROOT_PATH.'/libs/ClassInfoServer.php');
	include(ROOT_PATH.'/libs/PasswordFunc.php');
	include_once (ROOT_PATH.'/config.php');

	//Строка для подтверждения адреса сервера из настроек Callback API 
	$confirmation_token = '29e3a3be'; 

	//Ключ доступа сообщества 
	$token = '931e0bda6d4a8c40f06036c80558229ff7c6493c9574e9c4b04cef43927d9e20ee3a2c211e02c0bd16b32'; 

	//Secret Key
	$secretKey = '6om45youw9hjozlxw5sno6k48lenn5kgimdv93wznww689t3';
	
	$data = json_decode(file_get_contents('php://input')); 

	// Connect to DB
	$mysqli = mysqliConnect($settings['db']['auth']['host'], $settings['db']['auth']['user'], $settings['db']['auth']['password'], $settings['db']['auth']['dbname']);

	if ($mysqli->connect_errno) {
		$request_params = array(
			'message' => $mysqli->connect_errno,
			'user_id' => $user_id,
			'access_token' => $token,
			'v' => '5.0'
		);

		$get_params = http_build_query($request_params);

		file_get_contents('https://api.vk.com/method/messages.send?'. $get_params);
		echo('ok');
		exit();
	}

	// Таблица авторизаций
	$database = "DemVkAuth";

	// Колонка с ником
	$nick = "username";
	$ip = "ip";

	// Колонка с паролем
	$pass = "password";

	// Хеш паролей
	// sha256, md5.. etc
	$hash = "sha256";

	$msg = "";

	switch ($data->type) {
		case 'confirmation': 
			echo $confirmation_token; 
			break; 

		case 'message_new': 
			$user_id = $data->object->user_id;
			$message = $data->object->body;
			$sw = mb_strtolower(explode(" ", $message)[0]);
			
			if(substr($sw, 0, 1) != '!'){
				echo('ok');
				exit();
			}
			
			switch ($sw) {
				case '!обновления':
					$msg = "К сожалению, последнее обновление не найдено. 😒";
				break;
				case '!команды':
				break;

				case '!аккаунты':
					$result = $mysqli->query("SELECT * FROM `{$database}` WHERE `vk_id` = '{$user_id}'");

					if($result->num_rows == 0) {
						$msg = "Вам не пренадлежит ни одного аккаунта.";
						break;
					}

					$msg = "📋 Список Ваших аккаунтов:\n";
					foreach($result as $key) {
						$msg .= "
						🔑 Имя аккаунта: {$key[$nick]}
						👑 Ранг: (данные не загружены 😒) 
						💰 Баланс: 0 EndCoins
						⚠ Баллы нарушений: 0.00
						📷 Последний IP: {$key[$ip]}\n";
					}
				break;

				case '!онлайн':
					$data = explode(" ", $message);

					$server = new InfoServer($settings['server_ip'], $settings['server_port']);
					$Stats['CurPlayers'] = $server->Info()['CurPlayers'];
					
					$Stats['RecordPlayers'] =  file_get_contents(ROOT_PATH.'/libs/cache/record.txt');// Число абсолютного
					
					if(!isset($data[1]) or !isset($data[2])) {
						$msg = "Сервер: {$settings['server_ip']}
						Онлайн: {$Stats['CurPlayers']}
						Рекорд: {$Stats['RecordPlayers']}
						Сайт: {$settings['domain']}";
						break;
					}
				break;

				case '!привязать':
					$data = explode(" ", $message);
					
					if(!isset($data[1]) or !isset($data[2])){
						$msg = "Вы неправильно указали данные! Пишите - !привязать [ник] [пароль]";
						break;
					}

					$login = mb_strtolower($data[1]);
					$result = $mysqli->query("SELECT * FROM `{$database}` WHERE `{$nick}` = '{$login}'");
					if($result->num_rows == 0){ $msg = 'Пользователь не найден.'; break; }
					$result = mysqli_fetch_assoc($result);
					
					if($result['vk_id'] != "") {
						$msg = "Учётная запись {$login} уже привязана.";
						break;
					}
					
					$unh = un_hash($result['password']);
					$hpass = hashPassword($data[2], $unh['salt']);
					
					if($unh['password'] != $hpass) {
						$msg = "Пароль введён не верно.";
						break;
					} else {
						$mysqli->query("UPDATE `{$database}` SET `vk_id` = '{$user_id}' WHERE `{$nick}` = '{$login}'");
						$msg = "Учётная запись {$login} успешно привязана.";
					}
				break;

				case '!восстановить':
					$data = explode(" ", $message);

					if(!isset($data[1])) {
						$msg = "Вы неправильно указали данные! Пишите - !восстановить [ник]";
						break;
					}

					$login = mb_strtolower($data[1]);
					$result = $mysqli->query("SELECT * FROM `{$database}` WHERE `{$nick}` = '{$login}'");
					if($result->num_rows == 0){ $msg = 'Пользователь не найден.'; break; }
					$result = mysqli_fetch_assoc($result);
					
					if($result['vk_id'] == "") {
						$msg = "Вам не пренадлежит ни одного аккаунта.";
						break;
					}

					$unh = un_hash($result['password']);
					$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
					$charactersLength = strlen($characters);
					$randomString = "";
					
					for ($i = 0; $i < 12; $i++) {
						$randomString .= $characters[rand(0, $charactersLength - 1)];
					}

					$hpass = '\$SHA\$'.$unh['salt'].'\$'.hashPassword($randomString, $unh['salt']);
					$mysqli->query("UPDATE `{$database}` SET `{$pass}` = '{$hpass}' WHERE `{$nick}` = '{$login}'");
					$msg = "Ваш новый пароль для аккаунта {$data[1]} - {$randomString}. Сохраните его и удалите это сообщение в целях безопасности.";
				break;

				case '!отвязать':
					$data = explode(" ", $message);

					if(!isset($data[1]) or !isset($data[2])) {
						$msg = "Вы неправильно указали данные! Пишите - !отвязать [ник] [пароль]";
						break;
					}

					$login = mb_strtolower($data[1]);
					$result = $mysqli->query("SELECT * FROM `{$database}` WHERE `{$nick}` = '{$login}'");
					if($result->num_rows == 0){ $msg = 'Пользователь не найден.'; break; }
					$result = mysqli_fetch_assoc($result);

					if($result['vk_id'] == "") {
						$msg = "Вам не пренадлежит ни одного аккаунта.";
						break;
					}

					if($result['vk_id'] != $user_id) {
						$msg = "Этот аккаунт вам не принадлежит.";
						break;
					}
					
					$unh = un_hash($result['password']);
					$hpass = hashPassword($data[2], $unh['salt']);
					
					if($unh['password'] != $hpass) {
						$msg = "Пароль введён не верно.";
						break;
					} else {
						$mysqli->query("UPDATE `{$database}` SET `vk_id` = '' WHERE `$nick` = '{$login}'");
						$msg = "Учётная запись {$login} успешно отвязана. Но всё же, мы не советуем привязать.";
					}
				break;

				default: 
					$msg = "Команда не найдена. Для информации введите !команды";
				break;
			}
			
			if ($mysqli->error) {
				if(in_array($user_id, $settings['id_admins_vk'])){
					$request_params = array(
						'message' => $mysqli->error,
						'user_id' => $user_id,
						'access_token' => $token,
						'v' => '5.0'
					);
				}else{
					$request_params = array(
						'message' => 'К сожалению бот в данный момент на доработке.',
						'user_id' => $user_id,
						'access_token' => $token,
						'v' => '5.0'
					);
				}
			} else {
				$request_params = array(
					'message' => $msg,
					'user_id' => $user_id,
					'access_token' => $token,
					'v' => '5.0'
				);
			}
			
			$get_params = http_build_query($request_params);

			file_get_contents('https://api.vk.com/method/messages.send?'. $get_params);
			echo('ok');

		break;

	}
?> 