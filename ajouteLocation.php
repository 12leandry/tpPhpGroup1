<?php 
session_start();

include('db_connexion.php');


    //  DELETE DATA  FROM DATABASE 

if(isset($_POST['delete_loca']))
{
    $idlocation = $_POST['delete_loca'];

    try{

        $query = "DELETE FROM location WHERE idlocation=:idlocation";
        $statement = $bdd->prepare($query);
        $data= [':idlocation'=> $idlocation];
        $query_run = $statement->execute($data);

        if($query_run)
        {
            $_SESSION['message']= "Deleted successfully";
            header("location: afficherLocation.php");
            exit(0);
        } else {
            $_SESSION['message']= "Not  Deleted";
            header("location: afficherLocation.php");
            exit(0);
        }

    } catch(PDOException $e){
        echo $e->getMessage();
    }
}


    // EDIT DATA FROM DATABSE     

if(isset($_POST['edit_loca']))
{
    $idlocation = $_POST['idlocation'];
    $immatriculation = $_POST['immatriculation'];
    $datedebut = $_POST['datedebut'];
    $datefin = $_POST['datefin'];
    $daterentree = $_POST['daterentree'];
    $assurance = $_POST['assurance'];

    try{
    $query = "UPDATE location SET immatriculation=:immatriculation, datedebut=:datedebut, datefin=:datefin, daterentree=:daterentree,
     assurance=:assurance WHERE idlocation=:idlocation";
     $statement= $bdd->prepare($query);
     $data = [
        ':idlocation' => $idlocation,
        ':immatriculation' => $immatriculation,
        ':datedebut' => $datedebut,
        ':datefin' => $datefin,
        ':daterentree' => $daterentree,
        ':assurance' => $assurance,               
     ];

     $query_run = $statement->execute($data);

     if($query_run)
     {
        $_SESSION['message']= "Update successfully";
        header("location: afficherLocation.php");
        exit(0);
    } else {
        $_SESSION['message']= "Not updated Created";
        header("location: afficherLocation.php");
        exit(0);
    }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}



//   ADD DATA INTO DATABASE 

if(isset($_POST['btn_loca']))
{
    // $idclient = $_POST['idclient'];
    // $idlocation = $_POST['idlocation'];
    $idlocation = $_POST['immatriculation'];
    $immatriculation = $_POST['immatriculation'];
    $datedebut = $_POST['datedebut'];
    $datefin = $_POST['datefin'];
    $daterentree = $_POST['daterentree'];
    $assurance = $_POST['assurance'];

    $query1 = "INSERT INTO location ( immatriculation, datedebut, datefin, daterentree, assurance)
     VALUES ( :immatriculation, :datedebut, :datefin, :daterentree, :assurance)";
    $query1_run = $bdd->prepare($query1);

    $data = [
        ':immatriculation' => $immatriculation,
        ':datedebut' => $datedebut,
        ':datefin' => $datefin,
        ':daterentree' => $daterentree,
        ':assurance' => $assurance,
    ];
    $query1_execute = $query1_run->execute($data);

    if($query1_execute)
    {
        $_SESSION['message']= "Location added successfully";
        header("location: afficherLocation.php");
        exit(0);
    }
    else
    {
        $_SESSION['message']= "Location not Added";
        header("location: afficherLocation.php");
        exit(0);
    }
}

?>