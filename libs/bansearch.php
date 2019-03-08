<?php
	define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
	header('Content-Type: text/html; charset= utf-8');
	error_reporting(E_ALL);
	ini_set('display_errors','On');
	define ( 'INCLUDE_CHECK', true );
	include (ROOT_PATH.'/libs/DBConnect.php');
	include_once (ROOT_PATH.'/config.php');
	
	if($_GET['banname']==''){
		echo '{"Rule" : "NullInput", "Reason" : "<span style=\'color: red;\'>Не все поля заполнены</span>"}';
		die();
	}

	$mysqli = mysqliConnect($settings['db']['ban']['host'], $settings['db']['ban']['user'], $settings['db']['ban']['password'], $settings['db']['ban']['dbname']);
	$banlist = $mysqli->query("SELECT * FROM `Punishments` WHERE name='".addslashes($_GET['banname'])."'");
	$countdata = mysqli_num_rows($banlist);

	if($countdata > 0){ // Если игрок найден
		$data = mysqli_fetch_assoc($banlist);
		$startBan = date('d/m/Y - H:i:s', intval($data['start']/1000));
		$endBan = date('d/m/Y - H:i:s', intval($data['end']/1000));

		$result = '<tr>';
		if ($data['punishmentType'] == "TEMP_BAN" OR $data['punishmentType'] == "BAN" OR $data['punishmentType'] == "IP_BAN") {
			$result .= '<td class="text-center">';
			$result .= '<span class="label label-danger">БАН</span>';
			$result .= '</td>';
		}else{
			$result .= '<td class="text-center">';
			$result .= '<span class="label label-warning">МУТ</span>';
			$result .= '</td>';
		}
		$result .= '<td class="text-center">';
		$result .= '<img data-toggle="tooltip" data-placement="top" title="" data-original-title="'.$data['name'].'" class="img-circle" src="https://minotar.net/avatar/'.$data['name'].'/30.png">';
		$result .= '<span class="margin-left-10 hidden-xs">'.$data['name'].'</span>';
		$result .= '</td>';
		$result .= '<td class="text-center hidden-xs">';
		$result .= '<img data-toggle="tooltip" data-placement="top" title="" data-original-title="'.$data['operator'].'" class="img-circle" src="https://minotar.net/avatar/'.$data['operator'].'/30.png">';
		$result .= '<span class="margin-left-10 hidden-xs">'.$data['operator'].'</span>';
		$result .= '</td>';
		$result .= '<td class="text-center">';
		$result .= $data['reason'];
		$result .= '</td>';
		$result .= '<td class="text-center hidden-xs">';
		$result .= $startBan;
		$result .= '</td>';
		if ($data['end'] < 1 AND ($data['punishmentType'] == "BAN" OR $data['punishmentType'] == "MUTE")) {
			$result .= '<td class="text-center" style="color:red; font-weight: bold;">';
			$result .= 'PERMANENT';
			$result .= '</td>';
		}else{
			$result .= '<td class="text-center" style="color:green; font-weight: bold;">';
			$result .= $endBan;
			$result .= '</td>';
		}
		$result .= '</tr>';

		$resp['Resp'] = "IsUserBan";
		$resp['TextResp'] = $result;
		echo json_encode($resp);
		die();
	}

	echo '{"Rule" : "IsUserNotBan", "Reason" : "<span style=\'color: green;\'>Игрок не значится в нарушениях</span>"}';
	die();
?>