<?php

function funcsetcookie() {
    if($_SERVER['REQUEST_METHOD'] == "POST"){  
        if(isset($_POST['email'])){
            if(isset($_POST['password'])){
                $days = time() + 3600;
                setcookie("email", $_POST['email'], $days);
                setcookie("password", $_POST['password'], $days);
                session_start();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['password'] = $_POST['password'];
                echo 'Email: '.$_SESSION['email'];
                echo 'Password: '.$_SESSION['password'];
            }
        }
    }
}

funcsetcookie();

?>