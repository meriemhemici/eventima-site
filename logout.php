<?php
session_start();

if (isset($_GET['logout'])) {
    // Supprimer toutes les variables de session
    $_SESSION = array();

    // Détruire la session
    session_destroy();

   
}
 // Rediriger vers la page de connexion
 header('Location: login.php');
 exit;
?>
