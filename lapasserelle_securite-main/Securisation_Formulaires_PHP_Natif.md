
# Cours sur la Sécurisation des Formulaires en PHP Natif

## Introduction
La sécurisation des formulaires est essentielle pour protéger votre application contre diverses menaces, telles que les injections SQL, les attaques XSS (cross-site scripting), et les falsifications de requêtes (CSRF). Dans ce cours, nous allons couvrir les meilleures pratiques pour sécuriser les formulaires en PHP natif.

## Partie 1: Sécurisation des Entrées Utilisateur

### 1. Utiliser HTML5 pour Valider les Entrées

HTML5 offre des attributs de validation qui peuvent être utilisés pour s'assurer que les données soumises par l'utilisateur respectent certains critères avant même d'être envoyées au serveur.

```html
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire sécurisé</title>
</head>
<body>
    <h1>Ajouter une tâche</h1>
    <form method="post" action="process_form.php">
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" required minlength="3" maxlength="255">
        <br>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
        <br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
```

### 2. Échapper les Données Entrantes

En PHP, il est crucial d'échapper les données entrantes pour éviter les injections SQL et les attaques XSS.

```php
<?php
// process_form.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
    $description = htmlspecialchars($_POST['description'], ENT_QUOTES, 'UTF-8');

    // Connexion à la base de données
    require 'config.php';
    $pdo = connect_db();

    // Préparation de la requête sécurisée
    $stmt = $pdo->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
    $stmt->execute([$title, $description]);

    echo "Tâche ajoutée avec succès!";
}
?>
```

## Partie 2: Protéger Contre les Injections SQL

### 1. Utiliser des Requêtes Préparées avec PDO

Les requêtes préparées avec PDO sont une méthode efficace pour prévenir les injections SQL.

```php
<?php
require 'config.php';
$pdo = connect_db();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
    $description = htmlspecialchars($_POST['description'], ENT_QUOTES, 'UTF-8');

    $stmt = $pdo->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
    $stmt->execute([$title, $description]);

    echo "Tâche ajoutée avec succès!";
}
?>
```

## Partie 3: Protéger Contre les Attaques XSS

### 1. Échapper les Sorties

Il est important d'échapper toutes les données sortantes pour éviter les attaques XSS.

```php
<?php
require 'config.php';
$pdo = connect_db();

// Récupérer toutes les tâches
$stmt = $pdo->query("SELECT * FROM tasks");
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des tâches</title>
</head>
<body>
    <h1>Liste des tâches</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <strong><?php echo htmlspecialchars($task['title'], ENT_QUOTES, 'UTF-8'); ?></strong>
                <p><?php echo htmlspecialchars($task['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                <p><?php echo $task['completed'] ? 'Completed' : 'Not Completed'; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
```

## Partie 4: Protéger Contre les Attaques CSRF

### 1. Utiliser des Jetons CSRF

Les jetons CSRF (Cross-Site Request Forgery) sont une méthode pour garantir que les requêtes soumises proviennent d'un utilisateur authentique.

**Générer et Stocker un Jeton CSRF**

```php
<?php
// Start session
session_start();

// Generate a CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
```

**Inclure le Jeton CSRF dans le Formulaire**

```html
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire sécurisé</title>
</head>
<body>
    <h1>Ajouter une tâche</h1>
    <form method="post" action="process_form.php">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" required minlength="3" maxlength="255">
        <br>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
        <br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
```

**Vérifier le Jeton CSRF lors de la Soumission**

```php
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check CSRF token
    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die("Invalid CSRF token");
    }

    $title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
    $description = htmlspecialchars($_POST['description'], ENT_QUOTES, 'UTF-8');

    require 'config.php';
    $pdo = connect_db();

    $stmt = $pdo->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
    $stmt->execute([$title, $description]);

    echo "Tâche ajoutée avec succès!";
}
?>
```

## Conclusion
En suivant ces pratiques, vous pouvez sécuriser vos formulaires PHP contre les injections SQL, les attaques XSS, et les attaques CSRF. Toujours valider et échapper les données utilisateur, utiliser des requêtes préparées, et implémenter des protections CSRF pour assurer la sécurité de votre application web.
