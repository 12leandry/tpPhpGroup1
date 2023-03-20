<?php

session_start();

include('db_connexion.php');

        // DELETE CLIENT       

if(isset($_POST['delete_client']))
{
    $id_client = $_POST['delete_client'];

    try{

        $query = "DELETE FROM clients WHERE  idclient=:id_client";
        $statement = $bdd->prepare($query);
        $data= [':id_client'=> $id_client];
        $query_run = $statement->execute($data);

        if($query_run)
        {
            $_SESSION['message']= "Deleted successfully";
            header("location: afficherClients.php");
            exit(0);
        } else {
            $_SESSION['message']= "Not  Deleted";
            header("location: afficherClients.php");
            exit(0);
        }

    } catch(PDOException $e){
        echo $e->getMessage();
    }
}

    // UPDATE CLIENT 

if(isset($_POST['update_btn']))
{
    $id_client = $_POST['id_client'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $codepostal = $_POST['codepostal'];
    $localite = $_POST['localite'];
    $rue = $_POST['rue'];
    $numero = $_POST['numero'];
    $phone = $_POST['telephone'];
    $mail = $_POST['email'];

    try{
    $query = "UPDATE clients SET nom=:nom, prenom=:prenom, codepostal=:codepostal, localite=:localite,
     rue=:rue, numero=:numero, telephone=:telephone, email=:email WHERE idclient=:id_client";
     $statement= $bdd->prepare($query);
     $data = [
        ':id_client' => $id_client,
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':codepostal' => $codepostal,
        ':localite' => $localite,
        ':rue' => $rue,
        ':numero' => $numero,
        ':telephone' => $phone,
        ':email' => $mail,               
     ];

     $query_run = $statement->execute($data);

     if($query_run)
     {
        $_SESSION['message']= "Update successfully";
        header("location: afficherClients.php");
        exit(0);
    } else {
        $_SESSION['message']= "Not updated Created";
        header("location: afficherClients.php");
        exit(0);
    }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

    // AJOUTE CLIENTS 

if(isset($_POST['btn_client'])) 
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $codepostal = $_POST['codepostal'];
    $localite = $_POST['localite'];
    $rue = $_POST['rue'];
    $numero = $_POST['numero'];
    $phone = $_POST['telephone'];
    $mail = $_POST['email'];

  try{  $query = "INSERT INTO clients (nom, prenom, codepostal, localite, rue, numero, telephone, email ) 
    VALUES (:nom, :prenom, :codepostal, :localite, :rue, :numero, :telephone, :email)";
    $query_run = $bdd->prepare($query);

    $data = [
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':codepostal' => $codepostal,
        ':localite' => $localite,
        ':rue' => $rue,
        ':numero' => $numero,
        ':telephone' => $phone,
        ':email' => $mail,
    ];
    $query_execute = $query_run->execute($data);

    if ($query_execute) {
        $_SESSION['message']= "Clients added successfully";
        header("location: afficherClients.php");
        exit(0);
    } else {
        $_SESSION['message']= "Clients not Created";
        header("location: afficherClients.php");
        exit(0);
    }
    }catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}

?>