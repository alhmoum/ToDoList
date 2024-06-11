<?php

require_once './config.php';


function addTask($id, $parameters)
{
    $sql = "INSERT INTO tasks ( id, name, description, due_date, id_task_giver, id_assigned_to, id_status) VALUES (:id, :name, :description, :due_date, :id_task_giver, :id_assigned_to, :id_status )";
    $query = $pdo->prepare($sql);
    $parameters = array(':id' => $id, ':name' => $name, ':description' => $description, ':due_date' => $due_date, ':id_task_giver' => $id_task_giver,  );

    // useful for debugging: you can see the SQL behind above construction by using:
    // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

    $query->execute($parameters);
}
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


function updateTask($pdo, $data_array)
{
    try{
    
    $sql = "UPDATE tasks SET name = :name, description = :description, due_date = :due_date, id_task_giver = :id_task_giver, id_assigned_to = :id_assigned_to, id_status = :due_date WHERE id = :id;";
   
    $result = $pdo->prepare($sql);
    
    $result->execute($data_array);
   
    $result->closeCursor();
    }
    catch(Exception $e){
        die ('Erreur : '.$e->getMEssage());
    }
}
