<?php

//Fonction pour recuperer les messages d'erreur et de succes

function setMessage($message, $type = "success") 
{
    $_SESSION["message"]["content"] = $message;
    $_SESSION["message"]["type"] = $type;

}

function  estAdmin()
{
    if (isset($_SESSION["user"]) && strtolower($_SESSION["user"]->role) === "admin") 
    {
        return true;
    }

    return false;
}


function  estclient()
{
    if (isset($_SESSION["user"]) && strtolower($_SESSION["user"]->role) === "client") 
    {
        return true;
    }

    return false;
}

function enregistrerLesDonneesDeLInput()
{
    if (isset($_POST)) 
    {
        $_SESSION["INPUT"] = $_POST;
    }
}

function supprimerLesDonneesDeLInput()
{
    $_SESSION["INPUT"] = null;
    
}

function avoirInput($nom)
{
    return isset ($_SESSION["INPUT"][$nom]) ? $_SESSION["INPUT"][$nom] : null;
}

