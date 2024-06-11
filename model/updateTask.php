<?php
require('./config.php');

/* Fonction de mise à jour de la tâche, récupère l'objet PDO de connexion à la BDD, l'id de la tâche à modifier et un tableau avec les nouvelles données de la tâche à update */
function updateTask($pdo, $data_array)
{
    try{
    /* Préparation de la requête SQL */
    $sql = "UPDATE tasks SET name = :name, description = :description, due_date = :due_date, id_task_giver = :id_task_giver, id_assigned_to = :id_assigned_to, id_status = :due_date WHERE id = :id;";
    /* Préparation de l'execution de la requête */
    $result = $pdo->prepare($sql);
    /* Execution de la requête  */
    $result->execute($data_array);
    /* Ferme le curseur, permettant à la requête d'être de nouveau exécutée  */
    $result->closeCursor();
    }
    catch(Exception $e){
        die ('Erreur : '.$e->getMEssage());
    }
}