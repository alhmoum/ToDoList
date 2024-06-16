<?php

require('../config.php');

function loginConfirmation($login, $password)
{
    try {
        /* Connexion à la base de données */
        $pdo = connect_db();
        /* Préparation de la requête SQL */
        $sql = "SELECT password FROM users WHERE username = :login";
        /* préparation de la requête */
        $stmt = $pdo->prepare($sql);
        /* Execution de la requête avec en argument un tableau contenant pour seul élément le login */
        $stmt->execute(array('login' => $login));
        /* On fetch la première (et donc unique dans ce cas) ligne renvoyée par la requête */
        $user = $stmt->fetch();
        /* Password_verify permet de comparer le mot de passe entré par l'utilisateur (non hashé)
        avec le hash stocké en BDD */
        if ($user && password_verify($password, $user['password'])) {
            echo '<div>connexion réussie !</div>';
            $_SESSION['user_id'] = $user['id'];
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } catch (Exception $e) {
        die ('Erreur : '.$e->getMessage());
    }
}
