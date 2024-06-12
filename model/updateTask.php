<?php

require('../config.php');

/* Fonction de mise à jour de la tâche, récupère l'objet PDO de connexion à la BDD, l'id de la tâche à modifier et un tableau avec les nouvelles données de la tâche à update */
function updateTask($data_array)
{
    try{
    /* Récupération de l'objet PDO de connexion à la base de données grâce à la fonction connect-db du ficher config.php */
    $pdo = connect_db();
    /* Préparation de la requête SQL */
    $sql = "UPDATE tasks SET title = :title, description = :description, due_date = :due_date, id_task_giver = :id_task_giver, id_assigned_to = :id_assigned_to, id_status = :id_status WHERE id = :id;";
    /* Préparation de l'execution de la requête */
    $result = $pdo->prepare($sql);
    /* Execution de la requête  */
    $result->execute($data_array);
    /* Ferme le curseur, permettant à la requête d'être de nouveau exécutée  */
    if (($result->execute($data_array)) === TRUE) {
        echo '<div class="alert alert-success" role="alert">Update Successful</div>';
    }
    $result->closeCursor();
    }
    catch(Exception $e){
        die ('Erreur : '.$e->getMEssage());
    }
}