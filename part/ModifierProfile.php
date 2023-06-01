<?php 
    include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier Profile</title>
	<link rel="stylesheet" type="text/css" href="ModifierProfile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 
  
  
</head>
<body>
    <!--header-->
       
    <header id="header">
        <a href="AccueilVisite.html" class="logo"> <span>E</span>ventima</a>
        <ul>
            <li><a href="AccueilPartenaire.html"  class="active" >Mon Profile</a></li>
            <li><a href="Articles.html" >Mes Articles</a></li>
            <li><a href="demande.html">Les Demandes</a></li>
            <li><a href="Offre.html">Mes Offres</a></li>
            <li><a href="#">Déconnecter</a></li>
            <li><a href="a propos de ns.html"><i class="fa-solid fa-question"></i></a></li>
            
        </ul>
     </header>
     <div>
        <h1><b>Modifier Mon Profile</b></h1> <br><br>

     <form action="changeprofile.php" method="post">
        <img class="container" src="images/S1.jpg" alt="Photo de profil">
        <label for="photo"></label>
        <input type="file" id="photo" name="photo"><br><br>

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br>
    
        <label for="Prénom">Prénom:</label>
      <input type="text" id="prénom" name="prénom">
        
    
      <label for="adresse">Adresse :</label>
      <input type="text" id="adresse" name="adresse" >
      
      
      <label for="tel">Numéro de Telephone:</label>
        <input type="tel" id="tel" name="tel"><br>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email"><br>
      
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password"><br>
    
        
        
        
    
       
      
        <input type="submit" value="Modifier le Profile">
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
<!--fin footer-->

</body>
</html>