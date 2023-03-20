
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>Sidebar</title>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0  bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="sidebar.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="fs-2  bi-speedometer2 "></i><span class="fs-5 ms-1 d-none d-sm-inline mt-3"> DASHBOARD</span>
                </a>
                
                
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="menu">
                    <li class="nav-item">
                        <a href="afficherClients.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-people "></i> <span class="ms-1 d-none d-sm-inline">Clients</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="afficherVoiture.php" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-truck"></i> <span class="ms-1 d-none d-sm-inline ">Voiture</span>
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
        <div class="col py-3 mt-4 mx-5">

        <h3 class="">WELCOME TO  DASHBOARD
                    <a href="home.php" class="btn btn-primary bg-primary float-end">BACK TO HOME PAGE</a>
                </h3>
       
        </div>
</div>

</body>
</html>

