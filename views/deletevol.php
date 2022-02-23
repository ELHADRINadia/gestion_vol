<?php
if(isset($_POST['id_vols'])){

    $test = new ReservationController();
    $teste = $test->getAllResByIdVol();
    if(empty($teste)){
    $delete= new VolsController();
    $delete->deleteVol();
    }else{
        echo "Impossible!";
    }
}
?>





