<?php 
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mes offres</title>
    <link rel="stylesheet" type="text/css" href="Offre.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 
</head>
<body style="overflow-y: auto;">


  

    <header id="header">
        <a href="AccueilVisite.html" class="logo"> <span>E</span>ventima</a>
        <ul>
            <li><a href="AccueilPartenaire.html"  >Mon Profile</a></li>
            <li><a href="Articles.php" >Mes Articles</a></li>
            <li><a href="demande.html">Les Demandes</a></li>
            <li><a href="Offre.php" class="active">Mes Offres</a></li>
            <li><a href="logout.php">Déconnecter</a></li>
            <li><a href="a propos de ns.html"><i class="fa-solid fa-question"></i></a></li>
            
        </ul>
     </header>

     <div class="aj">
        <a href="AjouteOffre.php"><button class="button" ></i>Ajouter Offre</button></a>
        <a href="AjouteArticle.php"><button class="button" ></i>Supprimer tous</button></a>
     </div> <br>
     <hr></hr>

     <div>
        <table class="tab">
          <tr>
            <td><img class="off" src="traiteur.webp"></td>
            <td class="tdd"><h1>Traiteur Ahmed</h1><br><h2 class="hh">2100 DA</h2><h3 class="nn"><s>2500 DA</s><br><br></h3><h2>29-05-2023 <BR>  05-06-2023</h2></h2> </td>
            <td><button class="my-button">Supprimer</button><br><br><br>
            <a href="ModifierOffreO.html"><button class="my-button">Modifier</button></td></a>
          </tr>
        </table>
        

      </div>
    <br>
    <HR ></HR><br>
    <div>
      
      <table >
        <tr>
          <td><img class="off" src="photographe.jpg"></td>
          <td class="tdd"><h1>photographe oussama</h1><br><h2 class="hh">1800 DA</h2><h3 class="nn"><s>2200 DA</s><br><br></h3><h2>10-05-2023 <BR> 25-05-2023</h2></h2> </td>
          <td><button class="my-buton">Supprimer</button><br><br><br>
          <a href="ModifierOffreO.html"><button class="my-buton">Modifier</button></td></a>
        </tr>
      </table>
      
    </div>
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