<?php

require ('../config.php');

function signUp($data_array){
    try{
        /* Connexion à la base de données */
        $pdo = connect_db();
        /* Préparation de la requếte SQL */
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
        /* Préparation de la requête */
        $stmt = $pdo->prepare($sql);
        /* Execution de la requête avec pour paramètre le tableau passé en argument contenant le username et le mot de passe */
        $stmt->execute($data_array);
        echo 'Bien enregistré(e)';
    }
    catch(Exception $e){
        die ('Erreur : '.$e->getMessage());
    } 
}