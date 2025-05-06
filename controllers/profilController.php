<?php

if (isset($_POST["modifier"]))
{
    extract($_POST);

    if (mettreAjourLesDonneesUtilisateur($_SESSION["user"]->id, $prenom, $nom, $adresse, $tel, $email, "client")) 
    {
        setMessage("Mise a jour reussie", "success");
    }
    else
    {
        
        setMessage("Erreur de mise a jour", "danger"); 

    }

}

if (isset($_POST["editpassword"])) 
{
    extract($_POST);

    if(password_verify($password, $_SESSION["user"]->password))
    {
        if($newpassword === $passwordconfirm)
        {
            $newpassword = password_hash($newpassword, PASSWORD_DEFAULT, ["cost"=> 12]);
            if (mettreAjourMotDePasse($_SESSION["user"]->id, $newpassword)) 
            {
                setMessage("Mot de passe modifier avec succès", "success");

            }
            else
            {
                setMessage("Erreur lors de la modification du mot de passe", "danger");
            }

        }
        else
        {
            setMessage("Le nouveau mot de passe n'est pas identique au mot de passe de confirmation", "danger");
        }
    }
    else
    {
        setMessage("Veuillez saisir votre mot de passe actuel", "danger");
    }

}


if (isset($_SESSION["user"])) 
{
    $user = avoirInfoUtilisateur($_SESSION["user"]->id);
    
    // ou
    $_SESSION["user"]= $user;
}
else 
{
    header("Location: ?page=home");
    exit();
}

$demandemesse = mesDemandes($_SESSION["user"]->id);

require_once("views/includes/header.php"); 
require_once("views/profil.php");
require_once("views/includes/footer.php");

?>