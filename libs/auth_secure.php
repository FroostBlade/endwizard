<?php
	if(isset($_SESSION['userid']) && isset($_SESSION['secure_hash'])){
		$secure_hash = md5(md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'].$_SESSION['userid']).$settings['salt']);
		if($_SESSION['secure_hash'] != $secure_hash){
			session_destroy();
			header("Location: https://www.endwizard.ru/"); 
		}
	}else{
		session_destroy();
		header("Location: https://www.endwizard.ru/"); 
	}
?>