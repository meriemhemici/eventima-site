<html>
    <head>
        <title> Eventima</title>
        <link rel="stylesheet" href="css/Reservation.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 
    </head>
    <body>
         <!--header-->
         <header id="header">


            <a href="AccueilVisite.html" class="logo"> <span>E</span>ventima</a>
            <ul>
                <li><a href="Nos-service.html"  >Nos service</a></li>
                <li><a href="offreC.html" class="active">Offre</a></li>
                <li><a href="fedelitee.html" >Fidélité</a></li>
                <li><a href="a propos de ns.html">A propos nous</a></li>
                <li><a href="contacter nous pied.html">Contactez-nous</a></li>
                <li><a href="FAQ.html"><i class="fa-solid fa-question"></i></a></li>
                <li><a href="connecter.html"><i class="fa-solid fa-user"></i></a></li>
            </ul>
        </header>




        <div>
            <h1 class="h1"><b>Réservations</b></h1>
            <?php
                // Vérifier si des paramètres d'endroit ont été passés en paramètres GET
                if (isset($_GET['endroit']) && isset($_GET['ville']) && isset($_GET['adresse'])) {
                // Récupérer les paramètres de l'endroit
                    $endroit = $_GET['endroit'];
                    $ville = $_GET['ville'];
                    $adresse = $_GET['adresse'];
                }
            ?>
        <form action="reservation.php" method="post">
            <!-- Vos champs de formulaire -->
            <input type="hidden" name="idArt" value="<?php echo $_GET['idArt']; ?>">
            <input type="hidden" name="idClient" value="<?php echo isset($_GET['idClient']) ? $_GET['idClient'] : ''; ?>">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom"><br>

            <label for="tel">Telephone:</label>
            <input type="number" id="tel" name="tel"><br>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date"><br>

            <label for="heureD">Heure Début:</label>
            <input type="time" id="heured" name="heured"><br>

            <label for="heureF">Heure Fin:</label>
            <input type="time" id="heuref" name="heuref"><br>

            <label for="nombrePers">Nombre de Perssonnes:</label>
            <input type="number" id="nombrePers" name="nombrePers"></textarea><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message"></textarea><br>
        
           
            <input type="submit" name="submit" value="Réserver">
        </form>
        
        
        
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
        <!--fin de footer-->
        </div>
    </body>
</html>