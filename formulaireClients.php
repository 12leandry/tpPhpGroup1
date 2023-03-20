
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <title>formulaireClient</title>
</head>

<body>
   
    <!-- start  -->
    <div class="container mt-5">


        <div class="row">
            <div class="col-md-6 mx-auto">
                
                <div class="card ">
                    <!-- Header  du formulaire  -->
                    <div class="card-header">
                        <h4>Ajoute Client
                            <a href="home.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <!-- Fin du header  -->

                    <!-- Body du formulaire  -->
                    <div class="card-body">
                        <form action="ajouteClients.php" id="form" method="post">

                            <div class="mb-3 row">
                                <label for="nom" class="col-form-label col-sm-4">Nom</label>
                                <div class="col-sm-8">
                                    <input type="text" id="nom" class="form-control" name="nom" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="prenom" class="col-form-label col-sm-4">Prenom</label>
                                <div class="col-sm-8">
                                    <input type="text" id="prenom" class="form-control" name="prenom" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="codepostal" class="col-form-label col-sm-4">Code-postal</label>
                                <div class="col-sm-8">
                                    <input type="text" id="codepostal" class="form-control" name="codepostal" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="localite" class="col-form-label col-sm-4">Localite</label>
                                <div class="col-sm-8">
                                    <input type="text" id="col-model" class="form-control" name="localite" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="rue" class="col-form-label col-sm-4">Rue</label>
                                <div class="col-sm-8">
                                    <input type="text" id="col-model" class="form-control" name="rue" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="numero" class="col-form-label col-sm-4">Numero</label>
                                <div class="col-sm-8">
                                    <input type="text" id="col-model" class="form-control" name="numero"  >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="telephone" class="col-form-label col-sm-4">Telephone</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="telephone" value="" >
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-form-label col-sm-4">E-mail</label>
                                <div class="col-sm-8">
                                    <input type="email" id="col-model" class="form-control" name="email" >
                                </div>
                            </div>
                            <div class="mb-3 ">
                                <input type="submit" id="btn" class="btn btn-primary" onclick="verify()" name="btn_client"  value="Save client">
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