<?php include('../emt/conf.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>IP - Immigration Project</title>

    <?php include('../emt/link.php'); ?>

</head>

<body class="no-page-top" id="home-page">
 <!-- oncontextmenu="return false;" --> 
    <!--Header-->
    <!--Set your own background color to the header-->
    <header class="semi-transparent-header" data-bg-color="rgba(0, 10, 48, 0.40)" data-font-color="#fff">
        <div class="container">

            <!--Site Logo-->
            <div class="logo" data-sticky-logo="images/logo-black.png" data-normal-logo="images/logo-black.png">
                <a href="#home">
                    <img alt="Immigration Project" src="images/logo-black.png" data-logo-height="35">
                </a>
            </div>
            <!--End Site Logo-->

            <div class="navbar-collapse nav-main-collapse collapse">

                <!--Header Search-->
                <!--
                <div class="search" id="headerSearch">
                    <a href="#" id="headerSearchOpen"><i class="fa fa-search"></i></a>
                    <div class="search-input">
                        <form id="headerSearchForm" action="#" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control search" name="q" id="q" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                        <span class="v-arrow-wrap"><span class="v-arrow-inner"></span></span>
                    </div>
                </div>
                -->
                <!--End Header Search-->

                <!--Main Menu-->
                <nav class="nav-main mega-menu one-page-menu">
                    <ul class="nav nav-pills nav-main" id="mainMenu">
                        <li class="active">
                            <a data-hash href="#home"><!--<i class="fa fa-home"></i>-->Home</a>
                        </li>
                        <li>
                            <a data-hash href="#features"><!-- <i class="fa fa-fire"></i>-->Features</a>
                        </li>

                        
                        <li class="dropdown">
                            <a class="dropdown-toggle menu-icon" data-hash href="#why-us">Sobre nós<i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a data-hash href="#describe"><!--<i class="fa fa-flash"></i>-->Descrição</a>
                                </li>
                                <li>
                                    <a data-hash href="#services"><!--<i class="fa fa-umbrella"></i>-->Serviço</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a data-hash href="#screenshots"><!--<i class="fa fa-laptop"></i>-->Screenshots</a>
                        </li>
                        <li>
                            <a data-hash href="#download"><!--<i class="fa fa-download"></i>-->Download</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle menu-icon" href="#"><!--<i class="fa fa-umbrella"></i>-->Redes Socias<i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a target="_blank" href="https://www.facebook.com/immigrationprojectbr">Facebook</a></li>
                                <li><a target="_blank" href="https://www.instagram.com/immigrationprojectbr/">Instagram</a></li>
                                <li><a target="_blank" href="https://www.twitter.com/immigraproject">Twitter</a></li>
                                <li><a target="_blank" href="https://www.youtube.com/channel/UC-QnBGMmGvPsZo5l1rGpZvg">Youtube</a></li>
                                <li><a target="_blank" href="https://www.linkedin.com/company/ip-immigration-project">Linkedin</a></li>
                                <li><a target="_blank" href="https://plus.google.com/104671275093138828430">Google Plus</a></li>
                                <!-- <li class="dropdown-submenu">
                                    <a href="#">Blog Posts</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Standard Post</a></li>
                                        <li><a href="#">Slideshow Post</a></li>
                                        <li><a href="#">Full Width Post</a></li> 
                                    </ul>
                                </li>
                                -->
                            </ul>
                        </li>
                        <li><a href="reg.php"> <i class="fa fa-heart"></i> Registo</a></li>
                        <li><a href="login.php"> <i class="fa fa-sign-in"></i> Login</a></li>
                    </ul>
                </nav>
                <!--End Main Menu-->
            </div>
            <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>

        </div>
    </header>
    <!--End Header-->

    <div id="container">

        <!--Set your own slider options. Look at the v_RevolutionSlider() function in 'theme-core.js' file to see options-->
        <div class="home-slider-wrap fullwidthbanner-container" id="home">
            <div class="v-rev-slider" data-slider-options='{ "startheight": 700 }'>

                <ul>

                    <li data-transition="fade" data-slotamount="7" data-masterspeed="600">

                        <img src="img/slider/image2.png" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption v-caption-big-white sfl stl" data-x="525" data-y="245" data-speed="600" data-start="600" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0" data-endspeed="300" style="text-transform: uppercase;">
                            Immigration
                            <br /> Project
                        </div>

                        <div class="tp-caption v-caption-h1 sfl stl" data-x="525" data-y="360" data-speed="700" data-start="1200" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0" data-endspeed="300">
                            "Because to dream is free"
                        </div>

                        <div class="tp-caption sfl stl" data-x="525" data-y="425" data-speed="600" data-start="1800" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0" data-endspeed="300">
                            <a data-hash href='#download' class="btn v-btn v-second-light">GET IT NOW!</a>
                        </div>

                        <div class="tp-caption sfl stl" data-x="675" data-y="425" data-speed="600" data-start="2200" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0" data-endspeed="300">
                            <a data-hash href='#why-us' class="btn v-btn v-second-light">FIND OUT MORE</a>
                        </div>

                        <div class="image-top tp-caption sfl stl" data-x="110" data-y="130" data-speed="600" data-start="1800" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0" data-endspeed="300">
                            <!--<a href='#' class="btn v-btn v-third-light">GET IT NOW!</a>-->
                            <img src="images/mobile.png" />
                        </div>



                        <!--<div class="v-slider-overlay overlay-colored"></div>-->
                    </li>
                </ul>
            </div>

            <div class="shadow-right"></div>
        </div>

        <div class="v-page-wrap no-bottom-spacing">

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-small"></div>
            </div>

            <!--Features-->
            <div class="container" id="features">

                <div class="row center">

                    <div class="col-sm-12">
                        <p class="v-smash-text-large-2x">
                            <span>Poderosas funcionalidades</span>
                        </p>
                        <div class="horizontal-break"></div>
                        <!--
                        <p class="lead" style="color: #999;">
                            Responsive &amp; optimized for mobile devices.<br> Completely without coding skills!
                        </p>
                        -->
                    </div>
                    <div class="v-spacer col-sm-12 v-height-standard"></div>
                </div>

                <div class="row features">

                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box left-icon v-animation pull-top" data-animation="fade-from-left" data-delay="300">
                            <div class="feature-box-icon small">
                                <i class="fa fa-lightbulb-o v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>Super Design Layout</h3>
                                <div class="feature-box-text-inner">
                                    APP feita para qualquer utilizador, com design perfeito e limpo, Immigration Project fornece uma nova interface de poder aprender!
                                </div>
                            </div>
                        </div>

                        <div class="v-spacer col-sm-12 v-height-standard"></div>

                        <div class="feature-box left-icon v-animation" data-animation="fade-from-left" data-delay="600">
                            <div class="feature-box-icon small">
                                <i class="fa fa-question-circle v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>Support</h3>
                                <div class="feature-box-text-inner">
                                    APP trás um centro de ajuda sempre disponivel quando necessário! Tenha ajuda através do Whatsapp directo com os responsaveis.
                                </div>
                            </div>
                        </div>

                        <div class="v-spacer col-sm-12 v-height-standard"></div>

                        <div class="feature-box left-icon v-animation" data-animation="fade-from-left" data-delay="900">
                            <div class="feature-box-icon small">
                                <i class="fa fa-cloud-download v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>Regular Updates</h3>
                                <div class="feature-box-text-inner">
                                    Updates sempre a prova! Através do feedback dos nossos utilizadores iremos melhor a APP para melhor desemprenho.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <img class="img-responsive phone-image v-animation" data-animation="fade-from-bottom" data-delay="250" src="images/mobile.png" />
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box left-icon v-animation pull-top" data-animation="fade-from-right" data-delay="300">
                            <div class="feature-box-icon small">
                                <i class="fa fa-sign-in v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>Resgistro e Login</h3>
                                <div class="feature-box-text-inner">
                                    Registo e Login para fácil utilização, através disso saberá todos os professores/alunos disponivel na sua área.
                                </div>
                            </div>
                        </div>

                        <div class="v-spacer col-sm-12 v-height-standard"></div>

                        <div class="feature-box left-icon v-animation" data-animation="fade-from-right" data-delay="600">
                            <div class="feature-box-icon small">
                                <i class="fa fa-lightbulb-o v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>Aweosme Design Layout</h3>
                                <div class="feature-box-text-inner">
                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.<br />
                                </div>
                            </div>
                        </div>

                        <div class="v-spacer col-sm-12 v-height-standard"></div>

                        <div class="feature-box left-icon v-animation" data-animation="fade-from-right" data-delay="900">
                            <div class="feature-box-icon small">
                                <i class="fa fa-facebook v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>Social Media</h3>
                                <div class="feature-box-text-inner">
                                    Immigration Project está disponivel nas redes sociais, com as informações sempre actualizadas e com as novidades em primeira mão! Active as notificações no Facebook, Youtube e Instagram!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Features-->

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-standard"></div>
            </div>

            <!--Why Us-->
            <div class="v-parallax v-bg-stylish v-bg-stylish-v4 no-shadow" id="why-us">
                <div class="container">
                    <div class="row app-brief">
                        <div class="col-sm-6">
                            <img class="img-responsive phone-image v-animation" data-animation="fade-from-left" data-delay="250" src="img/landing/2-iphone-left.png" />
                        </div>

                        <div class="col-sm-6">
                            <p class="v-smash-text-large-2x pull-top">
                                <span>Porque a Immigration Project é a melhor?</span>
                            </p>
                            <div class="horizontal-break left"></div>
                            <p class="v-lead">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>

                            <div class="v-spacer col-sm-12 v-height-small"></div>

                            <ul class="v-list-v2">
                                <li class="v-animation" data-animation="fade-from-right" data-delay="150"><i class="fa fa-check"></i><span class="v-lead">Simple & with endless possibilties.</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="300"><i class="fa fa-check"></i><span class="v-lead">Everything is perfectly orgainized for future.</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="450"><i class="fa fa-check"></i><span class="v-lead">Sliders give you the opportunity to showcase.</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="600"><i class="fa fa-check"></i><span class="v-lead">Multiple layout for home pages, portfolio & blog.</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="750"><i class="fa fa-check"></i><span class="v-lead">The best way to grow your business</span></li>
                                <li class="v-animation" data-animation="fade-from-right" data-delay="900"><i class="fa fa-check"></i><span class="v-lead">Lorem ipsum dolor sit amet, consectetur.</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Why Us-->

            <!--Describe-->
            <div class="v-parallax v-bg-stylish" id="describe">
                <div class="container">
                    <div class="row app-brief">
                        <div class="col-sm-6">
                            <p class="v-smash-text-large-2x pull-top">
                                <span>Descrição e história da Immigration Project</span>
                            </p>
                            <div class="horizontal-break left"></div>
                            <p class="v-lead">
                                Immigration Project foi pensada quando Renato Lima - CEO 
                                prestava serviços através da atual Sequoia e anterior Yeplog 
                                sugeriu que desse aulas de inglês para funcionários da empresa, 
                                em que teve aluno até mesmo da Promon Logicalis, e que a ideia de fazer um 
                                app que o aluno localizasse professores que moram próximo do trabalho/casa 
                                para dar aulas no tempo vago como horário de almoço, tanto In Company quanto 
                                uma praça de alimentação de shopping qualquer, de uma ideia, hoje estamos 
                                lançando a versão BETA.
                            </p>
                        </div>

                        <div class="col-sm-6">
                            <img class="img-responsive phone-image v-animation"
                                 data-animation="fade-from-right" data-delay="300" src="images/ip-active.png" />
                        </div>
                    </div>
                </div>
            </div>
            <!--End Describe-->

            <!--Services-->
            <div class="v-parallax v-parallax-video v-bg-stylish" id="services" style="background-image: url(img/slider/slider4.jpg);">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="0">
                                <div class="feature-box-icon small">
                                    <i class="fa fa-eye v-icon"></i>
                                </div>
                                <div class="feature-box-text clearfix">
                                    <h3>Visão</h3>
                                    <div class="feature-box-text-inner">
                                        <p>Fazer uma plataforma de conexão entre o aluno e o professor, para que ambos cresçam!</p>
                                        <!-- <a href="#" class="read-more">Read More</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="200">
                                <div class="feature-box-icon small">
                                    <i class="fa fa-leaf v-icon"></i>
                                </div>
                                <div class="feature-box-text">
                                    <h3>Missão</h3>
                                    <div class="feature-box-text-inner">
                                        <p>Vemos a necessidade das pessoas de querer estudar e as pessoas querendo ensinar, queremos aproxima-las.<br />
                                        </p>
                                        <!-- <a href="#" class="read-more">Read More</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="400">
                                <div class="feature-box-icon small">
                                    <i class="fa fa-tasks v-icon"></i>
                                </div>
                                <div class="feature-box-text">
                                    <h3>Objectivos</h3>
                                    <div class="feature-box-text-inner">
                                        <p>Voltado ao público que deseja aprender um novo idioma e ao professor que precisa de emprego que está cada vez mais complicado no Brasil.<br />
                                        </p>
                                        <!-- <a href="#" class="read-more">Read More</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="v-bg-overlay overlay-colored"></div>
                    </div>
                </div>
            </div>
            <!--End Services-->

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-big"></div>
            </div>

            <div class="container">
                <div class="row center v-counter-wrap">
                    <div class="col-sm-3">
                        <i class="fa fa-flag v-icon icn-holder"></i>
                        <div class="v-counter">
                            <div class="count-number" data-from="0" data-to="2" data-speed="1000" data-refresh-interval="25"></div>
                            <div class="count-divider"><span></span></div>
                            <h6 class="v-counter-text">Países incluidos</h6>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <i class="fa fa-laptop v-icon icn-holder"></i>
                        <div class="v-counter">
                            <div class="count-number" data-from="0" data-to="1215123" data-speed="1000" data-refresh-interval="25"></div>
                            <div class="count-divider"><span></span></div>
                            <h6 class="v-counter-text">Copos de café</h6>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <i class="fa fa-users v-icon icn-holder"></i>
                        <div class="v-counter">
                            <div class="count-number" data-from="0" data-to="1500" data-speed="1000" data-refresh-interval="25"></div>
                            <div class="count-divider"><span></span></div>
                            <h6 class="v-counter-text">Professores e alunos unidos</h6>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <i class="fa fa-download v-icon icn-holder"></i>
                        <div class="v-counter">
                            <div class="count-number" data-from="0" data-to="5000" data-speed="1000" data-refresh-interval="25"></div>
                            <div class="count-divider"><span></span></div>
                            <h6 class="v-counter-text">Download da APP</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="v-spacer col-sm-12 v-height-standard"></div>
            </div>

            <!--Screenshots-->
            <div class="v-parallax v-bg-stylish v-bg-stylish-v4 no-shadow" id="screenshots">
                <div class="container">
                    <div class="row center">
                        <div class="col-sm-12">
                            <p class="v-smash-text-large-2x">
                                <span>Screenshots</span>
                            </p>
                            <div class="horizontal-break"></div>
                            <!--
                            <p class="lead" style="color: #999;">
                                Responsive & optimized for mobile devices.
                            </p>
                            -->
                        </div>
                        <div class="v-spacer col-sm-12 v-height-standard"></div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="carousel-wrap">

                                <div class="owl-carousel" data-plugin-options='{"items": 4, "singleItem": false, "pagination": true}'>
                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="images/mobile.png" class="attachment-full">
                                            <a class="view" href="images/mobile.png" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="images/mobile.png" class="attachment-full">
                                            <a class="view" href="images/mobile.png" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="images/mobile.png" class="attachment-full">
                                            <a class="view" href="images/mobile.png" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="images/mobile.png" class="attachment-full">
                                            <a class="view" href="images/mobile.png" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="images/mobile.png" class="attachment-full">
                                            <a class="view" href="images/mobile.png" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="images/mobile.png" class="attachment-full">
                                            <a class="view" href="images/mobile.png" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Screenshots-->

            <!--Download-->
            <div class="v-parallax v-bg-stylish v-bg-stylish-v10" id="download" style="background-image: url(img/slider/slider4.jpg);">

                <div class="container">
                    <div class="row center">

                        <div class="col-sm-12">

                            <div class="v-content-wrapper">
                                <p class="v-smash-text-large-2x">
                                    <span>DOWNLOAD DA APP</span>
                                </p>

                                <div class="v-spacer col-sm-12 v-height-standard"></div>

                                <div id="intro_stores">
                                    <a href="#"><img src="img/landing/google.png" alt="google_icon"></a>
                                    <!--
                                        <a href="#"><img src="img/landing/appstore.png" alt="appstore_icon"></a>
                                        <a href="#"> <img src="img/landing/amazon.png" alt="amazon_icon"></a>
                                    -->
                                </div>

                                <!--
                                <div class="v-spacer col-sm-12 v-height-big"></div>

                                <p class="v-smash-text-large-2x">
                                    <span>Subscribe Now!</span>
                                </p>

                                <div class="v-spacer col-sm-12 v-height-small"></div>

                                <form class="subscription-form form-inline">

                                    <input type="email" name="EMAIL" placeholder="Your Email" class="subscriber-email form-control input-box">
                                    <a href="#" type="submit" class="subscriber-button btn v-btn v-medium-button no-three-d v-belize-hole"><i class="fa fa-fire"></i>Subscribe</a>
                                </form>

                                -->

                            </div>

                        </div>

                        <div class="v-bg-overlay overlay-colored"></div>
                    </div>
                </div>
            </div>
            <!--End Download-->

            <!--Call Us-->
            <div class="v-parallax v-bg-stylish" id="contact-us">
                <div class="container">
                    <div class="row center">
                        <div class="col-sm-8 col-sm-offset-2">
                            <p class="v-smash-text-large-2x">
                                <span>Alguma duvida?</span>
                            </p>
                            <!--
                            <br />
                            <p class="lead" style="color: #999;">
                                +351 000 000 000
                            </p>
                            -->
                            <div class="horizontal-break"></div>

                            <!--
                                <div class="v-spacer col-sm-12 v-height-small"></div>
                            -->

                            <form action="send-email.php" id="ajudacontacto" method="post">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Nome Completo<span class="required"> *</span></label>
                                            <input type="text" value="" maxlength="100" class="form-control" name="name" id="name" required>
                                        </div>


                                        <div class="col-sm-12">
                                            <label>Email<span class="required"> *</span></label>
                                            <input type="email" value="" maxlength="100" class="form-control" name="email" id="email1" required>
                                        </div>
                                        
                                        <!--
                                        <div class="col-sm-4">
                                            <label>Data de nascimento<span class="required">*</span></label>
                                            <input type="date" value="" class="form-control" name="datanascimento" id="datanascimento" required>
                                        </div>

                                        <div class="col-sm-4">
                                            <label>Cargo<span class="required">*</span></label>
                                            <select class="form-control" name="cargo" id="cargo" required>
                                                <option value="" hidden></option>
                                                <option value="Aluno">Aluno</option>
                                                <option value="Professor">Professor</option>
                                                <option value="Outro">Outro</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>CPF<span class="required">*</span></label>
                                            <input type="text" name="cpf" maxlength="14" id="cpf" class="form-control" OnKeyPress="formatar('###.###.###-##', this)" required>
                                        </div>



                                        <div class="col-sm-4">
                                            <label>Forma de pagemento<span class="required">*</span></label>
                                            <select class="form-control" name="pagamento" id="pagamento" required>
                                                <option value=" " hidden> </option>
                                                <option value="Mensal">Mensal</option>
                                                <option value="Bimestral">Bimestral (2 meses)</option>
                                                <option value="Trimestral">Trimestral (3 meses)</option>
                                                <option value="Semestral">Semestral (6 meses)</option>
                                                <option value="Anual">Anual (12 meses)</option>
                                                <option value="Outro">Outro</option>
                                            </select>
                                        </div>


                                        <div class="col-sm-4">
                                            <label>Pais</label>
                                            <select class="form-control" name="country" id="country" required>
                                                <option value="" hidden> </option>
                                                <option value="Brasil">Brasil</option>
                                                <option value="Portugal">Portugal</option>
                                            </select>
                                        </div>
                                        -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Comentario<span class="required"> *</span></label>
                                            <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="Textarea1" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <br />
                                        <button name="submit" type="submit" id="sendmesage" class="btn v-btn no-three-d">Enviar mensagem</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="v-spacer col-sm-12 v-height-small"></div>
                    </div>

                    <div class="row center">
                        <ul class="social-icons large center">
                            <li class="facebook"><a href="https://www.facebook.com/immigrationprojectbr" target="_blank"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a></li>
                            <li class="instagram"><a href="https://www.instagram.com/immigrationprojectbr" target="_blank"><i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a></li>
                            <li class="twitter"><a href="https://www.twitter.com/immigraproject" target="_blank"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a></li>
                            <li class="youtube"><a href="https://www.youtube.com/channel/UC-QnBGMmGvPsZo5l1rGpZvg" target="_blank"><i class="fa fa-youtube"></i><i class="fa fa-youtube"></i></a></li>
                            <li class="linkedin"><a href="https://www.linkedin.com/company/ip-immigration-project" target="_blank"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a></li>
                            <li class="googleplus"><a href="https://plus.google.com/104671275093138828430" target="_blank"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a></li>
                            <!--
                            <li class="vimeo"><a href="http://www.vimeo.com/#" target="_blank"><i class="fa fa-vimeo-square"></i><i class="fa fa-vimeo-square"></i></a></li>
                            <li class="tumblr"><a href="http://tumblr.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i><i class="fa fa-tumblr"></i></a></li>
                            <li class="skype"><a href="skype:#" target="_blank"><i class="fa fa-skype"></i><i class="fa fa-skype"></i></a></li>
                            -->
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Call Us-->
        </div>
        
<?php include('../emt/footer.php'); ?>