<?php
	/**
	 * Функция получения цены с учётом промокода
	 * @param  string $promo Промо-код
	 * @param  integer $price Цена для получения
	 * @return integer        Цена с учетом промокода
	 */
	function getPrice($promo, $price){
		global $mysqli; //глобальная переменная
		$raw = $mysqli->query ("SELECT * FROM `promo` WHERE `code` = '".addslashes($promo)."'")->fetch_assoc(); //берём промокод из бд
		$discount = $raw['discount'];
		return $price - (($price / 100) * $discount);
	}

	if($_GET['username']==''){
		echo 'Не все поля заполнены';
		die();
	}
	
	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
	header('Content-Type: text/html; charset= utf-8');
	error_reporting(E_ALL);
	ini_set('display_errors','On');
	define ( 'INCLUDE_CHECK', true );
	include (ROOT_PATH.'/libs/DBConnect.php');
	include_once (ROOT_PATH.'/config.php');

	$mysqliauth = mysqliConnect($settings['db']['auth']['host'], $settings['db']['auth']['user'], $settings['db']['auth']['password'], $settings['db']['auth']['dbname']);
	
	$row = $mysqliauth->query ("SELECT * FROM `DemVkAuth` WHERE `username` = '".addslashes(mb_strtolower($_GET['username']))."'");
	if($row->num_rows <= 0) {
		echo 'Игрок не найден';
		die();
	}
	
	$mysqli = mysqliConnect($settings['db']['donate']['host'], $settings['db']['donate']['user'], $settings['db']['donate']['password'], $settings['db']['donate']['dbname']);
	if($_GET['promo'] != ""){
		$row = $mysqli->query ("SELECT * FROM `promo` WHERE `code` = '".addslashes(trim($_GET['promo']))."'");
		if($row->num_rows <= 0) {
			echo 'Данный промо-код недействителен';
			die();
		}
	}
	
	$row = $mysqli->query ("SELECT * FROM `donate` WHERE `name` = '".addslashes($_GET['group'])."'");
	if($row->num_rows <= 0) {
		echo 'Группа не найдена';
		die();
	}
	
	$row = mysqli_fetch_array($row);
	$nickname = urlencode(trim($_GET["username"]));
	$donate = urlencode($row["name"]);
	if($_GET['promo'] != "") { $price = getPrice(trim($_GET['promo']), $row["price"]); $promo = $_GET['promo']; } else { $price = $row["price"]; }

	$order_id = rand(1000, 999999);
	$merchant_id = $settings['fk_merchant.id'];
	$secret_word = $settings['fk_merchant.word'];
	$sign = md5($merchant_id.':'.$price.':'.$secret_word.':'.$order_id);
	$mysqli->close();

	if($_GET['promo'] != "") { 
		header("Location: http://www.free-kassa.ru/merchant/cash.php?m=$merchant_id&oa=$price&s=$sign&o=$order_id&us_nickname=$nickname&us_donate=$donate&us_promo=$promo"); 
	} else { 
		header("Location: http://www.free-kassa.ru/merchant/cash.php?m=$merchant_id&oa=$price&s=$sign&o=$order_id&us_nickname=$nickname&us_donate=$donate"); 
	}
	
?>