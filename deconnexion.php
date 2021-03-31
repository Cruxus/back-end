<?php
    session_start();
    session_destroy(); //suppression des cookies
    include("connexion.php"); //retour à la page connexion
?>
