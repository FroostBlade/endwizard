<?php
	function mysqliConnect($host, $user, $pass, $dbname){
		$mysqli = new mysqli($host, $user, $pass, $dbname);
		
		if (mysqli_connect_errno()) die("Не удалось подключиться к базе данных. Проверьте правильность введённых данных.");
		
		$mysqli->query ("SET NAMES 'utf8'");
		return $mysqli;
	}
?>