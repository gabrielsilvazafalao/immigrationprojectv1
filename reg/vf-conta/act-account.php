<?php include('conf.php'); ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>IP - Immigration Project</title>
    <meta name="keywords" content="IP - Immigration Project" />
    <meta name="description" content="IP - Immigration Project">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/png" href="images/logo-black.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,700,800,900" rel="stylesheet" type="text/css">

    <!-- Libs CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/v-nav-menu.css" rel="stylesheet" />
    <link href="css/v-animation.css" rel="stylesheet" />
    <link href="css/v-bg-stylish.css" rel="stylesheet" />
    <link href="css/v-shortcodes.css" rel="stylesheet" />
    <link href="css/theme-responsive.css" rel="stylesheet" />
    <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet" />
    <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

    <!-- Current Page CSS -->
    <link href="plugins/rs-plugin/css/settings.css" rel="stylesheet" />
    <link href="plugins/rs-plugin/css/custom-captions.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    
</head>

<body class="no-page-top" id="register-page" >

    <!--Header-->
    <!--Set your own background color to the header-->
    <header class="semi-transparent-header" data-bg-color="rgba(0, 10, 48, 0.40)" data-font-color="#fff">
        <div class="container">

            <!--Site Logo-->
            <div class="logo" data-sticky-logo="images/logo-white.png" style="width: 5%;" data-normal-logo="images/logo-black.png">
                <a href="#home">
                    <img alt="Immigration Project" src="images/logo-white.png" style="height: 50%; width: 20%;" data-logo-height="35">
                </a>
            </div>
            <!--End Site Logo-->
            <div class="navbar-collapse nav-main-collapse collapse">
                <!--Main Menu-->
                <nav class="nav-main mega-menu one-page-menu">
                    <ul class="nav nav-pills nav-main" id="mainMenu">
                        <li class="dropdown">
                            <a class="dropdown-toggle menu-icon" href="index.php">Home<i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a data-hash href="index.php#features">Features</a></li>
                                <li class="dropdown-submenu">
                                    <a data-hash href="index.php#why-us">Sobre nós</a>
                                    <ul class="dropdown-menu">
                                        <li><a data-hash href="index.php#describe">Descrição</a></li>
                                        <li><a data-hash href="index.php#services">Serviço</a></li>
                                    </ul>
                                </li>
                                <li><a data-hash href="index.php#screenshots">Screenshots</a></li>
                                <li><a data-hash href="index.php#download">Download</a></li>
                            </ul>
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

            <!--Call Us-->
            <div class="v-parallax v-bg-stylish" id="contact-us">
                <div class="container">
                    <div class="row center">
                        <br>
                        <br/>
                        <div class="col-sm-8 col-sm-offset-2">
                            <p class="v-smash-text-large-2x">
                                <span>Activação da conta!</span>
                                    <h1>Immigration Project</h1>
                            </p>

                            <div class="horizontal-break"></div>

                            <form action="ex_vaccount.php" id="login" method="post">
                                <div class="row">
                                    <div class="form-group">

                                        <div class="col-sm-6">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" value="" maxlength="100" class="form-control" name="email" id="email1" required>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <label>Password <span class="required">*</span></label>
                                            <input type="password" value="" class="form-control" name="password" id="password" required>
                                        </div>
                                        
                                        <div class="col-sm-12">
                                            <label>Código do email <span class="required">*</span></label>
                                            <input type="password" value="" class="form-control" name="codeemail" id="codeemail" required>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <br />
                                        <button name="submit" type="submit" id="sendmesage" class="btn v-btn no-three-d">Entrar</button>
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
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Call Us-->

<?php include('footer.php'); ?>