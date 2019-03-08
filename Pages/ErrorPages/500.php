<!DOCTYPE html>
<html>

<!-- Metadata, Stylesheet, Title -->
<head>
    <title><? echo $config['name_project'] ?></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Minecraft Server">
    <meta name="author" content="FeezZz">
    <link rel="shortcut icon" href="../Images/server-icon.png">
    
    <!--<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel='stylesheet' type='text/css'>-->

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../Styles/main.css" rel="stylesheet">
	
	<script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript" charset="utf-8" src="JS/Libs/jquery.mb.YTPlayer.min.js"></script> <!-- подключаем плагин -->
    <script src="JS/mc-player-counter.min.js"></script>
	
    <script>
        var myPlayer;
        jQuery(function () {
            var isIframe=function(){var a=!1;try{self.location.href!=top.location.href&&(a=!0)}catch(b){a=!0}return a};if(!isIframe()){var logo=$("<a href='http://pupunzi.com/#mb.components/components.html' style='position:absolute;top:0;z-index:1000'><img id='logo' border='0' src='http://pupunzi.com/images/logo.png' alt='mb.ideas.repository'></a>");$("#wrapper").prepend(logo),$("#logo").fadeIn()}
            myPlayer = jQuery(".player").YTPlayer();
        });
    </script>
</head>
<!-- End Metadata, Stylesheet, Title -->

