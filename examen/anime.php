<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lovers+Quarrel&family=Parisienne&family=Sofia&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3c7f5856f6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/anime.css">
    <title>Amine Universe</title>
</head>

<body>
    <header><?php require_once('./templates/header.php') ?></header>
    <main>
        <div class="container-fluid">
            <div class="jumbotron jumbotron-fluid jumbo">
                <div class="container">
                    <h1 class="display-3 text-center text-danger">Marvel Universe</h1>
                    <p class=" display-4 text-center text-danger bg-light">Bienvenue à vous amoureux de "Marvel" !</p>
                </div>
            </div>
        </div>
        <section class="marvel container-fluid">
            <div class="card-deck">
                <div class="card">
                    <img class="img-fluid car" src="./images/marvel/X-menA.png" class="card-img-top" alt="xmen">
                    <div class="card-body">
                        <h5 class="card-title">Les X-Men</h5>
                        <p class="card-text">Une poignée de jeunes mutants réunis dans un institut où ils apprennent à utiliser leurs pouvoirs à bon escient.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted text-center"> Les X-men</small>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid car" src="./images/marvel/Ironman.jpg" class="card-img-top" alt="tony">
                    <div class="card-body">
                        <h5 class="card-title">Iron Man</h5>
                        <p class="card-text">Tony Stark, inventeur de génie, vendeur d'armes et playboy milliardaire, est kidnappé en Aghanistan.<br>
                            Forcé par ses ravisseurs à fabriquer une arme redoutable, il construit en secret une armure high-tech révolutionnaire qu'il utilise pour s'échapper.
                            Comprenant la puissance de cette armure, il décide de l'améliorer et de l'utiliser pour faire régner la justice et protéger les innocents.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted text-center">Tony Stark</small>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid car" src="./images/marvel/captainA.jpg" class="card-img-top" alt="steeve">
                    <div class="card-body">
                        <h5 class="card-title">Captain America</h5>
                        <p class="card-text">Après avoir tenté vainement de s'engager dans l'armée pour se battre aux côtés des Alliés, Steve Rogers, frêle et timide, se porte volontaire pour participer à un programme expérimental qui va le transformer en un super soldat connu sous le nom de Captain America. Sous le commandement du colonel Chester Phillips, il s'apprête à affronter l'organisation scientifique secrète des nazis, aux côtés de Bucky Barnes et Peggy Carter.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Steeve Rogers</small>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer><?php require_once('./templates/footer.php') ?></footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>