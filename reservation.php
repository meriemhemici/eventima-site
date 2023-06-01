<?php
include("connect.php");

session_start();

// Vérifier la connexion
if (!$conn) {
    die("La connexion a échoué: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
// Récupérer les données saisies dans le formulaire
$nom = $_POST['nom'];
$date = $_POST['date'];
$heure_debut = $_POST['heured'];
$heure_fin = $_POST['heuref'];
$nombre_personnes = $_POST['nombrePers'];
$msg = $_POST['message'];
$id_article = $_POST['idArt'];
$id_client = $_POST['idClient'];
if(isset($_POST['id'])) { // vérifier si l'ID de l'article est présent dans le formulaire
    $idArticle = $_POST['id'];
// Préparer la requête d'insertion
$sql = "INSERT INTO réservation (idArt, idClient, nom, date, heureD, heureF, nombrePers, message) VALUES ('$idArticle', '$id_client', '$nom', '$date', '$heure_debut', '$heure_fin', '$nombre_personnes', '$msg')";

// Exécuter la requête d'insertion
if (mysqli_query($conn, $sql)) {
    header('Location: Articles.php');
    echo "<script> La réservation a été enregistrée avec succès.</script>";
} else {
    echo "</script>Une erreur est survenue lors de l'enregistrement de la réservation:</script> " . mysqli_error($conn);
}
}
// Fermer la connexion
mysqli_close($conn);
}
?>
