<?php
include("connect.php");
session_start();

if(isset($_POST['signup_submit'])){
    $nom = $_POST['nom'];
    $categorie = $_POST['category'];
    $lieu = $_POST['lieu'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $subcategory = $_POST['subcategory'];
    $nomPhoto=$_FILES['image'] ['name'];
    $file_tmp_name=$_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp_name, "C:/xampp/htdocs/Sitefinal/images/" . $nomPhoto);
   
    
    if(isset($_SESSION['idPart'])) {
        $idPartenaire = $_SESSION['idPart'];
        $query = "INSERT INTO article (idPart, nom, category, lieu, description, prix, image, subcat) VALUES ('$idPartenaire', '$nom', '$categorie', '$lieu', '$description', '$prix', '$nomPhoto','  $subcategory')";
    
        $result = mysqli_query($conn,$query);
        
        if($result){
            echo "<script>alert('Article ajouté avec succès!')</script>";
            header("Location: Articles.php");
            exit();
        } else{
            echo "<script>alert('Erreur lors de l\'ajout de l\'article.')</script>";
        }
    } else {
        header('Location: Articles.php');
        echo "<script> alert('Erreur: ID de partenaire non défini. Veuillez vous connecter.')</script>";
exit();
    }
}
mysqli_close($conn);
?>
