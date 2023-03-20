<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <title>location</title>
</head>

<body>
<?php 
    include('db_connexion.php');
    
    ?>
    <div class="container mt-5">
       
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card ">

                    <!-- header du Formulaire -->

                    <div class="card-header">
                        <h4>Edit location
                            <a href="afficherLocation.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>

                    <!-- Fin du header  -->

                    <!-- Body du Formulaire  -->

                    <div class="card-body">
                    <?php  
                                        if(isset($_GET['id']))
                                        {
                                            $idlocation = $_GET['id'];
                                            $query = "SELECT * FROM location WHERE idlocation = :idlocation LIMIT 1";
                                            $statement = $bdd->prepare($query);
                                            $data= [':idlocation' => $idlocation ];
                                            $statement->execute($data);

                                            $result = $statement->fetch(PDO::FETCH_OBJ);
                                        }
                                    ?>
                                

                        <form action="ajouteLocation.php" id="form" method="post" >
                            
                            <div class="mb-3 row">
                                <label for="idlocation" class="col-form-label col-sm-4">idlocation</label>
                                <div class="col-sm-8">
                                    <input type="hidden" id="idlocation" class="form-control " name="idlocation" value="<?= $result->idlocation ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="immatriculation" class="col-form-label col-sm-4">immmatriculation</label>
                                <div class="col-sm-8">
                                    <input type="text" id="immatriculation" class="form-control " name="immatriculation" value=" <?= $result->immatriculation ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="DateDebut" class="col-form-label col-sm-4">DateDebut</label>
                                <div class="col-sm-8">
                                    <input type="datetime" id="DatedDebut" class="form-control " name="datedebut" value=" <?= $result->datedebut ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="DateFin" class="col-form-label col-sm-4">DateFin</label>
                                <div class="col-sm-8">
                                    <input type="datetime" id="col-model" class="form-control" name="datefin" value=" <?=  $result->datefin ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="DateEntree" class="col-form-label col-sm-4">DateRentree</label>
                                <div class="col-sm-8">
                                    <input type="datetime" id="col-model" class="form-control" name="daterentree" value=" <?=  $result->daterentree ?>"  required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Assurance" class="col-form-label col-sm-4">Assurance</label>
                                <div class="col-sm-8">
                                    <input type="text" id="col-model" class="form-control" name="assurance" value="<?= $result->assurance ?>" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="edit_loca" class="btn btn-primary" value=" UPDATE">
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