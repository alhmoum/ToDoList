<?php

include ('../vue/loginView.php');

require_once ('../model/login.php');

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["login_check"])) {
     /* htmlspecialchars permet notament de se prévenir d'injection dans le code en échappant les charactères qui pourrait le permettre*/
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
    /* Fonction de vérification du mot de passe */
    loginConfirmation($username, $password);
    
}
