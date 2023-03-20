<?php 
 session_start();
 include('db_connexion.php');

//    DELETE  DATA FROM DATABSE 

if(isset($_POST['delete_voiture']))
{
    $immatriculation = $_POST['delete_voiture'];

    try{

        $query = "DELETE FROM voiture WHERE  immatriculation=:immatriculation";
        $statement = $bdd->prepare($query);
        $data= [':immatriculation'=> $immatriculation];
        $query_run = $statement->execute($data);

        if($query_run)
        {
            $_SESSION['message']= "Deleted successfully";
            header("location: afficherVoiture.php");
            exit(0);
        } else {
            $_SESSION['message']= "Not  Deleted";
            header("location: afficherVoiture.php");
            exit(0);
        }

    } catch(PDOException $e){
        echo $e->getMessage();
    }
}

//   EDIT DATA IN DATABASE 

if(isset($_POST['edit_voiture']))
{
    $immatriculation = $_POST['immatriculation'];
    $marque = $_POST['marque'];
    $modele = $_POST['model'];
    $cylindre = $_POST['cylindre'];
    $date = $_POST['dateachat'];

    try{

        $query = "UPDATE voiture SET marque=:marque, modele=:modele, cylindre=:cylindre, dateachat=:dateachat
         WHERE immatriculation=:immatriculation";
        $stat = $bdd->prepare($query);

        $data = [
            ':immatriculation' => $immatriculation,
            ':marque' => $marque,
            ':modele' => $modele,
            ':cylindre' => $cylindre,
            ':dateachat' => $date,
        ];
        $query_run = $stat->execute($data);

        if($query_run)
        {
            $_SESSION['message']= "Voiture Updated successfully";
            header("location: afficherVoiture.php");
            exit(0);
        } else {
            $_SESSION['message']= "Not updated Created";
            header("location: afficherVoiture.php");
            exit(0);
        }
    
    } catch(PDOException $e){
            echo $e->getMessage();
        }
}  
 
        // ADD VOITURE INTO DATABASE 

if(isset($_POST['btn_voi']))
{
    $immatriculation = $_POST['immatriculation'];
    $marque = $_POST['marque'];
    $model = $_POST['model'];
    $cylindre = $_POST['cylindre'];
    $date = $_POST['dateachat'];

    
    $query = ("INSERT INTO voiture (immatriculation, marque, modele, cylindre, dateachat) 
    VALUES (:immatriculation, :marque, :model, :cylindre, :dateachat)");
    $query_run =$bdd->prepare($query);

    $data = [
        ':immatriculation' => $immatriculation,
        ':marque' => $marque,
        ':model' => $model,
        ':cylindre' => $cylindre,
        ':dateachat' => $date,
    ];
    $query_execute = $query_run->execute($data);

    if($query_execute)
    {
        $_SESSION['message']= "Voiture added successfully";
        header("location: afficherVoiture.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']= "Voiture not inserted";
        header("location: affficherVoiture.php");
        exit(0);
    }
}


?>