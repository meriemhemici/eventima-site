<?php 
include('connect.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<link rel="stylesheet" type="text/css" href="mstyle.css">
</head>
<body style="overflow-y: auto;">
	
    <header> <img src="images/top.png" alt="" width="100%" height="500px" > </header>
    <div id="login-box">
        <div class="left">
          <h1 class="Inscription"><b>Inscription</b></h1>
          <form action="signupP.php" method="POST">
          <input type="text" name="nom" id="nom" placeholder="Nom" />
        <?php if(isset($erreur_nom)) { echo '<div class="erreur">'.$erreur_nom.'</div>'; } ?>         
        <input type="text" name="prenom" id="prenom" placeholder="Prenom" />
        <?php if(isset($erreur_prenom)) { echo '<div class="erreur">'.$erreur_prenom.'</div>'; } ?>
          <input type="date" name="date_naiss" id="date_naiss" placeholder="Date de naissance " />
          <input type="text" name="adresse" id="adresse" placeholder="adresse " />
          <input type="text" name="email" id="email" placeholder="E-mail" />
        <?php if(isset($erreur_email)) { echo '<div class="erreur">'.$erreur_email.'</div>'; } ?>
        <input type="text" name="N_Tel" id="N_Tel" placeholder="Numero de Telephone"/>
          <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" />
        <?php if(isset($erreur_mot_de_passe)) { echo '<div class="erreur">'.$erreur_mot_de_passe.'</div>'; } ?>
        
        <input type="password" name="confirmer_mot_de_passe" id="confirmer_mot_de_passe" placeholder="Confirmer" />
        <?php if(isset($erreur_confirmer_mot_de_passe)) { echo '<div class="erreur">'.$erreur_confirmer_mot_de_passe.'</div>'; } ?>
          <div><input type="checkbox" name="recevoir_offres" id="recevoir_offres"> <label for="sevenir"> Je souhaite recevoir les offres et les promotions 
          </label></div>
          
          
          <input type="submit" name="signup_submit" value="Inscrire" />
          </form>
          <?php 
              if(isset($erreur_mot_de_passe)) {
                  echo '<div style="color:red">Les deux mots de passe ne correspondent pas.</div>';
              }
              if(isset($erreur_champs_obligatoires)) {
                  echo '<div style="color:red">Tous les champs sont obligatoires.</div>';
              }
              if(isset($erreur_email_existe)) {
                  echo '<div style="color:red">Un compte avec cette adresse e-mail existe déjà.</div>';
              }
          ?>
        </div>
        
        <div class="right">
          
          
          <button class="social-signin facebook">Facebook</button>
          <button class="social-signin twitter">Twitter</button>
          <button class="social-signin google">Google+</button>
        </div>
        <div class="or">OU</div>
      </div>
      <?php 
          if(isset($success_message)) {
              echo '<div style="color:green">'.$success_message.'</div>';
          }
      ?>
</body>
</html>