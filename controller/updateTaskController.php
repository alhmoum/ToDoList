<?php
include ('../vue/updateTaskView.php');

require_once ('../model/updateTask.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_task"])) {
    echo 'J\'essaie d\'update';
    $data_array['id'] = htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8');
    $data_array['title'] = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
    $data_array['description'] = htmlspecialchars($_POST['description'], ENT_QUOTES, 'UTF-8');
    $data_array['due_date'] = htmlspecialchars($_POST['due_date'], ENT_QUOTES, 'UTF-8');
    $data_array['id_task_giver'] = htmlspecialchars($_POST['id_task_giver'], ENT_QUOTES, 'UTF-8');
    $data_array['id_assigned_to'] = htmlspecialchars($_POST['id_assigned_to'], ENT_QUOTES, 'UTF-8');
    $data_array['id_status'] = htmlspecialchars($_POST['id_status'], ENT_QUOTES, 'UTF-8');
    updateTask($data_array);
}