<html>
    <head>
        <title> Villa </title>
        <link rel="stylesheet" href="Nos-service.css">
        <link rel="stylesheet" href="TF.css">
        <style>
            /*content*/
.title{
    text-align: center;
    font-size: 50px;
    margin-top: -65px;
    background-color: white;
    position: absolute;
    margin-left: 45%;

}


.main-content{
    width: 100%;
    float: left;
    margin-top: 100px;
    background-color: white;

    
}

 .main-content .recent-post-title{
    
    text-align: center;

}
.main-content .post{
    width: 95%;
    height: 270px;
    margin: 20px auto;
    border-radius: 5px;
    background-color: white;
    position: relative;
}
.main-content .post .post-image{
    width: 35%;
    height: 100%;
    float: left;
    margin-left: 10%;
}
.main-content .post .post-preview{
    padding: 15px;
    width: 55%;
    float: left;
    

}
.main-content .post .post-preview i{
    font-size: 15px;
}
    </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 
    </head>
    <body style="overflow-y: auto;">
         <!--header-->
         <header id="header">
            <a href="AccueilC.php" class="logo"> <span>E</span>ventima</a>
            <ul>
                <li><a href="AccueilC.php" class="active" >Nos service</a></li>
                <li><a href="offreC.php">Offre</a></li>
                <li><a href="fedelitee.html">Fidélité</a></li>
                <li><a href="a propos de ns.html">A propos nous</a></li>
                <li><a href="contacter nous pied.html">Contactez-nous</a></li>
                <li><a href="FAQ.html"><i class="fa-solid fa-question"></i></a></li>
                <li><a href="panier (2).html"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </header>
        <!--header-->
        <div class="imgtop">
            <img src="images/salle.jpg" alt="" width="100%" height="300px">
        </div>
        <!--body-->
        <div class="title"><h3><b>Villa</b> </h3> </div>
        <!--nos service-->
     
          <!--nos service-->
     
        <!--content-->
        <div class="main-content">
        <ul >
        <?php
// Connexion à la base de données
$db = mysqli_connect("localhost", "root", "", "eventima");

// Récupération des articles
$result = mysqli_query($db, "SELECT * FROM article WHERE category='endroit' AND subcat='Villa' ");

// Boucle à travers les articles récupérés
while ($row = mysqli_fetch_assoc($result)) {
    // Affichage de chaque article
    echo '<li>
            <div class="post">
                <img src="images/'.$row['image'].'" alt="" class="post-image">
                <div class="post-preview">
                    <h1>'.$row['nom'].'</h1> <br> 
                    <i class="fa-sharp fa-solid fa-location-dot">'.$row['lieu'].'</i> <br> <br>
                    <i class="far fa-user">'.$row['capacité'].'</i><br> <br>
                    <p class="preview-text">'.$row['description'].'</p> <br>
                    <i class="fa-solid fa-money-bill-wave">Location:'.$row['prix'].' DA.</i>
                    <a href="" class="btn read">Read more</a>
                </div>
            </div>
            <hr>
          </li>';
}

// Fermeture de la connexion à la base de données
mysqli_close($db);
?>


    </ul>

    </div>
            
            <!--main-->
        <!--fin de nos service-->











        <!--footer-->
        <footer>
            <br> <br>
            <div class="pied-logo">Eventima</div>
            <div class="pied-de-page">
                
                <div class="np">
                    <div class="tl">FAQ</div>
                </div>
                <div class="np">
                    <div class="tl">Qui somme nous?</div>
                </div>
                <div class="np">
                    <div class="tl">L'équipe</div>
                </div> 
                <div class="np">
                    <div class="tl">Nos administrateurs</div>
                </div>
                <div class="np">
                    <div class="tl">Nos partenaires</div>
                </div>
                <div class="np">
                    <div class="tl">Contact</div>
                </div>

                
            </div>
            <div class="reseau">
                <h3>
                    <i1 class="fa-brands fa-square-facebook"></i>
                    <i1 class="fa-brands fa-square-twitter"></i>
                    <i1 class="fa-brands fa-instagram"></i>
                </h3>
               
            </div>
            
        </footer>
        <!--fin de footer-->
    </body>
</html>