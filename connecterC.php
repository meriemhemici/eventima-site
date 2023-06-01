<?php
// Informations de connexion à la base de données
$servername = "localhost";
    $username='root';
    $password='';
    $db_name='eventima';

// Tentative de connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Vérification de la connexion
if($conn === false) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}
echo" "
?>
