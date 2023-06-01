<?php
include("connect.php");

if(isset($_POST['signup_submit'])){

    $nom = $_POST['nom'];
    $categorie = $_POST['category'];
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
    
    $image = isset($filepath) ? $filepath : '';
    
    $query = "INSERT INTO article (nom, category, lieu, description, prix, image) VALUES ('$nom', '$categorie', '$lieu', '$description', '$prix', '$image')";
    
    $result = mysqli_query($conn,$query);
    
    if($result){
        echo "<script>alert('Article ajouté avec succès!')</script>";
    } else{
        echo "<script>alert('Erreur lors de l\'ajout de l\'article.')</script>";
    }
}
mysqli_close($conn);
?>
