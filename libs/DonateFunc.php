<?php
	
	/**
	 * Получает привилегии из бд выбранного типа
	 * @param string $page_id тип привилегии
	 */
	function getDonate($page_id){
		global $mysqli;
		$donate = $mysqli->query ("SELECT * FROM `donate` WHERE `section` = '".$page_id."' ORDER BY id ASC");
		return $donate;
	}
	
	/**
	 * Добавляет привилегию в бд
	 * @param string $name    Имя привилегии
	 * @param string $command Комманда
	 * @param integer $price  цена для покупки привилегии
	 * @param string $description описание привилегии
	 */
	function addDonate($name, $command, $price, $page_id, $description){
		if(empty($name) || empty($command) || empty($price) || empty($page_id)) return false;
		global $mysqli;
		$mysqli->query("INSERT INTO donate VALUES(NULL, '".addslashes($name)."', '".addslashes($command)."', '".addslashes($price)."', '".addslashes($page_id)."', '".addslashes($description)."')");
		if(mysqli_error($mysqli)!="") return false;
		return true;
		
	}

	/**
	 * Редактирует привилегию в бд
	 * @param  integer $id Айди привилегии
	 * @param string $name    Имя привилегии
	 * @param string $command Комманда
	 * @param integer $price  цена для покупки привилегии
	 * @param string $description описание привилегии
	 * @param string $page_id тип привилегии
	 * @return boolean     Успех 
	 **/
	function editDonate($name, $command, $price, $page_id, $id, $description){
		if(empty($name) || empty($command) || empty($price) || empty($page_id)) return false;
		global $mysqli;

		$description = str_replace("\n", '<br>', $description);
		$mysqli->query("UPDATE donate SET name = '".$name."', command = '".$command."', price = ".intval($price).", section='".$page_id."', description = '".$description."' WHERE id = '".$id."'");

		if(mysqli_error($mysqli)!="") return false;
		return true;
	}

	/**
	 * Удаляет привилегию из бд
	 * @param  integer $id Айди привилегии
	 * @return boolean     Успех 
	 **/
	function deleteDonate($id){
		global $mysqli;
		if(empty($id)) return false;
		$mysqli->query("DELETE FROM donate WHERE id = ".intval($id)."");
		return true;
	}
?>