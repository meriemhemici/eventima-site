<?php
include("connect.php");

if(isset($_POST['signup_submit'])){
    if(empty($_POST['email']) || empty($_POST['pass'])){
        echo '<script>alert("Veuillez remplir tous les champs!");</script>';
    }
    else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        
        // Vérification si l'utilisateur est un client
        $sql_client = "SELECT * FROM client WHERE email='$email' AND password='$password'";
        $result_client = mysqli_query($conn, $sql_client);
        $count_client = mysqli_num_rows($result_client);
    
        // Vérification si l'utilisateur est un partenaire
        $sql_partenaire = "SELECT * FROM partenaire WHERE email='$email' AND password='$password'";
        $result_partenaire = mysqli_query($conn, $sql_partenaire);
        $count_partenaire = mysqli_num_rows($result_partenaire);

        if($count_client == 1){// Utilisateur est un client
            header("Location: homeA.html");
            exit();
        }
        elseif($count_partenaire == 1){// Utilisateur est un partenaire
            header("Location: homeP.html");
            exit();
        }
        else{// User not found
            echo'<script>
            window.location.href="signup.php";
            alert("email ou mot de passe non valide")
            </script>';
        }
    }
}
?>
