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
         // récupération de l'ID du partenaire
        $query = "SELECT idPart FROM partenaire WHERE email = '$email'";
         $result = mysqli_query($conn, $query);
         $row = mysqli_fetch_assoc($result);
         $idPartenaire = $row['idPart'];

    // stockage de l'ID du partenaire dans une variable de session
    session_start();
    $_SESSION['idPart'] = $idPartenaire;


        if($count_client == 1){// Utilisateur est un client
            $id = $row['id']; // $row contient le résultat de votre requête
            header("Location: AccueilC.php");
            exit();
        }
        elseif($count_partenaire == 1){// Utilisateur est un partenaire
            header("Location: AccueilPartenaire.html");
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
