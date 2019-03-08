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
		<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/libs/owl-carousel/owl.carousel.min.css" />
		<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/css/fonts.css" />
		<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/libs/animate/animate.css" />
		<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/css/main.css" />
		<link rel="stylesheet" href="https://<?=$settings['domain']?>/assets/css/media.css" />
		<style>
		</style>
	</head>
	
	<body class="rules">
		<div class="amimated wow fadeInUp hidden-xs cab-btn" data-wow-offset="100">
			<button data-fancybox data-src="#auth" class="cab">Войти в кабинет</button>
		</div>
		
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

		<div class="container">
			<div class="row">
				<div class="col-xs-12" style="margin-top: 100px;">
					<div class="panel panel-default">
						<div class="panel-body">
				<div class="col-xs-12">
					<div class="panel-group" id="accordion">
						<div class="wow animated fadeIn panel panel-default">
							<div class="panel-heading" id="headingOne">
								<h4 class="panel-title">
									<a href="#Main" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" class="">
										<i class="fa fa-book"></i> <b>Основные положения</b>
									</a>
								</h4>
							</div>
							<div id="Main" class="panel-collapse collapse" aria-expanded="true">
								<table class="table table-striped table-responsive rules-table">
									<tbody>
										<tr>
											<td>1.0</td>
											<td>Установленные правила проекта EndWizard обязательны к ознакомлению и дальнейшему их исполнению. Незнание данных правил не освобождает Вас от ответственности.</td>
										</tr>
										<tr>
											<td>1.1</td>
											<td>Персонал сервера вправе изменять правила без какого-то либо оповещения игроков.</td>
										</tr>
										<tr>
											<td>1.2</td>
											<td>Персонал имеет полное право заблокировать ваш аккаунт за нарушение того или иного пункта данного свода правил.</td>
										</tr>
										<tr>
											<td>1.3</td>
											<td>Запрещено использование и/или распространение багов/дюпов/читов, дающее преимущество над другими игроками, а также их сокрытие от персонала сервера.</td>
										</tr>
										<tr>
											<td>1.4</i></td>
											<td>Запрещено использовать модификации клиента, обеспечивающие любую форму преимущества перед другими пользователями.
												<br/><b><font color="#d13833"><i class="fa fa-lock"></i> Наказание:</font></b><font color="#d13833"> Блокировка игрового аккаунта до 30 суток.</font>
											</td>
										</tr>
										<tr>
											<td>1.5</td>
											<td>Запрещено создавать ники: 
												<br/>- оскорбительного и непристойного характера; 
												<br/>- ники, содержащие admin, moder и прочее; 
												<br/>- ники, состоящие из цифр; 
												<br/>- ники, содержащие названия других проектов. 
												<br/><b><font color="#d13833"><i class="fa fa-lock"></i> Наказание:</font></b><font color="#d13833"> Перманентная блокировка аккаунта.</font></p> 
											</td>
										</tr>
										<tr>
											<td>1.6</td>
											<td>Запрещено использование ников, которые схожи с никами <a href=""><font color="#d13833">Администрации</font></a>.</td>
										</tr>
										<tr>
											<td>1.7</td>
											<td>Все деньги за Donate-услуги вы вносите на свой страх и риск.Вернуть деньги, потраченные на Donate услуги или покупки в Онлайн-магазине, нельзя ни при каких условиях.</td>
										</tr>
										<tr>
											<td>1.8</td>
											<td>Покупка Donate-услуг возможна только на нашем сайте в Личном кабинете и Онлайн-магазине.
												<br/>Мы не осуществляем пополнение другими способами и на других ресурсах <font color="#d13833">Интернет-сети!.</font></td>
										</tr>
										<tr>
											<td>1.9</td>
											<td>Наказания за нарушения, являются не последовательными, а на выбор администрации.</td>
										</tr>
										<tr>
											<td>1.10</td>
											<td>Вы имеете право подать жалобу на администрацию, если считаете её поведение неправильным, оскорбительным.</td>
										</tr>
										<tr>
											<td>1.11</td>
											<td>Вы имеете право оспорить своё наказание, если на момент подачи жалобы не прошла половина срока нарушения (до трёх дней).</td>
										</tr>
										<tr>
											<td>1.12</td>
											<td>Вы можете требовать нас сделать определенные обновления/добавления, но мы не обязаны их воплощать.</td>
										</tr>
										<tr>
											<td>1.13</td>
											<td>Вы можете требовать исправления багов и компенсацию, если они принесли Вам ущерб, при наличии доказательств.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					
						<div class="wow animated fadeIn panel panel-default">
							<div class="panel-heading" id="headingOne">
								<h4 class="panel-title">
									<a href="#Chat" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" class="">
										<i class="fa fa-comments-o"></i> <b>Правила чата</b>
									</a>
								</h4>
							</div>
							<div id="Chat" class="panel-collapse collapse" aria-expanded="true" style="">
								<table class="table table-striped table-responsive rules-table">
									<tbody>
										<tr>
											<td>2.0</td>
											<td>Игрок не имеет право материться, оскорблять, унижать других игроков, использовать завуалированный мат скрытый * и любыми другими символами. Запрещено непристойное поведение, троллинг, флейм.
												<br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833">  Предупреждение / Блокировка игрового чата от 1 часа / Блокировка аккаунта от 1 суток.</font>
											</td>
										</tr>
										<tr>
											<td>2.1</td>
											<td>Запрещается упоминать (в оскорбительной/унизительной форме), унижать, оскорблять родных.
												<br/><b><font color="#d13833"><i class="fa fa-lock"></i> Наказание:</font></b><font color="#d13833">  Блокировка игрового чата от 1 суток / Блокировка аккаунта от 1 суток / Перманентная блокировка аккаунта в игре и на сайте.</font>
											</td>
										</tr>
										<tr>
											<td>2.2</td>
											<td>Игрок не имеет право использовать завуалированный мат скрытый * и любыми другими символами, оскорблять, унижать других игроков в тексте на табличках, варпах, регионах и т.д.
												<br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833">  Блокировка аккаунта от 3 часов, а также удаление табличек, регионов, варпов.</font>
											</td>
										</tr>
										<tr>
											<td>2.3</td>
											<td>Запрещен расизм, нацизм, розжиг межрасовой розни, пропаганда суицида, групп пропагандирующих суицид,упоминание террористических организаций запрещённых на территории РФ и прочее.
												<br/><b><font color="#d13833"><i class="fa fa-lock"></i> Наказание:</font></b><font color="#d13833">  Блокировка игрового чата от 1 суток / Блокировка аккаунта от 1 суток / Перманентная блокировка аккаунта в игре и на сайте.</font>
											</td>
										</tr>
										<tr>
											<td>2.4</td>
											<td>Запрещена реклама сторонних проектов, каналов YouTube, др.
												<br/><b><font color="#d13833"><i class="fa fa-lock"></i> Наказание:</font></b><font color="#d13833">  Блокировка игрового чата от 1 суток / Перманентная блокировка аккаунта в игре и на сайте.</font>
											</td>
										</tr>
										<tr>
											<td>2.5</td>
											<td>Запрещено размещение ссылок на соц. сети, блоги, др. (За исключением ссылок, которые напрямую относятся к проекту EndWizard.ru Например: Ссылка на группу ВК, а также ссылок на личные страницы соц. сетей).
												<br/><b><font color="#d13833"><i class="fa fa-lock"></i> Наказание:</font></b><font color="#d13833">  Блокировка игрового чата от 1 суток / Перманентная блокировка аккаунта в игре и на сайте.</font>
											</td>
										</tr>
										<tr>
											<td>2.6</td>
											<td>Запрещено частое повторение сообщений (от трёх и более, в т.ч. схожих по смыслу), а также сообщений, не несущих никакой информативной нагрузки (пример: лоиячлогрстлдфлов). А так же провокация игроков на массовый флуд.
												<br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833">  Предупреждение / Блокировка игрового чата от 20 минут / Блокировка аккаунта от 1 суток.</font>
											</td>
										</tr>
										<tr>
											<td>2.7</td>
											<td>Запрещено угрожать игрокам, шантажировать, прочие подобные действия. Также запрещена дезинформация, обман игроков.
												<br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833">  Блокировка игрового чата от 1 суток / Перментная блокировка аккаунта в игре и на сайте.</font>
											</td>
										</tr>
										<tr>
											<td>2.8</td>
											<td>Запрещено обсуждение, критика действий модератора в игровом чате в любом проявлении. Все обсуждения писать на форум в соответствующий раздел.
												<br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833">  Предупреждение / Блокировка игрового чата от 1 суток / Блокировка аккаунта от 1 суток.</font>
											</td>
										</tr>
										<tr>
											<td>2.9</td>
											<td>Запрещено в чате:
												<br/>- Писать только буквами верхнего регистра (Пример: ВСЕМ ПРИВЕТ);
												<br/>- Писать буквами хаотичного (верхнего,нижнего) регистра (Пример: ВсЕм ПриВетВы!);
												<br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> Предупреждение / Блокировка игрвого чата от 10 минут / Блокировка аккаунта от 1 суток.</font>
											</td>
										</tr>
										<tr>
											<td>2.10</td>
											<td>Запрещено выпрашивать что-либо у представителей администрации (администраторов, модераторов и т.д.).
												<br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> Предупреждение / Блокировка игрового чата от 1 часа / Блокировка аккаунт от 1 суток.</font>
											</td>
										</tr>
										<tr>
											<td>2.11</td>
											<td>Запрещается вводить в заблуждение игроков, модерацию и администрацию по техническим и игровым аспектам:
											<br/>- Ложные вайпы;
											<br/>- Мнимые изменения по игровым серверам; 
											<br/>- Сообщения в текстовом чате «Умею дюпать», «Скину читы», и пр.; 
											<br/>- Запрещается распространять информацию о любых недоработках системы
											<br/>(читерские программы, баги, дюпы и т.п.). 
											<br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> Блокировка игрового аккаунта до 1 суток.</font></td>
										</tr>
										<tr>
											<td>2.12</td>
											<td>Запрещается реклама сторонних ресурсов, упоминание каких-либо игр.
											<br/>Запрещено давать какие-либо ссылки (исключением являются: ссылка на скриншоты и wiki со стороны модератора; ссылка на домены/поддомены EndWizard.ru)
											<br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> Блокировка игрового аккаунта до 30 суток.</font></td>
										</tr>
										<tr>
											<td>2.13</td>
											<td><br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> .</font></td>
										</tr>
										<tr>
											<td>2.14</td>
											<td><br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> .</font></td>
										</tr>
										<tr>
											<td>2.15</td>
											<td><br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> .</font></td>
										</tr>
										<tr>
											<td>2.16</td>
											<td><br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> .</font></td>
										</tr>
										<tr>
											<td>2.17</td>
											<td><br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> .</font></td>
										</tr>
										<tr>
											<td>2.18</td>
											<td><br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> .</font></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						<div class="wow animated fadeIn panel panel-default">
							<div class="panel-heading" id="headingOne">
								<h4 class="panel-title">
									<a href="#game" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" class="">
										<i class="fa fa-play-circle"></i> <b>Правила поведения на серверах</b>
									</a>
								</h4>
							</div>
							<div id="game" class="panel-collapse collapse" aria-expanded="true" style="">
								<table class="table table-striped table-responsive rules-table">
									<tbody>
										<tr>
											<td>3.0</td>
											<td><br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> .</font></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						<div class="wow animated fadeIn panel panel-default">
							<div class="panel-heading" id="headingOne">
								<h4 class="panel-title">
									<a href="#1" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" class="">
										<i class="fa fa-exclamation-triangle"></i> <b>Правила для игроков с Donate-услугами</b>
									</a>
								</h4>
							</div>
							<div id="1" class="panel-collapse collapse" aria-expanded="true" style="">
								<table class="table table-striped table-responsive rules-table">
									<tbody>
										<tr>
											<td>4.0</td>
											<td><br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> .</font></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						<div class="wow animated fadeIn panel panel-default">
							<div class="panel-heading" id="headingOne">
								<h4 class="panel-title">
									<a href="#2" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" class="">
										<i class="fa fa-cog fa-spin"></i> <b>Скоро .....</b>
									</a>
								</h4>
							</div>
							<div id="2" class="panel-collapse collapse" aria-expanded="true" style="">
								<table class="table table-striped table-responsive rules-table">
									<tbody>
										<tr>
											<td>5.0</td>
											<td><br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> .</font></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						<div class="wow animated fadeIn panel panel-default">
							<div class="panel-heading" id="headingOne">
								<h4 class="panel-title">
									<a href="#3" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" class="">
										<i class="fa fa-cog fa-spin"></i> <b>Скоро .....</b>
									</a>
								</h4>
							</div>
							<div id="3" class="panel-collapse collapse" aria-expanded="true" style="">
								<table class="table table-striped table-responsive rules-table">
									<tbody>
										<tr>
											<td>6.0</td>
											<td><br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> .</font></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						<div class="wow animated fadeIn panel panel-default">
							<div class="panel-heading" id="headingOne">
								<h4 class="panel-title">
									<a href="#VK" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" class="">
										<i class="fa fa-vk"></i> <b>Правила поведения в группе и беседе сервера</b>
									</a>
								</h4>
							</div>
							<div id="VK" class="panel-collapse collapse" aria-expanded="true" style="">
								<table class="table table-striped table-responsive rules-table">
									<tbody>
										<tr>
											<td>7.0</td>
											<td><br/><b><font color="#d13833">Наказание:</font></b><font color="#d13833"> .</font></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						
						<div class="wow animated fadeIn panel panel-default">
							<div class="panel-heading" id="headingOne">
								<h4 class="panel-title">
									<a href="#moder" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" class="">
										<i class="fa fa-balance-scale"></i> <b>Правила и обязанности модерации</b>
									</a>
								</h4>
							</div>
							<div id="moder" class="panel-collapse collapse" aria-expanded="true" style="">
								<table class="table table-striped table-responsive rules-table">
									<tbody>
										<tr>
											<td class="onecolumn">
												<p><b>Модератор</b> - игрок, призванный контролировать игру, предотвращать нарушение правил.
												<br/>К модераторам, в данном своде правил, причисляются так же, тестеры и т.д. Модератор
												<br/>может помогать игрокам по модификациям установленных на серверах по своему
												<br/> желанию, своим возможностям и своему согласию.</p>
											</td>
										</tr>
										<tr>
											<td class="onecolumn">
												<p><b>Модератор</b> в праве выдавать наказание на более маленький срок или же на более
												<br/>большой (в разумных пределах), нежели указанный в правилах, если к этому располагает ситуация.</p>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>						
						<br>
						<div class="wow animated fadeIn panel panel-default">
							<div class="panel-heading" id="headingOne">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" class="">
										<i class="fa fa-info"></i> <b>Дополнительная информация по правилам игровых серверов</b>
									</a>
								</h4>
							</div>
							<div class="panel-collapse " style="">
								<table class="table table-striped table-responsive rules-table">
									<tbody>
										<tr>
											<td class="onecolumn">
												<p><span style="color:#FF0000"><b>Перманентно</b></span> - Навсегда (Неограниченно по времени).</p>
												<p>Перманентную блокировку можно снять только в <a data-toggle="modal" data-src="#auth">Личном кабинете</a> за деньги.</p>
												<p>За нарушение правил проекта со знаком <i class="fa fa-lock"></i> вы можете получить пермаментную блокировку без возможности получить разбан на платной основе.</p>
												<p>Если Вы заметили, что кто-то нарушает данный список правил, сразу же подавайте жалобу в 
												<a href="">специальный для этого топик</a>.</p>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
					</div>
			
                    <div class="text-center" style="margin-top: 30px;">
						<? echo $settings['copy'];?>
					</div>
				</div>
			</div>
		</div>
	
		<div class="modal row" style="min-height:410px" id="auth">
			<div class="modal-content" style="background:transparent">
				<div id='auth1'>
					<div class="col-sm-12" style="text-align:center;color:#fff;float:none"> <h1 class="h1head">АВТОРИЗАЦИЯ</h1></div>
					<div style="background:#fff;padding-top:40px" class="col-md-4 col-md-offset-4">
						<div class="col-md-12 text-center">
							<p style="font-size:13px">
								Чтобы войти в личный кабинет, введите ваше имя пользователя и пароль с сервера.<br> Если же вы ещё не зарегистрированы, то сделайте это в игре.
							</p>
							<form action="libs/auth.php" class="authform" id="formauth" method="POST" onsubmit="return auth();">
								<label>
									<input required name="username" type="username" placeholder="ЛОГИН">
									<span><i class="fa fa-user"></i> Логин</span>
								</label>
								<label>
									<input required name="password" type="password" placeholder="ПАРОЛЬ">
									<span><i class="fa fa-lock"></i> Пароль</span>
								</label>
								<div id="alertformauth"></div>
								<div class="col-md-12 text-center"><br>
									<button class="button log-in" type="submit">Войти в кабинет</button>
								</div>
								<div class="col-md-12 text-center">
									<p style="cursor:pointer;padding-top:10px;font-size:13px" class="toauth2">Забыл пароль?</p>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div id='auth2' style="display:none">
					<div class="col-sm-12" style="text-align:center;color:#fff;float:none;padding:0"> <h1 class="h1head">ВОССТАНОВЛЕНИЕ ПАРОЛЯ</h1></div>
					<div style="background:#fff;padding-top:40px" class="col-md-4 col-md-offset-4">
						<div class="col-md-12 text-center">
							<p style="font-size:13px">
								Если вы забыли пароль от своего аккаунта то введите почту, на который был привязан аккаунт в поле ниже.<br> Мы вышлем на почту все необходимые инструкции по восстановлению.
							</p>
							<form action="https://EndWizard.ru/cabinet/recovery/changepass.php" id="mail" method="POST">
								<label>
									<input required name="mail" type="email" placeholder="Email">
									<span><i class="fa fa-user"></i> Введите Email</span>
								</label>
								<div id="alertmail"></div>
								<div class="col-md-12 text-center"><br>
									<button class="button log-in" type="submit">Восстановить пароль</button>
								</div>
								<div class="col-md-12 text-center">
									<p style="cursor:pointer;padding-top:10px;font-size:13px" class="toauth2">Ввести логин и пароль</p>
								</div>
							</form>
						</div>
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
			function auth()
			{
				var id = $(".authform").attr("id");
				$('#alert'+id).css("display", "none");
				var result = '';
				
				var result = $.ajax({
					type: "POST",
					url: 'libs/auth.php',
					data: $('#'+id).serialize(),
					async: false,
					success: function(data){
						data;
					}
				}).responseText;
				
				if(!result){
					$('#alert'+id).css("color", "green");
					$('#alert'+id).html('Вы успешно авторизованы!<br>Ожидайте перехода на страницу личного кабинета.').fadeIn(300);
					setTimeout( function() { 
						window.location.href = "https://<?=$settings['domain'];?>/go/cabinet";
					}, 2000);
				} else {
					$('#alert'+id).css("color", "red");
					$('#alert'+id).html(result).fadeIn(600);
				}
				
				return false;
			}
			   
			$('.toauth2').click(function(){
				if($('#auth2').is(':hidden')){
					$('#auth1').hide();
					$('#auth2').fadeIn(500);
				}else{		
					$('#auth2').hide();
					$('#auth1').fadeIn(500);
				}
				
			});
			 
			$("#mail").on('submit', function () {	
				var id = $(this).attr("id");
				var action = $(this).attr("action");
				var type = 'POST';

				$.ajax({
					type: "GET",
					url: action,
					data: $('#'+id).serialize(),
					success: function(data){
						$('#alert'+id).show().animate({"opacity":"1", "bottom":"-25px"}, 400).html(data);
					}
				});
				return false;
			});

			$('select').styler();
		</script>
	</body>
</html>