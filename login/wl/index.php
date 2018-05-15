<?php 

require_once('../conf.php');
include('../func.php');

function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}

$id_code = $_REQUEST['code'];
$sqluser = "SELECT * FROM log_user WHERE id_user = '$id_code' ";
$resultado_user = mysqli_query($ligacao, $sqluser);
$registo_user = mysqli_fetch_array($resultado_user);

$name = $registo_user['name'];
$datanascimento = $registo_user['datebirthday'];
$email = $registo_user['email'];
$cargo = $registo_user['office'];
$cpf = $registo_user['cpf'];
$pagamento = $registo_user['payment'];
$country = $registo_user['country'];
$city = $registo_user['city'];
$adress = $registo_user['adress'];
$numberhouse = $registo_user['number'];

$sqlpass = "SELECT * FROM p_conf WHERE id_log = '$id_code' ";
$resultado_pass = mysqli_query($ligacao, $sqlpass);
$registo_pass = mysqli_fetch_array($resultado_pass);

$user_pw = $registo_pass['password'];
$pass_crypt = decryptIt( $user_pw );

$office = "SELECT * FROM office where id_office = '$cargo' ";
$resultado_office = mysqli_query($ligacao, $office);
$resultado_printoff = mysqli_fetch_array($resultado_office);
$cargo = $resultado_printoff['office'];

$payment = "SELECT * FROM payment where tp_payment = '$pagamento' ";
$resultado_payment = mysqli_query($ligacao, $payment);
$resultado_printpay = mysqli_fetch_array($resultado_payment);
$pagamento = $resultado_printpay['paymnet'];

$countrysql = "SELECT * FROM country where id_country = '$country' ";
$resultado_country = mysqli_query($ligacao, $countrysql);
$resultado_printcnt = mysqli_fetch_array($resultado_country);
$country = $resultado_printcnt['country'];

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>IP - Immigration Project</title>
    <meta name="keywords" content="IP - Immigration Project" />
    <meta name="description" content="IP - Immigration Project">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/png" href="../images/logo-black.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,700,800,900" rel="stylesheet" type="text/css">

    <!-- Libs CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <link href="../css/v-nav-menu.css" rel="stylesheet" />
    <link href="../css/v-animation.css" rel="stylesheet" />
    <link href="../css/v-bg-stylish.css" rel="stylesheet" />
    <link href="../css/v-shortcodes.css" rel="stylesheet" />
    <link href="../css/theme-responsive.css" rel="stylesheet" />
    <link href="../plugins/owl-carousel/owl.theme.css" rel="stylesheet" />
    <link href="../plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

    <!-- Current Page CSS -->
    <link href="../plugins/rs-plugin/css/settings.css" rel="stylesheet" />
    <link href="../plugins/rs-plugin/css/custom-captions.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <link href="../css/gab.css" rel="stylesheet">

</head>

