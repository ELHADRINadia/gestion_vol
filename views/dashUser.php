<?php

if ($_SESSION) {
    // var_dump($_SESSION);
    if ($_SESSION['role'] !== "user") {
        Redirect::to('home');
    }
}else{
    Redirect::to('home');
}
$data = new volsController();
$vols = $data->getAllVol();
if (isset($_POST['find'])){ 
    $data = new VolsController();
    $vols = $data->findVol();
    // print_r($vols);
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
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard -User's</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <!-- <link href="public/css/style.css" rel="stylesheet" /> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
          <a class="navbar-brand" href="home">Vols</a>
          <button class="navbar-toggler" type="button">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav mr-auto">
                  <!-- <li class="nav-item active"><a class="nav-link" href="./search">Search Vol</a></li> -->
                  <li class="nav-item"><a class="nav-link" href="<?php BASE_URL;?> dashReservation">mes Reservations</a></li>
                  <li class=" text-right nav-item "><a class="nav-link" href="logout"> Log Out</a></li>
                  <form method="post" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" name="find" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" name="submit" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
              </ul>
          </div>
      </div>
  </nav>
<div class="wrapper">
    <div class="row ">
        <div class="card-body bg-light pt-6">
               
                    <table class="table table-dark table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Date depart</th>
                                <th scope="col">Date arrive</th>
                                <th scope="col">Ville depart</th>
                                <th scope="col">Ville arrive</th>
                                <th scope="col">Etat vol</th>
                                <th scope="col">action</th>
                            </tr>

                        </thead>
                        <tbody>
                            <?php foreach ($vols as $V): ?>
                                <tr>
                                    <th scope="row"><?php echo $V['Date_depart']; ?></th>
                                    <td><?php echo $V['Date_arrive']; ?></td>
                                    <td><?php echo $V['ville_depart']; ?></td>
                                    <td><?php echo $V['ville_arrive']; ?></td>
                                    <td>
                                        <?php echo $V['Etat_vol'] ? '<span class="badge badge-success">Ouvert</span>' : '<span class="badge badge-danger">Fermer</span>'; ?>
                                    </td> 
                                    <!-- actions -->
                                    <td class="d-flex flex-row">
                                        <!-- update without php cuz in url there's only update thanks to autoload -->
                                        <form method="post" action="<?php BASE_URL;?> Reservation" class="mr-1">
                                            <input type="hidden" name="id" value="<?php echo $V['id']; ?>">
                                            <button class="btn btn-warning"> Reserve maintenant </button>
                                        </form>
                                    </td>
                                    <!-- end actions -->
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
           
    </div>

</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
