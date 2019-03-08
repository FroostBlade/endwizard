<?php
	
	define ( 'INCLUDE_CHECK', true );
	include ('x98528u9.bget.ru/public_html/config.php');
	include("x98528u9.bget.ru/public_html/libs/ClassInfoServer.php");
	
	$server = new InfoServer($settings['server_ip'], $settings['server_port']);
	$CountPlayersOnline = $server->Info()['CurPlayers'];
	
	$filename = 'x98528u9.bget.ru/public_html/libs/cache/record.txt';

	if (!file_exists($filename)) {
		$handle = fopen($filename, 'w') or die('Cannot open file (test):  '.$filename);
		$data = '0';
		fwrite($handle, $data);
	}
	
	// Абсолютный рекорд
	$file['record'] =  file_get_contents($filename);// Число абсолютного
	if($CountPlayersOnline > $file['record']) {// Если теперь онлайн больше
		file_put_contents($filename, $CountPlayersOnline);// Записать новый рекорд
	}
	
	echo 'Ok';
?>