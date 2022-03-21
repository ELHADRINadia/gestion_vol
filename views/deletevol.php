<?php
if(isset($_POST['id'])){
    if(empty($teste)){
    $delete= new volsController();
    $delete->deleteVol();
    }else{
        echo "It's not possible!";
    }
}
?>





