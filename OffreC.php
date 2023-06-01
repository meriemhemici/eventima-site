<html>
    <head>
        <title> Eventima</title>
        <link rel="stylesheet" href="css/Salle.css">
        <link rel="stylesheet" href="css/TF.css">
        <link rel="stylesheet" href="css/K.css">
        <link rel="stylesheet" href="css/AccueilVisite.css">
        <style>
            .btn{
    padding: .5rem 1rem;
    background-color: aquamarine;
    color: white;
    border: 1px solid transparent;
    border-radius: .25rem;
}
.btn:hover{
    background-color: aquamarine;
    color: white !important;
}
.main-content .post .read{
    position: absolute;
    bottom: 10px;
    right: 10px;
    border: 1px solid #2d9fe1;
    background: transparent;
    border-radius: 0px;
    color: #2d9fe1;
    text-decoration: none;
}
 .main-content .post .read:hover{
    background: #2d9fe1;
    color: white;
    transition: .25s;
}

        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 
    </head>
    <body>
        <!--header-->
        <header id="header">
            <a href="accueilclient.html" class="logo"> <span>E</span>ventima</a>
            <ul>
            <li><a href="AccueilC.php"  >Nos service</a></li>
            <li><a href="offre.php">Offre</a></li>
            <li><a href="fedelitee.html">Fidélité</a></li>
            <li><a href="a propos de ns.html" class="active">A propos nous</a></li>
            <li><a href="contacter nous pied.html">Contactez-nous</a></li>
            <li><a href="FAQ.html"><i class="fa-solid fa-question"></i></a></li>
            <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>
            <li><a href="panier.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
             
            </ul>
        </header>
        <div class="title"><h3><b>Salles</b> </h3> </div>
        <!--content-->
        
            <!--main-->
            <div class="main-content">
            <?php
// Inclure le fichier de connexion à la base de données
include("connect.php");

// Requête pour sélectionner toutes les offres
$query = "SELECT * FROM offre";
$result = mysqli_query($conn, $query);

// Vérifier si des offres existent
if(mysqli_num_rows($result) > 0) {
    // Parcourir les résultats de la requête
    while($row = mysqli_fetch_assoc($result)) {
        // Affichage des détails de chaque offre dans une div
        echo '<div class="post">';
        echo '<img src="' . $row['image'] . '" alt="" class="post-image">';
        echo '<div class="post-preview">';
        echo '<h1><a href="article1.html">' . $row['nom'] . '</a></h1><br>';
        
        // Vérifier si la clé 'lieu' existe avant de l'afficher
        if(isset($row['lieu'])) {
            echo '<i class="fa-sharp fa-solid fa-location-dot">' . $row['lieu'] . '</i><br><br>';
        }
        
        echo '<p class="preview-text">' . $row['description'] . '</p><br>';
        
        // Vérifier si la clé 'newprix' existe avant de l'afficher
        if(isset($row['newprix'])) {
            echo '<h3>' . $row['newprix'] . '</h3><br>';
            echo '<i class="fa-solid fa-money-bill-wave">Nouveaux Prix:' . $row['newprix'] . ' DA.</i><br><br>';
        }
        
        echo '<br><br>';
        echo '<a href="detailles.html" class="btn read"> Read more</a>';
        echo '</div>';
        echo '</div>';
        echo '<hr></hr>';
    }
} else {
    echo 'Aucune offre disponible.';
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>


                </div>
                <HR></HR>
            </div>
            
            <!--main-->
           
        </div>
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
          
    </body>
</html>