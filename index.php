<?php
include "connect.php";
?>

<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Пласт Ужгород</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <div id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <img class="logo-img logo-img-main" src="img/logo.png" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Головна</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#products">Мета Пласту</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#service">Місце в Пласті</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#work">Наші акції</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#pricing">Про станицю</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Контакти</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        <div class="promo-block">
            <div class="container">
                <div class="margin-b-40">
                    <h1 class="promo-block-title"><?php echo $holovna['home_title']; ?></h1>
                    <p class="promo-block-text"><?php echo $holovna['home_subtitle']; ?></p>
                </div>
                <a class="js_popup-youtube btn-theme btn-theme-md btn-white-bg text-uppercase" href="https://youtu.be/se2jv82xZmU" title="Intro Video"><i class="btn-icon icon-control-play"></i> Як приєднатися до Пласту</a>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Products -->
        <div id="products">
            <div class="container content-lg">
                <div class="row text-center margin-b-40">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 style="color: #3e8f3e"><?php echo $meta['meta_title']; ?></h2>
                        <p><?php echo $meta['meta_subtitle']; ?></p>
                    </div>
                </div>
                <!--// end row -->

                <div class="row">
                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive wow fadeIn" src="img/970x647/01.jpg" alt="Latest Products Image" data-wow-duration=".3" data-wow-delay=".1s">
                        </div>
                        <h4><a href="#" style="color: #3e8f3e"><?php echo $meta['meta1_title']; ?></a>
                        <p><?php echo $meta['meta1_subtitle']; ?></p>
<!--                        <a class="link" href="#">Read More</a>-->
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive wow fadeIn" src="img/970x647/02.jpg" alt="Latest Products Image" data-wow-duration=".3" data-wow-delay=".2s">
                        </div>
                        <h4><a href="#" style="color: #3e8f3e"><?php echo $meta['meta2_title']; ?></a></h4>
                        <p>
                            <?php echo $meta['meta2_subtitle']; ?></p>
<!--                        <a class="link" href="#">Read More</a>-->
                    </div>
                    <!-- End Latest Products -->

                    <!-- Latest Products -->
                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive wow fadeIn" src="img/970x647/03.jpg" alt="Latest Products Image" data-wow-duration=".3" data-wow-delay=".3s">
                        </div>
                        <h4><a href="#" style="color: #3e8f3e"><?php echo $meta['meta3_title']; ?></a></h4>
                        <p>
                            <?php echo $meta['meta3_subtitle']; ?></p>
<!--                        <a class="link" href="#">Read More</a>-->
                    </div>
                    <!-- End Latest Products -->
                </div>
                <!--// end row -->
            </div>

<!--            <div class="container-full-width">-->
<!--                <div class="row row-space-2">-->
<!--                    <div class="col-sm-6 sm-margin-b-4">-->
<!--                        <img class="img-responsive" src="img/970x647/01.jpg" alt="Image">-->
<!--                    </div>-->
<!--                    <div class="col-sm-6">-->
<!--                        <img class="img-responsive" src="img/970x647/03.jpg" alt="Image">-->
<!--                    </div>-->
<!--                </div>-->
<!--               // end row -->
<!--            </div>-->
        </div>
        <!-- End Products -->

        <!-- Service -->
        <div id="service">
            <h2 style="color: #17bed2; text-align: center">Чим можна зайнятись в Пласті</h2>
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="content-lg container">
                    <div class="row row-space-2 margin-b-4">
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
<!--                                    <i class="service-icon icon-chemistry"></i>-->
                                </div>
                                <div class="service-info">
                                    <h3 style="color: #17bed2">Виховництво</h3>
                                    <p class="margin-b-5">Ти можеш виховувати дітей віком від 6 до 11 років<br></p>
                                    Допомагати у ведені гуртка дітей<br>
                                    Допомагати у ведені гнізда<br>
                                    Самостійно вести гурток дітей
                                </div>
                                <a class="content-wrapper-link"></a>
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service bg-color-base wow fadeInDown" data-height="height" data-wow-duration=".3" data-wow-delay=".1s">
                                <div class="service-element">
<!--                                    <i class="service-icon color-white icon-screen-tablet"></i>-->
                                </div>
                                <div class="service-info">
                                    <h3 class="color-white">Адміністративна робота</h3>
                                    <p class="color-white margin-b-5">Міжнародна служба<br>
                                    Прес-служба<br>
                                        Фінансово-господарська служба<br>
                                        Кадрово-вишкільна служба<br>
                                        Юридична служба<br>
                                        Медична служба<br>

                                    </p>
                                </div>
                                <a class="content-wrapper-link"></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
