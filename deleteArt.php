<?php
include("connect.php"); // inclure le fichier de connexion à la base de données
session_start(); // démarrer la session

if(isset($_POST['id'])) { // vérifier si l'ID de l'article est présent dans le formulaire
    $idArticle = $_POST['id'];

    // requête pour supprimer les offres associées à l'article de la base de données
    $queryDeleteOffres = "DELETE FROM offre WHERE idArt = '$idArticle'";
    $resultDeleteOffres = mysqli_query($conn, $queryDeleteOffres);

    // requête pour supprimer l'article de la base de données
    $queryDeleteArticle = "DELETE FROM article WHERE idArt = '$idArticle'";
    $resultDeleteArticle = mysqli_query($conn, $queryDeleteArticle);

    if($resultDeleteArticle){
        echo "<script>alert('L'article et ses offres associées ont été supprimés avec succès.')</script>";
        header("Location: Articles.php");
        exit();
    } else{
        echo "<script>alert('Erreur lors de la suppression de l'article et de ses offres associées.')</script>";
    }
} else {
    header('Location: Articles.php');
    echo "<script> alert('Erreur: ID de partenaire non défini. Veuillez vous connecter.')</script>";
exit();
}


mysqli_close($conn); // fermer la connexion à la base de données
?>
