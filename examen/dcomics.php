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
    <link rel="stylesheet" href="./css/dc.css">
    <title>Amine Universe</title>
</head>

<body>
    <header><?php require('./templates/header.php') ?></header>
    <main>
        <div class="container-fluid">
            <div class="jumbotron jumbotron-fluid jumbo">
                <div class="container">
                    <h1 class="display-3 text-center text-primary">DC comics Universe</h1>
                    <p class=" display-4 text-center text-light bg-primary">Bienvenue à vous amoureux de "DC comics" !</p>
                </div>
            </div>
        </div>
        <section class="dcc container-fluid">
            <div class="card-deck">
                <div class="card">
                    <img class="img-fluid car" src="./images/dc/Batman.jpg" class="card-img-top" alt="batman">
                    <div class="card-body">
                        <h5 class="card-title">Batman</h5>
                        <p class="card-text">Bruce Wayne, alias Batman, est un super-héros de fiction appartenant à l'univers de DC Comics. Créé par le dessinateur Bob Kane et le scénariste Bill Finger, il apparaît pour la première fois dans le comic book ...</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted text-center"> Bruce Wayne</small>
                    </div>
                </div>
                <div class="card">
                    <img class="img-fluid car" src="./images/dc/Superman.jpg" class="card-img-top" alt="superman">
                    <div class="card-body">
                        <h5 class="card-title">Superman</h5>
                        <p class="card-text">Superman est un personnage qui apparait dans les comics (les bandes dessinées américaines). Il a été inventé en 1933. Il existe plusieurs versions de l'histoire.

                            C'est un extra-terrestre, qui est né avec ses pouvoirs ; et il se cache derrière des lunettes et un costume civil pour devenir Clark Kent, un journaliste. Pour devenir Superman, il enlève ses lunettes et son costume civil.</p>
                        <div class="card-footer">
                            <small class="text-muted text-center">Clark Kent</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="img-fluid car" src="./images/dc/Diana.png" class="card-img-top" alt="diana">
                        <div class="card-body">
                            <h5 class="card-title">Wonder Woman</h5>
                            <p class="card-text">Wonder Woman est un personnage de science-fiction représenté comme une super-héroïne. Elle apparaît dans les bandes dessinées publiées par DC Comics. Wonder Woman est une princesse des Amazones, un peuple de femmes guerrières.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Diana</small>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <footer><?php require('./templates/footer.php') ?></footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>