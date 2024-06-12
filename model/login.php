<?php

require ('../config.php');

function loginConfirmation ($login, $password){
    $pdo = connect_db();
    $sql = "SELECT password FROM users WHERE first_name = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$login]);
    $user = $stmt->fetch();
    /* Attention, il faut que les mots de passe soit hashé pour que la confirmation fonctionne */
    if ($user && password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        header("Location; index.php");
    }
    else{
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }

}