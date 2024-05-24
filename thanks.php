<?php
        $name = $_GET['name'];
        $email = $_GET['email'];
?>
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
    <link href="css/style.css" rel="stylesheet">
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
                            <a href="index.html" class="navbar-brand">
                                <img src="img/main_logo.png" alt="logo">
                            </a>
                            <a href="#home" class="navbar-brand white">
                                <img src="img/main_logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="#about" class="thanks">О НАС</a></li>
                                <li><a href="#menu" class="thanks">МЕНЮ</a></li>
                                <li><a href="#blog" class="thanks">НОВОСТИ</a></li>
                                <li><a href="#contact" class="thanks">КОНТАКТЫ</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>
        <!-- Header End -->


        <!-- Team Start -->
        <div class="container-fluid p-5" >
            <div class="row gx-5">

                <div class="col-lg-12">

                    <div class="thanksWrapper" style="padding: 150px 0;">

                        <div class="uk-container mycontainer">
                            <div class="thanksTextContent" style="display: flex;flex-direction: column;align-items: center;">
                                <img src="img/favicon.png" class="myImg" width="200px">
                                <p class="mb-4" style="text-align: center;">
                                    Благодарим <?php echo $name; ?> за резерв столика!<br>
                                    Подтверждение брони отправлено на почту <?php echo $email; ?>.
                                </p>
                                <p class="mb-4" style="text-align: center;">Будем ждать вас в Little Sicily!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
        <div class="footer-area" id="contact">
            <div class="footer-area-bg" data-stellar-background-ratio="0.6"></div>
            <div class="container wow fadeIn">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-top section-padding text-center">
                            <div class="footer-logo">
                                <a href="#">
                                    <img src="img/logo-footer.png" alt="" width="300px">
                                </a>
                            </div>
                            <div class="footer-address">
                                <p>20, floor, Queenslad Victoria Building. 60 california street california USA</p>
                                <p><a href="mailto:mehedidb@gmail.com">hello@dawat.com</a></p>
                                <p><a href="callto:+8800000001111">+88 000 0000 1111</a></p>
                            </div>
                            <div class="footer-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="footer-copyright">
                            <p>&copy; 2017 <a href="#">Dawat Restaurant</a> All Right Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FOOER AREA END-->
    
    
        <!--====== SCRIPTS JS ======-->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
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