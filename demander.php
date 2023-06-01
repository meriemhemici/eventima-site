<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventima";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Récupérer les réservations de la table de la base de données
$sql = "SELECT * FROM réservation";
$result = mysqli_query($conn, $sql);

// Afficher les réservations dans un tableau HTML
echo "<table>";
echo "<tr><th>Nom</th><th>Date</th><th>Heure de début</th><th>Heure de fin</th><th>Nombre de personnes</th><th>Action</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['heureD'] . "</td>";
    echo "<td>" . $row['heureF'] . "</td>";
    echo "<td>" . $row['nombrePersonne'] . "</td>";
    echo "<td><button class='accept-btn' data-id='" . $row['id'] . "'>Accepter</button>";
    echo "<button class='reject-btn' data-id='" . $row['id'] . "'>Refuser</button></td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>
