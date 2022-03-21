<?php
if (isset($_POST['id'])) {
    // print_r($_POST);
    $exitVol = new volsController();
    $res = $exitVol->getOneVol();

// var_dump($res->id);
   
}
if (isset($_POST['submit'])) {
    $exitVol = new VolsController();
    $exitVol->updateVol(); 
    // Redirect::to("dashboard");
}
    
    

?>

<body>
    <div class="contanier">
        <div class="row my-4">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Modifier des Vols</div>
                    <div class="card-body bg-light">
                        <a href="<?php echo BASE_URL; ?>dashboard" class="btn btn-sm btn-secondary mb-2 mr-2">
                            <i class="fas fa-home "></i>
                        </a>
                        <form method="post" >

                            <div class="form-group">
                                <label for="">Date Depart</label>
                                <input type="text" name="Date_depart" class="form-control" placeholder="Date Depart" value="<?php echo $res->Date_depart ?>">
                                <input type="hidden" name="id" value="<?= $res->id ?>">

                            </div>


                            <div class="form-group">
                                <label for="">Date d'arrivé</label>
                                <input type="text" name="Date_arrive" class="form-control" placeholder="Date d'arrivé" value="<?php echo $res->Date_arrive ?>">
                            </div>


                            <div class="form-group">
                                <label for="">Ville Depart</label>
                                <input type="text" name="ville_depart" class="form-control" placeholder="Ville Depart" value="<?php echo $res->ville_depart ?>">
                            </div>


                            <div class="form-group">
                                <label for="">Ville d'arrivé</label>
                                <input type="text" name="ville_arrive" class="form-control" placeholder="Date d'arrivé" value="<?php echo $res->ville_arrive ?>">
                            </div>
                            <div class="form-group">
                                <label for="">prix</label>
                                <input type="text" name="prix" class="form-control" placeholder="prix" value="<?php echo $res->prix ?>">
                            </div>


                            <div class="form-group">
                                <label>Etat de vole</label>
                                <select name="Etat_vol" id="" class="form-control">
                                <option value="1" <?php echo $res->Etat_vol ? 'selected' : ''; ?>>Ouvert</option>
                            <option value="0" <?php echo  $res->Etat_vol ? 'selected' : ''; ?>>Fermer</option>
                                   
                                </select>

                            </div>


                            <!-- <div class="form-group">
                                <label for="">Prix</label>
                                <input type="text" name="Prix" class="form-control" placeholder="Prix" value="<?php echo $res->Prix ?>">
                            </div> -->
                            <div>
                                <button type="submit" class="btn btn-primary" name="submit"> Modifier </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
</body>