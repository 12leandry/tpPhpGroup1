<?php

include "db_identifiants.php";


try {
    $bdd =  new PDO('mysql:host=localhost;dbname=location_de_voiture', 'root', '');
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage(); 
  }


?>