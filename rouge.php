<?php
session_start();
include("connect.php");

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventima";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération de l'id du partenaire connecté
$id_partenaire = $_SESSION['idPart'];

    // Sélection des salles ajoutées par le partenaire
    $sql = "SELECT * FROM article WHERE idF = '$id_partenaire'";
    $result = $conn->query($sql);

// Affichage des résultats
if ($result->num_rows > 0) {
    $idArticle = 0; 
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<table>";
        echo "<tr>";
        echo "<td><img style='width: 250.667px; margin-right: 20px;' class='img' src='" . $row['photo'] . "' alt='salle'></td>";
        echo "<td class='t'><h1 class='h1'>" . $row['Libelle'] . "</h1><br>";
        echo "<i class='fa-sharp fa-solid fa-location-dot'>" . $row['dispo_prod'] . "</i> <br> <br>";
        echo "<i class='fa-sharp fa-solid fa-location-dot'>" . $row['description'] . "</i> <br> <br>";
        echo "<i class='fa-sharp fa-solid fa-location-dot'>" . $row['Contact'] . "</i> <br> <br>";

        echo "<i class='far fa-user'>" . $row['categorie'] . "</i><br> <br>";
        echo "<p class='preview-text'>" . $row['typeTransaction'] . "</p> <br>";
        echo "<i class='fa-solid fa-money-bill-wave'>Location:" . $row['prix'] . " DA.</i>";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        echo "<table>";
        echo "<tr>";
        echo "<td>
        <form method='POST' action='deleteArt.php'>
          <input type='hidden' name='id' value='" . $row['ID_P']. "'>
          <button class='my-button' type='submit'>Supprimer</button>
        </form>
      </td>";

        echo "<td><a href='ModifierSalle.php?id=" . $row['idPart'] . "'><button class='my-button'>Modifier</button></a></td>";
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