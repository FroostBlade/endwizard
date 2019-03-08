<?php
	// function get_color_hex($tag){
	// 	$hex = '';
	// 	switch ($tag) {
	// 		case '0':
	// 			$hex = 'rgb(0, 0, 0)';
	// 			break;
	// 		case '1':
	// 			$hex = 'rgb(0, 0, 170)';
	// 			break;
	// 		case '2':
	// 			$hex = 'rgb(0, 170, 0)';
	// 			break;
	// 		case '3':
	// 			$hex = 'rgb(0, 170, 170)';
	// 			break;
	// 		case '4':
	// 			$hex = 'rgb(170, 0, 0)';
	// 			break;
	// 		case '5':
	// 			$hex = 'rgb(170, 0, 170)';
	// 			break;
	// 		case '6':
	// 			$hex = 'rgb(255, 170, 0)';
	// 			break;
	// 		case '7':
	// 			$hex = 'rgb(170, 170, 170)';
	// 			break;
	// 		case '8':
	// 			$hex = 'rgb(85, 85, 85)';
	// 			break;
	// 		case '9':
	// 			$hex = 'rgb(85, 85, 255)';
	// 			break;
	// 		case 'a':
	// 			$hex = 'rgb(85, 255, 85)';
	// 			break;
	// 		case 'b':
	// 			$hex = 'rgb(85, 255, 255)';
	// 			break;
	// 		case 'c':
	// 			$hex = 'rgb(255, 85, 85)';
	// 			break;
	// 		case 'd':
	// 			$hex = 'rgb(255, 85, 255)';
	// 			break;
	// 		case 'e':
	// 			$hex = 'rgb(255, 255, 85)';
	// 			break;
	// 		case 'f':
	// 			$hex = 'rgb(0, 0, 0)';
	// 			break;
	// 	}
	// 	return $hex;
	// }
	
	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
	header('Content-Type: text/html; charset= utf-8');
	error_reporting(E_ALL);
	ini_set('display_errors','On');
	define ( 'INCLUDE_CHECK', true );
	include (ROOT_PATH.'/libs/mcraftrcon.class.php');
	include_once (ROOT_PATH.'/config.php');
	
	if($_GET['command']==''){
		echo '<span style=\'color: red;\'>Не все поля заполнены</span>';
		die();
	}

	$rcon = new MinecraftRcon();
	$rcon->Connect($settings['server_ip'], $settings['server_rcon.port'], $settings['server_rcon.pass']);	 //подключение к ркон
	$result =  $rcon->Command($_GET['command']);

	// код позволяющий воводить текст из консоли с цветами minecraft
	// $result_array_exp = explode("\n", $result);

	// $strs_dev = "";
	// foreach ($result_array_exp as $key) {
	// 	$str = explode("§", $key);
	// 	foreach ($str as $key_str) {
	// 		if(strlen($key_str) == 0){ continue; }
	// 		// $color_hex = get_color_hex(substr($key_str, 0, 1));
	// 		// $strs_dev .= "<span style='color: ".$color_hex."'>".mb_substr($key_str, 1)."</span>";
	// 		$strs_dev .= mb_substr($key_str, 1);
	// 	}
	// 	$strs_dev .= "\n";
	// }

	$res_changed = preg_replace('~§.~', " ", $result);
	echo $res_changed;
	die();
?>