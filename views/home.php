<?php

if (isset($_POST['find'])){ 
$data = new VolsController();
$vols = $data->findVol();
}
else {
$data = new volsController();
$vols = $data->getAllVol();
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>vol</title>
        <link rel="stylesheet" type="text/css" href="public/css/home.css">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarRightAlignExample"
      aria-controls="navbarRightAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand" href="#"> Air Flights</a>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
      <!-- Left links -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php BASE_URL;?> login">Connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php BASE_URL;?> register">Sign_in</a>
        </li>
</nav>
  </div>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="public/images/balance.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">DES VOYAGES DE REVES...</h2>
                            <p>Les plus belles voyages du monde vous attententLes Maldives, L'Ile Maurice, des destinations inimaginables ?Avec Travel Advantage offrez vous le luxe à prix réduit</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="public/images/vol.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">ENTRE 40% et 80% DE REMISE SUR LES TARIFS</h2>
                            <p>Des prix FOURNISSEURS, où vous ne payerez plus la marge des sites marchands comme BOOKING, EXPEDIA..</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="public/images/vol4.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Comparez!</h2>
                            <p>Filtrez les différentes offres selon vos critères afin de trouver le billet répondant à l’ensemble de vos différentes exigences..</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <div class="container">
  <footer class="py-5">
    <div class="row">
      <div class="col-2">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
        </ul>
      </div>

     

      <div class="col-2">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Reservation</a></li>
        </ul>
      </div>
     
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top">
     
    </div>
  </footer>
</div>

        </section>
       
        </footer>
        


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
