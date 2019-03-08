<?php
	/**
	 * Функция получения команды
	 * @param  string $nickname Никнейм
	 * @param  integer $amount  Строка для поиска в бд
	 * @param  string $donate   Название донат-привилегии
	 * @return string           Готовая команда для выполнения в RCON
	 */
	function getCommand($nickname, $donate, $mysqli){
		$nickname = trim($nickname); //убираем лишние пробелы
		$row = $mysqli->query ("SELECT * FROM `donate` WHERE `name` = '".$donate."'"); //выбираем команду из бд
		$row = mysqli_fetch_array($row);
		$command = str_replace('!user', $nickname, $row["command"]); //заменяем !user на ник игрока
		return $command; //возвращаем готовую команду
	}
	
	/**
	 * Отправляет RCON-комманду
	 * @param  string $command Комманда
	 * @return boolean         Успех
	 */
	function sendRcon($command){
		global $settings;
		$rcon = new MinecraftRcon();
		$rcon->Connect($settings['server_ip'], $settings['server_rcon.port'], $settings['server_rcon.pass']);//подключение к ркон
		$response = $rcon->Command($command);
		return 1; //Успешно
	}

	if (!isset($_REQUEST)) {
	  return;
	}
	
	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
	header('Content-Type: text/html; charset= utf-8');
	error_reporting(E_ALL);
	ini_set('display_errors','On');
	ini_set('display_startup_errors', 1);
	define ( 'INCLUDE_CHECK', true );
	include (ROOT_PATH.'/libs/DBConnect.php');
	include_once (ROOT_PATH.'/config.php');
	include (ROOT_PATH."/libs/mcraftrcon.class.php");

	function getIP() {
		if(isset($_SERVER['HTTP_X_REAL_IP'])) return $_SERVER['HTTP_X_REAL_IP'];
			return $_SERVER['REMOTE_ADDR'];
	}
	
	if (!in_array(getIP(), array('136.243.38.147', '136.243.38.149', '136.243.38.150', '136.243.38.151', '136.243.38.189', '88.198.88.98'))) {
		header('Location: https://pornhub.com');
		die();
	}

	$sign = md5($settings['fk_merchant.id'].':'.$_REQUEST['AMOUNT'].':'.$settings['fk_secret.word2'].':'.$_REQUEST['MERCHANT_ORDER_ID']);

	if ($sign != $_REQUEST['SIGN']) {
		die('wrong sign');
	}

	date_default_timezone_set('Europe/Moscow');
	$amount = $_REQUEST["AMOUNT"];
	$intid = urldecode($_REQUEST["intid"]);
	$email = urldecode($_REQUEST["P_EMAIL"]);
	$order_id = urldecode($_REQUEST["MERCHANT_ORDER_ID"]);
	$nickname = urldecode($_REQUEST["us_nickname"]);
	$donate = urldecode($_REQUEST["us_donate"]);
	$time = time();

	$mysqli = mysqliConnect($settings['db']['donate']['host'], $settings['db']['donate']['user'], $settings['db']['donate']['password'], $settings['db']['donate']['dbname']);
	$command = addslashes(getCommand($nickname, $donate, $mysqli));
	$commands = explode(';', $command);
	$mysqli->query ("INSERT INTO `data` (`id`, `command`, `intid`,`email`,`nickname`,`amount`,`order_id`,`donate`, `status`, `time`) VALUES (NULL, '$command', '$intid','$email','$nickname','$amount','$order_id','$donate', 0, '$time')");

	if(isset($_REQUEST["us_promo"])){
		$raw = $mysqli->query ("SELECT * FROM `promo` WHERE `code` = '".$_REQUEST["us_promo"]."'")->fetch_assoc(); //берём промокод из бд
		if($raw['count'] == 1) $mysqli->query("DELETE FROM `promo` WHERE code = '".$_REQUEST["us_promo"]."'");
		if($raw['count'] > 1) $mysqli->query("UPDATE `promo` SET `count` = count - 1 WHERE `code` = '".$_REQUEST["us_promo"]."'");
	}
	
	// if(strlen($config['vk_admin_id'])!=0){
		// $admins = explode(';', $config['vk_admin_id']);

		// foreach ($admins as $key => $value){
			// @file_get_contents("http://mydonate.su/server/send.php?nick=".urlencode($nickname)."&priv=".urlencode($donate)."&server=".urlencode($config['server_ip'])."&to=".urlencode($value).""); // отправляем уведомление

		// }
	// }

	foreach ($commands as $key => $value) {
		$status = sendRcon($value);
		$mysqli->query ("UPDATE `data` SET `status` = $status WHERE `intid` = '$intid'");
	}

	die("YES");
?>