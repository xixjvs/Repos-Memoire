<?php

if (isset($_GET["id"])) 
{
    $c = avoirUneMesse($_GET["id"]);
}
else
{
    header("Location:?page=listesMessesAdmin");
    exit();
}

if (isset($_GET["id"])) {
    $messe = avoirUneMesse($_GET["id"]);
}

if (isset($_POST["validerDemande"])) {
    extract($_POST);

    $aujourdhui = new DateTime();

    $d= DateTime::createFromFormat("d/m/Y",$date);

    if ($aujourdhui->diff($d)->format("%R%a")<0) {
        setMessage("La date de la demande ne peut pas etre inferieur a la date d'aujourdhui", "danger");
    }else{
        // hachage mot de passe
        $password = password_hash("client", PASSWORD_DEFAULT, ["cost" =>12]);
        if (creerUnCompte($prenom, $nom, $adresse, $tel, $email, $password, "client")) 
        {
            //    recuperer le dernier utilisateur 
            
            $user = recupererDernierUtilisateur();
            // setMessage("bien", "success");
            $c = avoirUneMesse($_GET["id"]);
            
        if ($c) {
                // Calcul de l'offrande totale
                $offrande_total = $_GET["nombre"] * $c->offrande;
            
                // Génération de la référence unique
                $reference = "#ref".time(); // Par exemple : #ref1698612345
            
                // Ajout de la demande
                if (ajoutDemande($reference, $d->format("Y-m-d"), $heure, $description, $offrande_total, $user->id, $c->id)) {
                    setMessage("Demande messe enregistrée avec succès", "success");
                    header("location:?page=demandesAdmin");
                    exit();
                }
            }
            
            else
            {
                setMessage("Veuillez selectionner une messe", "danger");
            }
        }else{
            setMessage("Erreur de creation de compte", "danger");
        }
        

    }

    enregistrerLesDonneesDeLInput();
}

require_once("views/includes/header.php"); 

require_once("views/demandesAdmin.php");

require_once("views/includes/footer.php");


?>