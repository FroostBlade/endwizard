<?php
	header('Content-Type: text/html; charset= utf-8');
	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
	define ( 'INCLUDE_CHECK', true );
	include ('DBConnect.php');
	include_once (ROOT_PATH.'/config.php');
	include ("ClassInfoServer.php");

	$server = new InfoServer($settings['server_ip'], $settings['server_port']);
	$Stats['CurPlayers'] = $server->Info()['CurPlayers'];
	
	$Stats['RecordPlayers'] =  file_get_contents('cache/record.txt');// Число абсолютного
	
	$mysqli = mysqliConnect($settings['db']['auth']['host'], $settings['db']['auth']['user'], $settings['db']['auth']['password'], $settings['db']['auth']['dbname']);
	$tedt = $mysqli->query ("SELECT COUNT(*) FROM `DemVkAuth`");
	$Stats['CountPlayers'] = mysqli_fetch_assoc($tedt)['COUNT(*)'];
	
	echo json_encode($Stats);

?>