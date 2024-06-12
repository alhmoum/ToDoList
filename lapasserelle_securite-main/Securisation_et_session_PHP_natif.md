## Partie 5: Gestion des Sessions et Authentification Sécurisée
### 1. Démarrage et Gestion des Sessions

Le démarrage de session doit se faire en haut de chaque script où la session sera utilisée. Voici comment démarrer une session et vérifier si un utilisateur est connecté.

```php

<?php
// Start session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    // Rediriger vers la page de connexion
    header("Location: login.php");
    exit();
}
?>
```

### 2. Authentification des Utilisateurs

Pour gérer l'authentification des utilisateurs, nous avons besoin de formulaires de connexion et d'inscription, ainsi que des scripts pour traiter ces formulaires.

**Formulaire d'inscription (register.php)** 

```html

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="post" action="register_process.php">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
``` 

**Traitement du formulaire d'inscription (register_process.php)**

```php

<?php
require 'config.php';
$pdo = connect_db();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->execute([$username, $password]);

    header("Location: login.php");
}
?>
```

**Formulaire de connexion (login.php)**

```html

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="post" action="login_process.php">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
```

**Traitement du formulaire de connexion (login_process.php)**

```php

<?php
session_start();
require 'config.php';
$pdo = connect_db();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php");
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>

```

