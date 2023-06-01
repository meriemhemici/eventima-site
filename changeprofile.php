<?php
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
// Récupération des données saisies par l'utilisateur
$nom = $_POST["nom"];
$prenom = $_POST["prénom"];
$adresse = $_POST["adresse"];
$telephone = $_POST["tel"];
$email = $_POST["email"];
$password = $_POST["password"];
// Récupération du type d'utilisateur à partir de la session (exemple)
$type_utilisateur = $_SESSION['type_utilisateur'];

// Vérification du type d'utilisateur et mise à jour de la table appropriée
if($type_utilisateur == 'client') {
  $sql = "UPDATE client SET nom='$nom', prenom='$prenom', adresse='$adresse', telephone='$telephone', password='$password' WHERE email='$email'";
} else if($type_utilisateur == 'partenaire') {
  $sql = "UPDATE partenaire SET nom='$nom', prenom='$prenom', adresse='$adresse', telephone='$telephone', password='$password' WHERE email='$email'";
}

// Exécution de la requête SQL
if ($conn->query($sql) === TRUE) {
    echo "Les informations ont été modifiées avec succès.";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
