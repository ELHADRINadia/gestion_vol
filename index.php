<?php

require_once './views/includes/header.php';
require_once './autoload.php';
require_once './controllers/HomeController.php';
include ('./views/includes/alert.php');

$home = new HomeController();
 $pages = [ 'home', 'add', 'updatevol', 'deletevol', 'dashboard','dashUser','Reservation', 'updateres', 'deleteres','logout',  'register', 'login', 'dashReservation'];
// if (isset($_SESSION['logged']) && $_SESSION['logged'] === true){ 
    if(isset($_GET['page'])){
        // wach dik
        if(in_array($_GET['page'], $pages)){
            $page = $_GET['page'];
            $home -> index ($page);
        }else{
            include('views/includes/404.php');
        }
    }else{
        $home ->index('home');
    }
?>
<?php   
    require_once './views/includes/footer.php';
?> 
            

 