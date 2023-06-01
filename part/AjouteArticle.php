<?php 
include("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Ajoute Article</title>
	
    <style>
		:focus {
		    outline: none;
		}

		body {
		    margin: 0;
		    padding: 0;
		    background: #fFF;
		    font-size: 16px;
		    color: #222;
		    font-family: 'Roboto', sans-serif;
		    font-weight: 300;
		    height: 1050px;
		}
		#header {
		    position: fixed;
		    top: 0%;
		    left: 0%;
		    width: 100%;
		    padding: 30px 100px;
		    display: flex;
		    justify-content: space-between;
		    align-items: center;
		    z-index: 100;
		    background-color: #fff;
		}
		#header .logo{
		    color: #090909;
		    font-weight: 700;
		    font-size: 2em;
		    text-decoration: none;
		    margin-left: 650px;
		}
		#header .logo span{
		    color:rgb(20, 175, 226);
		}


		img{
		    position: absolute;
		    top: 12%;
		    left: 0;
		    width: 100%;
		    height: 250px;
		    object-fit: cover;
		    pointer-events: none;
		}
		form {
		    display: flex;
		    background: #f2f1f1;
		    flex-direction: column;
		    max-width: 600px;
		    margin: auto;
		    padding: 20px;
		    border: 1px solid #ccc;
		    border-radius: 5px;
		    margin-top: 40px;
		}

		label {
		    font-size: 1.2rem;
		    margin-bottom: 10px;
		}

		input[type="text"],
		input[type="number"],
		textarea {
		    font-size: 1.1rem;
		    padding: 10px;
		    border-radius: 5px;
		    border: 1px solid #ccc;
		    margin-bottom: 20px;
		}

		input[type="submit"] {
		    background-color: rgb(20, 175, 226);
		    color: white;
		    font-size: 1.2rem;
		    padding: 10px 20px;
		    border: none;
		    border-radius: 5px;
		    cursor: pointer;
		}

		h1{
		    margin-top: 400px;
		    margin-left: 695px;
		}
		input[type="file"] {
		    margin-bottom: 20px;
		    font-size: 1.1rem;
		    padding: 10px;
		    border-radius: 5px;
		    border: 1px solid #ccc;
		    margin-bottom: 20px;
		}
		select {
		    font-size: 1.1rem;
		    padding: 10px;
		    border-radius: 5px;
		    border: 1px solid #ccc;
		    margin-bottom: 20px;
		}


		input[type="submit"]:hover {
		    background-color: rgb(28, 146, 186);
		}
	</style>
</head>

<body>
    
    <header id="header">
        <a href="AccueilVisite.html" class="logo"> <span>E</span>ventima</a>
       
    </header>

<div>
    <img src="images/image2.png" >
</div>

<div>
    <h1><b>Ajouter un Article</b></h1>
<form action="addArt.php" method="post" >
    <label for="nom">Nom de l'article:</label>
    <input type="text" id="nom" name="nom"><br>

    <label for="categorie">Catégorie:</label>
	<select id="category" name="category" onchange="showSubcategory()">
	<option value="chaussures">Décoration</option>
    <option value="endroit">Endroit                  </option>
    <option value="annimation">Animation</option>
    <option value="accessoires">Buffet</option>
    <option value="vetements">Vêtements</option>
    <option value="beauté-et-coiffeur">Beauté et coiffeur</option>
    <option value="photographe">Photographe</option>
    <option value="traiteur">Traiteur</option>
</select><br>
<div id="subcategories" style="display: none; width:100%">
    <select name="subcategory">
        <option value="Villa">Villa</option>
        <option value="Hôtel">Hôtel</option>
        <option value="Salle-des-fêtes">Salle des fêtes</option>
        <option value="Restaurant">Restaurant</option>
        <option value="Salon-de-thé">Salon de thé</option>
    </select>
</div>

<script>
    var arrow = document.querySelector('#category option[value="endroit"]');

    arrow.addEventListener('click', function() {
        var subcategories = document.getElementById("subcategories");
        if (subcategories.style.display === "none") {
            subcategories.style.display = "block";
            arrow.innerHTML = "Endroit &#9650;";
        } else {
            subcategories.style.display = "none";
            arrow.innerHTML = "Endroit &#9660;";
        }
    });
</script>

<br>
  <div id="subcategories" style="display: none;">
    <select name="subcategory">
		<option value="Villa">Villa</option>
		<option value="Hôtel">Hôtel</option>
		<option value="Salle-des-fêtes">Salle des fêtes</option>
		<option value="Resturant">Restaurant</option>
		<option value="Salon-de-thé">Salon de thé</option>
    </select>
</div>

<script>
    function showSubcategory() {
        var category = document.getElementById("category").value;
        var subcategories = document.getElementById("subcategories");
        if (category === "endroit") {
            subcategories.style.display = "block";
        } else {
            subcategories.style.display = "none";
        }
    }
</script>
  <label for="lieu">Lieu :</label>
  <input type="text" id="lieu" name="lieu" >
  <div id="map"></div>
  

  
    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea><br>

    
    <label for="prix">Prix:</label>
    <input type="number" id="prix" name="prix"><br>

    <label for="photo">Photo:</label>
    <input type="file" id="image" name="image"><br><br>
  
    <input type="submit" value="Ajouter"name="signup_submit">
  </form>



</div>

</body>
</html>


















<div class="left">
          
		  <form  name="form" action="sign.php" onsubmit="return invalid()" method="POST">
		   <input type="text" id="email" name="email" placeholder="E-mail" /> <br>
		   <input type="password" id="pass" name="pass" class="form-control" placeholder="Mot de passe" />
	   
		   <input type="checkbox" > <label for="sevenir" > se souvenir moi</label> <br> <br>
		   <a href="psdOublie.html"><label for="text" class="texte">Mot de passe oublié?</label></a>
		   
		   <input type="submit" name="signup_submit" value="Connecter" />
		   
		   </div>
 
		   <div class="right">
		   
		   <a href="https://www.facebook.com/"><button class="social-signin facebook">Facebook</button></a>
		   <a href="https://www.twitter.com/"><button class="social-signin twitter">Twitter</button></a>
		   <a href="https://www.gmail.com/"><button class="social-signin google">Google+</button></a>
		   
		   </div>
		   <div class="or">OU</div>
		  </form>
	   </div>