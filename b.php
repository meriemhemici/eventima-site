<!DOCTYPE html>
<html>
<head>
	<title>Mon site web</title>
</head>
<body>
	<h1>Liste d'articles de bijoux</h1>
	<ul>
		<?php
		// Connexion à la base de données
		$conn = mysqli_connect("localhost", "root", "", "eventima");

		// Récupération des articles de la catégorie "Bijoux"
		$result = mysqli_query($conn, "SELECT * FROM article WHERE category='vetements'");

		// Affichage des articles dans une liste
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<li>" . $row["nom"] . " - " . $row["description"] . $row["image"]."</li>";
		}

		// Fermeture de la connexion à la base de données
		mysqli_close($conn);
		?>
	</ul>
</body>
</html>
<?php
include("connect.php");
session_start();

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
    
    if(isset($_SESSION['idPart'])) {
        $idPartenaire = $_SESSION['idPart'];
        
        // Recherche de l'ID de l'article à partir de son nom
        $query = "SELECT idArticle FROM article WHERE nom='$nom' AND idPart='$idPartenaire'";
        $result = mysqli_query($conn,$query);
        
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $idArticle = $row['idArticle'];
            
            // Insertion du nouveau prix dans la table des offres
            $query2 = "INSERT INTO offre (idArticle, prixAvant, nouveauPrix) VALUES ('$idArticle', '$prix', '$nouveauPrix')";
            $result2 = mysqli_query($conn,$query2);
            
            if($result2){
                echo "<script>alert('Offre ajoutée avec succès!')</script>";
            } else{
                echo "<script>alert('Erreur lors de l\'ajout de l\'offre.')</script>";
            }
        } else {
            echo "<script>alert('Erreur: article non trouvé.')</script>";
        }
    } else {
        header('Location: Articles.php');
        echo "Erreur: ID de partenaire non défini. Veuillez vous connecter.";
        exit();
    }
}
mysqli_close($conn);
?>










<input type="hidden" name="idPart" value="<?php echo $_SESSION['idPart']; ?>">
<input type="hidden" name="idArt" value="<?php echo $idArticle; ?>">