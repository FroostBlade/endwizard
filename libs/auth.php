<?php
	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
	header('Content-Type: text/html; charset= utf-8');
	error_reporting(E_ALL);
	ini_set('display_errors','On');
	define ( 'INCLUDE_CHECK', true );
	include (ROOT_PATH.'/libs/DBConnect.php');
	include (ROOT_PATH.'/libs/PasswordFunc.php');
	include_once (ROOT_PATH.'/config.php');

	if($_POST['username']=='' OR $_POST['password']==''){
		echo 'Не все поля заполнены';
		die();
	}

	$mysqli = mysqliConnect($settings['db']['auth']['host'], $settings['db']['auth']['user'], $settings['db']['auth']['password'], $settings['db']['auth']['dbname']);

	$row = $mysqli->query ("SELECT * FROM `DemVkAuth` WHERE `username` = '".addslashes(mb_strtolower($_POST['username']))."'");
	if($row->num_rows <= 0) {
		echo 'Игрок не найден';
		die();
	}

	$datauser = mysqli_fetch_assoc($row);
	$userpass = un_hash($datauser['password']);
	$requestpass = hashPassword($_POST['password'], $userpass['salt']);

	if($userpass['password'] != $requestpass){
		echo 'Пароль введён неверно';
		die();
	}

	session_start();
	$_SESSION['userid'] = $datauser['id'];
	$_SESSION['username'] = $datauser['username'];
	$_SESSION['secure_hash'] = md5(md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'].$datauser['id']).$settings['salt']);
	session_regenerate_id(true); // Изменяет id сессии с сохранием данных сессии
	// header("Location: https://{$settings['domain']}/go/cabinet");
?>