<?php

require_once('../conf.php');
session_start();

$id_code  = $_REQUEST['code'];

$upt_ip = "UPDATE `v_login` SET `estado` = '0' WHERE `v_login`.`id_log` = '$id_code';";
$resultupdate_ip = mysqli_query($ligacao, $upt_ip) or die ('Erro de ligação.');

if (!$resultupdate_ip) {                                                
    echo 'Não foi possivel fazer login!<br>';                                                
} else {
    
    session_destroy();
    echo "<meta http-equiv='refresh' content='0;URL=../login.php'>";
    ?>
        <script type='text/javascript'> alert('Até já, nos vemos em breve! \r\nObrigado!'); </script>
    <?php
}
?>