<body>
	<div id="Account" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-form">
				<i class="fa fa-close modal_close" data-dismiss="modal"></i>
				<span class="modal-form-title">Авторизация</span>
				<?= $msg_box;?>
				<!--<form name="Feedback" method="post" action="../Library/Feedback.php">-->
				<form name="MyForm" action="" method="post">
					<input type="text" minlength="3" placeholder="Введите никнейм" class="form-control donatePoly" maxlength="20" name="user" >
					<input type="password" minlength="3" placeholder="Введите пароль" class="form-control donatePoly" name="pass">
					<button class="donateButton" style="margin-top: 10px;">Войти</button>
				</form>
			</div>

		</div>
	</div>
	<!-- Header -->
    <div class="navbar-wrapper hidden-xs hidden-sm">
		<div class="navbar navbar-height navbar-default navbar-fixed navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a class="navbar-brand" href="/" style="padding-top: 26px;">
						<p style="text-align: center;">
							<img src="../Images/cloud.png"></img>
							<script src="/JS/titleAnimate.js" type="text/javascript"></script>
						</p>
					</a>
				</div>
				
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li style="min-height: 85px;"><a href="/" style="padding-top: 30px; padding-bottom: 30px;"><i class="glyphicon glyphicon-home"></i> Главная</a></li>
						<li style="min-height: 85px;"><a href="/go/privilege" style="padding-top: 30px; padding-bottom: 30px;"><i class="glyphicon glyphicon-list-alt"></i> Привилегии</a></li>
						<li style="min-height: 85px;"><a href="/go/rules" style="padding-top: 30px; padding-bottom: 30px;"><i class="fa fa-support"></i> Правила</a></li>
						<li style="min-height: 85px;"><a href="/go/info" style="padding-top: 30px; padding-bottom: 30px;"><i class="glyphicon glyphicon-info-sign"></i> Контакты</a></li>
						<li style="min-height: 85px;"><a style="padding-top: 30px; padding-bottom: 30px;" data-toggle="modal" data-target="#Account" ><i class="glyphicon glyphicon-user"></i> Аккаунт</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right" style="margin-right: 0; padding-top: 13px;">
					    <a class="btn btn-info navbar-btn navbar-right hidden-sm hidden-xs" style="margin-right: 0;" onclick="prompt('Скопируйте наш IP адрес и вставьте в ваш клиент:','<?php echo $config['server_ip'] ?>'); return false;"><span data-playercounter-ip="<?php echo $config['server_ip'] ?>" data-playercounter-format="Онлайн: {online}">Онлайн: 0</span></a>
						<a class="btn btn-info navbar-btn navbar-right hidden-sm hidden-xs" style="margin-right: 0;" onclick="prompt('Скопируйте наш IP адрес и вставьте в ваш клиент:','<?php echo $config['server_ip'] ?>'); return false;">IP: <?php echo $config['server_ip'] ?></a>
					</ul>
				</div>
			</div>
		</div>
    </div>
	
	<nav class="navbar navbar-default hidden-md hidden-lg">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<p style="text-align: center; margin-top:10px;"><img src="../Images/cloud.png"></img> Lucky-Cloud</p>
			</div>
			
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="/"><i class="glyphicon glyphicon-home"></i> Главная</a></li>
					<li><a href="/go/privilege"><i class="glyphicon glyphicon-list-alt"></i> Привилегии</a></li>
					<li><a href="/go/rules"><i class="fa fa-support"></i> Правила</a></li>
					<li><a href="/go/info"><i class="glyphicon glyphicon-info-sign"></i> Контакты</a></li>
					<li><a href="/go/vote"><i class="glyphicon glyphicon-check"></i> Голосовать</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Header -->
	<!-- Main -->
	<div class="container">
    <div class="jumbotron">
        <div class="container">
		<center>
            <h1>Ошибка 500</h1>
            <p>Внутренняя ошибка севера</p>
		</center>
            <p>Администрация проекта Lucky-Cloud приносит свои извинения за предоставленые неудобства, мы отпинаем нашего web-разработчика и заставим его решить данную проблему:D</p>
            <p>По возможности сообщите Администрации о данной проблеме в теме: <a href="https://vk.com/luckycloud">vk.com/luckycloud</p></a>
        </div>
    </div>
	
	</div>
	<!-- End Main -->
	
    <!-- Footer -->
			<div id="footer" class="footer-block hidden-xs" style="position: absolute; bottom: 0;">
		<div class="container">
			<ul class='nav nav-pills'>
				<li class='pull-left' style="margin-top: 11px;">Lucky-Cloud ©2017. All rights reserved. Development by ExsodusGames and  FeezZz.</li>
				<li class="pull-right">
					<a href="/go/staff" class="label label-danger"><i class="fa fa-user-secret"></i> Администрация</a>
				</li>
				
				<li class="pull-right">
					<a href="/go/help" class="label label-info"><i class="glyphicon glyphicon-question-sign"></i> FAQ</a>
				</li>
			</ul>
		</div>
	</div>
	
	<div id="footer" class="footer-block hidden-sm hidden-md hidden-lg">
		<div class="container hidden-xs">
			<ul class='nav nav-pills'>
				<li class='pull-left' style="margin-top: 11px;">Lucky-Cloud ©2017. All rights reserved. Development by ExsodusGames and  FeezZz.</li>
				<li class="pull-right">
					<a href="/go/staff" class="label label-danger"><i class="fa fa-user-secret"></i> Администрация</a>
				</li>
				
				<li class="pull-right">
					<a href="/go/help" class="label label-info"><i class="glyphicon glyphicon-question-sign"></i> FAQ</a>
				</li>

			</ul>
		</div>
		
		<div class="container-fluid hidden-sm hidden-md hidden-lg">
			<ul class='nav navbar-nav'>
				<li style="margin: 10px auto; width: 330px;">
					<a href="/go/staff" class="label label-danger"><i class="fa fa-user-secret"></i> Администрация</a>
				</li>
				<li style="margin: auto; width: 330px;">
					<a href="/go/help" class="label label-info"><i class="glyphicon glyphicon-question-sign"></i> FAQ</a>
				</li>
				<li style="text-align: center; margin-top: 15px;">Lucky-Cloud ©2017. All rights reserved.</li>
			</ul>
		</div>
	</div>

<SCRIPT LANGUAGE="JavaScript">
document.ondragstart = test;
//запрет на перетаскивание 
document.onselectstart = test;
//запрет на выделение элементов страницы
document.oncontextmenu = test;
//запрет на выведение контекстного меню
function test() {
return false
}
</SCRIPT>
<script type="text/javascript">
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 70)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 74)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 17)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 16)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 83)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 85)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 123 || (e.ctrlKey && e.keyCode === 123)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 123 || (e.ctrlKey && e.keyCode === 73)) { 
        e.preventDefault();
    }
})
</script>
<body oncontextmenu="return false;">
<script type="text/javascript">
 document.onkeydown = function(e) {
   e = e || window.event;
 if(e.keyCode == 85 || e.keyCode == 83 || e.keyCode == 123 || e.keyCode = 74 || e.keyCode = 17 || e.keyCode = 16)  {
     return false;
   }
   return true;
 }
</script>

    <script type="text/javascript">
</body>

</html>