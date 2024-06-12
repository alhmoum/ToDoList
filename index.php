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
          echo "Bonjour !";
          // ou echo afficher();
          addTask($parameters);
      }
    ?>
 
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="submit" id="envoyer" name="envoyer" value="envoyer">
<form>
</body>
</html>