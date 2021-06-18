<?php session_start();

$_SESSION['name'] = $_POST['anime'];

if (isset($_POST['dcomics'])) {
    header('Location:../dcomics.php');
    exit();
} elseif (isset($_POST['marvel'])) {
    header('location:../anime.php');
    exit();
}
header('location: ../templates/else.php');
exit();
