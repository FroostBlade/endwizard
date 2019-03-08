<?php
	if(!in_array($_SESSION['username'], $settings['username_admins'])){
		header("Location: https://".$settings['domain']."/");
		exit;
	}
?>