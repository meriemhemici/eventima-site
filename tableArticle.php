<?php

include('connecterC.php');
if(isset($_POST['signup_submit'])) {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $category = $_POST['category'];
    $lieu = $_POST['lieu'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    // Vérification de la présence d'une image et enregistrement sur le serveur
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        $filename = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        $filesize = $_FILES['image']['size'];
        $filetype = $_FILES['image']['type'];
        $filepath = "images/".$filename;
        move_uploaded_file($tmpname,$filepath);
    }
    else {
        $filepath = "";
    }
    
    // Validation des données
    if(empty($nom) || empty($category) || empty($lieu) || empty($prix) || empty($filepath)) {
        echo "Remplir tous les champs";
    }
    else {
        // Connexion à la base de données
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "eventima";
        $conn = mysqli_connect($host, $user, $password, $database);
        // Insertion des données dans la base de données
        $query = "INSERT INTO article (nom, category, lieu, description, prix, image) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssssds", $nom, $category, $lieu, $description, $prix, $filepath);
        if(mysqli_stmt_execute($stmt)) {
            $success_message = "Votre article a été ajouté avec succès !";
        }
        else {
            echo '<div>Erreur lors de l\'ajout de l\'article : ' . mysqli_error($conn) . '</div>';
        }
        // Fermeture de la connexion à la base de données
        mysqli_close($conn);
    }
}
?>
