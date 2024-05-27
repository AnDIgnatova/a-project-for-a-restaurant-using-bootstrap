<?php require_once '/opt/php.infrastructure/current/app/index.php'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ru">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dawat Restaurant is a simple restaraunt website for restaurant business" />
    <meta name="keywords" content="restaurant, pizza, burger, business, house, online, delevery, html, coffee, cafe, bar" />
    <meta name="author" content="BDEXPERT" />
    
    <!--====== TITLE TAG ======-->
    <title>Little Sicily</title>

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/pogo-slider.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/timepicker.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="header-top-area">
            

            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="index.php" class="navbar-brand">
                                <img src="img/main_logo.png" alt="logo">
                            </a>
                            <a href="#home" class="navbar-brand white">
                                <img src="img/main_logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="#about">О НАС</a></li>
                                <li><a href="#menu">МЕНЮ</a></li>
                                <li><a href="#blog">НОВОСТИ</a></li>
                                <li><a href="#contact">КОНТАКТЫ</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>

        <!--HHOME SLIDER AREA-->
        <div class="slider-area">
            <div class="pogoSlider">
                <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background:url(img/slider/slide_1.jpg) no-repeat scroll 0 0 / cover;">
                    <h1 class="pogoSlider-slide-element" data-in="expand" data-out="flipX" data-duration="1500">Ресторан <span>Little Sicily</span></h1>
                    <h3 class="pogoSlider-slide-element" data-in="slideUp" data-out="flipX" data-duration="700"><a  href="#reservation-form-modal" data-toggle="modal">Забронировать столик</a></h3>
                </div>
                <div class="pogoSlider-slide" data-transition="fade" style="background:url(img/slider/slide_2.jpg) no-repeat scroll 0 0 / cover;">
                    <h1 class="pogoSlider-slide-element" data-in="expand" data-out="flipX" data-duration="1500"><span>Little Sicily</span></h1>
                    <h3 class="pogoSlider-slide-element" data-in="slideUp" data-out="flipX" data-duration="700"><a href="#menu">Меню</a></h3>
                </div>
               
            </div>
        </div>
        <!--HOME SLIDER AREA END-->

    </header>
    <!--END TOP AREA-->

    <!--ABOUT AREA-->
    <section class="about-area section-padding" id="about">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>О НАС</h2>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-content">
                        <p><span class="big-text">C </span>ицилия – остров ярких красок, вкусов и ароматов. Здесь сохранились тёплые традиции гостеприимства и лучшие семейные рецепты итальянского юга. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="right-about-content">
                        <p>Так появился Little Sicily – уютный ресторан в самом центре Петербурга. Здесь вас с порога встречают тёплые, яркие цвета сицилийского герба и аппетитные ароматы томатов, свежеиспечённой фоккаччи, сыра и пряных трав. Иногда гостей встречает сам владелец заведения Pippo, готовый рассказать, что сегодня особенного есть в меню</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--SPEACIAL PROMOTIONS AREA-->
   
    <!--SPEACIAL PROMOTIONS AREA END-->

    <!--MENUS AREA-->
    <section class="menus-area section-padding" id="menu">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Наше Меню</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="food-menu-list-menu">
                        <ul>
                            <li class="filter active" data-filter="all">Всё</li>
                            <li class="filter" data-filter=".pasta">Паста</li>
                            <li class="filter" data-filter=".pizza">Пицца</li>
                            <li class="filter" data-filter=".salat">Салаты</li>
                            <li class="filter" data-filter=".desert">Десерты</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row food-menu-list">
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu pasta coffee snacks">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="img/menu/menu_1.jpg" alt=""></div>
                        <div class="food-menu-details">
                            <h3>БОЛОНЬЕЗЕ <span class="menu-price">690 р.</span></h3>
                            <p class="menu-speacification"><span>- Говядина</span> <span>- Свинина</span></p>
                            <p class="menu-speacification"><span>- Томатный соус</span</p>
                            <p class="menu-speacification"><span>- Грана падано</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu dinner snacks pasta">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="img/menu/menu_4.jpg" alt=""></div>
                        <div class="food-menu-details">
                            <h3>ДОМАШНИЕ РАВИОЛИ С БЕЛЫМИ ГРИБАМИ И РИКОТТОЙ <span class="menu-price">790 р.</span></h3>
                            <p class="menu-speacification"><span>- Белые грибы</span> <span>- Рикотта</span> <span>- Сливки</span></p>
                            <p class="menu-speacification"><span>- Петрушка</span> <span>- Черный перец</span></p>
                            <p class="menu-speacification"><span>- Оливковое масло</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu pasta">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="img/menu/menu_3.jpg" alt=""></div>
                        <div class="food-menu-details">
                            <h3>ПАРМИДЖАНА <span class="menu-price">590р.</span></h3>
                            <p class="menu-speacification"><span>- Баклажаны</span> <span>- Яйца</span> <span>- Помидоры</span></p>
                            <p class="menu-speacification"><span>- Моцарелла</span> <span>- Грана падано</span></p>
                            <p class="menu-speacification"><span>- Томатный соус</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu dinner pasta snacks">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="img/menu/menu_2.jpg" alt=""></div>
                        <div class="food-menu-details">
                            <h3>ДОМАШНИЕ РАВИОЛИ С РИКОТТОЙ АЛЛА БОСКАИОЛА <span class="menu-price">790р.</span></h3>
                            <p class="menu-speacification"><span>- Рикотта</span> <span>- Говядина</span> <span>- Свинина</span></p>
                            <p class="menu-speacification"><span>- Шампиньоны</span> <span>- Грана падано</span> <span>- Сливки</span></p>
                            <p class="menu-speacification"><span>- Черный перец</span> <span>- Лук</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu pizza coffee">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="img/menu/menu_5.jpg" alt=""></div>
                        <div class="food-menu-details">
                            <h3>АЛЛА НОРМА <span class="menu-price">690 р.</span></h3>
                            <p class="menu-speacification"><span>- Томатный соус</span> <span>- Грана падано</span></p>
                            <p class="menu-speacification"><span>- Моцарелла</span> <span>- Орегано</span></p>
                            <p class="menu-speacification"><span>- Баклажаны</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu pizza">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="img/menu/menu_6.jpg" alt=""></div>
                        <div class="food-menu-details">
                            <h3>СИЦИЛИЙСКАЯ <span class="menu-price">690 р.</span></h3>
                            <p class="menu-speacification"><span>- Томатный соус</span> <span>- Оливки</span></p>
                            <p class="menu-speacification"><span>- Моцарелла</span> <span>- Орегано</span></p>
                            <p class="menu-speacification"><span>- Салями</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu salat">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="img/menu/menu_7.jpg" alt=""></div>
                        <div class="food-menu-details">
                            <h3>СИЦИЛИЙСКИЙ САЛАТ <span class="menu-price">590 р.</span></h3>
                            <p class="menu-speacification"><span>- Микс салат</span> <span>- Говядина</span></p>
                            <p class="menu-speacification"><span>- Вяленые томаты</span></p>
                            <p class="menu-speacification"><span>- Черный перец</span> <span>- Грана падано</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu salat">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="img/menu/menu_8.jpg" alt=""></div>
                        <div class="food-menu-details">
                            <h3>КОРЛЕОНЕ <span class="menu-price">590 р.</span></h3>
                            <p class="menu-speacification"><span>- Ромейн</span> <span>- Яйцо</span> <span>- Черри</span></p>
                            <p class="menu-speacification"><span>- Тунец консервированный</span> <span>- Орегано</span></p>
                            <p class="menu-speacification"><span>- Лук красный</span> <span>- Сок лимона</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu desert">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="img/menu/menu_9.jpg" alt=""></div>
                        <div class="food-menu-details">
                            <h3>СИЦИЛИЙСКИЕ КАНОЛЛИ <span class="menu-price">380р.</span></h3>
                            <p class="menu-speacification"><span>- Juice Fruit</span> <span>- Checken</span> <span>- Cherry</span></p>
                            <p class="menu-speacification"><span>- Vegetable</span> <span>- Milk</span> <span>- Potato</span></p>
                            <p class="menu-speacification"><span>- Tomato</span> <span>- Chilli</span> <span>- Sesame</span></p>
                        </div>
                    </div>
                </div>
                <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu desert">
                    <div class="single-menu-details">
                        <div class="food-menu-img"><img src="img/menu/menu_10.jpg" alt=""></div>
                        <div class="food-menu-details">
                            <h3>ТИРАМИСУ <span class="menu-price">380р.</span></h3>
                            <p class="menu-speacification"><span>- Juice Fruit</span> <span>- Checken</span> <span>- Cherry</span></p>
                            <p class="menu-speacification"><span>- Vegetable</span> <span>- Milk</span> <span>- Potato</span></p>
                            <p class="menu-speacification"><span>- Tomato</span> <span>- Chilli</span> <span>- Sesame</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--MENUS AREA END-->

    <!--RESERVATION BUTTON AREA-->
    <section class="reservation-button-area section-padding" id="reservation-button">
        <div class="reservation-button-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="resarvation-from-button text-center wow fadeIn">
                        <h2>Забронируйте столик сейчас!</h2>
                        <a href="#reservation-form-modal" class="reservation-button" data-toggle="modal">Забронировать столик</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <!-- RESERVATION FORM MODAL -->
                    <div class="modal fade" id="reservation-form-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Бронирование столика</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="reservation-form">
                                        <form action="thanks.php" class="table-booking-form" id="reservation" method="get">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="name"><i class="fa fa-user-o"></i></label>
                                                    <input type="text" name="name" id="name" placeholder="Имя...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="email"><i class="fa fa-at"></i></label>
                                                    <input type="email" name="email" id="email" placeholder="Почта...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="mobile"><i class="fa fa-phone"></i></label>
                                                    <input type="text" name="mobile" id="mobile" placeholder="Телефон...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="date"><i class="fa fa-calendar"></i></label>
                                                    <input type="text" name="date" id="date" data-select="datepicker" placeholder="Дата...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="time"><i class="fa fa-clock-o"></i></label>
                                                    <input type="text" id="time" placeholder="Время...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="person"><i class="fa fa-user"></i></label>
                                                    <select name="person" id="person">
                                                        <option value="2">2 Человека</option>
                                                        <option value="3">3 Человека</option>
                                                        <option value="4">4 Человека</option>
                                                        <option value="5">5 Человека</option>
                                                        <option value="6">6 Человека</option>
                                                        <option value="7">7 Человека</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-sm-offset-3  col-md-offset-3  col-lg-offset-3 col-xs-12">
                                                    <input type="submit" id="submit" name="send" class="submitBnt" value="Забронировать столик ">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- RESERVATION FORM MODAL -->
                </div>
            </div>
        </div>
    </section>
    <!--RESERVATION BUTTON AREA END-->

    <!--TEAM AREA-->
    
    <!--TEAM AREA END-->

    <!--BLOG AREA-->
    <section class="blog-area section-padding" id="blog">
        <div class="blog-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>НОВОСТИ</h2>
                    </div>
                </div>
            </div>
            <div class="row post-slider">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-post text-center">
                        <div class="blog-post-img ">
                            <img src="img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="post-details">
                            <h3><a href="#">8 марта</a></h3>
                            <p>С 8 Марта, милые наши женщины!<br>Мы знаем, что вы можете быть бесконечно сильными и выносливыми, но мы желаем вам всем иметь возможность быть слабыми! Чтобы самой большой проблемой было, какого цвета помаду выбрать.</p>
                            <p>Мы любим и восхищаемся вами каждый день!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-post text-center">
                        <div class="blog-post-img ">
                            <img src="img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="post-details">
                            <h3><a href="#">Мы открыли Little Sicily на Дыбенко</a></h3>
                            <p> Невском районе открылся второй ресторан итальянской кухни Little Sicily. С порога гостей здесь встречают яркие цвета сицилийского герба, аппетитные ароматы томатов, свежеиспеченной пиццы и пряных трав.</p>
                            <p>Адрес: ул.Дыбенко 2/1 </p>
                            <p>Телефон: +7 (999) 11-66-554  </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-post text-center">
                        <div class="blog-post-img ">
                            <img src="img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="post-details">
                            <h3><a href="#">Доставка</a></h3>
                            <p>Иногда всё, что нужно для счастья &#8212; доставка из ресторана Little Sicily.</p>
                            <p>Доставка осуществляется с помощью Яндекс доставки. <br>Доставка в пределах зеленой зоны — 500 рублей (бесплатно от 4500 рублей). С зонами доставки можно ознакомиться на сайтах доставки.</p>
                            <p>Сайт доставки на Марата: <a href="https://delivery.littlesicily.ru">https://delivery.littlesicily.ru</a> </p>
                            <p>Сайт доставки на Дыбенко: <a href="https://delivery.dybenko.littlesicily.ru">https://delivery.dybenko.littlesicily.ru</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->


    <!--INSTAGRAM GALLERY FEED END-->

    <!--FOOER AREA-->
    <div class="footer-area" id="contact">
        <div class="footer-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="footer-top section-padding text-center">
                        <div class="footer-logo">
                            <a href="index.php">
                                <img src="img/logo-footer.png" alt="" width="300px">
                            </a>
                        </div>
                        <div class="footer-address">
                            <p>САНКТ-ПЕТЕРБУРГ
                                УЛ. МАРАТА 13</p>
                                <p>САНКТ-ПЕТЕРБУРГ
                                    УЛ.ДЫБЕНКО 2/1</p>
                            <p><a href="mailto:mehedidb@gmail.com">littlesicilyspb@gmail.com</a></p>
                            <p><a href="callto:+7 911 096-48-51">+7 911 096-48-51</a></p>
                            <p><a href="callto:+7 999 116-65-54">+7 999 116-65-54</a></p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-sm-12 col-xs-12">
                    <div class="footer-copyright">
                        <p>&copy; 2017 <a href="#">Dawat Restaurant</a> All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="https://code.jquery.com/jquery-1.12.1.min.js" integrity="sha256-I1nTg78tSrZev3kjvfdM5A5Ak/blglGzlaZANLPDl3I=" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/jquery.pogo-slider.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/instafeed.min.js"></script>
    <script src="js/datepicker.min.js"></script>
    <script src="js/timepicker.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!--===== ACTIVE JS=====-->
    <script src="js/main.js"></script>
</body>

</html>