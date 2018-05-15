<?php 

include('../conf.php');
include('../func.php');

function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}

$id_code = $_REQUEST['code'];

//echo $id_code;

$sqluser = "SELECT * FROM log_user WHERE id_user = '$id_code' ";
$resultado_user = mysqli_query($ligacao, $sqluser);
$registo_user = mysqli_fetch_array($resultado_user);

$name = $registo_user['name'];
$datanascimento = $registo_user['datebirthday'];
$email = $registo_user['email'];
$cargo = $registo_user['id_office'];
$cpf = $registo_user['cpf'];
$pagamento = $registo_user['id_payment'];
$country = $registo_user['id_country'];
$city = $registo_user['city'];
$adress = $registo_user['adress'];
$numberhouse = $registo_user['number'];


$sqlpass = "SELECT * FROM p_conf WHERE id_log = '$id_code' ";
$resultado_pass = mysqli_query($ligacao, $sqlpass);
$registo_pass = mysqli_fetch_array($resultado_pass);

/*
echo "<br>";
echo "Password encriptada: ".$registo_pass['password'];
*/

$user_pw = $registo_pass['password'];
$pass_crypt = decryptIt( $user_pw );

/*
echo "<br>";
echo 'Password desincriptada: '.$pass_crypt;
echo "<br>";
echo 'Nome: '.$name;
echo "<br>";
echo 'Nascimento: '.$datanascimento;
echo "<br>";
echo 'Email: '.$email;
echo "<br>";
echo 'Cargo: '.$cargo;
echo "<br>";
echo 'CPF: '.$cpf;
echo "<br>";
echo 'Pagamento: '.$pagamento;
echo "<br>";
echo 'Pais: '.$country;
echo "<br>";
echo 'Cidade: '.$city;
echo "<br>";
echo 'Morada: '.$adress;
echo "<br>";
echo 'Numero: '.$numberhouse;
echo "<br>";
*/

$office = "SELECT * FROM office where id_office = '$cargo' ";
$resultado_office = mysqli_query($ligacao, $office);
$resultado_printoff = mysqli_fetch_array($resultado_office);
$cargo = $resultado_printoff['office'];

/*
echo 'Cargo: '.$cargo;
echo "<br>";
*/

$payment = "SELECT * FROM payment where id_payment = '$pagamento' ";
$resultado_payment = mysqli_query($ligacao, $payment);
$resultado_printpay = mysqli_fetch_array($resultado_payment);
$pagamento = $resultado_printpay['paymnet'];

/*
echo 'Pagamento: '.$pagamento;
echo "<br>";
*/

$countrysql = "SELECT * FROM country where id_country = '$country' ";
$resultado_country = mysqli_query($ligacao, $countrysql);
$resultado_printcnt = mysqli_fetch_array($resultado_country);
$country = $resultado_printcnt['country'];

/*
echo 'Pais: '.$country;
echo "<br>";
*/

$city = $registo_user['city'];

if($city == ""){
    $city = "Cidade não identificada.";
}

$adress = $registo_user['adress'];

if($adress == ""){
    $adress = "Sem morada.";
}

$numberhouse = $registo_user['number'];

if($numberhouse == 0){
    $numberhouse = "Sem numero.";
}


$sql_sm = "SELECT * FROM socialmedia WHERE id_user = '$id_code' ";
$resultado_sm = mysqli_query($ligacao, $sql_sm);
$registo_sm = mysqli_fetch_array($resultado_sm);

$facebook = $registo_sm['facebook'];
if($facebook == ''){
    $facebook = "Sem Facebook.";
}

$skype = $registo_sm['skype'];
if($skype == ''){
    $skype = "Sem Skype.";
}

$hangouts = $registo_sm['hangouts'];
if($hangouts == ''){
    $hangouts = "Sem Hangouts.";
}

$whatsapp = $registo_sm['whatsapp'];
if($whatsapp == ''){
    $whatsapp = require_once('whastapp.php');
}

$linkedin = $registo_sm['linkedin'];
if($linkedin == ''){
    $linkedin = "Sem LinkedIn.";
}

$line = $registo_sm['line'];
if($line == ''){
    $line = "Sem Line.";
}


?>

<!DOCTYPE html>

