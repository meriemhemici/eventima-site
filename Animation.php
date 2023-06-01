<html>
    <head>
        <title> Eventima</title>
        <link rel="stylesheet" href="css/TF.css">">
        <link rel="stylesheet" href="css/Nos-service.css">
        <style>
            /*content*/
            .how{
                margin-left:10%;        
            }
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
            <a href="AccueilVisite.html" class="logo"> <span>E</span>ventima</a>
            <ul>
                <li><a href="Nos-service.html" class="active" >Nos service</a></li>
                <li><a href="offre.html">Offre</a></li>
                <li><a href="fedelitee.html">Fidélité</a></li>
                <li><a href="a propos de ns.html">A propos nous</a></li>
                <li><a href="contacter nous pied.html">Contactez-nous</a></li>
                <li><a href="FAQ.html"><i class="fa-solid fa-question"></i></a></li>
                <li><a href="connecter.html"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </header>
        <!--header-->
        <div class="imgtop">
            <img src="images/top.png" alt="" width="100%" height="300px">
            <form action="#" method="" class="search">
                <input type="hidden" value="1">
                <div class="row">
                    <div class="col1">
                        <div class="form-group">
                            <input type="hidden" name="event-type">
                            <input type="text" class="form-control" name="form-search-type-event" placeholder="Quel événement ? *">
                        </div>
                    </div>
                    <div class="col2">
                        <div class="form-group">
                            <input type="hidden" name="form-search-location-id">
                            <input type="hidden" name="form-search-location-type">
                            <input type="text" class="form-control " name="form-search-location" placeholder="Où ? Ex : Algerie / Annaba *">
                        </div>
                    </div>
                    <div class="col2">
                        <div class="form-group">
                            <input type="hidden" name="form-search-type-provider-id" value="148">
                            <input type="text" class="form-control font-weight-bold" name="form-search-type-provider" placeholder="Quoi ? Ex : Service *">
                        </div>
                    
                    </div>
                <div class="col3">
                    <div class="form-group">
                        <button type="submit" class="btn "><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
            </form>
        </div>
        
        <?php
// Connexion à la base de données
$db = mysqli_connect("localhost", "root", "", "eventima");

// Récupération des articles
$result = mysqli_query($db, "SELECT * FROM article WHERE category='animation' ");

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


         
          
              
            </div>
          
          <!--fin de nos service-->
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