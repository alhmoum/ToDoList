<?php
require_once './config.php';
require_once './model/deleteTask.php';

// Vérification de la méthode de requête et de la présence de l'ID dans la requête POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    // Récupération de l'ID de la tâche à supprimer
    $id = $_POST['id'];

    // Appel de la fonction de suppression de tâche
    try {
        // Appel de la fonction deleteTask
        if (deleteTask($id)) {
            echo "Tâche supprimée avec succès.";
        } else {
            echo "Échec de la suppression de la tâche.";
        }
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
} else {
    echo 'Requête invalide ou ID de tâche manquant.';
}

?>

