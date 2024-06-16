<?php

include('../vue/signUpView.php');

require_once('../model/signUp.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["signup"])) {
    if ($_POST['password'] == $_POST['password_confirmation']) {
        /* htmlspecialchars permet notament de se prévenir d'injection dans le code en échappant les charactères qui pourrait le permettre*/
        $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
        /* password_hash permet de hashé le mot de passe avant de le stocker en base de donnée */
        $password = password_hash(htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8'), PASSWORD_DEFAULT);
        /* Tableau de donnée qui sera passé en argument de la fonction qui permet de mettre en base de donnée l'utilisateur.
        Ceci est relativement pratique car l'objet PDO aura besoin de ce tableau dans la fonction */
        $data_array = array('username' => $username, 'password' => $password);
        /* Fonction d'insertion du nouvel utilisateur et de son mot de passe encrypté en base de donnée */
        signUp($data_array);
    } else {
        echo 'Les mots de passes doivent être identiques <br>';
    }
}
