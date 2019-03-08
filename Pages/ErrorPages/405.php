<!-- wrapper -->
<div id="full-carousel" class="ken-burns carousel slide full-carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active inactiveUntilOnLoad">
                <img src="../img/slideshow/1.jpg" alt="">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 data-animation="animated animate1 bounceInDown"><text style="color: #fa6767">Ошибка 405</text></h1></br>
                        <h3 class="text-bold text-white" data-animation="animated animate5 bounceInDown">Администрация проекта Lucky-Cloud приносит свои извинения за предоставленые неудобства, мы отпинаем нашего web-разработчика и заставим его решить данную проблему:D</h3>
                        <p>По возможности сообщите Администрации о данной проблеме в теме: <a href="http://<?php echo $config['VK'] ?>"><?php echo $config['VK'] ?></p></a>
                            <a href="/"><button class="btn btn-info btn-lg btn-rounded"><i class="fa fa-arrow-left"></i> На главную</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- FontAwesome -->
<script async src="https://use.fontawesome.com/8a2b154635.js"></script>

<!-- JS -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script defer src="../js/core.min.js"></script>


<script>
    $(document).ready(function() {
        $(window).load(function() {

            setTimeout(function() {

                $.ajax({
                    url: '/ajax',
                    data: {
                        method: 'get_online'
                    }
                }).done(function (res) {
                    if (res.info == true) {
                        $('#online, #online_nav, #online_slide').html(res.data);
                    } else {
                        $('#online, #online_nav, #online_slide').html(0);
                    }
                });

                $("a.scrollto").click(function (e) {
                    e.preventDefault();
                    var elementClick = $(this).attr('href');
                    if ($('body').find(elementClick).length > 0) {
                        var destination = $(elementClick).offset().top;
                        jQuery("html:not(:animated),body:not(:animated)").animate({
                            scrollTop: destination - 50
                        }, 800);
                    } else {
                        window.location.href = '/' + elementClick;
                    }


                });

                "use strict";
                var owl = $(".owl-carousel");

                owl.owlCarousel({
                    items: 4, //4 items above 1000px browser width
                    itemsDesktop: [1000, 3], //3 items between 1000px and 0
                    itemsTablet: [600, 1], //1 items between 600 and 0
                    itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
                });

                $(".next").click(function () {
                    owl.trigger('owl.next');
                    return false;
                });
                $(".prev").click(function () {
                    owl.trigger('owl.prev');
                    return false;
                })

                $('#preloader').fadeOut();

                if(location.hash) {
                    var elementClick = location.hash;
                    var destination = $(elementClick).offset().top;
                    jQuery("html:not(:animated),body:not(:animated)").animate({
                        scrollTop: destination-50
                    }, 800);
                    return false;
                }

            }, 600);

        });
    });
</script>
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
    <script type="text/javascript">

        $(document).ready(function(){
            $('.good').mouseenter(function(){
                $(this).find('.good-link').animate(
                        {
                            top: "-20px"
                        },
                        100
                );
            }).mouseleave( function(){
                $(this).find('.good-link').animate(
                        {
                            top: "-60px"
                        },
                        50
                );
            });
        });
        
    </script>
</body>
</html>