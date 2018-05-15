<?php

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];
/*
$datanascimento = $_POST['datanascimento'];
$cargo = $_POST['cargo'];
$cpf = $_POST['cpf'];
$pagamento = $_POST['pagamento'];
$country = $_POST['country'];
$city = $_POST['city'];
$adress = $_POST['adress'];
$numberhouse = $_POST['numberhouse'];
*/


/*
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $datanascimento;
echo "<br>";
echo $cargo;
echo "<br>";
echo $cpf;
echo "<br>";
echo $pagamento;
echo "<br>";
echo $country;
echo "<br>";
echo $city;
echo "<br>";
echo $adress;
echo "<br>";
echo $numberhouse;
echo "<br>";
*/

    //Mail

    //Message
    $message  = "Nome: ".$name."<br> \r\n";
    $message .= "Email: ".$email."<br> \r\n";
    $message .= "Duvida: ".$comment." .";
    //$message .= "Data de nascimento: ".$datanascimento." \r\n";
    //$message .= "Pais: ".$country." \r\n";
    //$message .= "Cidade: ".$city." \r\n";
    //$message .= "Morada: ".$adress." \r\n";
    //$message .= "Numero casa: ".$numberhouse." \r\n";
    //$message .= "CPF: ".$cpf." \r\n";
    //$message .= "Cargo: ".$cargo." \r\n";
    //$message .= "Pagamento: ".$pagamento." \r\n";

    // Mail header
    $header  = "MIME-Version: 1.0"."\r\n";
    $header .= "Content-type: TEXT/HTML; charset=UTF-8;"."\r\n";
    $header .= "X-Mailer: PHP/" . phpversion();
    $header .= "From: ".$name." <".$email."> \r\n";


    // Send mail
    $send_mail = mail("gszafalao@gmail.com", "Assunto: Dúvida | IP - Immigration Project.", $message, $header);
    
    if(!$send_mail) {
		echo 'Mensagem não enviada!';
	} else {
		echo '<script type="text/javascript">alert("Obrigado por contribuir para IP - Immigration Project! \r\nResponderemos assim que possivel.");</script>';
        echo " <meta http-equiv='refresh' content='0;URL=../venue/index.php#contact-us'>";
	}

?>