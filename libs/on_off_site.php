<?php
	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
	header('Content-Type: text/html; charset= utf-8');
	error_reporting(E_ALL);
	ini_set('display_errors','On');
	define ( 'INCLUDE_CHECK', true );
	require_once (ROOT_PATH.'/config.php');
	
	if($_GET['mode']==''){
		echo '<span style=\'color: red;\'>Не все поля заполнены</span>';
		die();
	}

	$settings['status'] = $_GET['mode'];
	file_put_contents($_SERVER['DOCUMENT_ROOT']."/config.json", json_encode($settings));
	require_once (ROOT_PATH.'/libs/generate_config.php');
	echo 'success';
?>