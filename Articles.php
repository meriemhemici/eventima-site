<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mes Articles</title>
    <link rel="stylesheet" type="text/css" href="Articles.css">
    <link rel="stylesheet" href="css/Salle.css">
    <link rel="stylesheet" href="css/TF.css">
    <link rel="stylesheet" href="css/K.css">
    <link rel="stylesheet" href="css/AccueilVisite.css">
    <style>
        .my-button {
            background-color: #2d9fe1;
            color: #fff;
            padding: 1px 2px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-left: 400px;
            width: 140px;
            height: 37px;
            font-size: 20px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body style="overflow-y: auto;" onload="initMap()">
    <!--header-->
    <header id="header">
        <a href="AccueilVisite.html" class="logo"> <span>E</span>ventima</a>
        <ul>
            <li><a href="AccueilPartenaire.html">Mon Profile</a></li>
            <li><a href="Articles.php" class="active">Mes Articles</a></li>
            <li><a href="demande.php">Les Demandes</a></li>
            <li><a href="Offre.php">Mes Offres</a></li>
            <li><a href="logout.php">Déconnecter</a></li>
            <li><a href="a propos de ns.html"><i class="fa-solid fa-question"></i></a></li>
        </ul>
    </header>
    <div class="aj">
        <a href="add.php"><button class="button"></i>Ajouter Article</button></a>
    </div> <br>
    <hr></hr>
    <!--main-->
    <?php
    session_start();
    include("connect.php");

    // Récupération de l'id du partenaire connecté
    $id_partenaire = $_SESSION['idPart'];

    // Sélection des salles ajoutées par le partenaire
    $sql = "SELECT * FROM article WHERE idPart = '$id_partenaire'";
    $result = $conn->query($sql);

    // Affichage des résultats
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<table>";
            echo "<tr>";
            echo "<td><img style='width: 550.667px; margin-right: 20px;' class='img' src='" . $row['image'] . "' alt='salle'></td>";
            echo "<td class='t'><h1 class='h1'>" . $row['nom'] . "</h1><br>";
            echo "<i class='fa-sharp fa-solid fa-location-dot'>" . $row['lieu'] . "</i> <br> <br>";
            echo "<i class='far fa-user'>" . $row['capacité'] . "</i><br> <br>";
            echo "<p class='preview-text'>" . $row['description'] . "</p> <br>";
            echo "<i class='fa-solid fa-money-bill-wave'>Location:" . $row['prix'] . " DA.</i>";
            echo "</td>";
            echo "</tr>";
            echo "</table>";
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo "<form method='POST' action='modifier.php'>";
            echo "<input type='hidden' name='id' value='" . $row['idArt'] . "'>";
            echo "<td><button class='my-button' type='submit'>Modifier</button></td>";
            echo "</form>";
            echo "</td>";
            echo "<td>";
            echo "<form method='POST' action='deleteArt.php'>";
            echo "<input type='hidden' name='id' value='" . $row['idArt'] . "'>";
            echo "<button class='my-button' type='submit'>Supprimer</button>";
            echo "</form>";
            echo "</td>";
            echo "<td>";
            echo "<a href='detailles.html'><button class='my-button' type='submit'> Read more</button></a>";
            echo "</td>";
            echo "</tr>";
            echo "</table>";
            echo "</div>";
            echo "<br><br>";
            echo "<hr></hr>";
            echo "<br><br>";
        }
    } else {
        echo "Aucune salle trouvée.";
    }

    $conn->close();
    ?>
    <!--footer-->
    <footer>
        <br> <br>
        <div class="pied-logo">Eventima</div>
        <div class="pied-de-page">
            <a href="FAQ.html">
                <div class="np">
                    <div class="tl">FAQ</div>
                </div>
            </a>
            <a href="Condition Generale.html">
                <div class="np">
                    <div class="tl">Condition géneral</div>
                </div>
            </a>
            <a href="Equipe.html">
                <div class="np">
                    <div class="tl">L'équipe</div>
                </div>
            </a>
            <a href="contacter nous pied.html">
                <div class="np">
                    <div class="tl">Contact</div>
                </div>
            </a>
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
