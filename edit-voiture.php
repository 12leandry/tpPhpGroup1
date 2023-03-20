
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>voiture</title>
</head>

<body>
   
 <!-- start  using card from bootstrap -->
    <div class="container mt-5">  
        
    <?php 
                include('db_connexion.php');
                include('message.php')
    
    ?>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <!-- start of form -->
                <div class="card ">
                    <!-- form  header  -->
                    <div class="card-header">
                        <h4>Edit Voiture
                            <a href="afficherVoiture.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <!-- End form header  -->

                    <!-- Start form body  -->
                    <div class="card-body ">

                    <?php  
                            if(isset($_GET['immatriculation']))
                            {
                                $immatriculation = $_GET['immatriculation'];
                                $query = "SELECT * FROM voiture WHERE immatriculation = :immatriculation LIMIT 1";
                                $statement = $bdd->prepare($query);
                                $data= [':immatriculation' => $immatriculation];
                                $statement->execute($data);

                                $result = $statement->fetch(PDO::FETCH_OBJ);
                            }
                        ?>
                        <form action="ajouteVoiture.php" id="form" class="needs-validation" method="post">

                        <!-- Start of  Labels and inputs  -->
                            <div class="mb-3 row">
                                <label for="marque" class="col-form-label col-sm-4">immatriculation</label>
                                <div class="col-sm-8">
                                    <input type="hidden" id="immatriculation" class="form-control" name="immatriculation" value="<?= $result->immatriculation ?>" required>
                                </div>
                            </div> 
                            <div class="mb-3 row">
                                <label for="marque" class="col-form-label col-sm-4">marque</label>
                                <div class="col-sm-8">
                                    <input type="text" id="marque" class="form-control" name="marque"  value="<?= $result->marque ?>"required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="model" class="col-form-label col-sm-4">model</label>
                                <div class="col-sm-8">
                                    <input type="text" id="model" class="form-control" name="model"  value="<?= $result->modele ?>"required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="cylindre" class="col-form-label col-sm-4">Cylindre</label>
                                <div class="col-sm-8">
                                    <input type="text" id="cylindre" class="form-control" name="cylindre" value="<?= $result->cylindre ?>" required >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="Date" class="col-form-label col-sm-4">Date D'Achat</label>
                                <div class="col-sm-8">
                                    <input type="date" id="col-model" class="form-control" name="dateachat" value="<?= $result->dateachat ?>" required>
                                </div>
                            </div>
                            <!-- End of form lables and inputs  -->
                            
                            <!-- Form button to submit  -->
                            <div class="mb-3">
                                <input type="submit" name="edit_voiture" class="btn btn-primary" value="Update voiture">
                            </div>
                            <!-- End of button  -->
                        </form>
                    </div>
                    <!-- End form body  -->
                </div>
                <!-- end form  -->
            </div>
        </div>
    </div>
    <!-- end  -->

    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/form.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>

</body>

</html>