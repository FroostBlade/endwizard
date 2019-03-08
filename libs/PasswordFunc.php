<?php
	function hashPassword($pass, $salt){
		$pass = hash('sha256', $pass);
		$pass = hash('sha256', $pass.$salt);
		return $pass;
	}

	function un_hash($data){
		$data = substr($data, 5);
		$pos = strpos($data, '$');
		$shaPass = substr($data, $pos+1);
		$salt = substr($data, 0, $pos);
		
		$retArray = array(
			"salt" => $salt,
			"password" => $shaPass
		);
		
		return $retArray;
	}
?>