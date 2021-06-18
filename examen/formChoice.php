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
    <title>As your choice</title>
</head>

<body>
    <header>
        <?php require('templates/header.php') ?>
    </header>
    <main>
        <div class="container">
            <form action="./controllers/control.php" method="POST">
                <div class="check">
                    <label>Et vous quel est votre " Universe " préféré ? </label><br>
                    <input type="checkbox" id="dcomics" name="dcomics" value="dcomics">
                    <label for="anime"> DC comics</label><br>
                    <input type="checkbox" id="marvel" name="marvel" value="marvel">
                    <label for="anime"> Marvel</label><br>
                </div>
                <div class="conet">
                    <input type="submit" value="Bienvenue">
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php require('templates/footer.php') ?>
    </footer>
</body>

</html>