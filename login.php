<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="connecter.css">
</head>
<body style="overflow-y: auto;">
	
    
        <img src="images/top.png" width="100%">
    
    <div id="login-box">
        <h1 class="inscription"> <b>Heureux de vous revoir</b>  </h1> 
        <div class="text2">
            Vous n’avez pas de compte ?   
        </div>
        <a href="Clientoupart.html"><div class="text3">
            Inscrivez-vous   
        </div></a>

       
<div class="left">
          
          <form  name="form" action="log.php" onsubmit="return invalid()" method="POST">
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
        
         </div>
</body>
</html>