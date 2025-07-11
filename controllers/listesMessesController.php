<?php

if (isset($_POST['continuer'])) {
    extract($_POST);
    header("Location:?page=demande&id=$idmesse&nombre=$nombre");
}
$messes = recupererTousLesMesses();

require_once("views/includes/header.php"); 

require_once("views/listesMesses.php");

require_once("views/includes/footer.php");


?>