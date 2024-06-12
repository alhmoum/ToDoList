<?php

require_once './config.php';



function addTask($parameters)
{

    try{

    $pdo = connect_db();
   
    $sql = 'INSERT INTO  tasks title = :title, description = :description, started_time = :started_time, due_date = :due_date, id_task_giver = :id_task_giver, 
    id_assigned_to = :id_assigned_to, id_status = :id_status ';
   

   /*  $sql = "INSERT INTO tasks ( title, description, started_time, due_date, id_task_giver, id_assigned_to, id_status) 
    VALUES (:title, :description, :started_time, :due_date, :id_task_giver, :id_assigned_to, :id_status, )";
    */
    $stmt = $pdo->prepare($sql);
   /* $parameters = array(':title' => $title, ':description' => $description, ':started_time' => $started_time,':due_date' => $due_date, ':id_task_giver' => $id_task_giver, 
   ':id_assigned_to' => $id_assigned_to, ':id_status' => $id_status);*/

    // useful for debugging: you can see the SQL behind above construction by using:
     //echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
     $stmt->execute($parameters);
     if (($stmt->execute($parameters)) === TRUE) {
        echo '<div class="alert alert-success" role="alert">Update Successful</div>';
    }

}
    catch(Exception $e){
        die ('Erreur : '.$e->getMEssage());
    }
}

//INSERT INTO `tasks` VALUES (1, 'projet crud ', 'finir le projet crud tasks', '2024-06-11 23:59:59.999','2024-07-8 23:59:59.999', 1 , 3, 1);
/**/
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
