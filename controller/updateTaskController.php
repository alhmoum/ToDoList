<?php
include ('../vue/updateTaskView.php');
include ('../config.php');

$pdo = connect_db();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_task"])) {
    $data_array = ['name' => $_POST['name']];
    updateTask($pdo, $id, $data_array);
}