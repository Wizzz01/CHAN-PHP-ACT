<?php
session_start();        

    if(isset($_POST['login'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $cryptedPassword = password_hash($password, PASSWORD_BCRYPT);
        
        echo '<h1>user logged in: ' .$username.'</h1>';
        echo '<h1>password:' .$cryptedPassword.'</h1>';
        }
    ?>