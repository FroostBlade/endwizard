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
		<style rel="stylesheet">
		</style>
	</head>
	
	<body class="banlist">
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
								<form name="search_ban_user_form" action="libs/bansearch.php" id="searchbanform" method="GET" onsubmit="return search_ban_user ( );" style="display: block;">
									<div class="col-md-10 margin-bottom-10">
										<div class="form-group input-icon-left">
											<i class="fa fa-search"></i>
											<input required name="banname" type="text" class="form-control" placeholder="Поиск по нику">
										</div>
									</div>
									<div class="col-md-2 margin-bottom-10">
										<button type="submit" class="button buybtn searchbtn" style="margin: 0px auto; min-width: 100%; padding: 0.85em 1.4em; padding-right: 4.7em;">Поиск</button>
									</div>
									<div style="display: none; margin-top: 15px; margin-bottom: 15px;" id="alertsearchbanform" class="col-md-12 text-center"></div>
								</form>
							</div>
							<div class="banlist">
								<table class="table table-striped table-responsive">
									<thead>
										<tr>
											<th class="text-center">Тип</th>
											<th class="text-center">Нарушитель</th>
											<th class="text-center hidden-xs">Наказал</th>
											<th class="text-center">Причина</th>
											<th class="text-center hidden-xs">Дата</th>
											<th class="text-center">Срок</th>
										</tr>
									</thead>
									<tbody id="banlist">
										<? 
											$data = getBanList($numpage);
											$banlist = mysqli_fetch_all($data, MYSQLI_ASSOC);

											foreach($banlist as $key) {
												$startBan = date('d/m/Y - H:i:s', intval($key['start']/1000));
												$endBan = date('d/m/Y - H:i:s', intval($key['end']/1000));
												echo '<tr>';
												if ($key['punishmentType'] == "TEMP_BAN" OR $key['punishmentType'] == "BAN" OR $key['punishmentType'] == "IP_BAN") {
													echo '<td class="text-center">';
													echo '<span class="label label-danger">БАН</span>';
													echo '</td>';
												}
												if ($key['punishmentType'] == "MUTE" OR $key['punishmentType'] == "TEMP_MUTE" ) {
													echo '<td class="text-center">';
													echo '<span class="label label-default">МУТ</span>';
													echo '</td>';
												}
												if ($key['punishmentType'] == "WARNING"){
													echo '<td class="text-center">';
													echo '<span class="label label-warning">WARN</span>';
													echo '</td>';
												}
												echo '<td>';
												echo '<img data-toggle="tooltip" data-placement="top" title="" data-original-title="'.$key['name'].'" class="img-circle" src="https://minotar.net/avatar/'.$key['name'].'/30.png">';
												echo '<span class="margin-left-10 hidden-xs">'.$key['name'].'</span>';
												echo '</td>';
												echo '<td class="hidden-xs">';
												echo '<img data-toggle="tooltip" data-placement="top" title="" data-original-title="'.$key['operator'].'" class="img-circle" src="https://minotar.net/avatar/'.$key['operator'].'/30.png">';
												echo '<span class="margin-left-10 hidden-xs">'.$key['operator'].'</span>';
												echo '</td>';
												echo '<td class="text-center">';
												if(strlen($key['reason']) <= 25){
													echo $key['reason'];
												}else{
													echo '<button class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="'.$key['reason'].'">Причина</button>';
												}
												echo '</td>';
												echo '<td class="text-center hidden-xs">';
												echo $startBan;
												echo '</td>';
												if ($key['end'] < 1 AND ($key['punishmentType'] == "BAN" OR $key['punishmentType'] == "MUTE" OR $key['punishmentType'] == "WARNING")) {
													echo '<td class="text-center" style="color:red; font-weight: bold;">';
													echo 'Перманентно';
													echo '</td>';
												}else{
													echo '<td class="text-center" style="color:green; font-weight: bold;">';
													echo $endBan;
													echo '</td>';
												}
												echo '</tr>';
											}
										?>
									</tbody>
								</table>
								<div class="col-xs-12 text-center margin-top-20">
									<ul class="pagination">
										<?
											if ($numpage > 1) {
												echo '<li>'
														.'<a href="https://'.$settings['domain'].'/go/banlist/page/1">&laquo;</a>'
													.'</li>';
											}

											for ($i=($numpage - 4); $i < $numpage; $i++) { 
												if ($i > 0) {
													echo '<li>'
															.'<a href="https://'.$settings['domain'].'/go/banlist/page/'.$i.'">'.$i.'</a>'
														.'</li>';
												};	
											}

											echo '<li class="active disabled">'
													.'<a href="#">'.$numpage.'</a>'
												.'</li>';
											
											for ($i=($numpage + 1); $i < $numpage + 5; $i++) { 
												if ($i <= $countpgs) {
													echo '<li>'
															.'<a href="https://'.$settings['domain'].'/go/banlist/page/'.$i.'">'.$i.'</a>'
														.'</li>';
												};
											}

											if ($numpage < $countpgs) {
												echo '<li>'
														.'<a href="https://'.$settings['domain'].'/go/banlist/page/'.$countpgs.'">&raquo;</a>'
													.'</li>';
											}
										?>
									</ul>
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
			function search_ban_user ( ){
				$('#alertsearchbanform').css("display", "none");
				$('#alertsearchbanform').html('<span style="color: #eb7f00">Ожидайте. Ваш запрос обрабатывается.</span>').fadeIn(600);

				$.ajax({
					type: "GET",
					url: 'https://<?=$settings['domain']?>/libs/bansearch.php',
					data: $('#searchbanform').serialize(),
					success: function(data){
						var result = JSON.parse(data);

						if(result['Resp'] == "IsUserBan"){
							$('#alertsearchbanform').html('<span style="color: #eb7f00">Игрок найден</span>');
							$('#banlist').html(result['TextResp']);
						}else{
							$('#alertsearchbanform').html(result['Reason']);
						}
					}
				});

				return false;
			}

			$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			})

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

			$('select').styler();
		</script>
	</body>
</html>