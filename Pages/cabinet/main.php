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
			.cab-nav ul li {
				background-color: #eb7f00;
				border-bottom: 3px solid #ffa943;
				border-right: 1px solid #b86300;
				border-left: 1px solid #b86300;
			}
			.cab-nav ul li:hover {
				text-shadow: 0 0 1em white;
				background-color: #b86300;
			}
			.cab-nav>.nav-tabs>li.active {
				text-shadow: 0 0 1em white;
				background-color: #b86300;
			}
			.cab-nav>.nav-tabs>li>a {
				height: 70px;
				padding: 21px 20px;
				display: block;
			}
			.cab-nav>.nav-tabs>li.active>a {
				color: #fff;
				background-color: transparent;
			}
			.flex-nav-cont{
			    display: flex;
			    flex-direction: row;
			    justify-content: space-between;
			}
			.flex-nav-item{
			    flex: 0 1 auto;
			    color: #ffffff;
			    text-align: center;
			    width: 100%;
			    height: 70px;
			    padding: 20px 0;
				background-color: #eb7f00;
				border-bottom: 3px solid #ffa943;
				border-right: 1px solid #b86300;
				border-left: 1px solid #b86300;
				transition: .2s;
			}
			.flex-nav-item:hover {
				text-shadow: 0 0 1em white;
				color: #ffffff;
				background-color: #b86300;
			}
			.block-content{
				border-bottom-left-radius: 6px;
				border-bottom-right-radius: 6px;
				background-color: #fff;
			}
			@media (max-width: 661px) {
				.flex-nav-cont{
				    display: flex;
				    flex-direction: column;
				    justify-content: space-between;
				}
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
			<!-- <div class="wow animated fadeIn"> -->
				<!-- <div class="row"> -->
					<!-- <div class="col-sm-12"> -->

				<div class="col-md-4 text-center" style="">
					<p style="background-color: #eb7f00; height: 70px;"><i class="fa fa-info-circle"></i> Информация</p>
					<img src="https://minotar.net/bust/<?=$_SESSION['username'];?>/170.png">
					<p><?=$_SESSION['username'];?></p>
					<p>Статус</p>
					<p>Привилегия</p>
				</div>

				<div class="col-md-8">
					<!-- Nav tabs -->
					<div style="width: 100%;">
						<div class="flex-nav-cont">
							<a class="flex-nav-item" data-toggle="tab" href="#statistics">Статистика</a>
							<a class="flex-nav-item" data-toggle="tab" href="#economy">Друзья</a>
							<a class="flex-nav-item" data-toggle="tab" href="#privilige">Безопасность</a>
							<a class="flex-nav-item" data-toggle="tab" href="#privilige">Поддержка</a>
							<a class="flex-nav-item" data-toggle="tab" href="#privilige">Нарушения</a>
							<a class="flex-nav-item" data-toggle="tab" href="#options">Настройки</a>
						</div>
					</div>

					<!-- Tab panes -->
					<div class="tab-content block-content`">
						<div class="tab-pane container-fluid active" id="statistics">Статистика</div>
						<div class="tab-pane container-fluid fade" id="economy">Экономика</div>
						<div class="tab-pane container-fluid fade" id="privilige">Привилегии</div>
						<div class="tab-pane container-fluid fade" id="options">Настройки</div>
					</div>
				</div>

					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->

			<div class="col-md-12 text-center" style="margin-top: 30px;">
				<?=$settings['copy'];?>
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
		<script src="https://<?=$settings['domain']?>/assets/libs/respond/respond.js"></script>
		<script src="https://<?=$settings['domain']?>/assets/libs/wow/wow.min.js"></script>

		<script src="https://<?=$settings['domain']?>/assets/libs/smoothscroll/SmoothScroll.js"></script>
		<script src="https://<?=$settings['domain']?>/assets/js/jquery.formstyler.min.js"></script>
		<script>
			$(".authform").on('submit', function () {		
				var id = $(this).attr("id");
				var action = '/cabinet/auth.php';
				
				$.ajax({
					type: 'POST',
					url: action,
					data: $('#'+id).serialize(),
					success: function(data){
						if(data == true){
							$('#alert'+id).html('<div class="col-md-12 animated fadeIn">Вы успешно авторизованы!</div>').delay(100).fadeIn();	
							$('#alert'+id).delay(5000).fadeOut(); 
							document.location.href="/cabinet";
						}else{
							$('#alert'+id).html('<div class="col-md-12 animated fadeIn">Неверный логин или пароль :(</div>').delay(100).fadeIn();	
							$('#alert'+id).delay(5000).fadeOut(); 
						}	
					}
				});
				return false;
			});
		</script>
	</body>
</html>