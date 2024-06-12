<?php
include ('../vue/updateTaskView.php');

require_once ('../model/updateTask.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_task"])) {
    echo 'J\'essaie d\'update';
    $data_array['id'] = $_POST['id'];
    $data_array['name'] = $_POST['name'];
    $data_array['description'] = $_POST['description'];
    $data_array['due_date'] = $_POST['due_date'];
    $data_array['id_task_giver'] = $_POST['id_task_giver'];
    $data_array['id_assigned_to'] = $_POST['id_assigned_to'];
    $data_array['id_status'] = $_POST['id_status'];
    
    updateTask($data_array);
}