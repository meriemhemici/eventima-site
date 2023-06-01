<html>
    <head>
        <meta charset="UTF-8">
        <title> Eventima</title>
        <link rel="stylesheet" href="Salle.css">
        <link rel="stylesheet" href="TF.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 
    </head>
    <body style="overflow-y: auto;">
        <!--header-->
        <header id="header">
            <a href="AccueilVisite.html" class="logo"> <span>E</span>ventima</a>
            <ul>
                <li><a href="Nos-service.html" class="active" >Nos service</a></li>
                <li><a href="#">Offre</a></li>
                <li><a href="#">Fidélité</a></li>
                <li><a href="#">A propos nous</a></li>
                <li><a href="#">Contactez-nous</a></li>
                <li><a href="#"><i class="fa-solid fa-question"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </header>
        <!--header-->
        <div class="imgtop">
            <a href=""></a>
            <img src="images/salle.jpg" alt="" width="100%" height="300px">
        </div>
       
        <!--body-->
        <div class="title"><h3><b>Salles</b> </h3> </div>


        
        <!--content-->
<div class="main-content">
        <ul >
    <?php
    // Connexion à la base de données
    $db = mysqli_connect("localhost", "root", "", "eventima");

    // Récupération des articles
    $result = mysqli_query($db, "SELECT * FROM article WHERE category='endroit'");

    // Boucle à travers les articles récupérés
    while ($row = mysqli_fetch_assoc($result)) {
        // Affichage de chaque article
        echo '<li>
                <div class="post">
                    <img src="images/'.$row['image'].'" alt="" class="post-image">
                    <div class="post-preview">
                        <h1> '.$row['nom'].'</a></h1> <br> 
                        <i class="fa-sharp fa-solid fa-location-dot">'.$row['lieu'].'</i> <br> <br>
                        <i class="far fa-user">'.$row['capacité'].'</i><br> <br>
                        <P class="preview-text">'.$row['description'].'</P> <br>
                        <i class="fa-solid fa-money-bill-wave">Location:'.$row['prix'].' DA.</i>
                        <a href="" class="btn read"> Read more</a>
                    </div>
                </div>
                <HR></HR>
              </li>';
    }

    // Fermeture de la connexion à la base de données
    mysqli_close($db);
    ?>
    </ul>

    </div>
            
            <!--main-->
           
</div>

     

    
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
<!--fin footer-->
</body>
</html>