<!--                                    <i class="service-icon icon-badge"></i>-->
                                </div>
                                <div class="service-info">
                                    <h3 style="color: #17bed2">Виховництво</h3>
                                    <p class="margin-b-5">Ти можеш виховувати підлітків віком від 11 до 18 років<br></p>
                                    Допомагати у ведені гуртка дітей<br>
                                    Допомагати у ведені куреня<br>
                                    Самостійно вести гурток дітей
                                </div>
                                <a class="content-wrapper-link"></a>
                            </div>
                        </div>
                    </div>
                    <!--// end row -->

                    <div class="row row-space-2">
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
<!--                                    <i class="service-icon icon-notebook"></i>-->
                                </div>
                                <div class="service-info">
                                    <h3 style="color: #17bed2">Спеціалізовані інструктажі</h3>
                                    <p class="margin-b-5">Медична допомога<br>
                                    Спортивне орієнтування<br>
                                    Природознавство<br>
                                    Ігрові види спорту<br>
                                    Дельта та парапланеризм<br>
                                    Туризм</p>
                                </div>
                                <a class="content-wrapper-link"></a>
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
<!--                                    <i class="service-icon icon-speedometer"></i>-->
                                </div>
                                <div class="service-info">
                                    <h3 style="color: #17bed2">Соціальна робота</h3>
                                    <p class="margin-b-5">З дітьми до 6 років<br>
                                    З дітьми сиротами чи неповносиротами<br>
                                    Антиузалежнююча компанія</p>
                                </div>
                                <a class="content-wrapper-link"></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
<!--                                    <i class="service-icon icon-badge"></i>-->
                                </div>
                                <div class="service-info">
                                    <h3 style="color: #17bed2">Пласт - це гра</h3>
                                    <p class="margin-b-5">Тут можна розвиватись у формі гри</p>
                                </div>
                                <a class="content-wrapper-link"></a>
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Service -->

        <!-- Promo Banner -->
        <div class="promo-banner">
            <div class="container-sm content-lg">
                <h2 class="promo-banner-title">Не гальмуй, пластуй!</h2>
                <p class="promo-banner-text">“Якби Україна мала пів мільйона пластунів, то за її майбутнє можна було б не турбуватися.”</p>
            </div>
        </div>
        <!-- End Promo Banner -->

        <!-- Work -->
        <div id="work">
            <div class="content-md container">
                <!-- Masonry Grid -->
                <div class="masonry-grid row row-space-2">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/800x400/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(0);" class="work-popup-close">Назад</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5" style="color: #3e8f3e">ФЕСТ</h3>
                                        <span>Лещетарський табір</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Табір проводиться кожного року в селі Верхній Студений, Міжгірського району.
                                                Приїжджають учасники з різних куточків України.
                                                Інструкори навчають дітей по групах.</p>
                                                <p></p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" >Фест</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" >2021,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" >В. Студений</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Катаються на:</strong> лижах, сноуборді</p>
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Вкладка:</strong> 3200грн</p>
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Табір триває:</strong> 4 дні</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x400/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(1);" class="work-popup-close">Hазад</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5" style="color: #3e8f3e">Табір</h3>
                                        <span>Літні табори</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Літо - це період таборів. Табори є різні, різних категорій. Наприклад табір Ревор - спеціалізуєть на подорожах велосипедами.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" >Курінний табір,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" >літо 2021,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" >Верхнє Солотвино</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Кількість днів:</strong> 13 днів</p>
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Вкладка:</strong> 1600 грн</p>
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Ночівля у:</strong> наметах</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/01.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(2);" class="work-popup-close">Hазад</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5" style="color: #3e8f3e">ВВМ</h3>
                                        <span>Вифлеємський Вогонь Миру | ВВМ</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Передача ВВМ традиційна акція пластунів. Кожного року перед Різдвом пластуни передають той вогонь різним державним установам, організацям, церквам. Важливим є те, щоб приносячи вогонь до себе додому, були тим світлом, що так добре гріє.</p>
                                                <ul class="list-inline work-popup-tag">
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" >Ужгородський собор,</a></li>
                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" >грудень, 2020</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Заснували:</strong> австрійські скаути</p>
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Звідки вогонь?</strong> з місця народження Ісуса</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/02.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(3);" class="work-popup-close">Hазад</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5" style="color: #3e8f3e">Мандрівки</h3>
<!--                                        <span>Clean &amp; Minimalistic Design</span>-->
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Протягом року проводяться різні мандрівки, від тривалості в одни день до тривалості у пару днів.
                                                Зазвичай діти самі складають меню харчування та маршрут мандрівки. Виховники тільки корегують процес.</p>
