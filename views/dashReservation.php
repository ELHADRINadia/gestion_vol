<?php
session_start();

if ($_SESSION) {
    if ($_SESSION['role'] !== "admin" && $_SESSION['role'] !== "user") {
        Redirect::to('home');
    }
}else{
    Redirect::to('home');
}
$data = new ReservationController();
$res = $data->getReservations();
// var_dump($res);
// $vole = new VolsController();
?>
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="dashbord">Flights</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item"><a class="nav-link" href="affichageVols">all flights</a> </li> -->
                    <li class="nav-item"><a class="nav-link" href="<?php BASE_URL;?> dashUser">users</a></li>
                    <li class=" text-right nav-item "><a class="nav-link" href="logout"> Log Out</a></li>

                </ul>
            </div>
        </div>
    </nav>
<div class="contanier pt-3">
    <div class="row my-4">
        <div class="col-ms-8mx-auto">
            <div class="card">
                <div class="card-body">
                    <a href="<?php echo BASE_URL; ?>dashbord" class="btn btn-sm btn-secondary mb-2 mr-2">
                        <i class="fas fa-home "></i>
                    </a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">username</th>
                                <th scope="col">Vill Depart</th>
                                <th scope="col">Ville Arrive</th>
                                <th scope="col">Date Depart</th>
                                <th scope="col">Date Arrive</th>
                                <th scope="col"> Nombre de voyageurs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($res as $re) :
                                // $vol = $vole->getOneVol($re['id_vols']);
                                // $users = $user->getOneUser($re['id']);
                            ?>

                                <tr>
                                    <th scope="row"><?php echo $re['id']; ?></th>
                                    <th> <?php echo $re["username"];  ?></th>
                                    <th> <?php echo $re["ville_depart"];  ?></th>
                                    <th> <?php echo $re["ville_arrive"];  ?></th>
                                    <th> <?php echo $re["Date_arrive"];  ?></th>
                                    <th> <?php echo $re["Date_depart"];  ?></th>
                                    <th> <?php echo $re["nombre_passager"];  ?></th>
                                </tr>
                            <?php endforeach; ?>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>