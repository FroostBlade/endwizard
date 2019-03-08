<?php
	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
	header('Content-Type: text/html; charset= utf-8');
	error_reporting(E_ALL);
	ini_set('display_errors','On');
	define ( 'INCLUDE_CHECK', true );
	include (ROOT_PATH.'/libs/DBConnect.php');
	include_once (ROOT_PATH.'/config.php');
	
	if($_GET['act']==''){
		echo '<span style=\'color: red;\'>Отсутствует действие над промо кодом</span>';
		die();
	}

	$mysqli = mysqliConnect($settings['db']['donate']['host'], $settings['db']['donate']['user'], $settings['db']['donate']['password'], $settings['db']['donate']['dbname']);
	
	switch ($_GET['act']) {
		case 'newpromo':
			if($_GET['promocode']=='' OR $_GET['discount']=='' OR $_GET['countuses']==''){
				echo '<span style=\'color: red;\'>Не все поля заполнены</span>';
				break;
			}
			
			if($_GET['discount'] < 1 OR $_GET['discount'] > 100){
				echo 'Скидка должна быть в диапазне от 1 до 100';
				break;
			}
			
			if($_GET['countuses'] < 1){
				echo 'Количество использований не может быть отрицательным или равным 0';
				break;
			}

			$res = $mysqli->query("SELECT * FROM `promo` WHERE code='".addslashes($_GET['promocode'])."'");
			
			if(mysqli_num_rows($res) > 0){
				echo 'Промо код уже существует';
				break;
			}

			$mysqli->query("INSERT INTO `promo` (id, code, discount, count) VALUES (NULL, '".addslashes($_GET['promocode'])."', '".addslashes($_GET['discount'])."', '".addslashes($_GET['countuses'])."')");
			echo 'success';
			break;
		case 'edit':
			if($_GET['promocode']=='' OR $_GET['discount']=='' OR $_GET['countuses']==''){
				echo '<span style=\'color: red;\'>Не все поля заполнены</span>';
				break;
			}
			
			if($_GET['discount'] < 1 OR $_GET['discount'] > 100){
				echo 'Скидка должна быть в диапазне от 1 до 100';
				break;
			}
			
			if($_GET['countuses'] < 1){
				echo 'Количество использований не может быть отрицательным или равным 0';
				break;
			}

			$mysqli->query("UPDATE `promo` SET discount='".addslashes($_GET['discount'])."', count='".addslashes($_GET['countuses'])."' WHERE code='".addslashes($_GET['promocode'])."'");
			echo 'success';
			break;
		case 'delete':
			if($_GET['promocode']==''){
				echo '<span style=\'color: red;\'>Не все поля заполнены</span>';
				break;
			}
			$mysqli->query("DELETE FROM `promo` WHERE code='".addslashes($_GET['promocode'])."'");
			echo 'success';
			break;
	}
	die();
?>