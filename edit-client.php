<?php 
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

    <title>formulaireClient</title>
</head>

<body>
   
    <!-- start  -->
    <div class="container mt-5">

    <?php 
                include('db_connexion.php');
                include('message.php')
    
    ?>

        <div class="row">
            <div class="col-md-6 mx-auto">
                
                <div class="card ">
                    <!-- Header  du formulaire  -->
                    <div class="card-header">
                        <h4>Edits Client
                            <a href="afficherClients.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <!-- Fin du header  -->

                    <!-- Body du formulaire  -->
                    <div class="card-body">
                        <?php  
                            if(isset($_GET['id']))
                            {
                                $id_client = $_GET['id'];
                                $query = "SELECT * FROM clients WHERE idclient = :id_client LIMIT 1";
                                $statement = $bdd->prepare($query);
                                $data= [':id_client' => $id_client ];
                                $statement->execute($data);

                                $result = $statement->fetch(PDO::FETCH_OBJ);
                            }
                        ?>

                        <form action="ajouteClients.php" id="form" method="post">
                            <div class="mb-3 row">
                                <label for="nom" class="col-form-label col-sm-4">Client ID</label>
                                <div class="col-sm-8">
                                    <input type="hidden" id="id_client" class="form-control" value="<?= $result->idclient ?>" name="id_client" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nom" class="col-form-label col-sm-4">Nom</label>
                                <div class="col-sm-8">
                                    <input type="text" id="nom" class="form-control" value="<?= $result->nom ?>" name="nom" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="prenom" class="col-form-label col-sm-4">Prenom</label>
                                <div class="col-sm-8">
                                    <input type="text" id="prenom" class="form-control" value="<?= $result->prenom ?>" name="prenom" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="codepostal" class="col-form-label col-sm-4">Code-postal</label>
                                <div class="col-sm-8">
                                    <input type="text" id="codepostal" class="form-control" value="<?= $result->codepostal ?>" name="codepostal" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="localite" class="col-form-label col-sm-4">Localite</label>
                                <div class="col-sm-8">
                                    <input type="text" id="col-model" class="form-control"  value="<?= $result->localite ?>"name="localite" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="rue" class="col-form-label col-sm-4">Rue</label>
                                <div class="col-sm-8">
                                    <input type="text" id="col-model" class="form-control"  value="<?= $result->rue ?>"name="rue" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="numero" class="col-form-label col-sm-4">Numero</label>
                                <div class="col-sm-8">
                                    <input type="number" id="col-model" class="form-control" name="numero" value="<?= $result->numero ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="telephone" class="col-form-label col-sm-4">Telephone</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="telephone" value="<?= $result->telephone ?>"  required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-form-label col-sm-4">E-mail</label>
                                <div class="col-sm-8">
                                    <input type="email" id="col-model" class="form-control"  value="<?= $result->email ?>" name="email" required>
                                </div>
                            </div>
                            <div class="mb-3 ">
                                <input type="submit" id="btn" class="btn btn-primary" name="update_btn"
                                    value="Update Client">
                            </div>

                        </form>
                    </div>
                    <!-- Fin du body  -->
                </div>
            </div>
        </div>
    </div>

    <!-- end  -->

    <script src="js/jquery-3.6.3.min.js"></script>
    <script src="js/form.js"></script>
    <script src="js/bootstrapValidator.min.js"></script>
</body>

</html>