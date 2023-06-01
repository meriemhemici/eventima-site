<?php
include('connecterC.php');
if(isset($_POST['signup_submit'])) {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naiss = $_POST['date_naiss'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $tel = $_POST['N_Tel'];
    $mot_de_passe = $_POST['password'];
    $confirmer_mot_de_passe = $_POST['confirmer_mot_de_passe'];
    $recevoir_offres = isset($_POST['recevoir_offres']) ? 1 : 0;

    // Validation des données
    if(empty($nom) || empty($prenom) || empty($date_naiss) || empty($adresse) || empty($email) || empty($tel) || empty($mot_de_passe) || empty($confirmer_mot_de_passe)) {
      $erreur_champs_obligatoires = "Tous les champs sont obligatoires.";
  } elseif($mot_de_passe !== $confirmer_mot_de_passe) {
    $erreur_mot_de_passe = "Les deux mots de passe ne correspondent pas.";
  } else {
      // Connexion à la base de données
      $host = "localhost";
      $user = "root";
      $password = "";
      $database = "eventima";
      $conn = mysqli_connect($host, $user, $password, $database);
        

        // Vérification si l'utilisateur existe déjà
        $query = "SELECT * FROM client WHERE email=?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) > 0) {
          echo "<script>alert('Un compte avec cette adresse e-mail existe déjà.')</script>";
        } else {
            // Insertion des données dans la base de données
            $query = "INSERT INTO client (Nom, Prénom, date_naiss, adresse, email, N_Tel, Password, recevoir_offres, Date_Creat_cpt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, "sssssssi", $nom, $prenom, $date_naiss, $adresse, $email, $tel, $mot_de_passe, $recevoir_offres);
            if(mysqli_stmt_execute($stmt)) {
              echo "<script>alert('Votre compte a été créé avec succès !')</script>";
            } else {
              echo "<script>alert('Erreur lors de la création du compte : ' ')</script>". mysqli_error($conn) ;
            }
        }

        // Fermeture de la connexion à la base de données
        mysqli_close($conn);
    }
}
?>
