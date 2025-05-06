<?php

if(!estAdmin())
{
  header("location:?page=home");
  exit();
}

if (isset($_POST['continuer'])) {
    extract($_POST);
    header("Location:?page=demandesAdmin&id=$idmesse&nombre=$nombre");
}

// traitement ajout
if(isset($_POST["ajouter"]))
{
    extract($_POST);

    if(ajoutMesses($nom, $offrande))
    {
        setMessage("Messe ajouter avec succes");
        header("location:?page=listesMessesAdmin");
        exit();
    }
    else
    {
        setMessage("Erreur lors de l'ajout de la messe", "danger");
    }
}

if(isset($_POST["modifier"]))
{
    extract($_POST);
    $c = avoirUneMesse($_GET["id"]);
    if (modifierUneMesse($c->id, $nom, $offrande)) 
    {
        setMessage("Messe modifier avec succes");
        header("location:?page=listesMessesAdmin");

        exit();
    }
    else 
    {
        setMessage("Erreur lors de la modification de la messe", "danger");
    }
}

if (isset($_GET["idDeleting"])) {
    if (supprimerUneMesse($_GET["idDeleting"])) 
    {
        setMessage("Messe supprimer avec succes");
        header("location:?page=listesMessesAdmin");
        exit();
    }
    else
    {
        setMessage("Erreur lors de la suppression");

    }
}

$messes = recupererTousLesMesses();

if(isset($_GET["type"]))
{
    if (isset($_GET["id"]))
    {
        $c = avoirUneMesse($_GET["id"]);
    }
    require_once("views/includes/header.php"); 
    require_once("views/ajoutMesse.php");
    require_once("views/includes/footer.php");

}
else
{
require_once("views/includes/header.php"); 

require_once("views/listesMessesAdmin.php");

require_once("views/includes/footer.php");
}

?>