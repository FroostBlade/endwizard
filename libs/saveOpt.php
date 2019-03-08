<?php
	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
	header('Content-Type: text/html; charset=utf-8');
	error_reporting(E_ALL);
	ini_set('display_errors','On');
	define ( 'INCLUDE_CHECK', true );
	include (ROOT_PATH.'/libs/DBConnect.php');
	include_once (ROOT_PATH.'/config.php');

	if($_POST['sitename'] != ''){
		$settings['name_project'] = trim($_POST['sitename']);
	}

	if($_POST['vk_link'] != ''){
		$settings['VK'] = trim($_POST['vk_link']);
	}
	
	if($_POST['domain'] != ''){
		$settings['domain'] = trim($_POST['domain']);
	}
	
	if($_POST['id_admins'] != ''){
		$array_id_admins = explode(";", trim($_POST['id_admins']));
		if($array_id_admins[count($array_id_admins) - 1] == 0){
			unset($array_id_admins[count($array_id_admins) - 1]);
		}
		$settings['id_admins_vk'] = $array_id_admins;
	}
	
	if($_POST['nickname_admins'] != ''){
		$array_nickname_admins = explode(";", trim($_POST['nickname_admins']));
		if($array_nickname_admins[count($array_nickname_admins) - 1] == 0){
			unset($array_nickname_admins[count($array_nickname_admins) - 1]);
		}
		$settings['username_admins'] = $array_nickname_admins;
	}	
	
	if($_POST['ip_admins'] != ''){
		$array_ip_admins = explode(";", trim($_POST['ip_admins']));
		if($array_ip_admins[count($array_ip_admins) - 1] == 0){
			unset($array_ip_admins[count($array_ip_admins) - 1]);
		}
		$settings['ip_address_admins'] = $array_ip_admins;
	}
	
	if($_POST['server_ip'] != ''){
		$settings['server_ip'] = trim($_POST['server_ip']);
	}
	
	if($_POST['server_port'] != ''){
		$settings['server_port'] = trim($_POST['server_port']);
	}
	
	if($_POST['rcon_port'] != ''){
		$settings['server_rcon.port'] = trim($_POST['rcon_port']);
	}
	
	if($_POST['rcon_pass'] != ''){
		$settings['server_rcon.pass'] = trim($_POST['rcon_pass']);
	}
	
	if($_POST['fk_id'] != ''){
		$settings['fk_merchant.id'] = trim($_POST['fk_id']);
	}
	
	if($_POST['fk_secret_word_1'] != ''){
		$settings['fk_merchant.word'] = trim($_POST['fk_secret_word_1']);
	}
	
	if($_POST['fk_secret_word_2'] != ''){
		$settings['fk_merchant.word2'] = trim($_POST['fk_secret_word_2']);
	}
	
	if($_POST['host_auth'] != ''){
		$settings['db']['auth']['host'] = trim($_POST['host_auth']);
	}
	
	if($_POST['user_auth'] != ''){
		$settings['db']['auth']['user'] = trim($_POST['user_auth']);
	}
	
	if($_POST['pass_auth'] != ''){
		$settings['db']['auth']['password'] = trim($_POST['pass_auth']);
	}
	
	if($_POST['dbname_auth'] != ''){
		$settings['db']['auth']['dbname'] = trim($_POST['dbname_auth']);
	}
	
	if($_POST['host_ban'] != ''){
		$settings['db']['ban']['host'] = trim($_POST['host_ban']);
	}
	
	if($_POST['user_ban'] != ''){
		$settings['db']['ban']['user'] = trim($_POST['user_ban']);
	}
	
	if($_POST['pass_ban'] != ''){
		$settings['db']['ban']['password'] = trim($_POST['pass_ban']);
	}
	
	if($_POST['dbname_ban'] != ''){
		$settings['db']['ban']['dbname'] = trim($_POST['dbname_ban']);
	}
	
	if($_POST['host_donate'] != ''){
		$settings['db']['donate']['host'] = trim($_POST['host_donate']);
	}
	
	if($_POST['user_donate'] != ''){
		$settings['db']['donate']['user'] = trim($_POST['user_donate']);
	}
	
	if($_POST['pass_donate'] != ''){
		$settings['db']['donate']['password'] = trim($_POST['pass_donate']);
	}
	
	if($_POST['dbname_donate'] != ''){
		$settings['db']['donate']['dbname'] = trim($_POST['dbname_donate']);
	}

	file_put_contents($_SERVER['DOCUMENT_ROOT']."/config.json", json_encode($settings));
	require_once(ROOT_PATH.'/libs/generate_config.php');

	echo 'success';
?>