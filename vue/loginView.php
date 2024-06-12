<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <header>

    </header>
    <main>
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

    </main>
    <footer>

    </footer>
</body>





</html>