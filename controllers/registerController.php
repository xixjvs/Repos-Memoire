<?php



if (isset($_POST["register"])) 
{
    extract($_POST);
    
    // hachage mot de passe
    $password = password_hash($mdp, PASSWORD_DEFAULT, ["cost" =>12]);
    if (creerUnCompte($prenom, $nom, $adresse, $tel, $email, $password, "client")) 
    {
        setMessage("Inscription reussi veuillez vous connecter pour faire votre demande", "success");
        header("Location:?page=connexion");
        exit();
    }
}



require_once("views/includes/header.php"); 

require_once("views/register.php");

require_once("views/includes/footer.php");
