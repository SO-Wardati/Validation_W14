<?php session_start();

$superheroes = [
    [
        'name' => 'batman',
        'password' => 'bruce'
    ],
    [
        'name' => 'superman',
        'password' => 'clark'
    ],
    [
        'name' => 'wonderwoman',
        'password' => 'diana'
    ],
    [
        'name' => 'ironman',
        'password' => 'tony'
    ],
    [
        'name' => 'blackwidow',
        'password' => 'natasha'
    ],
    [
        'name' => 'captainamerica',
        'password' => 'steeve'
    ],
];


foreach ($superheroes as $user) {
    if ($_POST['name'] === $user['name'] && $_POST['password'] === $user['password']) {
        $_SESSION['isConnected'] = ucfirst($_POST['name']);
        $_SESSION['isConnected'];
        header('Location: ../formChoice.php');
        exit();
    }
}
header('Location: ../formConnexion.php');
exit();