<!--                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>-->
<!--                                                <ul class="list-inline work-popup-tag">-->
<!--                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>-->
<!--                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>-->
<!--                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>-->
<!--                                                </ul>-->
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
<!--                                            <div class="margin-t-10 sm-margin-t-0">-->
<!--                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Project Leader:</strong> John Doe</p>-->
<!--                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Designer:</strong> Alisa Keys</p>-->
<!--                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Developer:</strong> Mark Doe</p>-->
<!--                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Customer:</strong> Keenthemes</p>-->
<!--                                            </div>-->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                    <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/397x300/03.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(4);" class="work-popup-close">Hазад</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5" style="color: #3e8f3e">Виховники</h3>
                                        <span>Потужна команда</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p>Дуже класні виховники в ужгородській станиці, на яких власне і тримається станиця</p>
<!--                                                <ul class="list-inline work-popup-tag">-->
<!--                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>-->
<!--                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>-->
<!--                                                    <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>-->
<!--                                                </ul>-->
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Виховник:</strong> Іштван Удут</p>
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Виховник:</strong> Ростик Гимон</p>
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Сестричка:</strong> Таня Гимон</p>
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Виховниця:</strong> Люда Лівак</p>
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Виховник:</strong> Сергій Верховник</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Work -->
                    </div>
                </div>
                <!-- End Masonry Grid -->
            </div>
        </div>
        <!-- End Work -->

        <!-- Pricing -->
        <div id="pricing">
            <div class="bg-color-sky-light">
                <div class="content-lg container">
                    <div class="row row-space-2">
                        <div class="col-sm-4 sm-margin-b-4">
                            <!-- Pricing -->
                            <div class="pricing">
                                <div class="margin-b-30">
<!--                                    <i class="pricing-icon icon-chemistry"></i>-->
                                    <h3 >Курінь ч. 38 ім. Миколаї Божук</h3>
                                    <p>В курені всього 70 дівчат</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Нічні вовчиці</li>
                                    <li class="pricing-list-item">Повітрулі</li>
                                    <li class="pricing-list-item">Шовкові косиці</li>
                                </ul>
<!--                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>-->
                            </div>
                            <!-- End Pricing -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-4">
                            <!-- Pricing -->
                            <div class="pricing pricing-active">
                                <div class="margin-b-10">
<!--                                    <i class="pricing-icon icon-badge"></i>-->
                                    <h3 >Разом<span> - </span> 150</h3>
                                    <p>Хлопці та дівчата займають різні посади в Пласті, наприклад:</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Гуртковий</li>
                                    <li class="pricing-list-item">Скарбник</li>
                                    <li class="pricing-list-item">Інтендант</li>
                                    <li class="pricing-list-item">Писар</li>
                                    <li class="pricing-list-item">Суддя</li>
                                    <li class="pricing-list-item">Референт комунікацій</li>
                                </ul>
<!--                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>-->
                            </div>
                            <!-- End Pricing -->
                        </div>
                        <div class="col-sm-4">
                            <!-- Pricing -->
                            <div class="pricing">
                                <div class="margin-b-30">
<!--                                    <i class="pricing-icon icon-shield"></i>-->
                                    <h3 >Курінь ч. 45 ім. Федора Корятовича</h3>
                                    <p>В куреньі всього 80 хлопців</p>
                                </div>
                                <ul class="list-unstyled pricing-list margin-b-50">
                                    <li class="pricing-list-item">Злюки Бобри</li>
                                    <li class="pricing-list-item">Закарпатські ведмеді</li>
                                    <li class="pricing-list-item">Закарпатські лиси</li>
                                </ul>
