<?php include('../emt/conf.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Registo | IP - Immigration Project</title>

    <?php include('../emt/link.php'); ?>

</head>

<body class="no-page-top" id="register-page">

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
                            <span>Registro</span>
                        </p>

                        <div class="w3-center">
                            <button class="w3-button demo" onclick="currentDiv(1)">Alunos</button>
                            <button class="w3-button demo" onclick="currentDiv(2)">Professores</button>
                            <button class="w3-button demo" onclick="currentDiv(3)">Outros</button>
                            <div class="w3-section">
                                <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">❮ Prev</button>
                                <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
                            </div>
                        </div>
                        <div class="horizontal-break"></div>

                        <form action="ex_reg_al.php" id="toggleformaluno" class="mySlides" method="post">
                            <div class="row">
                                <div class="form-group">

                                    <h1>ALUNOS</h1>

                                    <div class="col-sm-8">
                                        <label>Nome Completo<span class="required"> *</span></label>
                                        <input type="text" value="" maxlength="100" class="form-control" name="name" id="name" required>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Data de nascimento<span class="required"> *</span></label>
                                        <input type="date" value="" class="form-control" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" data-date="" data-date-format="DD MMMM YYYY" name="datanascimento" id="datanascimento" required>
                                    </div>

                                    <div class="col-sm-8">
                                        <label>Email<span class="required"> *</span></label>
                                        <input type="email" value="" maxlength="100" class="form-control" name="email" id="email1" required>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Cargo<span class="required"> *</span></label>
                                        <select class="form-control" name="cargo" id="cargo" required>
                                                <option value='1'>Aluno</option>    
                                            </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Password<span class="required"> *</span></label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Confirma Password<span class="required"> *</span></label>
                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>CPF<span class="required"> *</span></label>
                                        <input type="text" name="cpf" maxlength="14" id="cpf" class="form-control" OnKeyPress="formatar('###.###.###-##', this)" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <br />
                                    <button name="submit" type="submit" id="sendmesage" class="btn v-btn no-three-d">Fazer registo</button>
                                </div>
                            </div>
                        </form>

                        <form action="ex_reg_prof.php" id="toggleformprof" class="mySlides" method="post">
                            <div class="row">
                                <div class="form-group">

                                    <h1>PROFESSOR</h1>

                                    <div class="col-sm-8">
                                        <label>Nome Completo<span class="required"> *</span></label>
                                        <input type="text" value="" maxlength="100" class="form-control" name="name" id="name" required>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Data de nascimento<span class="required"> *</span></label>
                                        <input type="date" value="" class="form-control" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" data-date="" data-date-format="DD MMMM YYYY" name="datanascimento" id="datanascimento" required>
                                    </div>

                                    <div class="col-sm-8">
                                        <label>Email<span class="required"> *</span></label>
                                        <input type="email" value="" maxlength="100" class="form-control" name="email" id="email1" required>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Cargo<span class="required"> *</span></label>
                                        <select class="form-control" name="cargo" id="cargo" required>
                                                <option value='2'>Professor</option>
                                            </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Password<span class="required"> *</span></label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Confirma Password<span class="required"> *</span></label>
                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>CPF<span class="required"> *</span></label>
                                        <input type="text" name="cpf" maxlength="14" id="cpf" class="form-control" OnKeyPress="formatar('###.###.###-##', this)" required>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>CNPJ<span class="required"> *</span></label>
                                        <input type="text" class="form-control" id="cnpj" name="CNPJ" onKeyPress="MascaraCNPJ(form1.cnpj);" maxlength="18" onBlur="ValidarCNPJ(form1.cnpj);">
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Forma de pagemento<span class="required"> *</span></label>
                                        <select class="form-control" name="pagamento" id="pagamento" required>
                                                <option value=" " hidden> </option>
                                                <?php 
                                                    $payment = "SELECT * FROM `payment` ORDER BY `id_payment` ASC";
                                                    $resultado_payment = mysqli_query($ligacao, $payment);
                                                    while ($resultado_printpay = mysqli_fetch_array($resultado_payment))
                                                    {
                                                        $value_pay = $resultado_printpay['tp_payment'];
                                                        $value_payment = $resultado_printpay['paymnet'];

                                                        echo "<option value='$value_pay'>$value_payment</option>";
                                                    }
                                                ?>
                                            </select>
                                    </div>

                                    <div class="col-sm-8">
                                        <label>LinkedIn URL<span class="required">*</span></label>
                                        <input type="text" value="" maxlength="100" class="form-control" name="LinkedIn" id="LinkedIn" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <br />
                                    <button name="submit" type="submit" id="sendmesage" class="btn v-btn no-three-d">Fazer registo</button>
                                </div>
                            </div>
                        </form>

                        <form action="ex_reg_other.php" id="toggleformall" class="mySlides" method="post">
                            <div class="row">
                                <div class="form-group">

                                    <h1>OUTROS</h1>

                                    <div class="col-sm-8">
                                        <label>Nome Completo<span class="required">*</span></label>
                                        <input type="text" value="" maxlength="100" class="form-control" name="name" id="name" required>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Data de nascimento<span class="required">*</span></label>
                                        <input type="date" value="" class="form-control" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" data-date="" data-date-format="DD MMMM YYYY" name="datanascimento" id="datanascimento" required>
                                    </div>

                                    <div class="col-sm-8">
                                        <label>Email<span class="required">*</span></label>
                                        <input type="email" value="" maxlength="100" class="form-control" name="email" id="email1" required>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>Cargo<span class="required">*</span></label>
                                        <select class="form-control" name="cargo" id="cargo" required>
                                                <option value="" hidden></option>    
                                                <option value="3">Indefinido</option>    
                                                <option value="4">Outro</option>    
                                            </select>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Password<span class="required">*</span></label>
                                        <input type="password" name="password" id="password" class="form-control" required>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Confirma Password<span class="required">*</span></label>
                                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                                    </div>

                                    <div class="col-sm-4">
                                        <label>CPF<span class="required">*</span></label>
                                        <input type="text" name="cpf" maxlength="14" id="cpf" class="form-control" OnKeyPress="formatar('###.###.###-##', this)" required>
                                    </div>



                                    <div class="col-sm-4">
                                        <label>Forma de pagemento<span class="required">*</span></label>
                                        <select class="form-control" name="pagamento" id="pagamento" required>
                                                <option value=" " hidden> </option>
                                                <?php 
                                                    $payment = "SELECT * FROM `payment` ORDER BY `id_payment` ASC";
                                                    $resultado_payment = mysqli_query($ligacao, $payment);
                                                    while ($resultado_printpay = mysqli_fetch_array($resultado_payment))
                                                    {
                                                        $value_pay = $resultado_printpay['tp_payment'];
                                                        $value_payment = $resultado_printpay['paymnet'];

                                                        echo "<option value='$value_pay'>$value_payment</option>";
                                                    }
                                                ?>
                                            </select>
                                    </div>


                                    <div class="col-sm-4">
                                        <label>Pais</label>
                                        <select class="form-control" name="country" id="country" required>
                                                <option value="" hidden> </option>
                                                <?php
                                                    $country = "SELECT * FROM country ORDER BY `id_country` ASC";
                                                    $resultado_country = mysqli_query($ligacao, $country);
                                                    while ($resultado_printcountry = mysqli_fetch_array($resultado_country))
                                                    {
                                                        $value_count = $resultado_printcountry['id_country'];
                                                        $value_country = $resultado_printcountry['country'];

                                                        echo "<option value='$value_count'>$value_country</option>";
                                                    }
                                                ?> 
                                            </select>
                                    </div>


                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <br />
                                    <button name="submit" type="submit" id="sendmesage" class="btn v-btn no-three-d">Fazer registo</button>
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

        <?php include('../emt/footer.php'); ?>
