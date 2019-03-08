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
		<link rel="stylesheet" href="assets/libs/fancybox/jquery.fancybox.min.css" />
		<link rel="stylesheet" href="assets/libs/bootstrap/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/libs/bootstrap/bootstrap-theme.min.css" />
		<link rel="stylesheet" href="assets/libs/owl-carousel/owl.carousel.min.css" />
		<link rel="stylesheet" href="assets/css/fonts.css" />
		<link rel="stylesheet" href="assets/libs/animate/animate.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/media.css" />
	</head>
	
	<body>
		<div class="animated wow fadeInUp hidden-xs cab-btn" data-wow-offset="100">
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
							<li class="animated slideInDown hidden-md hidden-sm hidden-lg"><a href="auth" data-fancybox data-src="#auth">Личный кабинет</a></li>
							<li class="animated slideInDown link"><a class="" href="https://<?=$settings['domain'];?>/">Главная</a></li>
							<li class="animated slideInDown link"><a class="" href="https://<?=$settings['domain'];?>/go/rules">Правила</a></li>
							<li class="animated slideInDown link"><a class="" href="https://<?=$settings['domain'];?>/go/banlist">Банлист</a></li>
							<li class="animated slideInDown"><a href="/go/forum">Форум</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		
		<header class="jarallax main">
			<div class="is_overlay"></div>
			<div class="container" id="home">
				<div class="row header-title">
					<div class="col-xs-12 text-center">
						<div id="main">
							<div id="logosvg" style="position: absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%); height: 450px; width: 450px;">
							</div>
						</div>
					</div>
				</div>
				<div class="arrow">
					<p>КРУТИ ВНИЗ</p>
					<div>●</div>
					<div>●</div>
					<div>●</div>
					<div>●</div>
					<div>●</div>
				</div>
			</div>
		</header>
		
		<section id="stats" class="col-md-12 block" style="width:100%">
			<div class="col-md-12" style="text-align:center"><h1 class="h1head">Статистика</h1></div>
			<div class="container" style="text-align: center; color: #333; margin-bottom: 80px;">
				<div class="col-md-4 col-sm-12" style="margin:15px 0">
					<div class="wow animated bounceIn infospan" data-wow-delay="0.6s">
						<span id="curplayers">-</span><br>
						<p>Текущий Онлайн</p><br>
					</div>
				</div>
				<div class="col-md-4 col-sm-12" style="margin:15px 0">
					<div class="wow animated bounceIn infospan" data-wow-delay="0.8s">
						<span id="recordonline">-</span><br>
						<p>Рекорд</p><br>
					</div>
				</div>
				<div class="col-md-4 col-sm-12" style="margin:15px 0">
					<div class="wow animated bounceIn infospan" data-wow-delay="1s">
						<span id="regplayers">-</span><br>
						<p>Игроки</p><br>
					</div>
				</div>
			</div>
		</section>
		
		<section id="ranks" class="col-md-12 block text-center" style="min-height:500px;background-image:url('assets/images/bgback.jpg');background-size:cover">
			<h1 class="h1head" style="color:#fff">Платные услуги</h1>
			<div class="col-md-1 hidden-sm hidden-xs prev_button" style="padding-top: 130px;">
				<span class="wow animated bounceIn" data-wow-delay="1s" style="font-size:70px;cursor:pointer;color:#eb7f00">
					<i class="fa fa-angle-left"></i>
				</span>
			</div>
			<div class="col-md-10">
				<div class="pb-40 owl-groups owl-carousel">
					<?php
						$data = getDonate("privilege");
						$donate = mysqli_fetch_all($data, MYSQLI_ASSOC);
						
						foreach($donate as $key) {
							echo '<div class="item animated wow fadeIn" data-wow-delay="0s">';
							echo '<div class="responsive-box">';
							// echo '<div class="block-image" style="background:url(\'assets/images/Privileges/'.$key['name'].'.png\');background-size:cover;font-family: Oswald;">';
							echo '<div class="block-image" style="background:url(\'assets/images/Privileges/Test2.png\');background-size:cover;font-family: Oswald;">';
							echo $key['name'];
							// echo '<br>';
							// echo '<span style=" position: absolute; bottom: 0; left: 0; width: 100%; font-size: 22px; font-family: Oswald;">ALL SERVERS</span>';
							echo '</div>';
							// echo '<div class="block-image" id="first" style="background:url(\'assets/images/Privileges/Test.png\');background-size:cover;font-family: Oswald;">';
							// echo $key['name'];
							// echo '<br>';
							// echo '<span style=" position: absolute; bottom: 0; left: 0; width: 100%; font-size: 22px; font-family: Oswald;">MAGIC</span>';
							// echo '</div>';
							echo '</div>';
							echo '<div class="image">';
							echo '<div>';
							// echo '<div class="col-md-6"><sup>₽</sup><h3>19</h3><br><span>на неделю</span></div>';
							// echo '<div class="hidden-xs" style="width:1px;height:70px;background:#bbb;left:49.5%;margin-top:15px;position:absolute"></div>';
							echo '<div class="col-md-12"><sup>₽</sup><h3>'.$key['price'].'</h3><br><span>навсегда</span></div>';
							echo '</div>';
							echo '</div>';
							echo '<button data-animation="ripple" data-fancybox data-src="#'.$key['name'].'">Купить</button>';
							echo '</div>';
						}
					?>
				</div>
			</div>
			<div class="col-md-1 hidden-sm hidden-xs next_button" style="padding-top: 130px;">
				<span class="wow animated bounceIn" data-wow-delay="1s" style="font-size:70px;cursor:pointer;color:#eb7f00">
					<i class="fa fa-angle-right"></i>
				</span>
			</div>
		</section>
	
		<section id="services" class="col-md-12 block" style="min-height:300px">
			<div class="col-md-12" style="text-align:center"><h1 class="h1head">Другие услуги</h1></div>
			<div class="container">
				<div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12" style="padding:0 10px; text-align:center; display: inline-block;">
					<div class="grid wow fadeInUp animated" data-wow-duration="0.8s" style="display:inline-block;">
						<figure class="effect-goliath" style="height:188px;max-width:330px;">
							<img src="assets/images/money.jpg" style="height:188px">
							<figcaption style="padding:20px">
								<span>End-Coins</span>
								<h2 style="margin-top:100px;position:relative">КУПИТЬ</h2>
								<p>Игровая валюта</p>
								<a data-fancybox data-src="#money">Подробнее</a>
							</figcaption>
						</figure>
					</div>
				</div>
			</div>
			<div class="col-md-12" style="text-align:center;margin:40px 0 50px 0;color:#999;padding:15px;font-size:11px">
				Покупая привилегию, вы автоматически соглашаетесь с <a href="/go/rules" style="text-decoration:underline;color:#eb7f00">правилами</a> проекта.
			</div>
		</section>
		
		<div class="col-md-12 hidden-xs jarallax" id="games" style="min-height:530px;background-image:url(assets/images/bgback2.png)">
			<h1 class="h1head" style="text-align:center;margin-bottom:0;color:#fff">Режимы проекта</h1>
			<br>
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-1 prev_button hidden-sm" style="padding-top:130px">
					<span class="wow animated bounceIn hidden-xs" data-wow-delay="1s" style="font-size:70px;cursor:pointer;color:#eb7f00">
						<i class="fa fa-angle-left"></i>
					</span>
				</div>
				<div class="col-md-10" style="position:relative">
					<div class="owl-carousel carousel" style="color:#fff;margin-bottom:40px">
						<div style="margin:0 30px" class="wow animated flipInY" data-wow-delay="0.4s">
							<div class="mg" style="background:url(assets/images/Minecraft.jpg) center center;background-size:cover">
								<div>
									<p>Чё</p>
								</div>
							</div>
						</div>
						<div style="margin:0 30px" class="wow animated flipInY" data-wow-delay="0.6s">
							<div class="mg" style="background:url(assets/images/Minecraft.jpg) center center;background-size:cover">
								<div>
									<p>Пацаны</p>
								</div>
							</div>
						</div>
						<div style="margin:0 30px" class="wow animated flipInY" data-wow-delay="0.8s">
							<div class="mg" style="background:url(assets/images/Minecraft.jpg) center center;background-size:cover">
								<div>
									<p>Анимэ</p>
								</div>
							</div>
						</div>
						<div style="margin:0 30px" class="wow animated flipInY">
							<div class="mg" style="background:url(assets/images/Minecraft.jpg) center center;background-size:cover">
								<div>
									<p>НЕа</p>
								</div>
							</div>
						</div>
						<div style="margin:0 30px" class="wow animated flipInY">
							<div class="mg" style="background:url(assets/images/Minecraft.jpg) center center;background-size:cover">
								<div>
									<p>Хурмэ</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1 next_button hidden-sm" style="padding-top:130px;text-align:right">
					<span class="wow animated bounceIn hidden-xs" data-wow-delay="1s" style="font-size:70px;cursor:pointer;color:#eb7f00">
						<i class="fa fa-angle-right"></i>
					</span>
				</div>
			</div>
		</div>
	
		<div class="col-md-12" style="min-height:100px;background-color:#282626;color:#fff">
			<div class="row">
				<div class="col-md-12" style="text-align:center; margin-top: 45px;">
					<? echo $settings['copy'];?>
				</div>
			</div>
		</div>
		
		<?php
			foreach($donate as $key) {
				echo '<div class="modal row" style="min-height:410px" id="'.$key['name'].'">';
				echo '<div class="modal-content" style="background:transparent">';
				echo '<div class="col-sm-12 heading-modal"> <h1 class="h1head">ПОКУПКА ГРУППЫ '.$key['name'].'</h1></div>';
				// echo '<div class="col-sm-6 col-sm-offset-3 tbs">';
				// echo '<ul class="nav-tabs">';
				// echo '<li class="active"><a data-toggle="tab" data-animation="ripple" href="#'.$key['name'].'Tab1">Hubs/Lobby</a></li>';
				// echo '<li><a data-toggle="tab" data-animation="ripple" href="#'.$key['name'].'Tab2">SkyBlock</a></li>';
				// echo '<li><a data-toggle="tab" data-animation="ripple" href="#'.$key['name'].'Tab3">SkyWars</a></li>';
				// echo '<li><a data-toggle="tab" data-animation="ripple" href="#'.$key['name'].'Tab4">EggWars</a></li>';
				// echo '<li><a data-toggle="tab" data-animation="ripple" href="#'.$key['name'].'Tab5">Magic</a></li>';
				// echo '</ul>';
				// echo '</div>';
				// echo '<div class="col-md-6 col-md-offset-3 tb">';
				// echo '<div class="col-md-10 col-md-offset-1 thb">';
				// echo '<div class="tab-content">';
				// echo '<div id="'.$key['name'].'Tab1" class="tab-pane fade in active">';
				// echo '<p>'.$key['description'].' Hubs/Lobby</p>';
				// echo '</div>';
				// echo '<div id="'.$key['name'].'Tab2" class="tab-pane fade">';
				// echo '<p>'.$key['description'].' SkyBlock</p>';
				// echo '</div>';
				// echo '<div id="'.$key['name'].'Tab3" class="tab-pane fade">';
				// echo '<p>'.$key['description'].' SkyWars</p>';
				// echo '</div>';
				// echo '<div id="'.$key['name'].'Tab4" class="tab-pane fade">';
				// echo '<p>'.$key['description'].' EggWars</p>';
				// echo '</div>';
				// echo '<div id="'.$key['name'].'Tab5" class="tab-pane fade">';
				// echo '<p>'.$key['description'].' Magic</p>';
				// echo '</div>';
				// echo '</div>';
				// echo '</div>';
				// echo '</div>';
				echo '<div style="background:#fff;padding-top:40px" class="col-md-6 col-md-offset-3">';
				echo '<div class="col-md-12">';
				echo '<form name="pay_form" action="libs/pay.php" class="donateform" id="'.$key['name'].'form" method="GET" onsubmit="return validate_form ( );" style="max-width:300px">';
				echo '<input required name="group" type="hidden" value="'.$key['name'].'">';
				echo '<label style="margin-bottom: 20px;">';
				echo '<input required style="margin:0;" name="username" type="username" placeholder="Никнейм">';
				echo '<span><i class="fa fa-user"></i> НИКНЕЙМ</span>';
				echo '</label>';
				// echo '<select name="time">';
				// echo '<option value="0">На неделю</option>';
				// echo '<option value="1">Навсегда</option>';
				// echo '</select>';
				echo '<label style="margin-bottom: 20px;">';
				echo '<input style="margin:0;" name="promo" type="text" placeholder="Промо-код">';
				echo '<span><i class="fa fa-coins"></i> Промо-код</span>';
				echo '</label>';
				echo '<div class="col-md-12" style="text-align:center;color:#999;font-size:14px">
						Покупая привилегию, вы автоматически соглашаетесь с <a href="/go/rules" style="text-decoration:underline;color:#eb7f00">правилами</a> проекта.
					  </div>';
				echo '<div style="margin-bottom: 25px;" id="alert'.$key['name'].'form" class="col-md-12 text-center"></div>';
				echo '<div class="col-md-12 text-center">';
				echo '<button class="button buybtn" type="submit">Купить</button>';
				echo '</div>';
				echo '</form>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			}
		?>
		
		<div class="modal row" style="min-height:410px" id="money">
			<div class="modal-content" style="background:transparent">
				<div class="col-sm-12" style="text-align:center;color:#fff;float:none"> <h1 class="h1head">ПОКУПКА END-COINS'ОВ</h1></div>
				<div class="col-md-4 col-md-offset-4 tb">
					<div class="col-md-10 col-md-offset-1 thb" style="font-size:13px">
						End-Coins - игровая (глобальная) валюта на сервере EndWizard.ru.<br>
						Может быть использована с целью: <br>
						-покупки различной игровой персонализации (косметики, гаджетов, эффектов персонажа) <br>
						-обмена на внутриигровую валюту XP за которую можно приобрести наборы, перки и различные гаджеты открывающие новые возможности в игровом процессе
					</div>
				</div>
				<div style="background:#fff;padding-top:40px" class="col-md-4 col-md-offset-4">
					<div class="col-md-12">
						<form action="pay.php" class="donatemoneyform" id="form29" method="GET">
							<input required name="group" type="hidden" value="endwizardes">
							<label>
								<input required name="username" type="username" placeholder="Никнейм">
								<span><i class="fa fa-user"></i> НИКНЕЙМ</span>
							</label>
							<label>
								<input required id="endwizardes" oninput="countMoney();" name="money" type="number" min=40 placeholder="End-Coins'сы">
								<span><i class="fa fa-money" aria-hidden="true"></i> КОЛИЧЕСТВО МОНЕТ</span>
							</label>
							<div style="background:#efefef;display:block;height:60px;color:#999;padding:20px">
								<span>Стоимость:</span>
								<span id="alertformmoney"> 0</span> руб.
							</div>
							<div class="col-md-12 text-center">
								<button class="button buybtn" type="submit">Купить</button>
								<!--<button class="button buybtn" id="buy" type="submit">Купить</button>-->
							</div>
						</form>
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
			<link rel="shortcut icon" href="assets/images/favicon.ico" />
			
			<link rel="stylesheet" href="assets/libs/owl-carousel/owl.theme.default.min.css" />
			<link rel="stylesheet" href="assets/libs/font-awesome/css/font-awesome.min.css"/>
			<link rel="stylesheet" href="assets/css/jquery.formstyler.css"/>
			<link rel="stylesheet" href="assets/css/jquery.formstyler.theme.css"/>
			
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
	
		<script src="assets/libs/jquery/jquery-3.2.0.min.js"></script>
		<script src="assets/libs/bootstrap/bootstrap.min.js"></script>
		<script src="assets/libs/fancybox/jquery.fancybox.min.js"></script>
		<script src="assets/libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
		<script src="assets/libs/navigation/navigation.js"></script>
		<script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
		<script src="assets/libs/respond/respond.js"></script>
		<script src="assets/libs/wow/wow.min.js"></script>

		<script src="assets/libs/jarallax/jarallax.js"></script>
		<script src="assets/libs/smoothscroll/SmoothScroll.js"></script>
		<!--<script src="assets/libs/scrollmagic/ScrollMagic.min.js"></script>-->
		<script src="assets/js/classie.js"></script>
		<script src="assets/js/svganimations.js"></script>
		<script src="assets/js/select.js"></script>
		<script src="assets/js/jquery.formstyler.min.js"></script>
		<script src="assets/js/common.js"></script>
		<script>
			const isMobile = window.navigator.userAgent.match(/Mobile/) && window.navigator.userAgent.match(/Mobile/)[0] === "Mobile";
			const event = isMobile ? "click" : "click";

			const button = document.querySelectorAll('*[data-animation="ripple"]'),container = document.querySelector(".butt");

			for (var i = 0; i < button.length; i++) {
				const currentBtn = button[i];
				
				currentBtn.addEventListener(event, function(e) {
					
					e.preventDefault();
					const button = e.target,
								rect = button.getBoundingClientRect(),
								originalBtn = this,
								btnHeight = rect.height,
								btnWidth = rect.width;
					let posMouseX = 0,
							posMouseY = 0;
					
					if (isMobile) {
						posMouseX = e.changedTouches[0].clientX - rect.left;
						posMouseY = e.changedTouches[0].clientY - rect.top;
					} else {
						posMouseX = e.clientX - rect.left;
						posMouseY = e.clientY - rect.top;
					}
					
					const baseCSS = `position: absolute;
									width: ${btnWidth * 2}px;
									height: ${btnWidth * 2}px;
									transition: all linear 700ms;
									transition-timing-function:cubic-bezier(0.250, 0.460, 0.450, 0.940);
									border-radius: 50%;
									background: rgba(255,255,255,0.8);
									top:${posMouseY - btnWidth}px;
									left:${posMouseX - btnWidth}px;
									pointer-events: none;
									transform:scale(0)`
					
					var rippleEffect = document.createElement("span");
					rippleEffect.style.cssText = baseCSS;
					
					//prepare the dom
					currentBtn.style.overflow = "hidden";
					this.appendChild(rippleEffect);
					
					//start animation
					setTimeout( function() { 
						rippleEffect.style.cssText = baseCSS + `transform:scale(1); opacity: 0;`;
					}, 5);
					
					setTimeout( function() {
						rippleEffect.remove();
						//window.location.href = currentBtn.href;
					}, 700);
				})
			}

			// var controller = new ScrollMagic.Controller();

			// if(window.innerWidth >= 992 ){
			// new ScrollMagic.Scene({
					// duration: 400,	
					// offset: 100		
				// })
				// .setPin("#ranks") 
				// .addTo(controller); 
			// }else{
				// new ScrollMagic.Scene({
					// duration: 800,	
					// offset: 100		
				// })
				// .setPin("#ranks") 
				// .addTo(controller);
			// }
			
			$(function() {
				$('input').on('change', function() {
					var input = $(this);
					
					if (input.val().length) {
						input.addClass('populated');
					} else {
						input.removeClass('populated');
					}
				});
			});
				
			$('.owl-groups').owlCarousel({
				loop:true,
				margin:0,
				responsiveClass:true,
				nav: false,
				responsive:{
					0:{
						items: 1
					},
					600:{
						items: 3
					},
					1570:{
						items: 5,
						mouseDrag: false,
						nav: false,
						loop: false
					}
				}
			});

			function validate_form ( )
			{
				var valid = false;
				var id = $(".donateform").attr("id");
				var result = '';
				
				var result = $.ajax({
					type: "GET",
					url: 'libs/pay.php',
					data: $('#'+id).serialize(),
					async: false,
					success: function(data){
						data;
					}
				}).responseText;
				
				if(!result){
					valid = true;
					$('#alert'+id).css("color", "green");
					$('#alert'+id).show().animate({"opacity":"1", "bottom":"-25px"}, 400).html('Успешно. Ожидайте перехода на страницу оплаты.');
				} else {
					$('#alert'+id).css("color", "red");
					$('#alert'+id).show().animate({"opacity":"1", "bottom":"-25px"}, 400).html(result);
				}
				
				return valid;
			}

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
			  
			function countMoney() {
				var val   = document
					.getElementById("endwizardes")
					.value;
				var val  = val / 2;

				$('#alertformmoney').html(val);
			}
			 
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

			$.ajax({
				url: '/libs/Statistics.php',
				contentType: false,
				processData: false,
				success: function (res){ 
					var result = JSON.parse(res);
					$('#curplayers').html(result['CurPlayers']);
					$('#recordonline').html(result['RecordPlayers']);
					$('#regplayers').html(result['CountPlayers']);
					$('.proc').attr("offset", result['proc']+'%');
				}
			});

			$('select').styler();
		</script>
	</body>
</html>