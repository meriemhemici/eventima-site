<?php
include('connecterC.php');
  if(isset($_POST['signup_submit'])) {
    // Récupération des données du formulaire
    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $date_naiss = isset($_POST['date_naiss']) ? $_POST['date_naiss'] : '';
    $adresse = isset($_POST['adresse']) ? $_POST['adresse'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $tel = isset($_POST['N_Tel']) ? $_POST['N_Tel'] : '';
    $mot_de_passe = isset($_POST['password']) ? $_POST['password'] : '';
    $confirmer_mot_de_passe = isset($_POST['confirmer_mot_de_passe']) ? $_POST['confirmer_mot_de_passe'] : '';
    $recevoir_offres = isset($_POST['recevoir_offres']) ? 1 : 0;

  
  // Validation des données
  if(empty($nom) || empty($prenom) || empty($date_naiss) || empty($adresse) || empty($email) || empty($tel) || empty($mot_de_passe) ) {
    echo "Tous les champs sont obligatoires.";
    header("Location:inscrclient.php");
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
    $query = "SELECT * FROM client WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0) {
      echo "Un compte avec cette adresse e-mail existe déjà.";
    } else {
      // Insertion des données dans la base de données
      $query = "INSERT INTO client (Nom, Prénom, date_naiss, adresse, email, N_Tel, Password, Date_Creat_cpt) VALUES ('$nom', '$prenom', '$date_naiss', '$adresse', '$email', '$tel', '$mot_de_passe', NOW())";
      if(mysqli_query($conn, $query)) {
        header("Location:AccueilVisite.html");
        exit();

      } else {
        echo "Erreur lors de la création du compte : " . mysqli_error($conn);
      }
    }
    
    // Fermeture de la connexion à la base de données
    mysqli_close($conn);
  }
}
?>




















<?php 
    include("connecterC.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<link rel="stylesheet" type="text/css" href="mstyle.css">
</head>
<body>
	
    <header> <img src="top.png" alt="" width="100%" height="500px" > </header>
    <div id="login-box">
        <div class="left">
          <h1 class="Inscription"><b>Inscription</b></h1>
          <form action="inscrC.php" method="POST">
          <input type="text" name="nom" id="nom" placeholder="Nom " />
          <input type="text" name="prenom" id="prenom" placeholder="Prenom" />
          <input type="date" name="date_naiss" id="date_naiss" placeholder="Date de naissance " />
          <input type="text" name="adresse" id="adresse" placeholder="adresse " />
          <input type="text" name="email" id="email" placeholder="E-mail" />
          <input type="text" name="N_Tel" id="N_Tel" placeholder="Numero de Telephone"/>
          <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" />
          <input type="password" name="confirmer_mot_de_passe" id="confirmer_mot_de_passe" placeholder="Confirmer" />
          <div><input type="checkbox" name="recevoir_offres" id="recevoir_offres"> <label for="sevenir"> Je souhaite recevoir les offres et les promotions 
          </label></div>
          
          
          <input type="submit" name="signup_submit" value="Inscrire" />
          </form>
          <div style="color:red">
    <?php if(isset($erreur_mot_de_passe)) { echo $erreur_mot_de_passe; } ?>
</div>
        </div>
        
        <div class="right">
          
          
          <button class="social-signin facebook">Facebook</button>
          <button class="social-signin twitter">Twitter</button>
          <button class="social-signin google">Google+</button>
        </div>
        <div class="or">OU</div>
      </div>
</body>
</html>