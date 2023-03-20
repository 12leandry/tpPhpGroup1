<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel ="stylesheet" href="stylesfront.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
    
    <title>Document</title>
</head>
<body>
   <!-- Nav bar for the front page -->
  <header>
    <a href="#" class="logo"><span>L</span>ocation <span>V</span>oiture</a>
    <ul class="navbar">
      <li><a href="#">Accueil</a></li>
      <li><a href="#">A propos</a></li>
      <li><a href="#">Location</a></li>
      <!-- <li><a href="#">Temoignage</a></li> -->
      <li><a href="#">Contact</a></li>
      <a href="#" class="btn-reserve">S'identifier</a>

  </header> <br><br><br><br>

  <!-- body of the front page -->

  <section class="baniere" id="baniere">
    <div class="contenu">
      <h2>le luxes aux rdv </h2><br>
      <p class='text-light'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fuga nisi voluptatum numquam dolor voluptatem laborum. Id cumque modi eum doloremque vitae. Voluptatibus, ratione! Ipsa vero id ut sit veniam.</p>
       <br><br><br>
    </div>
  </section><br><br>

<div class="container">

<center>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="voiture.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> Clients</h5>
        <a href="formulaireClients.php" class="btn btn-primary">Add Clients</a>
    <a href="afficherVoiture.php" class="btn btn-primary">View Clients</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="voiture.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Voitures</h5>
        <a href="formulairevoiture.php" class="btn btn-primary">Add Voitture</a>
    <a href="afficherVoiture.php" class="btn btn-primary">View Voitures</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="voiture.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Location</h5>
        <a href="formulaireLocation.php" class="btn btn-primary">Add location</a>
    <a href="afficherLocation.php" class="btn btn-primary">View Location</a>
      </div>
    </div>
  </div>
</div>
</center>
</div>




   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>