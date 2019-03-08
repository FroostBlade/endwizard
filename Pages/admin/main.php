<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>EndWizard - Майнкрафт сервер для всех и каждого!</title>
		<meta name="keywords" content="миниигры, эндвизард, еггварс, скайварс, бедварс, minecraft, играть, донат, сервер эксодуса, лучший, майнкрафт, сервер, проект, feezzz, froostblade">
		<meta name="description" content="Игровой проект с мини играми. У нас вы найдёте лучшие мини-игры! IP: mc.EndWizard.ru">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/libs/fancybox/jquery.fancybox.min.css" />
		<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/libs/bootstrap/bootstrap.min.css" />
		<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/libs/bootstrap/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/css/fonts.css" />
		<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/libs/animate/animate.css" />
		<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/css/main.css" />
		<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/css/media.css" />
		<style>
			.block-header-default{
				background-color: #eb7f00;
				color: #fff;
			}
			.block-header{
				display: flex;
				flex-direction: row;
				justify-content: space-between;
				padding: 14px 18px;
				border-top-left-radius: 6px;
				border-top-right-radius: 6px;
			}
			.block-title{
				flex: 1 1 auto;
			}
			.block-options{
				flex: 0 0 auto;
			}
			.button-header-options{
				height: 100%;
				width: 200px;
				margin-right: 10px;
				color: #fff;
				background-color: transparent;
				border: 1px solid #fff;
				border-radius: 30px;
				transition: .2s;
			}
			.button-header-options:hover{
				background: #b86300;
			}
			.button-header-options:focus{
				outline: none;
			}
			.block-content{
				border-bottom-left-radius: 6px;
				border-bottom-right-radius: 6px;
				background-color: #fff;
			}
			.block.block-rounded {
				border-radius: 6px;
			}
			.block.block-bordered {
			    border: 1px solid #d0d0d0;
			    box-shadow: none;
			}
			.block.block-m15 {
			    margin-right: 15px;
    			margin-left: 15px;
    			margin-bottom: 10px;
			}
			.block-opt-content {
			    padding: 18px 18px 18px;
			}
			.opt-input-group{
				display: flex;
				width: 100%;
				margin-bottom: 10px;
			}
			.opt-input-text{
				padding: 8px 14px;
				color: #fff;
				text-align: center;
				border: 1px solid #eb7f00;
				background-color: #eb7f00;
			    border-bottom-left-radius: 0.50rem;
			    border-top-left-radius: 0.50rem;
			}
			.opt-input{
			    flex: 1 1 auto;
			    padding: 8px 14px;
			    border: 1px solid #eb7f00;
			    border-bottom-right-radius: 0.50rem;
			    border-top-right-radius: 0.50rem;
			    transition: .2s;
			}
			.opt-input:focus{
				outline: none;
				color: #eb7f00;
			    border-color: #b86300;
			}
			.buy-history{
				margin-top: 10px;
				border: 0px solid transparent;
			}
			.buy-history thead th {
				border-top: none;
				border-bottom: none;
				text-transform: uppercase;
			}
			.buy-history>tbody>tr:last-child>td {
				border-bottom-left-radius: 6px;
				border-bottom-right-radius: 6px;
			}
			.block-status-site{
				padding: 25px 25px;
				width: 100%;
			}
			.font-size-sm {
				font-size: 1.728571rem !important;
			}
			.font-size-h3 {
				font-size: 2.857143rem;
			}
			.text-uppercase {
				text-transform: uppercase !important;
			}
			.on-off-site-button{
				margin-top: 20px;
				margin-bottom: 20px;
				width: 100%;
				padding: 10px 10px;
				border-radius: 6px;
				color: #fff;
			}
			.on-off-site-button:focus{
				outline: none;
			}
			.on-off-site-button-green{
				background-color: #3ccc23;
			}
			.on-off-site-button-red{
				background-color: #da1e1e;
			}
			.list-admin-page>a:last-child{
				border-bottom: 0px solid transparent;
			}
			.list-admin-page-title{
				position: relative;
				text-align: center;
				color: #eb7f00;
				display: block;
				padding: 0.75rem 1.25rem;
				border-bottom: 1px solid #eaecee;
			}
			.list-admin-page-item{
				position: relative;
				display: block;
				width: 100%;
				padding: 0.75rem 1.25rem;
				text-decoration: none;
				color: #6c7175;
				border-bottom: 1px solid #eaecee;
				transition: .2s;
			}
			.list-admin-page-item:hover{
				background-color: #eb7f00;
				color: #fff;
			}
			.list-admin-page>a:last-child:hover{
				border-bottom-left-radius: 6px;
				border-bottom-right-radius: 6px;
			}
			.console{
				padding: 20px 20px;
				height: 600px;
				overflow: auto;
			}
			.console .command{
				color: #eb7f00;
			}
			.console-input{
				border-top: 1px solid #eaecee;
				padding: 10px 10px;
			}
			.console-input-command{
				width: 79%; 
				padding: 6px 10px 6px 10px;
			}
			.console-input-command:focus{
				outline: none;
			}
			.console-input-button{
				width: 20%; 
				height: 38px; 
				background-color: #eb7f00; 
				color: #fff;
				outline: none;
				transition: .2s;
			}
			.console-input-button:hover{
				background: #b86300;
			}
			.save-opt-button{
				display: block;
				width: 60%;
				margin: 0 auto;
				border-radius: 6px;
				height: 38px;
				background-color: #eb7f00;
				outline: none;
				color: #fff;
				transition: .2s;
			}
			.save-opt-button:hover{
				background-color: #b86300;
			}
		</style>
	</head>
	
	<body class="cabinet" style="">
		<nav class="navbar navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<input id="burger" type="checkbox">
						<label for="burger"> </label>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="navbar-inner">
						<ul class="nav navbar-nav nav-main">
							<li class="animated slideInDown hidden-sm hidden-md hidden-lg"><a href="auth" data-fancybox data-src="#auth">Личный кабинет</a></li>
							<li class="animated slideInDown link"><a class="" href="https://<?=$settings['domain'];?>/">Главная</a></li>
							<li class="animated slideInDown link"><a class="" href="https://<?=$settings['domain'];?>/go/rules">Правила</a></li>
							<li class="animated slideInDown link"><a class="" href="https://<?=$settings['domain'];?>/go/banlist">Банлист</a></li>
							<li class="animated slideInDown"><a href="https://<?=$settings['domain'];?>/go/forum">Форум</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<div class="container" style="margin-top: 100px;">
		
			<div class="col-md-12">
				<div class="block block-rounded text-center" style="margin-bottom: 20px;">
					<h1 class="h1head">EndWizard - Админ Панель</h1>
				</div>
            </div>
			
			<div class="col-md-3">
				<div class="block block-rounded block-status-site text-center text-uppercase">
					<div class="font-size-sm text-muted text-uppercase">Статус сайта</div>
					<? if($settings['status']==1){?>
						<div class="font-size-h3 text-uppercase text-info">Включен</div>
					<? }else{?>
						<div class="font-size-h3 text-uppercase text-danger">Выключен</div>
					<? }?>
				</div>

				<? if($settings['status']==1){?>
					<button class="on-off-site-button text-uppercase on-off-site-button-red" onclick="on_off_site(0);">Выключить сайт</button>
				<? }else{?>
					<button class="on-off-site-button text-uppercase on-off-site-button-green" onclick="on_off_site(1);">Включить сайт</button>
				<? }?>

				<div class="block block-rounded" style="margin-bottom: 20px;">
					<div class="list-admin-page">
						<div class="list-admin-page-title">
							Основное
						</div>

						<a class="list-admin-page-item" data-toggle="tab" href="#main">Главная</a>
						<a class="list-admin-page-item" data-toggle="tab" href="#optionproject">Настройки проекта</a>

						<div class="list-admin-page-title">
							Компоненты проекта
						</div>

						<a class="list-admin-page-item" data-toggle="tab" href="#goods">Привилегии</a>
						<a class="list-admin-page-item" data-toggle="tab" href="#promocodes">Промо-коды</a>

						<div class="list-admin-page-title">
							Сервер
						</div>

						<a class="list-admin-page-item" data-toggle="tab" href="#console">Консоль</a>
					</div>
				</div>
			</div>

			<!-- Tab panes -->
			<div class="tab-content col-md-9">
				<div class="tab-pane fade" id="main">
					<div class="block block-rounded">
						<div class="block-header block-header-default">
							<h4 class="text-left">Последние платежи</h4>
						</div>

						<div class="block-content">
							<table class="table table-striped table-responsive buy-history">
								<thead>
									<tr>
										<th>Донат</th>
										<th>Никнейм</th>
										<th class="hidden-xs">Команда</th>
										<th class="hidden-xs">intid</th>
										<th class="hidden-xs">Стоимость</th>
										<th>Статус покупки</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$rows = $mysqli->query("SELECT * FROM `data` ORDER BY time ASC");
									while($row = $rows->fetch_assoc()){
										echo "
										<td>".$row['donate']."</td>
										<td>".$row['nickname']."</td>
										<td class='hidden-xs'>".$row['command']."</td>
										<td class='hidden-xs'>".$row['intid']."</td>
										<td class='hidden-xs'>".$row['amount']."</td>
										<td>".$row['status']."</td>
										</tr>";
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="tab-pane active" id="optionproject">
					<div class="block block-rounded">
						<div class="block-header block-header-default">
							<h4 class="text-left">Настройки проекта</h4>
						</div>

						<div class="block-content" style="padding-top: 18px; padding-bottom: 8px;">
							<div style="display: none; margin-top: 15px; margin-bottom: 15px;" id="alertsaveopt" class="col-md-12 text-center"></div>
							<div class="block block-m15 block-rounded block-bordered">
								<div class="block-opt-content">
									<div class="text-muted text-uppercase" style="margin-bottom: 10px;">Настройки сайта</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Название сайта</span>
										<input type="text" class="opt-input" name="sitename" value="<?=$settings['name_project'];?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">VK (ссылка)</span>
										<input type="text" class="opt-input" name="vk_link" value="<?=$settings['VK'];?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Домен</span>
										<input type="text" class="opt-input" name="domain" value="<?=$settings['domain'];?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">ID (VK) Админов</span>
										<input type="text" class="opt-input" name="id_admins" value="<?
											foreach ($settings['id_admins_vk'] as $key) {
												echo $key.";";
											}
										?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Ники админов</span>
										<input type="text" class="opt-input" name="nickname_admins" value="<?
											foreach ($settings['username_admins'] as $key) {
												echo $key.";";
											}
										?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">IP админов</span>
										<input type="text" class="opt-input" name="ip_admins" value="<?
											foreach ($settings['ip_address_admins'] as $key) {
												echo $key.";";
											}
										?>">
									</div>
									<span class="text-muted">Внимание! После каждого введённого id, ника, ip-адреса ставится - ;</span>
								</div>
							</div>
							
							<div class="block block-m15 block-rounded block-bordered">
								<div class="block-opt-content">
									<div class="text-muted text-uppercase" style="margin-bottom: 10px;">Настройки сервера</div>
									<div class="opt-input-group">
										<span class="opt-input-text">IP сервера</span>
										<input type="text" class="opt-input" name="server_ip" value="<?=$settings['server_ip']?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Порт сервера</span>
										<input type="text" class="opt-input" name="server_port" value="<?=$settings['server_port']?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">RCON Порт</span>
										<input type="text" class="opt-input" name="rcon_port" value="<?=$settings['server_rcon.port']?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">RCON Пароль</span>
										<input type="password" class="opt-input" name="rcon_pass" value="" placeholder="Если хотите сменить, просто введите новый пароль.">
									</div>
								</div>
							</div>

							<div class="block block-m15 block-rounded block-bordered">
								<div class="block-opt-content">
									<div class="text-muted text-uppercase" style="margin-bottom: 10px;">Настройки оплаты free-kassa</div>
									<div class="opt-input-group">
										<span class="opt-input-text">ID Кассы</span>
										<input type="text" class="opt-input" name="fk_id" value="<?=$settings['fk_merchant.id']?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Секретное слово 1</span>
										<input type="password" class="opt-input" name="fk_secret_word_1" value="" placeholder="Если хотите сменить, просто введите новое секретное слово.">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Секретное слово 2</span>
										<input type="password" class="opt-input" name="fk_secret_word_2" value="" placeholder="Если хотите сменить, просто введите новое секретное слово.">
									</div>
								</div>
							</div>

							<div class="block block-m15 block-rounded block-bordered">
								<div class="block-opt-content">
									<div class="text-muted text-uppercase" style="margin-bottom: 10px;">Подключение к БД Авторизации</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Хост</span>
										<input type="text" class="opt-input" name="host_auth" value="<?=$settings['db']['auth']['host']?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Логин</span>
										<input type="text" class="opt-input" name="user_auth" value="<?=$settings['db']['auth']['user']?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Пароль</span>
										<input type="password" class="opt-input" name="pass_auth" value="" placeholder="Если хотите сменить, просто введите новый пароль.">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Имя БД</span>
										<input type="text" class="opt-input" name="dbname_auth" value="<?=$settings['db']['auth']['dbname']?>">
									</div>
								</div>
							</div>

							<div class="block block-m15 block-rounded block-bordered">
								<div class="block-opt-content">
									<div class="text-muted text-uppercase" style="margin-bottom: 10px;">Подключение к БД Бан-Таблицы</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Хост</span>
										<input type="text" class="opt-input" name="host_ban" value="<?=$settings['db']['ban']['host']?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Логин</span>
										<input type="text" class="opt-input" name="user_ban" value="<?=$settings['db']['ban']['user']?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Пароль</span>
										<input type="password" class="opt-input" name="pass_ban" value="" placeholder="Если хотите сменить, просто введите новый пароль.">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Имя БД</span>
										<input type="text" class="opt-input" name="dbname_ban" value="<?=$settings['db']['ban']['dbname']?>">
									</div>
								</div>
							</div>

							<div class="block block-m15 block-rounded block-bordered">
								<div class="block-opt-content">
									<div class="text-muted text-uppercase" style="margin-bottom: 10px;">Подключение к БД Сайта</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Хост</span>
										<input type="text" class="opt-input" name="host_donate" value="<?=$settings['db']['donate']['host']?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Логин</span>
										<input type="text" class="opt-input" name="user_donate" value="<?=$settings['db']['donate']['user']?>">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Пароль</span>
										<input type="password" class="opt-input" name="pass_donate" value="" placeholder="Если хотите сменить, просто введите новый пароль.">
									</div>
									<div class="opt-input-group">
										<span class="opt-input-text">Имя БД</span>
										<input type="text" class="opt-input" name="dbname_donate" value="<?=$settings['db']['donate']['dbname']?>">
									</div>
								</div>
							</div>

							<button type="submit" class="save-opt-button" onclick="saveOpt();">Сохранить</button>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="goods">
					<div class="block block-rounded">
						<div class="block-header block-header-default">
							<h4 class="text-left">Привилегии</h4>
						</div>

						<div class="block-content">
							<table class="table table-striped table-responsive buy-history">
								<thead>
									<tr>
										<th>Донат</th>
										<th>Никнейм</th>
										<th class="hidden-xs">Команда</th>
										<th class="hidden-xs">intid</th>
										<th class="hidden-xs">Стоимость</th>
										<th>Статус покупки</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$rows = $mysqli->query("SELECT * FROM `data` ORDER BY time ASC");
										while($row = $rows->fetch_assoc()){
											echo "
											<td class='text-center'>".$row['donate']."</td>
											<td class='text-center'>".$row['nickname']."</td>
											<td class='hidden-xs'>".$row['command']."</td>
											<td class='hidden-xs'>".$row['intid']."</td>
											<td class='hidden-xs'>".$row['amount']."</td>
											<td>".$row['status']."</td>
											</tr>";
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="promocodes">
					<div class="block block-rounded">
						<div class="block-header block-header-default">
							<h4 class="block-title">Промокоды</h4>
							<div class="block-options">
								<button class="button-header-options" data-fancybox data-src='#newpromo'>Добавить промо-код</button>
							</div>
						</div>

						<div class="block-content">
							<div style="display: none; margin-top: 15px; margin-bottom: 15px;" id="alertpromoact" class="col-md-12 text-center"></div>
							<table class="table table-striped table-responsive buy-history">
								<thead>
									<tr>
										<th>Промокод</th>
										<th>Скидка</th>
										<th class="">Кол-во использований</th>
										<th class="">Действие</th>
									</tr>
								</thead>
								<tbody id="promocodedata">
									<?php 
										$rows = $mysqli->query("SELECT * FROM `promo`");
										while($row = $rows->fetch_assoc()){
											echo "<tr id='trpromo".$row['code']."''>
											<td>".$row['code']."</td>
											<td>".$row['discount']."</td>
											<td>".$row['count']."</td>
											<td>
												<i class='fa fa-trash' style='font-size: 25px; cursor:pointer;' onclick='deletePromo(\"".$row['code']."\")'></i>
												<i class='fa fa-edit' style='font-size: 25px; cursor:pointer;' data-fancybox data-src='#editpromo' onclick='showPromoForm(\"".$row['code']."\", ".$row['discount'].", ".$row['count'].")'></i>
											</td>
											</tr>";
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="console">
					<div class="block block-rounded">
						<div class="block-header block-header-default">
							<h4 class="text-left">Консоль</h4>
						</div>

						<div class="block-content">
							<div class="console">

							</div>

							<div class="console-input">
								<input type="text" name="command" id="command" placeholder="Команда" class="console-input-command">
								<button onclick="return sendCommandToServer();" class="console-input-button">Выполнить</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal row" style="min-height:410px" id="newpromo">
			<div class="modal-content" style="background:transparent">
				<div class="col-sm-12" style="text-align:center;color:#fff;float:none"><h1 class="h1head">Создание промо-кода</h1></div>
				<div style="background:#fff;padding-top:40px" class="col-md-4 col-md-offset-4">
					<div class="col-md-12">
						<form action="" id="newpromoform">
							<label>
								<input required name="promocode" type="text" placeholder="Код" value="">
								<span><i class="fa fa-code"></i> Код</span>
							</label>
							<label>
								<input required name="discount" type="number" placeholder="Скидка" value="">
								<span><i class="fa fa-percent"></i> Скидка</span>
							</label>
							<label>
								<input required name="countuses" type="number" placeholder="Кол-во использований" value="">
								<span><i class="fa fa-compass"></i> Кол-во использований</span>
							</label>
							<div class="col-md-12 text-center">
								<button class="button log-in" type="submit" onclick="newPromo(); return false;">Добавить</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="modal row" style="min-height:410px" id="editpromo">
			<div class="modal-content" style="background:transparent">
				<div class="col-sm-12" style="text-align:center;color:#fff;float:none"><h1 class="h1head" id="titlepromo"></h1></div>
				<div style="background:#fff;padding-top:40px" class="col-md-4 col-md-offset-4">
					<div class="col-md-12">
						<form action="" id="editpromoform">
							<input required name="promocode" type="hidden" value="">
							<label>
								<input required name="discount" type="number" placeholder="Скидка" value="">
								<span><i class="fa fa-percent"></i> Скидка</span>
							</label>
							<label>
								<input required name="countuses" type="number" placeholder="Кол-во использований" value="">
								<span><i class="fa fa-compass"></i> Кол-во использований</span>
							</label>
							<div class="col-md-12 text-center">
								<button class="button log-in" type="submit" onclick="editPromo(); return false;">Изменить</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<noscript id="deferred-styles">
			<link rel="shortcut icon" href="https://<?=$settings['domain']?>/assets/images/favicon.ico" />
			
			<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/libs/owl-carousel/owl.theme.default.min.css" />
			<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/libs/font-awesome/css/font-awesome.min.css"/>
			<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/css/jquery.formstyler.css"/>
			<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/css/jquery.formstyler.theme.css"/>
			
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
			<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500" rel="stylesheet">
			
		</noscript>
	
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?146"></script>

		<div id="vk_community_messages"></div>
		<script type="text/javascript">
			VK.Widgets.CommunityMessages("vk_community_messages", 107543011, {expanded: "0",widgetPosition: "left",disableExpandChatSound: "1",tooltipButtonText: "Есть вопрос?"});
		</script>
	
		<script>
			  var loadDeferredStyles = function() {
				var addStylesNode = document.getElementById("deferred-styles");
				var replacement = document.createElement("div");
				replacement.innerHTML = addStylesNode.textContent;
				document.body.appendChild(replacement)
				addStylesNode.parentElement.removeChild(addStylesNode);
			  };
			  var raf = requestAnimationFrame || mozRequestAnimationFrame ||
				  webkitRequestAnimationFrame || msRequestAnimationFrame;
			  if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
			  else window.addEventListener('load', loadDeferredStyles);
		</script>
	
		<script src="https://<?=$settings['domain']?>/assets/libs/jquery/jquery-3.2.0.min.js"></script>
		<script src="https://<?=$settings['domain']?>/assets/libs/bootstrap/bootstrap.min.js"></script>
		<script src="https://<?=$settings['domain']?>/assets/libs/fancybox/jquery.fancybox.min.js"></script>
		<script src="https://<?=$settings['domain']?>/assets/libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
		<script src="https://<?=$settings['domain']?>/assets/libs/navigation/navigation.js"></script>
		<script src="https://<?=$settings['domain']?>/assets/libs/owl-carousel/owl.carousel.min.js"></script>
		<script src="https://<?=$settings['domain']?>/assets/libs/respond/respond.js"></script>
		<script src="https://<?=$settings['domain']?>/assets/libs/wow/wow.min.js"></script>

		<script src="https://<?=$settings['domain']?>/assets/libs/jarallax/jarallax.js"></script>
		<script src="https://<?=$settings['domain']?>/assets/libs/smoothscroll/SmoothScroll.js"></script>
		<!--<script src="../assets/libs/scrollmagic/ScrollMagic.min.js"></script>-->
		<!--<script src="../assets/js/classie.js"></script>-->
		<!--<script src="../assets/js/svganimations.js"></script>-->
		<!--<script src="../assets/js/select.js"></script>-->
		<script src="https://<?=$settings['domain']?>/assets/js/jquery.formstyler.min.js"></script>
		<script src="https://<?=$settings['domain']?>/assets/js/common.js"></script>
		<script>
			function sendCommandToServer()
			{
				var command = $('#command').val();
				$.ajax({
					type: "GET",
					url: 'https://<?=$settings['domain']?>/libs/sendCommandToServerRCON.php',
					data: 'command=' + command,
					success: function(data){
						$('#command').val('');
						$('.console').append(`<p class="command">> ${command}</p>`);
						if(data.length != 2){$('.console').append(`<pre>${data}</pre>`);}
						// if(data.length != 2){$('.console').append(`<pre>${data}</pre>`);}
						$('.console').scrollTop(10000);
					}
				});

				return false;
			}

			function on_off_site(mode){
				$.ajax({
					url: 'https://<?=$settings['domain']?>/libs/on_off_site.php',
					type: 'GET',
					data: {mode: mode},
					success: function(data){
						location.reload();
					}
				});
			}

			function showPromoForm(code, discount, countuses)
			{
				$('#titlepromo').html("Промо-Код " + code);
				$('input[name="promocode"]').attr({
					value: code
				});
				$('input[name="discount"]').attr({
					value: discount
				});
				$('input[name="countuses"]').attr({
					value: countuses
				});
			}

			function newPromo()
			{
				$('#alertpromoact').css("display", "none");
				$.ajax({
					type: "GET",
					url: 'https://<?=$settings['domain']?>/libs/PromoAct.php',
					data: 'act=newpromo&' + $('#newpromoform').serialize(),
					success: function(data){
						if(data == 'success'){
							$('#alertpromoact').html('<span style="color: green;">Промо-код добавлен</span>').fadeIn(600);
							$('#promocodedata').append('<tr id="trpromo' + $('input[name="promocode"]').val() + '">' + 
											'<td>' + $('input[name="promocode"]').val() + '</td>' +
											'<td>' + $('input[name="discount"]').val() + '</td>' +
											'<td>' + $('input[name="countuses"]').val() + '</td>' +
											'<td>' +
												'<i class="fa fa-trash" style="font-size: 25px; cursor:pointer;" onclick="deletePromo(' + $('input[name="promocode"]').val() + ')"></i>' +
												'<i class="fa fa-edit" style="font-size: 25px; cursor:pointer;" data-fancybox data-src="#editpromo" onclick="showPromoForm("' + $('input[name="promocode"]').val() + '", ' + $('input[name="discount"]').val() + ', ' + $('input[name="countuses"]').val() + ')"></i>' +
											'</td>' +
											'</tr>');
						}else{
							$('#alertpromoact').html('<span style="color: red;">Ошибка. ' + data + '</span>').fadeIn(600);
						}
						$.fancybox.close();
						setTimeout( function() { 
							$('#alertpromoact').fadeOut(600);
						}, 3000);
					}
				});
			}

			function editPromo()
			{
				$('#alertpromoact').css("display", "none");
				$.ajax({
					type: "GET",
					url: 'https://<?=$settings['domain']?>/libs/PromoAct.php',
					data: 'act=edit&' + $('#editpromoform').serialize(),
					success: function(data){
						if(data == 'success'){
							$('#alertpromoact').html('<span style="color: green;">Промо-код изменён</span>').fadeIn(600);
							$('#trpromo' + $('input[name="promocode"]').val()).empty();
							$('#trpromo' + $('input[name="promocode"]').val()).html('<td>' + $('input[name="promocode"]').val() + '</td>' +
											'<td>' + $('input[name="discount"]').val() + '</td>' +
											'<td>' + $('input[name="countuses"]').val() + '</td>' +
											'<td>' +
												'<i class="fa fa-trash" style="font-size: 25px; cursor:pointer;" onclick="deletePromo(' + $('input[name="promocode"]').val() + ')"></i>' +
												'<i class="fa fa-edit" style="font-size: 25px; cursor:pointer;" data-fancybox data-src="#editpromo" onclick="showPromoForm("' + $('input[name="promocode"]').val() + '", ' + $('input[name="discount"]').val() + ', ' + $('input[name="countuses"]').val() + ')"></i>' +
											'</td>');
						}else{
							$('#alertpromoact').html('<span style="color: red;">Ошибка. ' + data + '</span>').fadeIn(600);
						}
						$.fancybox.close();
						setTimeout( function() { 
							$('#alertpromoact').fadeOut(600);
						}, 3000);
					}
				});
			}

			function deletePromo(code)
			{
				if (confirm('Удалить?')) {
					$('#alertpromoact').css("display", "none");
					$.ajax({
						type: "GET",
						url: 'https://<?=$settings['domain']?>/libs/PromoAct.php',
						data: 'act=delete&promocode=' + code,
						success: function(data){
							if(data == 'success'){
								$('#alertpromoact').html('<span style="color: green;">Промо-код удалён</span>').fadeIn(600);
								$(`#trpromo${code}`).remove();
							}else{
								$('#alertpromoact').html('<span style="color: red;">Ошибка</span>').fadeIn(600);
							}
							setTimeout( function() { 
								$('#alertpromoact').fadeOut(600);
							}, 2000);
						}
					});
			    }
			}

			function saveOpt()
			{

				$.ajax({
					type: "POST",
					url: 'https://<?=$settings['domain']?>/libs/saveOpt.php',
					data: 'sitename=' + $('input[name="sitename"]').val() + 
						  '&vk_link=' + $('input[name="vk_link"]').val() + 
						  '&domain=' + $('input[name="domain"]').val() + 
						  '&id_admins=' + $('input[name="id_admins"]').val() + 
						  '&nickname_admins=' + $('input[name="nickname_admins"]').val() + 
						  '&ip_admins=' + $('input[name="ip_admins"]').val() + 
						  '&server_ip=' + $('input[name="server_ip"]').val() + 
						  '&server_port=' + $('input[name="server_port"]').val() + 
						  '&rcon_port=' + $('input[name="rcon_port"]').val() + 
						  '&rcon_pass=' + $('input[name="rcon_pass"]').val() + 
						  '&fk_id=' + $('input[name="fk_id"]').val() + 
						  '&fk_secret_word_1=' + $('input[name="fk_secret_word_1"]').val() + 
						  '&fk_secret_word_2=' + $('input[name="fk_secret_word_2"]').val() +
						  '&host_auth=' + $('input[name="host_auth"]').val() + 
						  '&user_auth=' + $('input[name="user_auth"]').val() + 
						  '&pass_auth=' + $('input[name="pass_auth"]').val() + 
						  '&dbname_auth=' + $('input[name="dbname_auth"]').val() + 
						  '&host_ban=' + $('input[name="host_ban"]').val() + 
						  '&user_ban=' + $('input[name="user_ban"]').val() + 
						  '&pass_ban=' + $('input[name="pass_ban"]').val() + 
						  '&dbname_ban=' + $('input[name="dbname_ban"]').val() + 
						  '&host_donate=' + $('input[name="host_donate"]').val() + 
						  '&user_donate=' + $('input[name="user_donate"]').val() + 
						  '&pass_donate=' + $('input[name="pass_donate"]').val() + 
						  '&dbname_donate=' + $('input[name="dbname_donate"]').val() 
						  ,
					success: function(data){
						if(data == 'success'){
							$('#alertsaveopt').html('<span style="color: green;">Настройки сохранены</span>').fadeIn(600);
							
						}else{
							$('#alertsaveopt').html('<span style="color: red;">Ошибка. ' + data +'</span>').fadeIn(600);
						}

						$('input[name="fk_secret_word_1"]').val("");
						$('input[name="fk_secret_word_2"]').val("");
						$('input[name="rcon_pass"]').val("");
						$('input[name="pass_auth"]').val("");
						$('input[name="pass_ban"]').val("");
						$('input[name="pass_donate"]').val("");

						setTimeout( function() { 
							$('#alertsaveopt').fadeOut(600);
						}, 2000);
					}
				});
			}
		</script>
	</body>
</html>