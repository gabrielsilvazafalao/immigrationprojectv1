<?php
	
require_once('conf.php');

function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

$option = isset($_POST['cargo']) ? $_POST['cargo'] : false;
   if ($option) {
      //echo htmlentities($_POST['cargo'], ENT_QUOTES, "UTF-8");
   } else {
     echo "Form option error.";
     echo '<metta http-equiv="refresh" content="5;url=window.history.go(-1)>'; 
   }

$name = $_POST['name'];
$datanascimento = $_POST['datanascimento'];
$email = $_POST['email'];
$cargo = $_POST['cargo'];
$cpf = $_POST['cpf'];

$cnpj = $_POST['CNPJ'];
$pagamento = $_POST['pagamento'];
$linkedin = $_POST['LinkedIn'];

$country = $_POST['country'];
$city = $_POST['city'];
$adress = $_POST['adress'];
$numberhouse = $_POST['numberhouse'];

$user_pw = $_POST['password'];
$pass_crypt = encryptIt( $user_pw );

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

<body class="no-page-top" id="register-page" >

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
                            
                            $confemaildb = "SELECT * FROM `log_user` WHERE `email` = '$email'; ";
                            $resultado_db = mysqli_query($ligacao, $confemaildb);
                            //$registoconta = mysqli_fetch_array($resultado_select);
                            $rowsn = mysqli_num_rows($resultado_db);
		                    
                            if ($rowsn == 0)
                            {
                                
                                /*
                                function generatePassword($_len) {

                                    $_alphaSmall = 'abcdefghijklmnopqrstuvwxyz';            // small letters
                                    $_alphaCaps  = strtoupper($_alphaSmall);                // CAPITAL LETTERS
                                    $_numerics   = '1234567890';                            // numerics
                                    $_specialChars = '`~!@#$%^&*()-_=+]}[{;:,<.>/?\'"\|';   // Special Characters

                                    $_container = $_alphaSmall.$_alphaCaps.$_numerics.$_specialChars;   // Contains all characters
                                    $password = '';         // will contain the desired pass

                                    for($i = 0; $i < $_len; $i++) {                                 // Loop till the length mentioned
                                        $_rand = rand(0, strlen($_container) - 1);                  // Get Randomized Length
                                        $password .= substr($_container, $_rand, 1);                // returns part of the string [ high tensile strength ;) ] 
                                    }

                                    return $password;       // Returns the generated Pass
                                }

                                $codeemail = generatePassword(10);
                                //echo $codeemail;

                                $encoding = "utf-8";

                                //Message
                                //$message  = "<html><body>";
                                $message  = "<p><h1>Seja bem vindo a IP - Immigration Project.</h1>";
                                $message .= "<p>Seguinte código é de confirmação da conta:";
                                $message .= "<p><span style='color: #f00;'>" . $codeemail . "</span></p></p></p>";
                                $message .= "<a href='http://immigrationproject.com.br/venue/act-account.php'>Activar conta!</a>";
                                //$message .= "</body></html>";

                                //Mail header
                                $header  = "MIME-Version: 1.0"."\r\n";
                                $header .= "Content-type: TEXT/HTML; charset=UTF-8;"."\r\n";
                                $header .= "X-Mailer: PHP/" . phpversion();
                                $header .= "From: ".$name." <".$email."> \r\n";
                                //$header .= "Date: ".date("r (T)")." \r\n";


                                // Send mail
                                $send_mail = mail($email, "Activação Inscrição Immigration Project.", $message, $header);

                                if(!$send_mail) {
                                
                                    echo 'Mensagem não enviada!';
                                    error_log($email, $mail_subject, $message, $header);
                                
                                } else {
                                
                                */
                                
                                
                                    $sql="INSERT INTO `log_user` (`id_user`, `name`, `email`, `id_office`, `id_payment`, `cpf`, `datebirthday`, `city`, `adress`, `number`, `id_country`, `linkedin`, `cnpj`)
                                    VALUES (NULL, '$name', '$email', '$cargo', ' ', '$cpf', '$datanascimento', ' ', ' ', ' ', ' ', ' ', ' ');";
                                    $query = mysqli_query($ligacao, $sql) or die ("Erro ao inserir: " . mysqli_error($ligacao));  
                                    
                                    if(!$query )
                                    {
                                        die("<br>Nao foi possivel inserir registro: " . mysqli_error());
                                    }
                                    else
                                    {
                                        $sqlselect = "SELECT `id_user` FROM `log_user` WHERE `email` = '$email'";
                                        $resultado_select = mysqli_query($ligacao, $sqlselect);
                                        $registo = mysqli_fetch_array($resultado_select);
                                        $codeuser = $registo['id_user'];
                                        //echo $codeuser;
                                        
                                        $sqlinsert = "INSERT INTO `p_conf` (`id_pconf`, `id_log`, `code`, `conf_code`, `contaativa`, `password`) VALUES (NULL, '$codeuser', '$codeemail', ' ', 'inativa', '$pass_crypt');";
                                        
                                        $query2 = mysqli_query($ligacao, $sqlinsert) or die ("Error in confirm: " . mysqli_error($ligacao));  
                                        
                                        if(!$query2 )
                                        {
                                            die("<br>Nao foi possivel inserir registro: " . mysqli_error());
                                        }
                                        else
                                        {
                                            function get_ip_address() {
                                        
                                            $ip_keys = array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR');

                                            foreach ($ip_keys as $key) {
                                                if (array_key_exists($key, $_SERVER) === true) {
                                                    foreach (explode(',', $_SERVER[$key]) as $ip) {
                                                        // trim for safety measures
                                                        $ip = trim($ip);
                                                        // attempt to validate IP
                                                        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 | FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                                                        return $ip;
                                                        }
                                                    }
                                                }
                                            }
                                                return isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : false;
                                            }

                                            $ip_cli = get_ip_address();

                                            $sqlinsert_ip = "INSERT INTO `v_login` (`id_login`, `id_log`, `ip`, `estado`) 
                                            VALUES (NULL, '$codeuser', '$ip_cli', '0')";
                                            $query_ip = mysqli_query($ligacao, $sqlinsert_ip) or die ("Erro getting id-login: " . mysqli_error($ligacao));  

                                            if(!$query_ip)
                                            {
                                                die("<br>Nao foi possivel inserir registro: " . mysqli_error());
                                            }
                                            else
                                            {
                                                echo 'Registo feito com sucesso aguarde a nossa verificação que será enviada para o seu email.';
                                                //echo 'Mensagem de confirmação enviada com sucesso para o seu email!';
                                                //echo " <meta http-equiv='refresh' content='5;URL=act-account.php'>";
                                            }
                                        }
                                    }
                                    
                                /* } */
                            } else {   
                                echo 'Não foi possivel fazer registro! Esse utilizador já esxiste.';
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

<?php 

    include('footer.php');

?>