<!--                                <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase" >Choose</a>-->
                            </div>
                            <!-- End Pricing -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Pricing -->

        <!-- Testimonials -->
        <div class="content-md container">
            <div class="row">
                <div class="col-sm-9">
                    <h2 style="color: #3e8f3e">Спогади про Пласт</h2>

                    <!-- Swiper Testimonials -->
                    <div class="swiper-slider swiper-testimonials">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        – Та «Пласт» – це не лише пригоди й мандри, це школа життя, це навчання, як працювати в групі, як бути лідером, як любити природу, що надзвичайно важливо в теперішньому екологічному стані у світі та Україні. «Пласт» виховує любов до Батьківщини, навчає як піклуватися про своє здоров’я, прищеплює духовні і моральні орієнтири, вчить, як робити добро і завжди зберігати певний гумор.
                                    </div>
                                    <p><span class="fweight-700 color-link">Богдан Гаврилишин</span>, пластун, відомий економіст</p>
                                </blockquote>
                            </div>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        «Якщо б я не став пластуном, моє життя було б зовсім інакше, я був би зовсім іншою людиною. Це закріпило мою ідентичність. Я був українцем, але то поглибило моє українство. Це одна з причин, чому я залишався українцем, хоча більшу частину життя не жив в Україні. Це для мене була справді чудова школа життя. «Пласт» мені дав мої власні дороговкази на ціле майбутнє життя».
                                    </div>
                                    <p><span class="fweight-700 color-link">Богдан Гаврилишин</span>, пластун, відомий економіст</p>
                                </blockquote>
                            </div>
                        </div>
                        <!-- End Swiper Wrapper -->

                        <!-- Pagination -->
                        <div class="swiper-testimonials-pagination"></div>
                    </div>
                    <!-- End Swiper Testimonials -->
                </div>
            </div>
            <!--// end row -->
        </div>
        <!-- End Testimonials -->


<!--        FEEDBACK-->
        <?php require_once 'connect.php';

