<?php

include("connect.php"); // inclure le fichier de connexion à la base de données
session_start(); // démarrer la session

if(isset($_POST['id'])) { // vérifier si l'ID de l'article est présent dans la requête POST
    $idArticle = $_POST['id'];

    // Supprimer d'abord les enregistrements liés dans la table offre
    $deleteOffersQuery = "DELETE FROM offre WHERE idArt = '$idArticle'";
    $resultOffers = mysqli_query($conn, $deleteOffersQuery);

    // Vérifier si la suppression des enregistrements de la table offre s'est effectuée avec succès
    if($resultOffers) {
        // Ensuite, supprimer l'article de la table article
        $deleteArticleQuery = "DELETE FROM article WHERE idArt = '$idArticle'";
        $resultArticle = mysqli_query($conn, $deleteArticleQuery);

        if($resultArticle) {
            echo "L'article a été supprimé avec succès.";
        } else {
            echo "Erreur lors de la suppression de l'article.";
        }
    } else {
        echo "Erreur lors de la suppression des enregistrements liés dans la table offre.";
    }
}

mysqli_close($conn); // fermer la connexion à la base de données

// Rediriger vers la page d'affichage des articles
header('Location: articles.php');
exit;
?>