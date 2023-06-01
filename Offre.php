
<!DOCTYPE html>
<html>
<head>
    <title>Mes offres</title>
    <link rel="stylesheet" type="text/css" href="Offre.css">
    <style>
        .button{
            margin-left:70%;
        }
    </style>
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 
</head>
<body style="overflow-y: auto;">


  

    <header id="header">
        <a href="AccueilVisite.html" class="logo"> <span>E</span>ventima</a>
        <ul>
            <li><a href="AccueilPartenaire.html"  >Mon Profile</a></li>
            <li><a href="Articles.php" >Mes Articles</a></li>
            <li><a href="demande.php">Les Demandes</a></li>
            <li><a href="Offre.php" class="active">Mes Offres</a></li>
            <li><a href="logout.php">Déconnecter</a></li>
            <li><a href="a propos de ns.html"><i class="fa-solid fa-question"></i></a></li>
            
        </ul>
     </header>

     <div class="aj">
        <a href="AjouteOffre.php"><button class="button" ></i>Ajouter Offre</button></a>
     </div> <br>
     <hr></hr>


     <?php
// Inclure le fichier connect.php pour la connexion à la base de données
include("connect.php");

// Requête pour récupérer les offres depuis la base de données
$query = "SELECT * FROM offre";
$result = mysqli_query($conn, $query);

// Vérifier si des offres sont trouvées
if(mysqli_num_rows($result) > 0) {
    // Parcourir les offres et afficher les données
    while($row = mysqli_fetch_assoc($result)) {
        $nom = $row['nom'];
        $description = $row['description'];
        $dated = $row['dateD'];
        $datef = $row['dateF'];
        $prix = $row['prix'];
        $newprix = $row['Newprix'];
        $image = $row['image'];
        
        // Générer le code HTML pour afficher chaque offre
        echo '<div>';
        echo '<table class="tab">';
        echo '<tr>';
        echo '<td><img class="off" src="'.$image.'"></td>';
        echo '<td class="tdd"><h1>'.$nom.'</h1><br><h2 class="hh">'.$newprix.' DA</h2><h3 class="nn"><s>'.$prix.' DA</s><br><br></h3><h2>'.$dated.'<br>'.$datef.'</h2></h2> </td>';
        echo "<td>";
        echo "<form method='POST' action='deleteOffre.php?idArt=" . $row['idArt'] . "'>";
        echo "<input type='hidden' name='id' value='" . $row['idArt'] . "'>";
        echo "<td>";
        echo "<td><a href=''><button class='my-button'>Supprimer</button></a></td>";
        echo "</td>";
        echo "</form>";
        echo"</td>";   
        echo '</tr>';
        echo '</table>';
        echo '</div>';
        echo '<br>';
        echo '<hr>';
        echo '<br>';
    }
} else {
    echo 'Aucune offre trouvée.';
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>

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