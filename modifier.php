<?php
session_start();
include("connect.php");

// Récupération de l'id du partenaire connecté
$id_partenaire = $_SESSION['idPart'];
$id_art = $_SESSION['idArt'];

// Vérifiez si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assurez-vous d'avoir la connexion à la base de données établie
    // Inclure le fichier de configuration de la connexion à la base de données

    // Vérifiez si les clés d'index sont définies dans le tableau $_POST
    if (isset($_POST["nom"]) && isset($_POST["lieu"]) && isset($_POST["description"]) && isset($_POST["capacité"]) && isset($_POST["prix"])) {
        // Récupérer les données du formulaire
        $nom = $_POST["nom"];
        $categorie = $_POST["categorie"];
        $lieu = $_POST["lieu"];
        $description = $_POST["description"];
        $capacite = $_POST["capacité"];
        $prix = $_POST["prix"];

        // Effectuer la mise à jour dans la base de données
        // Remplacez les lignes suivantes par votre logique de mise à jour

        // Exemple de requête de mise à jour
        $query = "UPDATE article SET nom='$nom', categorie='$categorie', lieu='$lieu', description='$description', capacite='$capacite', prix='$prix' WHERE idArt=$id_art";

        // Exécutez la requête de mise à jour
        if (mysqli_query($conn, $query)) {
            echo "Les informations ont été modifiées avec succès.";
        } else {
            echo "Erreur: " . $query . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier Article</title>
    <link rel="stylesheet" type="text/css" href="
    Articles.css">
    <link rel="stylesheet" href="css/Salle.css">

        <link rel="stylesheet" href="css/TF.css">
        <link rel="stylesheet" href="css/K.css">
        <link rel="stylesheet" href="css/AccueilVisite.css">
        <style>
            form {
		    display: flex;
		    background: #f2f1f1;
		    flex-direction: column;
		    max-width: 600px;
		    margin: auto;
		    padding: 20px;
		    border: 1px solid #ccc;
		    border-radius: 5px;
		    margin-top: 40px;
		}

		label {
		    font-size: 1.2rem;
		    margin-bottom: 10px;
		}

		input[type="text"],
		input[type="number"],
		textarea {
		    font-size: 1.1rem;
		    padding: 10px;
		    border-radius: 5px;
		    border: 1px solid #ccc;
		    margin-bottom: 20px;
		}

		input[type="submit"] {
		    background-color: rgb(20, 175, 226);
		    color: white;
		    font-size: 1.2rem;
		    padding: 10px 20px;
		    border: none;
		    border-radius: 5px;
		    cursor: pointer;
		}

		h1{
		    margin-top: 120px;
		    margin-left: 720px;
            font-size: 2em;

		}
		input[type="file"] {
		    margin-bottom: 20px;
		    font-size: 1.1rem;
		    padding: 10px;
		    border-radius: 5px;
		    border: 1px solid #ccc;
		    margin-bottom: 20px;
		}
		select {
		    font-size: 1.1rem;
		    padding: 10px;
		    border-radius: 5px;
		    border: 1px solid #ccc;
		    margin-bottom: 20px;
		}


		input[type="submit"]:hover {
		    background-color: rgb(28, 146, 186);
		}
        </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 
</head>
<body style="overflow-y: auto;">
    <!--header-->
       
    <header id="header">
        <a href="AccueilVisite.html" class="logo"> <span>E</span>ventima</a>
        <ul>
            <li><a href="AccueilPartenaire.html" >Mon Profile</a></li>
            <li><a href="Articles.php" class="active" >Mes Articles</a></li>
            <li><a href="demande.php">Les Demandes</a></li>
            <li><a href="Offre.php">Mes Offres</a></li>
            <li><a href="logout.php">Déconnecter</a></li>
            <li><a href="a propos de ns.html"><i class="fa-solid fa-question"></i></a></li>
        </ul>
    </header>
     
    <div>
        <h1><b>Modifier Article</b></h1> <br><br>
        <form action="" method="post">
            <label for="nom">Nom de l'article:</label>
            <input type="text" id="nom" name="nom"><br>

            <label for="categorie">Catégorie:</label>
            <select id="categorie" name="categorie">
                <option value="endroits">Endroits</option>
                <option value="animation">Animation</option>
                <!-- Autres options de catégorie -->
            </select><br>

            <label for="lieu">Lieu :</label>
            <input type="text" id="lieu" name="lieu" >

            <label for="description">Description:</label>
            <textarea id="description" name="description"></textarea><br>

            <label for="capacité">Capacité:</label>
            <input type="number" id="capacité" name="capacité"><br>

            <label for="prix">Prix:</label>
            <input type="number" id="prix" name="prix"><br>

            <label for="photo">Photo:</label>
            <input type="file" id="photo" name="photo"><br><br>

            <input type="submit" value="Modifier L'article">
        </form>
    </div>

    <!--footer-->
    <footer>
        <br> <br>
        <div class="pied-logo">Eventima</div>
        <div class="pied-de-page">
            <a href="FAQ.html"><div class="np">
                <div class="tl">FAQ</div>
            </div></a>
            <a href="Condition Generale.html"><div class="np">
                <div class="tl">Condition géneral</div>
            </div></a>
            <a href="Equipe.html"><div class="np">
                <div class="tl">L'équipe</div>
            </div></a>
        
            <a href="contacter nous pied.html"><div class="np">
                <div class="tl">Contact</div>
            </div></a>
        </div>
        <div class="reseau">
            <h3>
                <a href="https://www.facebook.com/"><i1 class="fa-brands fa-square-facebook"></i1></a>
                <a href="https://www.twitter.com/"><i1 class="fa-brands fa-square-twitter"></i1></a>
                <a href="https://www.instagram.com/"><i1 class="fa-brands fa-instagram"></i1></a>
            </h3>
        </div>
    </footer>
    <!--fin footer-->
</body>
</html>