if (isset ($_POST['username']) && isset ($_POST['email']) && isset ($_POST['message'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO feedback(username, email, message) VALUES ('$name','$email','$message')";
    $result = mysqli_query($connection, $query);

    if($result) {
        $sms_1 = "Повідомлення відправлено";
    } else{
        $sms_0 = "Спробуйте ще раз";
    }


}

        ?>
        <div id="contact">
        <div id="work" style="position: center">
            <div class="content-md container">
                <!-- Masonry Grid -->
                <div class="masonry-grid row row-space-2">
                    <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                        <!-- Work -->
                        <div class="work work-popup-trigger">
                            <div class="work-overlay">
                                <img class="full-width img-responsive" src="img/800x400/02.jpg" alt="Portfolio Image">
                            </div>
                            <div class="work-popup-overlay">
                                <div class="work-popup-content">
                                    <a href="javascript:void(5);" class="work-popup-close">Назад</a>
                                    <div class="margin-b-30">
                                        <h3 class="margin-b-5" style="color: #3e8f3e">Контактна форма</h3>
                                        <span><a href="https://goo.gl/maps/aMtFNqeGqFGm1yX3A" <p style="color: #3e8f3e">м. Ужгород, вул. 8 Березня, буд. 46<br></p></a></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                            <form action="#" method="POST" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
                                                <?php if(isset($sms_1)) {?> <div class="alert alert-success" role="alert"><?php echo $sms_1;?> </div> <?php } ?>
                                                <?php if(isset($sms_0)) {?> <div class="alert alert-danger" role="alert"><?php echo $sms_0;?> </div> <?php } ?>
                                                <div class="u-form-group u-form-name">
                                                    <label for="name-3b9a" class="u-form-control-hidden u-label">Ім'я</label>
                                                    <input type="text" placeholder="Введіть ваше ім'я" id="name-3b9a" name="username" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-1" required="">
                                                </div>
                                                <div class="u-form-email u-form-group">
                                                    <label for="email-3b9a" class="u-form-control-hidden u-label">Емайл</label>
                                                    <input type="email" placeholder="Введіть вашу електронну адресу" id="email-3b9a" name="email" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-2" required="">
                                                </div>
                                                <div class="u-form-group u-form-message">
                                                    <label for="message-3b9a" class="u-form-control-hidden u-label">Повідомлення</label>
                                                    <textarea placeholder="Введіть ваше повідомлення" rows="4" cols="50" id="message-3b9a" name="message" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-3" required=""></textarea>
                                                </div>

                                                <div class="u-align-center u-form-group u-form-submit">
                                                    <button class="u-border-2 u-border-black u-btn u-btn-rectangle u-btn-submit u-button-style u-none u-btn-1">Відправити</button>
                                                    <input type="submit" value="submit" class="u-form-control-hidden">
                                                </div>
                                                <input type="hidden" value="" name="recaptchaResponse">
                                            </form>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="margin-t-10 sm-margin-t-0">
                                                <p class="margin-b-5"><strong style="color: #3e8f3e">Ми у соц.мережах:</strong>
<!--                                                <ul class="list-unstyled footer-list">-->
                                                    <li class="footer-list-item"><a href="https://www.facebook.com/plast.uzhhorod" target="_blank">Facebook</a></li>
                                                    <li class="footer-list-item"><a href="https://www.instagram.com/plast.uzhhorod" target="_blank">Instagram</a></li>
<!--                                                </ul>-->
                                                </p>
                                                <p class="margin-b-5"><strong style="color: #3e8f3e"><a href="tel:+380502991330" style="margin: 7px; color: #3e8f3e">Натисніть тут, щоб зателефонувати нам.</a></strong></p>
                                                <p class="margin-b-5"><strong style="color: #3e8f3e"><a href="mailto:uzh@plast.org.ua" style="margin: 7px; color: #3e8f3e">Натисніть тут, щоб відправити листа нам.</a></strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




<!--        feedback-->
<div class="feedback">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta charset="utf-8">
            <meta name="keywords" content="Contact Us">
            <meta name="description" content="">
            <meta name="page_type" content="np-template-header-footer-from-plugin">
            <title>Контактна форма</title>
            <link rel="stylesheet" href="/feedback/nicepage.css" media="screen">
            <script class="u-script" type="text/javascript" src="/feedback/nicepage.js" defer=""></script>
            <meta name="generator" content="Nicepage 3.10.2, nicepage.com">
            <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

            <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html"
}</script>
            <meta property="og:title" content="Главная">
            <meta property="og:type" content="website">
            <meta name="theme-color" content="#478ac9">
<!--            <meta property="og:url" content="index.html">-->
        </head>
        <body data-home-page="Главная.html" data-home-page-title="Главная" class="u-body">
        <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="sec-d205">
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <div class="u-form u-form-1">

                </div>
            </div>
        </section>
        </body>
</div>
            
        <!-- Contact -->

            <!-- Google Map -->
<!--            <div class="gmap">-->
<!--                <address class="gmap-address">-->
<!--                    <a href="https://docs.google.com/forms/d/1JjDQMlWRXGZkpquP2tIWil7DU9_0lUipgkWlHGxNXUE/viewform?fbclid=IwAR03eiaFpfD2n0mSYfxQL20Ix5r5OJ8wa4Im2ZUC4SpbDOV1OeU3Gzr-3Q0&edit_requested=true" target="_blank" style="color: #3e8f3e">   Натисніть тут, щоб заповнити форму для вступу</a>-->
<!--                </address>-->
<!--            </div>-->
            <!-- End Google Map -->

        <!-- End Contact -->

        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#body">Головна</a></li>
                                <li class="footer-list-item"><a href="#products">Мета Пласту</a></li>
                                <li class="footer-list-item"><a href="#service">Місце в Пласті</a></li>
                                <li class="footer-list-item"><a href="#work">Наші акції</a></li>
                                <li class="footer-list-item"><a href="#pricing">Про станицю</a></li>
                            </ul>

                            <!-- End List -->
                        </div>
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="https://docs.google.com/forms/d/1JjDQMlWRXGZkpquP2tIWil7DU9_0lUipgkWlHGxNXUE/viewform?fbclid=IwAR03eiaFpfD2n0mSYfxQL20Ix5r5OJ8wa4Im2ZUC4SpbDOV1OeU3Gzr-3Q0&edit_requested=true" target="_blank">Форма для вступу у Пласт</a></li>

                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-3">
                            <!-- List -->
<!--                            <ul class="list-unstyled footer-list">-->
<!--                                <li class="footer-list-item"><a href="#">Subscribe to Our Newsletter</a></li>-->
<!--                                <li class="footer-list-item"><a href="#">Privacy Policy</a></li>-->
<!--                                <li class="footer-list-item"><a href="#">Terms &amp; Conditions</a></li>-->
<!--                            </ul>-->
                            <!-- End List -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo-dark.png" alt="Aironepage Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700" href="http://plast.org.ua" target="_blank" style="color: #3e8f3e">Сайт Пласту</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">↑</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/maginific-popup.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>
        <script src="js/components/gmap.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>