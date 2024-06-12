<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet ToDo List - MVC</title>
</head>
<body>

<?php
/**
 * MINI - an extremely simple naked PHP application
 *
 * @package mini
 * @author Panique
 * @link https://github.com/panique/mini/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// TODO get rid of this and work with namespaces + composer's autoloader

// set a constant that holds the project's folder path, like "/var/www/".
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'ToDoList' . DIRECTORY_SEPARATOR);

// load application config (error reporting etc.)
require APP . 'config.php';

// FOR DEVELOPMENT: this loads PDO-debug, a simple function that shows the SQL query (when using PDO).
// If you want to load pdoDebug via Composer, then have a look here: https://github.com/panique/pdo-debug
require APP . 'libs/helper.php';

// load application class
//require APP . 'core/application.php';
//require APP . 'core/controller.php';
//require APP . 'view/_templates/header.php';

require_once './model/addTask.php';

  echo 'test';
?>
    <?php
      if(!empty($_POST['envoyer'])) {
           //$id = "1"; //$name = $_POST['name']
    $title= "projet java"; //$name = $_POST['name']
    $description = "application java "; //$name = $_POST['name']
    $started_time = "2024-06-12 23:59:59.999"; //$name = $_POST['name']
    $due_date = "2024-06-12 23:59:59.999"; //$name = $_POST['name']
    $id_task_giver = "1"; //$name = $_POST['name']
    $id_assigned_to = "4"; //$name = $_POST['name']
    $id_status = "5"; //$name = $_POST['name']

          echo "Bonjour !";
          // ou echo afficher();
           $parameters  = array();
          addTask($parameters);
      }
    ?>
 
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="submit" id="envoyer" name="envoyer" value="envoyer">
<form>
</body>
</html>