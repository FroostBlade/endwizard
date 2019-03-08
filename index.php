<?php
	function getIP() {
		if(isset($_SERVER['HTTP_X_REAL_IP'])) return $_SERVER['HTTP_X_REAL_IP'];
		return $_SERVER['REMOTE_ADDR'];
	}
	
	error_reporting(E_ALL);
	ini_set('display_errors','On');
	ini_set('display_startup_errors', 1);
	header("Content-Type: text/html; charset=utf-8");
	
	define ( 'INCLUDE_CHECK', true );
	include('config.php');
	
	if($settings['status'] == 0 && !in_array(getIP(), $settings['ip_address_admins'])){
		header("Location: https://".$settings['domain']."/off");
		exit;
	}
	
	if(!empty($_GET['go'])){
		switch($_GET['go']){
			// Header Link
			case 'banlist':
				include("libs/DBConnect.php");
				$mysqli = mysqliConnect($settings['db']['ban']['host'], $settings['db']['ban']['user'], $settings['db']['ban']['password'], $settings['db']['ban']['dbname']);
				include("libs/BanFunc.php");
				if(empty($_GET['page'])){ header("Location: /go/banlist/page/1"); }
				$numpage = $_GET['page'];
				$countdata = getCountBans();
				$countpgs = ceil(($countdata / 10));
				if($numpage < 1){
					$numpage = 1;
				}
				if($numpage > $countpgs){
					$numpage = $countpgs;
				}
				include("Pages/banlist.php");
				break;
			case 'rules':
				include("Pages/rules.php");
				break;
			case 'forum':
			    // Перенаправление на форум
				header("Location: https://${settings['domain']}/");
				break;
			case 'staff':
				//include("Pages/staff.php");
				break;
			// End Footer Link

			// Cabinet system
			case 'cabinet':
				session_start();
				include("libs/auth_secure.php");
				if(!empty($_GET['page'])){
					switch ($_GET['page']) {
						case 'logout':
							echo 'logout';
							break;
						
						default:
							header("Location: https://".$settings['domain']."/error/404");
							break;
					}
				}else{
					include("Pages/cabinet/main.php");
				}
				break;
			// End Cabinet system
			
			// Admin system
			case 'admin':
				session_start();
				include("libs/auth_secure.php");
				include("libs/admin_secure.php");
				include_once("libs/DBConnect.php");
				$mysqli = mysqliConnect($settings['db']['donate']['host'], $settings['db']['donate']['user'], $settings['db']['donate']['password'], $settings['db']['donate']['dbname']);
				if(!empty($_GET['page'])){
					switch ($_GET['page']) {
						case 'logout':
							echo 'logout';
							break;
						
						default:
							header("Location: https://".$settings['domain']."/error/404");
							break;
					}
				}else{
					include("Pages/admin/main.php");
				}
				break;
			// End Admin system
			
            default:
				header("Location: https://".$settings['domain']."/error/404");
				break;
		}
	} else {
		include_once("libs/DBConnect.php");
		$mysqli = mysqliConnect($settings['db']['donate']['host'], $settings['db']['donate']['user'], $settings['db']['donate']['password'], $settings['db']['donate']['dbname']);
		include("libs/DonateFunc.php");
		include("Pages/main.php");
	}
?>