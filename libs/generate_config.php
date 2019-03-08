<?php
	header('Content-Type: text/html; charset= utf-8');
	error_reporting(E_ALL);
	ini_set('display_errors','On');
	
	$settings = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT']."/config.json"), true);

	$id_admins_vk_array = "";
	$username_admins_array = "";
	$ip_address_admins_array = "";
	foreach ($settings['id_admins_vk'] as $key) {
		$id_admins_vk_array .= "\"$key\",";
	}
	foreach ($settings['username_admins'] as $key) {
		$username_admins_array .= "\"$key\",";
	}
	foreach ($settings['ip_address_admins'] as $key) {
		$ip_address_admins_array .= "\"$key\",";
	}

	file_put_contents($_SERVER['DOCUMENT_ROOT']."/config.php", 
'<?php
	if ( ! defined ( "INCLUDE_CHECK" ) ) die ("Не получилось посоны");

	$settings = array(
		"db" => array(
			"auth" => array(
				"host" => "'.$settings["db"]["auth"]["host"].'",
				"user" => "'.$settings["db"]["auth"]["user"].'",
				"password" => "'.$settings["db"]["auth"]["password"].'",
				"dbname" => "'.$settings["db"]["auth"]["dbname"].'"
			),
			"ban" => array(
				"host" => "'.$settings["db"]["ban"]["host"].'",
				"user" => "'.$settings["db"]["ban"]["user"].'",
				"password" => "'.$settings["db"]["ban"]["password"].'",
				"dbname" => "'.$settings["db"]["ban"]["dbname"].'"
			),
			"donate" => array(
				"host" => "'.$settings["db"]["donate"]["host"].'",
				"user" => "'.$settings["db"]["donate"]["user"].'",
				"password" => "'.$settings["db"]["donate"]["password"].'",
				"dbname" => "'.$settings["db"]["donate"]["dbname"].'"
			)
		),
		"domain" => "'.$settings["domain"].'",
		"VK" => "'.$settings["VK"].'",
		"name_project" => "'.$settings["name_project"].'",
		"salt" => "'.$settings["salt"].'",
		"server_ip" => "'.$settings["server_ip"].'",
		"server_rcon.port" => "'.$settings["server_rcon.port"].'",
		"server_rcon.pass" => "'.$settings["server_rcon.pass"].'",
		"server_port" => "'.$settings["server_port"].'",
		"copy" => "'.$settings["copy"].'",
		"status" => "'.$settings["status"].'",
		"fk_merchant.id" => "'.$settings["fk_merchant.id"].'",
		"fk_merchant.word" => "'.$settings["fk_merchant.word"].'",
		"fk_merchant.word2" => "'.$settings["fk_merchant.word2"].'",
		"id_admins_vk" => array(
			'.$id_admins_vk_array.'
		),
		"username_admins" => array(
			'.$username_admins_array.'
		),
		"ip_address_admins" => array(
			'.$ip_address_admins_array.'
		)
	);
?>'
	);
?>