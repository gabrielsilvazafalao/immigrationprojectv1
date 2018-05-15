<?php

function funcuncookie() {
    if($_SERVER['REQUEST_METHOD'] == "POST"){  
        if(isset($_POST['email'])){
            if(isset($_POST['password'])){
                unset($_COOKIE['email']);
                unset($_COOKIE['password']);
                setcookie('email', ' ', time() - 3600, '/'); // empty value and old timestamp
                setcookie('password', ' ', time() - 3600, '/'); // empty value and old timestamp
                session_destroy();
            }
        }
    }
}

funcuncookie();

?>