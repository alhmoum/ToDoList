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
        <h1>Inscription</h1>
        <form method="post" action="">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" required>
            <br>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>
            <br>
            <label for="password">Confirmez le mot de passe</label>
            <input type="password" name="password_confirmation" id="password" required>
            <button type="submit" name = "signup">S'inscrire</button>
        </form>

        <a href="../controller/loginController.php">Vers le formulaire de connexion</a>

    </main>
    <footer>

    </footer>
</body>





</html>