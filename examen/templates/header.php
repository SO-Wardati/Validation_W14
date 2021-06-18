<?php session_start() ?>

<header>
    <nav>
        <ul>
            <li><a href="index.php"><i class="fas fa-house-user imenu"></i> Accueil</a></li>
            <li><a href="anime.php"><i class="fas fa-users imenu"></i> Anime Universe</a></li>
            <?php if (isset($_SESSION['isConnected'])) : ?>
                <div class="speak">
                    <i class="fab fa-speakap"></i>
                    <li>Bonjour, <?= $_SESSION['isConnected'] ?></li>
                    <li><a href="../controllers/logout.php"><i class="fas fa-times-circle imenu"></i> Déconnexion</a></li>
                </div>
            <?php else : ?>
                <li><i class="fas fa-globe imenu"></i><a href="formConnexion.php"> Connexion</a></li>
            <?php endif ?>
        </ul>
    </nav>
</header>