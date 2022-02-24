<?php
if(isset($_POST['id'])){

    // $test = new ReservationController();
    // $teste = $test->getAllResByIdVol();
    if(empty($teste)){
    $delete= new volsController();
    $delete->deleteVol();
    }else{
        echo "Impossible!";
    }
}
?>





