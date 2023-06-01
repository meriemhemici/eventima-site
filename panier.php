<!DOCTYPE html>
<html>
<head>
  <title>Panier</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #ffffff;
  margin: 0;
  padding: 20px;
}

h1 {
  text-align: center;
}

#panier {
  width: 100%;
  border-collapse: collapse;
}

#panier th,
#panier td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ccc;
}

.produit img {
  width: 200px;
  height: 200px;
}

.produit .prix {
  font-weight: bold;
}

.retirer {
  background-color: #2d9fe1;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  margin-left: 750px;
  width: 160px;
  height: 45px;
  font-size: 18px;
}

.retirer:hover {
  background-color: #9baec2;
}
.total{
  font-size: 26px;
}
#total-row {
  font-weight: bold;
  text-align: right;
}

#total-price {
  color: #2d9fe1;
}




:root{
--primary: #2d9fe1;
}
*{
margin: 0%;
padding: 0%;
box-sizing: border-box;
font-family: 'Poppins',sans-serif;
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
color: #000000;
font-weight: 700;
font-size: 2em;
text-decoration: none;
}
#header .logo span{
color: var(--primary);
}
#header ul{
display: flex;
justify-content: center;
align-items: center;
}
#header ul li{
list-style: none;
margin-left: 20px;
font-size: 20px;
}
#header ul li a{
text-decoration: none;
padding: 6px 15px;
color: var(--primary);
border-radius: 20px;
}
#header ul li a:hover,
#header ul li a.active {
background: var(--primary);
color: #fff;
}
i{
font-size: 20px;
}


/footer/
footer{
background-color: rgb(235, 242, 243);
margin:0 ;
margin-top: 40px;
width: 100%;
height: 300px;

}
.pied-logo{
text-align: center;
color: var(--primary);
font-weight: 700;
font-size: 40px;
text-decoration: none;

}
.pied-de-page{
display: flex;
justify-content: center;
align-i
tems: center;
margin-top:32px;
align-content: space-between;
}
.np{
margin-right: 30px;
margin-left: 30px;
font-size: 20px;
margin-top: 15px;

}
.reseau{
margin-top: 50px;
text-align: center;
font-size: 30px;
}








/barre/


:root{
--primary: #2d9fe1;
}
*{
margin: 0%;
padding: 0%;
box-sizing: border-box;
font-family: 'Poppins',sans-serif;
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
color: #000000;
font-weight: 700;
font-size: 2em;
text-decoration: none;
}
#header .logo span{
color: var(--primary);
}
#header ul{
display: flex;
justify-content: center;
align-items: center;
}
#header ul li{
list-style: none;
margin-left: 20px;
font-size: 20px;
}
#header ul li a{
text-decoration: none;
padding: 6px 15px;
color: var(--primary);
border-radius: 20px;
}
#header ul li a:hover,
#header ul li a.active {
background: var(--primary);
color: #fff;
}
i{
font-size: 20px;

} 
.b{
  background-color: #2d9fe1;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  margin-left: 750px;
  width: 160px;
  height: 45px;
  font-size: 18px;
}

.b:hover {
  background-color: #9baec2;
}

  

  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"> 



</head>
<body>



  /* la barre */  

	<header id="header">
        <a href="AccueilVisite.html" class="logo"> <span>E</span>ventima</a>
        
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

<br> <br> <br> <br>

 
  <table id="panier">
    <tr>
      <th>Image</th>
      <th>Nom</th>
      <th>Prix</th>
      <th></th>
    </tr>
    <tr class="produit">
      <td><img src="dj1.jpg" alt="Produit 1"></td>
      <td>Dj Minou</td>
      <td class="prix">20.000 DA</td>
      <td><button class="retirer" onclick="retirerProduit(this)">Retirer</button></td>
    </tr>
    <tr class="produit">
      <td><img src="ex01.jpg" alt="Produit 2"></td>
      <td>Salle des fêtes Jass</td>
      <td class="prix">30.000 DA</td>
      <td><button class="retirer" onclick="retirerProduit(this)">Retirer</button></td>
    </tr>
	<tr class="produit">
      <td><img src="ex02.jpg" alt="Produit 2"></td>
      <td>Salle des fêtes MSM</td>
      <td class="prix">60.000 DA</td>
      <td><button class="retirer" onclick="retirerProduit(this)">Retirer</button></td>
    </tr>

    <!-- Ajoutez d'autres produits ici -->

    <tr id="total-row">
      <td colspan="2"></td>
      <td class="total">Total : <span id="total-price">0.00 DA</span></td>
      <td> <a href="paiement.html"><button class="b">Paiement </button></a></td>
    </tr>
  </table>

  <script>
    function retirerProduit(button) {
      var row = button.parentNode.parentNode;
      row.parentNode.removeChild(row);
      calculerTotal();
    }

    function calculerTotal() {
      var prixElements = document.getElementsByClassName("prix");
      var total = 0;

      for (var i = 0; i < prixElements.length; i++) {
        var prixTexte = prixElements[i].innerText;
        var prix = parseFloat(prixTexte.substring(0, prixTexte.length - 3).replace(".", ""));
        total += prix;
      }

      var totalElement = document.getElementById("total-price");
      totalElement.innerText = total.toFixed(2) + " DA";
    }

    calculerTotal();
  </script>



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