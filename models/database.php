<?php


try {
    $db = new PDO("mysql:host=db;dbname=demandegrace;charset=utf8", "app_user", "app_pass");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage() . " à la ligne:" . __LINE__);
}


function seconnecter($email)
{
    global $db;
    try
    {
        $q = $db->prepare("SELECT * FROM users WHERE email=:email");

        $q->execute(["email"=> $email]);

        return $q->fetch(PDO::FETCH_OBJ);
    }
    catch(PDOException $e)
    {
        setMessage($e->getMessage(),"danger");    }
}

function creerUnCompte($prenom, $nom, $adresse, $tel, $email, $password, $role)
{

    global $db; // Utiliattion de la varible $db

    try
    {
        $q = $db-> prepare("INSERT INTO users VALUES(null, :prenom, :nom, :adresse, :tel, :email, :password, :role)");
        return $q->execute([
            "prenom" => $prenom,
            "nom" => $nom,
            "adresse" => $adresse,
            "tel" => $tel,
            "email" => $email,
            "password" => $password,
            "role" => $role
        ]);
    }
    catch(PDOException $e)
    {
        setMessage($e->getMessage(),"danger");    }

}

function avoirInfoUtilisateur($id)
{
    global $db;

    try 
    {
        $q = $db->prepare("SELECT * FROM users WHERE id=:id");
        $q->execute(["id"=> $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    } 
    catch(PDOException $e)
    {
        setMessage($e->getMessage(),"danger");    }

}


function recupererDernierUtilisateur(){
    global $db;
    try {
        $q = $db -> prepare("SELECT * FROM users ORDER BY id DESC");
        $q->execute();
        return $q->fetch(PDO::FETCH_OBJ);
    } catch(PDOException $e)
    {
        setMessage($e->getMessage(),"danger");    }
}

function mettreAjourLesDonneesUtilisateur($id, $prenom, $nom, $adresse, $tel, $email, $role)
{
    global $db;
    
    try
    {
        $q = $db -> prepare("UPDATE users SET prenom =:prenom, nom =:nom, adresse =:adresse, 
                        tel =:tel, email =:email, role =:role WHERE id =:id");
        return $q->execute([
            "id" => $id,
            "prenom" => $prenom,
            "nom" => $nom,
            "adresse" => $adresse,
            "tel" => $tel,
            "email" => $email,
            "role" => $role,
            "id" => $id

        ]);


    }
    catch(PDOException $e)
    {
        setMessage($e->getMessage(),"danger");    }
}


function mettreAjourMotDePasse($id, $mdp)
{
    global $db;
    
    try
    {
        $q = $db -> prepare("UPDATE users SET password =:mdp WHERE id =:id");
        return $q->execute([
            "id" => $id,
            "mdp" => $mdp
        ]);
    }
    catch(PDOException $e)
    {
        setMessage($e->getMessage(),"danger");    }
}

function ajoutMesses($nom, $offrande)
{
    global $db;
    
    try
    {
        $q = $db -> prepare("INSERT INTO messes VALUES(null, :nom, :offrande)");
        return $q->execute([
            "nom" => $nom,
            "offrande" => $offrande
        ]);
    }
    catch(PDOException $e)
    {
        setMessage($e->getMessage(),"danger");    }
}

function recupererTousLesMesses()
{
    global $db;
    
    try
    {
        $q = $db -> prepare("SELECT * FROM messes ORDER BY id ");
        $q->execute();
        return $q->fetchAll(PDO::FETCH_OBJ);
    }
    catch(PDOException $e)
    {
        setMessage($e->getMessage(),"danger");    }
}

function avoirUneMesse($id)
{
    global $db;

    try 
    {
        $q = $db->prepare("SELECT * FROM messes WHERE id =:id");
        $q -> execute([':id' => $id]);

        return $q -> fetch(PDO::FETCH_OBJ);
    } 
    catch(PDOException $e)
    {
        setMessage($e->getMessage(),"danger");    }

}

function modifierUneMesse($id, $nom, $offrande)
{
    global $db;
    
    try
    {
        $q = $db -> prepare("UPDATE messes SET nom =:nom, offrande =:offrande WHERE id =:id");
        return $q->execute([
            "id" => $id,
            "nom" => $nom,
            "offrande" => $offrande
        ]);
    }
    catch(PDOException $e)
    {
        setMessage($e->getMessage(),"danger");    }
}

function supprimerUneMesse($id)
{
    global $db;
    
    try
    {
        $q = $db -> prepare("DELETE FROM messes WHERE id =:id");
        return $q->execute(["id" => $id]);
    }
    catch(PDOException $e)
    {
        setMessage($e->getMessage(),"danger");    }
}

function ajoutDemande($reference, $date, $heure, $description, $offrande_total, $demandeur_id, $messe_id)
{
    global $db;
    
    try
    {
        $q = $db -> prepare("INSERT INTO demandemesse VALUES(null, :reference, :date, :heure, :description, :offrande_total, :demandeur_id, :messe_id, :statut)");
        return $q->execute([
            "reference" => $reference,
            "date" => $date,
            "heure" => $heure,
            "description" => $description,
            "offrande_total" => $offrande_total,
            "demandeur_id" => $demandeur_id,
            "messe_id" => $messe_id,
            "statut" => 0
        ]);
    }
    catch(PDOException $e)
    {
        setMessage($e->getMessage()." a la ligne ".__LINE__,"danger");    }
}


function mesDemandes($demandeur_id)
{
    global $db;

    try
    {
        $q = $db->prepare("
            SELECT 
                dm.id as id, 
                dm.statut as statut, 
                dm.offrande_total, 
                m.nom as nomMesse, 
                dm.date, 
                dm.reference, 
                dm.heure, 
                m.offrande, 
                dm.description,
                u.nom as demandeur_nom, 
                u.prenom as demandeur_prenom, 
                u.tel as demandeur_tel
            FROM demandemesse dm
            INNER JOIN users u ON u.id = dm.demandeur_id
            INNER JOIN messes m ON m.id = dm.messe_id
            WHERE dm.demandeur_id = :demandeur_id
        ");
        $q->execute(["demandeur_id" => $demandeur_id]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    }
    catch (PDOException $e)
    {
        setMessage($e->getMessage(), "danger");
    }
}

function getAllDemandes()
{
    global $db;
    
    try {
        // Récupérer toutes les demandes, qu'elles soient en ligne ou en présentiel
        $q = $db->prepare("SELECT dm.id as id, dm.statut as statut, u.prenom as prenomUser, u.nom as nomUser, u.tel as telUser, dm.offrande_total,  m.nom as nomMesse, 
                                   date, reference, heure, offrande, description
                                   
                            FROM demandemesse dm, messes m, users u
                            WHERE dm.messe_id = m.id AND dm.demandeur_id = u.id");
        $q->execute(); // Pas besoin de lier le paramètre de demandeur_id
        return $q->fetchAll(PDO::FETCH_OBJ); // Retourne toutes les demandes
    } catch (PDOException $e) {
        setMessage($e->getMessage(), "danger");
        return [];
    }
}












