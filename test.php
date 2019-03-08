<?php
	function get_color_hex($tag){
		$hex = '';
		switch ($tag) {
			case '0':
				$hex = '#000000';
				break;
			case '1':
				$hex = '#00002A';
				break;
			case '2':
				$hex = '#002A00';
				break;
			case '3':
				$hex = '#002A2A';
				break;
			case '4':
				$hex = '#2A0000';
				break;
			case '5':
				$hex = '#2A002A';
				break;
			case '6':
				$hex = '#2A2A00';
				break;
			case '7':
				$hex = '#2A2A2A';
				break;
			case '8':
				$hex = '#151515';
				break;
			case '9':
				$hex = '#15153F';
				break;
			case 'a':
				$hex = '#153F15';
				break;
			case 'b':
				$hex = '#153F3F';
				break;
			case 'c':
				$hex = '#3F1515';
				break;
			case 'd':
				$hex = '#3F153F';
				break;
			case 'e':
				$hex = '#3F3F15';
				break;
			case 'f':
				$hex = '#3F3F3F';
				break;
		}
		return $hex;
	}

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

	$result_array_exp = explode("\n", $result);

	$strs_dev = "";
	foreach ($result_array_exp as $key) {
		$str = explode("§", $key);
		foreach ($str as $key_str) {
			// echo strlen($key_str)."<br>";
			if(strlen($key_str) == 0){ continue; }
			$color_hex = get_color_hex(substr($key_str, 0, 1));
			$strs_dev .= "<span style='color: ".$color_hex."'>".mb_substr($key_str, 1)."</span>";
		}
		$strs_dev .= "\n";
	}

	echo '<pre>'.$strs_dev.'</pre>';

	echo '<pre>'.$result.'</pre>';
	die();
?>