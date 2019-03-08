<?php
    define ( 'INCLUDE_CHECK', true );
	include('config.php');
	
	//echo $config['domain'];
	
	if(!empty($_GET['error'])){
		switch($_GET['error']){
			// Header Link
			case 401:
				include("Pages/ErrorPages/401.php");
				break;
			case 403:
				include("Pages/ErrorPages/403.php");
				break;
			case 404:
				include("Pages/ErrorPages/404.php");
				break;
			case 405:
				include("Pages/ErrorPages/405.php");
				break;
			case 500:
				include("Pages/ErrorPages/500.php");
				break;
            default:
				header("Location: http://${settings['domain']}/error/404");
				break;
		}
	} else {
		include("Pages/ErrorPages/404.php");
	}
?>