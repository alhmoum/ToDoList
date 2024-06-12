<?php

include ('../vue/loginView.php');

require_once ('../model/login.php');

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["login_check"])) {
     
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = password_hash(htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8'), PASSWORD_DEFAULT);

    loginConfirmation($username, $password);
    
}
