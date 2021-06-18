<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lovers+Quarrel&family=Parisienne&family=Sofia&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3c7f5856f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Connexion</title>
</head>

<body>
    <header>
        <?php require('templates/header.php') ?>
    </header>
    <main class="princi">

        <div class="container">
            <form action="./controllers/login.php" method="POST">
                <label for="name"><b>Login : </b></label>
                <input type="text" name="name" required>
                <label for="password"><b>Mot de passe : </b></label>
                <input type="password" name="password">
                <div class="conet">
                    <input type="submit" value="Se connecter">
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php require('templates/footer.php') ?>
    </footer>
</body>

</html>