<body class="no-page-top" id="home-page">
    <!-- oncontextmenu="return false;" -->
    <!--Header-->
    <!--Set your own background color to the header-->
    <header class="semi-transparent-header" data-bg-color="rgba(0, 10, 48, 0.40)" data-font-color="#fff">
        <div class="container">

            <!--Site Logo-->
            <div class="logo" data-sticky-logo="../images/logo-white.png" style="width: 5%;" data-normal-logo="../images/logo-black.png">
                <a href="#home">
                    <img alt="Immigration Project" src="../images/logo-black.png" data-logo-height="35">
                </a>
            </div>
            <!--End Site Logo-->

            <div class="navbar-collapse nav-main-collapse collapse">

                <!--Main Menu-->
                <nav class="nav-main mega-menu one-page-menu">
                    <ul class="nav nav-pills nav-main" id="mainMenu">

                        <li class="dropdown">

                            <a class="dropdown-toggle menu-icon" id="Online" onclick="document.getElementById('index-wl').submit();" href="#">
                                <i class="fa fa-home"> <?php echo $name; ?> </i>
                            </a>
                            
                            <a class="dropdown-toggle menu-icon" onclick="document.getElementById('minhaconta').submit();" href="#">
                                <i class="fa fa-user"> Minha Conta</i>
                            </a>
                            
                            <a class="dropdown-toggle menu-icon" onclick="document.getElementById('redesociais').submit();" href="#">
                                <i class="fa fa-share"> Redes Sociais </i>
                            </a>
                            
                            <a class="dropdown-toggle menu-icon" onclick="document.getElementById('logout').submit();" href="#">
                                <i class="fa fa-sign-out-alt"> Logout </i>
                            </a>

                            <form action="../wl/index.php" name="index-wl" id="index-wl" method="post">
                                <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
                            </form>

                            <form action="../wl/conta/minhaconta.php" name="minhaconta" id="minhaconta" method="post">
                                <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
                            </form>

                            <form action="../wl/redesociais/redesociais.php" name="redesociais" id="redesociais" method="post">
                                <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
                            </form>

                            <form action="../wl/emt/logout.php" name="logout" id="logout" method="post">
                                <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
                            </form>

                        </li>

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

    <div id="container" id="MyAccount">
        <!--Set your own slider options. Look at the v_RevolutionSlider() function in 'theme-core.js' file to see options-->
        <div class="home-slider-wrap fullwidthbanner-container" style="background: #000a30; ">
            <div class="v-rev-slider" data-slider-options='{ "startheight": 400 }'>
                <ul>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="600">
                        <div class="tp-caption v-caption-big-white sfl stl" data-x="525" data-y="150" data-speed="600" data-start="600" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0" data-endspeed="300" style="text-transform: uppercase;">
                            Immigration
                            <br /> Project
                        </div>
                        <div class="tp-caption v-caption-h1 sfl stl" data-x="525" data-y="250" data-speed="700" data-start="1200" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0" data-endspeed="300">
                            INICIO
                        </div>
                    </li>
                </ul>
            </div>

            <div class="shadow-right"></div>
        </div>

        <!--Services-->
        <div class="v-parallax v-parallax-video v-bg-stylish" id="services" style="background-color: #fff; /* background-image: url(../images/world.jpg); */">
            <div class="container">
                <div class="row">

                    <div class="col-sm-4">
                        <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="0">
                            <a onclick="alunosh()">
                                <div class="feature-box-icon small" style="background-color: #30001a;">
                                    <i class="fa fa-book v-icon"></i>
                                </div>
                                <div class="feature-box-text clearfix">
                                    <h3>Aluno</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="200">
                            <a onclick="profsh()">
                                <div class="feature-box-icon small">
                                    <i class="fa fa-briefcase v-icon"></i>
                                </div>
                                <div class="feature-box-text">
                                    <h3>Professores</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="400">
                            <a onclick="allsh()">
                                <div class="feature-box-icon small" style="background-color: #003010;">
                                    <i class="fa fa-list v-icon"></i>
                                </div>
                                <div class="feature-box-text">
                                    <h3>Todos</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-12" id="alunotoggle" style="background-color: #30001a;">
                        <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="0">
                            <div class="feature-box-text clearfix">
                                <?php
                                
                                    $sql_aluno = "SELECT log_user.name, log_user.email, log_user.city, office.office, country.country 
                                    FROM `log_user`, country, office 
                                    WHERE log_user.id_office = office.id_office 
                                    and log_user.id_office = 1
                                    and country.id_country = log_user.id_country";
                                    $resultado_aluno = mysqli_query($ligacao, $sql_aluno) or die ('Erro de ligação MySql');
                                    
                                    echo '<table style="width:100%">
                                      <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>País</th>
                                        <th>Cidade</th>
                                        <th>Cargo</th>
                                      </tr>';
                                      
                                    while($resultado_printaluno = mysqli_fetch_array($resultado_aluno)) {
                                        
                                        $all_name = $resultado_printaluno['name'];
                                        $all_email = $resultado_printaluno['email'];
                                        $all_country = $resultado_printaluno['country'];
                                        $all_city = $resultado_printaluno['city'];
                                        $all_office = $resultado_printaluno['office'];
                                    
                                        echo '<tr>
                                        <td>'.$all_name.'</td>
                                        <td>'.$all_email.'</td>
                                        <td>'.$all_country.'</td>
                                        <td>'.$all_city.'</td>
                                        <td>'.$all_office.'</td>
                                      </tr>';
                                    }
                                    echo '</table>';
                                    
                                    ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12" id="proftoggle" style="background-color: #000a30;">
                        <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="0">
                            <div class="feature-box-text clearfix">
                                <?php
                                    
                                    $sql_prof = "SELECT log_user.name, log_user.email, log_user.city, office.office, country.country 
                                    FROM `log_user`, country, office 
                                    WHERE log_user.id_office = office.id_office 
                                    and log_user.id_office = 2
                                    and country.id_country = log_user.id_country";
                                    $resultado_prof = mysqli_query($ligacao, $sql_prof);
                                    
                                    echo '<table style="width:100%">
                                      <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>País</th>
                                        <th>Cidade</th>
                                        <th>Cargo</th>
                                      </tr>';
                                      
                                    while($resultado_printprof = mysqli_fetch_array($resultado_prof)) {
                                        
                                        $all_name = $resultado_printprof['name'];
                                        $all_email = $resultado_printprof['email'];
                                        $all_country = $resultado_printprof['country'];
                                        $all_city = $resultado_printprof['city'];
                                        $all_office = $resultado_printprof['office'];
                                    
                                        echo '<tr>
                                        <td>'.$all_name.'</td>
                                        <td>'.$all_email.'</td>
                                        <td>'.$all_country.'</td>
                                        <td>'.$all_city.'</td>
                                        <td>'.$all_office.'</td>
                                      </tr>';
                                    }
                                    echo '</table>';
                                    
                                    ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12" id="alltoggle" style="background-color: #003010;">
                        <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="0">
                            <div class="feature-box-text clearfix">
                                <?php
                                    
                                    $sqlall = "SELECT log_user.name, log_user.email, log_user.city, office.office, country.country 
                                    FROM `log_user`, country, office 
                                    WHERE log_user.id_office = office.id_office 
                                    and log_user.id_office >= 3
                                    and country.id_country = log_user.id_country";
                                    $resultado_all = mysqli_query($ligacao, $sqlall);
                                    
                                    echo '<table style="width:100%">
                                      <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>País</th>
                                        <th>Cidade</th>
                                        <th>Cargo</th>
                                      </tr>';
                                      
                                    while($resultado_printall = mysqli_fetch_array($resultado_all)) {
                                        
                                        $all_name = $resultado_printall['name'];
                                        $all_email = $resultado_printall['email'];
                                        $all_country = $resultado_printall['country'];
                                        $all_city = $resultado_printall['city'];
                                        $all_office = $resultado_printall['office'];
                                    
                                        echo '<tr>
                                        <td>'.$all_name.'</td>
                                        <td>'.$all_email.'</td>
                                        <td>'.$all_country.'</td>
                                        <td>'.$all_city.'</td>
                                        <td>'.$all_office.'</td>
                                      </tr>';
                                    }
                                    echo '</table>';
                                    
                                    ?>
                            </div>
                        </div>
                    </div>

                    <div class="v-bg-overlay overlay-colored"></div>
                </div>
            </div>
        </div>
        <!--End Services-->
        <!--Call Us
        <div class="v-parallax v-bg-stylish" id="contact-us">
            <div class="container">
                <div class="row center">
                    <div class="col-sm-8 col-sm-offset-2">
                        <p class="v-smash-text-large-2x">
                            <span>Alguma duvida?</span>
                        </p>
                        <div class="horizontal-break"></div>
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
                    </ul>
                </div>
            </div>
        </div>
        -->
        <!--End Call Us-->
    </div>

    <?php include('emt/footer.php'); ?>
