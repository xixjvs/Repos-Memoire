<?php

if (isset($_GET["id"])) 
{
    $c = avoirUneMesse($_GET["id"]);
}
else
{
    header("Location:?page=listesMesses");
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
        
        if ($_SESSION["user"]->id)
        {
            //    recuperer l'utilisateur qui a deja un compte 
            
            
            // setMessage("bien", "success");
            $c = avoirUneMesse($_GET["id"]);
            
            if ($c) 
            {
                $offrande_total = $_GET["nombre"] * $c->offrande;
                $reference = "#ref".time();
                if (ajoutDemande($reference, $d->format("Y-m-d"), $heure, $description, $offrande_total, $_SESSION["user"]->id, $c->id)) 
                {
                    setMessage("Demande messe avec succes", "success");
                    header("location:?page=demande");
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

$messes = recupererTousLesMesses();
require_once("views/includes/header.php"); 

require_once("views/demande.php");

require_once("views/includes/footer.php");


?>