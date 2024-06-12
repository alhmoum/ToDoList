<?php
require_once './config.php';

function deleteTask($id) {
    //
    $pdo = connect_db();
    // Début du bloc try pour gérer les exceptions potentielles
    try {
        // Requête SQL pour supprimer une tâche en utilisant un paramètre nommé :id
        $sql = "DELETE FROM tasks WHERE id = :id";
        
        // Préparation de la requête SQL avec l'objet PDO
        $resultat = $pdo->prepare($sql);
        
        // Exécution de la requête préparée en passant l'ID de la tâche à supprimer
        $resultat->execute(array('id' => $id)); 

        // Affichage du message indiquant que la tâche a été supprimée avec succès
        echo "Tâche supprimée.";

        // Fermeture du curseur, libérant ainsi les ressources associées à la requête
        $resultat->closeCursor();
    } catch (Exception $e) {
        // En cas d'exception, affichage du message d'erreur et arrêt de l'exécution du script
        die('Erreur : ' . $e->getMessage());
    }
}