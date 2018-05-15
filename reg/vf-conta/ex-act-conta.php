<?php

include('conf.php');

function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

$email = $_POST['email'];
$codeemail = $_POST['codeemail'];
$password = $_POST['password'];
$pass_crypt = encryptIt($password);

?>

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

    <body class="no-page-top" id="register-page">

        <!--Header-->
        <!--Set your own background color to the header-->
        <header class="semi-transparent-header" data-bg-color="rgba(0, 10, 48, 0.40)" data-font-color="#fff">
            <div class="container">

                <!--Site Logo-->
                <div class="logo" data-sticky-logo="images/logo-black.png" data-normal-logo="images/logo-black.png">
                    <a href="#home">
                    <img alt="Immigration Project" src="images/logo-black.png" style="height: 50%; width: 20%;" data-logo-height="35">
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
                                <span>Immigration Project</span>
                            </p>

                            <div class="horizontal-break"></div>

                            <?php
                                
                                if ($email == "" || $pass_crypt == "" || $codeemail == "")
                                {
                                    echo "Os campos requeridos foram mal preenchidos. <br>Por favor, tente novamente!";
                                }
                                else
                                {
                                
                                    $confemaildb = "SELECT * FROM log_user, p_conf WHERE log_user.email = '$email' and p_conf.password = '$pass_crypt' and p_conf.code = '$codeemail' ";
                                    $resultado_db = mysqli_query($ligacao, $confemaildb) or mysqli_error();
                                    $rowsn = mysqli_num_rows($resultado_db);
                                    $resultado_print = mysqli_fetch_array($resultado_db);
                                    $id_user = $resultado_print['id_user'];
                                    if ($rowsn == 0)
                                    {
                                        $confemaildb = "SELECT * FROM log_prof, p_conf WHERE log_prof.email = '$email' and p_conf.password = '$pass_crypt' and p_conf.code = '$codeemail' ";
                                        $resultado_db = mysqli_query($ligacao, $confemaildb) or mysqli_error();
                                        $rowsn = mysqli_num_rows($resultado_db);
                                        $resultado_print = mysqli_fetch_array($resultado_db);
                                        $id_user = $resultado_print['id_prof'];
                                        if ($rowsn == 0)
                                        {                  
                                            $confemaildb = "SELECT * FROM log_other, p_conf WHERE log_other.email = '$email' and p_conf.password = '$pass_crypt' and p_conf.code = '$codeemail' ";
                                            $resultado_db = mysqli_query($ligacao, $confemaildb) or mysqli_error();
                                            $rowsn = mysqli_num_rows($resultado_db);
                                            $resultado_print = mysqli_fetch_array($resultado_db);
                                            $id_user = $resultado_print['id_other'];

                                            if ($rowsn == 0)
                                            {
                                                echo 'Os campos foram preenchido incorretamente!';
                                                
                                            } else {
                                                $sql="UPDATE `p_conf` SET `conf_code` = '$codeemail', contaativa = 'activa' WHERE `p_conf`.`id_log` = '$id_user'; ";
                                                $query = mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));  

                                                if(! $query )
                                                {
                                                    die("<br>Nao foi possivel inserir registro: " . mysqli_error());
                                                
                                                } else {
                                                    
                                                    $sql="UPDATE `v_login` SET `estado` = '1' WHERE `v_login`.`id_login` = '$id_user'; ";
                                                    $query = mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));  

                                                    if(! $query )
                                                    {
                                                        die("<br>Nao foi possivel inserir registro: " . mysqli_error());
                                                    
                                                    } else {
                                                        
                                                        echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
                                                    
                                                    }
                                                }
                                            }  
                                        } else {
                                            $sql="UPDATE `p_conf` SET `conf_code` = '$codeemail', contaativa = 'activa' WHERE `p_conf`.`id_log` = '$id_user'; ";
                                            $query = mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));  
                                            if(! $query )
                                            {
                                                die("<br>Nao foi possivel inserir registro: " . mysqli_error());
                                                
                                            } else {
                                                    
                                                $sql="UPDATE `v_login` SET `estado` = '1' WHERE `v_login`.`id_login` = '$id_user'; ";
                                                $query = mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));  
                                                if(! $query )
                                                {
                                                    die("<br>Nao foi possivel inserir registro: " . mysqli_error());
                                                
                                                } else {
                                                
                                                    echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
                                                    
                                                }
                                            }
                                        }
                                    } else {
                                        $sql="UPDATE `p_conf` SET `conf_code` = '$codeemail', contaativa = 'activa' WHERE `p_conf`.`id_log` = '$id_user'; ";
                                        $query = mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));  
                                        if(! $query )
                                        {
                                            die("<br>Nao foi possivel inserir registro: " . mysqli_error());
                                        
                                        } else {
                                        
                                            $sql="UPDATE `v_login` SET `estado` = '1' WHERE `v_login`.`id_login` = '$id_user'; ";
                                            $query = mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));  
                                            if(! $query )
                                            {
                                                die("<br>Nao foi possivel inserir registro: " . mysqli_error());
                                            
                                            } else {
                                            
                                                echo "<meta http-equiv='refresh' content='0;URL=login.php'>";
                                            
                                            }
                                        }
                                    }
                                }
                                mysqli_close($ligacao);
                            ?>

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
