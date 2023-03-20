<?php

use Symfony\Contracts\Service\Attribute\Required;

    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="styles.css"> -->

    <title>location</title>
</head>

<body>
    <div class="container-fluid mt-5">
       
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card ">

                    <!-- header du Formulaire -->

                    <div class="card-header">
                        <h4>Ajoute location
                            <a href="home.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>

                    <!-- Fin du header  -->

                    <!-- Body du Formulaire  -->

                    <div class="card-body">
                        <form action="ajouteLocation.php" id="forms" method="post" class='meeds-validation'>
                            <div class="mb-3 row">
                                <label for="immatriculation" class="col-form-label col-sm-4">immatriculation</label>
                                <div class="col-sm-8">
                                    <!-- <input type="text" id="immatriculation" class="form-control" name="immatriculation"> -->
                                    <?php
                                      include('db_connexion.php');

                                    $query = "SELECT immatriculation FROM voiture ";
                                    $statement = $bdd->prepare($query);
                                    $statement->execute();
                                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      
         
                                   ?>
                                
                                    <select class="selectpicker form-control" name="immatriculation" id='immatriculation' required >
                                        <option value="" > ---select Immatriculation--- </option>
                                        <?php foreach ($result as $row) {?>
                                        <option value="<?= $row['immatriculation'] ?>" > <?= $row['immatriculation'] ?><option>  
                                        <?php } ?> 
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="DateDebut" class="col-form-label col-sm-4">DateDebut</label>
                                <div class="col-sm-8">
                                    <input type="date" id="DatedDebut" class="form-control " name="datedebut" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="DateFin" class="col-form-label col-sm-4">DateFin</label>
                                <div class="col-sm-8">
                                    <input type="date" id="col-model" class="form-control" name="datefin" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="DateEntree" class="col-form-label col-sm-4">DateRentree</label>
                                <div class="col-sm-8">
                                    <input type="date" id="col-model" class="form-control" name="daterentree"required >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Assurance" class="col-form-label col-sm-4">Assurance</label>
                                <div class="col-sm-8">
                                    <input type="text" id="col-model" class="form-control" name="assurance" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="btn_loca" class="btn btn-primary" value="Ajouter Location">
                            </div>
                        </form>
                    </div>
                    <!-- Fin du body  -->
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/form.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>
</body>

</html>