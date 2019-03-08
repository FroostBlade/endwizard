<?php
	/**
	 * Получает список юзеров из банлиста
	 * @param string $pagina номер страницы
	 */
	function getBanList($pagina){
		global $mysqli;
		$offset = ($pagina * 10) - 10;
		$banlist = $mysqli->query("SELECT * FROM `Punishments` ORDER BY id DESC LIMIT 10 OFFSET ".$offset."");
		return $banlist;
	}

	/**
	 * Получает количество записей в таблице банов
	 */
	function getCountBans(){
		global $mysqli;
		$banlist = $mysqli->query("SELECT * FROM `Punishments`");
		$countdata = mysqli_num_rows($banlist);
		return $countdata;
	}
?>