<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>

<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="sidebar.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="fs-2  bi-speedometer2 "></i><span class="fs-5 ms-1 d-none d-sm-inline mt-3"> DASHBOARD</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="nav-item">
                        <a href="afficherClients.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Clients</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="afficherVoiture.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-truck"></i> <span class="ms-1 d-none d-sm-inline">Voiture</span>
                       </a>
                    </li>
                    <li class="nav-item">
                        <a href="afficherLocation.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-cart"></i> <span class="ms-1 d-none d-sm-inline">Location</span>
                       </a>
                    </li>
             </ul>
                
            </div>
        </div>
        <div class="col py-3">

        <?php include('message.php') ?>

<div class="container-fluid">
    <table class="table table-bordered table-primary table-striped">
        <div class="card ">
            <div class="card-header">
                <h3 class="">Liste des Location
                    <a href="formulaireLocation.php" class="btn btn-primary bg-primary float-end">Add Location</a>
                </h3>
            </div>
        </div>
        <div>
            <thead>
                <tr class="text-center table table-primary">
                    <th>idLocation</th>
                    <th>immatriculation</th>
                    <th>DateDebut</th>
                    <th>DateFin</th>
                    <th>DateRentree</th>
                    <th>Assurance</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                </tr>
            </thead>
            <tbody class=" table ">
                <?php
                include('db_connexion.php');

                $query = "SELECT  * FROM  location";
                $statement = $bdd->prepare($query);
                $statement->execute();

                $result = $statement->fetchAll();

                if($result)
                {
                    foreach($result as $row)
                    {
                        ?>
                <tr class="text-center">
                    
                    <td>
                        <?= $row['idlocation'] ?>
                    </td>
                    <td>
                        <?= $row['immatriculation'] ?>
                    </td>
                    <td>
                        <?= $row['datedebut'] ?>
                    </td>
                    <td>
                        <?= $row['datefin'] ?>
                    </td>
                    <td>
                        <?= $row['daterentree'] ?>
                    </td>
                    <td>
                        <?= $row['assurance'] ?>
                    </td>
                    <td>
                        <div class="row">
                            <a href="edit-location.php?id=<?= $row['idlocation'];?>" class="btn btn-primary bg-primary col-12">edit</a>
                        </div>
                     </td>
                    <td>
                        <form action="ajouteLocation.php" method="post">
                        <button type="submit" name="delete_loca" class="btn btn-danger bg-danger col-sm-12" value="<?= $row['idlocation'] ?>">Delete</button>
                        </form>
                     </td>
                        
                </tr>
                <?php

                    }

                }
                else{
                    ?>
                <tr>
                    <td colspan="6">NO RECORD FOUND</td>
                </tr>
                <?php

                    
                }
            
            ?>
            </tbody>
        </div>
        <div>

        </div>

    </table>
</div>

        </div>
    </div>
</div>
</body>

</html>