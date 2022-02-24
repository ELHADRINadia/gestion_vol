<?php

$data = new volsController();
$vols = $data->getAllVol();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <!-- <link href="public/css/style.css" rel="stylesheet" /> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Dashboard</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
           
<div class="wrapper">
    <div class="row ">
        <div class="card-body bg-light pt-6">
                 <a href="<?php echo BASE_URL; ?>add" class="btn btn-sm btn-primary mr-2 mb-2">
                        <i class="fas fa-plus"></i>
                    </a>
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
                                        <form method="post" action="update" class="mr-1">
                                            <input type="hidden" name="id" value="<?php echo $V['id']; ?>">
                                            <button class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i> </button>
                                        </form>
                                    </td>

                                    <td>
                                        <form method="post" action="delete" class="mr-1">
                                            <input type="hidden" name="id" value="<?php echo $V['id']; ?>">
                                            <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
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
