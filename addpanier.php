<?php
include("connect.php");

session_start();

if(isset($_POST['submit'])){
    $nom = $_POST['nom'];
    $dated = $_POST['dated'];
    $datef = $_POST['datef'];
    $description = $_POST['description'];
    $prix = $_POST['prix'];
    $newprix = $_POST['Newprix'];

    $nomPhoto=$_FILES['image'] ['name'];
    $file_tmp_name=$_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp_name, "C:/xampp/htdocs/Sitefinal/images/" . $nomPhoto);
   
    
    if(empty($nom) || empty($dated) || empty($datef) || empty($description) || empty($prix) || empty($newprix)){
        echo "<script>alert('Veuillez remplir tous les champs.')</script>";
        exit();
    }
    
    if(isset($_SESSION['idPart'])) {
        $idPart = $_SESSION['idPart'];

        // Vérification de l'existence de l'article avec le nom saisi
        $query = "SELECT idArt FROM article WHERE nom = '$nom'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $idArt = $row['idArt'];

            $query = "INSERT INTO offre (idPart, idArt, nom, dateD, dateF, description, prix, newprix, image) VALUES ('$idPart', '$idArt', '$nom', '$dated', '$datef', '$description', '$prix', '$newprix', '$image')";
            $result = mysqli_query($conn, $query);

            if($result){
                header('Location: Offre.php');
                echo "<script>alert('Offre ajoutée avec succès!')</script>";
            } else{
                header('Location: Offre.php');
                echo "<script>alert('Erreur lors de l\'ajout de l\'offre.')</script>";
            }
        } else {
            header('Location: Offre.php');
            echo "<script>alert('Erreur: Aucun article trouvé avec le nom saisi.')</script>";
        }
    } else {
        echo "<script>alert('Erreur: ID de partenaire non défini. Veuillez vous connecter.')</script>";
    }
    
    mysqli_close($conn);
}
?>
