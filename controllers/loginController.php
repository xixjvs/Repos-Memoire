<?php
$erreur = "";


// die(password_hash("passer@123", PASSWORD_DEFAULT, ["cost" => 12]));
if(isset($_POST["connecter"])) 
{
    extract($_POST);

    $user = seconnecter($email);

    if($user && password_verify($mdp, $user->password))
    {
        $_SESSION["user"] = $user;
        if (estAdmin()) 
        {
            header("Location:?page=listesMessesAdmin");
            exit();
        }
        else
        {
            setMessage("Connexion reussie", "success");
            header("Location:?page=home");
            exit();
        }
        
        
    }
    else
    {
        $erreur = "Identifiants incorrects";
    }

    
}



require_once("views/includes/header.php"); 

require_once("views/login.php");

require_once("views/includes/footer.php");