<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    
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
    <link href="../css/gab.css" rel="stylesheet" >
    
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<body class="no-page-top" id="add-rdsociais">
    <header class="semi-transparent-header" data-bg-color="rgba(0, 10, 48, 0.40)" data-font-color="#fff">
        <div class="container">

            <!--Site Logo-->
            <div class="logo" data-sticky-logo="../images/logo-black.png" data-normal-logo="../images/logo-black.png">
                <a href="#home">
                    <img alt="Immigration Project" src="../images/logo-black.png" data-logo-height="35">
                </a>
            </div>
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

                            <form action="../wl/minhaconta.php" name="minhaconta" id="minhaconta" method="post">
                                <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
                            </form>

                            <form action="../wl/redesociais.php" name="redesociais" id="redesociais" method="post">
                                <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
                            </form>

                            <form action="../wl/logout.php" name="logout" id="logout" method="post">
                                <input type="hidden" name="code" value="<?php echo $id_code; ?>" />
                            </form>

                        </li>
                        
                    </ul>
                </nav>
            </div>
            <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </header>
    <div id="container" id="MyAccount">
        <div class="home-slider-wrap fullwidthbanner-container" style="background: #000a30; ">
            <div class="v-rev-slider" data-slider-options='{ "startheight": 400 }'>
                <ul>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="600">
                        <div class="tp-caption v-caption-big-white sfl stl" data-x="525" data-y="150" data-speed="600" data-start="600" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0" data-endspeed="300" style="text-transform: uppercase;">
                            Immigration
                            <br /> Project
                        </div>
                        <div class="tp-caption v-caption-h1 sfl stl" data-x="525" data-y="250" data-speed="700" data-start="1200" data-easing="Power1.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0" data-endspeed="300">
                            ADICIONAR REDES SOCIAIS
                        </div>
                    </li>
                </ul>
            </div>
            <div class="shadow-right"></div>
        </div>
        <div class="container">
            <div class="v-spacer col-sm-12 v-height-standard"></div>
        </div>
        <div class="center">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="form-group">
                    <form method="POST" action="ex_add_sm.php" id="Alterar">
                        <div class="col-sm-4">
                            <label><i class="fa fa-facebook-square"></i>   - Facebook</label>
                            <input type="url" value="<?php echo $facebook; ?>" class="form-control" name="facebook" id="facebook">
                        </div>
                        <div class="col-sm-4">
                            <label><i class="fa fa-skype"></i> - Skype</label>
                            <input type="url" value="<?php echo $skype; ?>" class="form-control" name="skype" id="skype">
                        </div>
                        <div class="col-sm-4">
                            <label><i class="fa fa-google"></i> - Google Hangouts</label>
                            <input type="url" value="<?php echo $hangouts; ?>" class="form-control" name="hangouts" id="hangouts">
                        </div>
                        <div class="col-sm-6">
                            <label><i class="fa fa-whatsapp"></i> - WhatsApp</label>
                            <input type="url" value="<?php echo $whatsapp; ?>" class="form-control" name="whatsapp" id="whatsapp">
                        </div>
                        <div class="col-sm-6">
                            <label><i class="fa fa-linkedin" aria-hidden="true"></i> - LinkedIn</label>
                            <input type="url" value="<?php echo $linkedin; ?>" class="form-control" name="linkedin" id="linkedin">
                        </div>
                        <input type="hidden" value="<?php echo $id_code;?>" name="code" id="code">
                    </form>
                </div>
                <div class="col-sm-12">
                    <br />
                    <form action="minhaconta.php" id="Cancelar" method="post">
                        <div style="display: none;">
                            <input type="hidden" value="<?php echo $id_code;?>" name="code" id="code">
                        </div>
                    </form>
                    <button name="submit" type="submit" onclick="document.getElementById('Cancelar').submit();" id="sendmesage" class="btn v-btn no-three-d">Cancelar</button>
                    <button name="submit" type="submit" onclick="document.getElementById('Alterar').submit();" id="sendmesage" class="btn v-btn no-three-d">Adicionar</button>
                </div>
            </div>
        </div>
        <div class="row" style="margin-right: 0px;">
            <div class="v-spacer col-sm-12 v-height-small"></div>
        </div>
    </div>

    <?php include('footer.php'); ?>
