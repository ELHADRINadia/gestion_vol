<?php
if (isset($_POST['id'])) {
    print_r($_POST);
    $exitVoll = new volsController();
    $res = $exitVoll->getOneVol($_POST['id']);

   
}
if (isset($_POST['submit'])) {
    $exitVoll = new VolsController();
    $exitVoll->updateVols();  
}
    
    // $exitVoll = new VolsController();
    // $res = $exitVoll->updateVols();
    // print_r($res);

?>

<body>
    <div class="contanier">
        <div class="row my-4">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Modifier des Vols</div>
                    <div class="card-body bg-light">
                        <a href="<?php echo BASE_URL; ?>dashbord" class="btn btn-sm btn-secondary mb-2 mr-2">
                            <i class="fas fa-home "></i>
                        </a>
                        <form method="post" >

                            <div class="form-group">
                                <label for="">Date Depart</label>
                                <input type="text" name="dateDepart" class="form-control" placeholder="Date Depart" value="<?php echo $res->Date_depart ?>">
                                <input type="hidden" name="id" value="<?= $res->id_vols ?>">

                            </div>


                            <div class="form-group">
                                <label for="">Date d'arrivé</label>
                                <input type="text" name="dateArrive" class="form-control" placeholder="Date d'arrivé" value="<?php echo $res->Date_arrive ?>">
                            </div>


                            <div class="form-group">
                                <label for="">Ville Depart</label>
                                <input type="text" name="VilleDepart" class="form-control" placeholder="Ville Depart" value="<?php echo $res->Ville_depart ?>">
                            </div>


                            <div class="form-group">
                                <label for="">Ville d'arrivé</label>
                                <input type="text" name="VilleArrive" class="form-control" placeholder="Date d'arrivé" value="<?php echo $res->Ville_arrive ?>">
                            </div>


                            <div class="form-group">
                                <label>Etat de vole</label>
                                <select name="etatVols" id="" class="form-control">
                                    <option value="ouvert" <?php echo $res->Etat_de_vole ? 'selected' : ''; ?>> Ouvert</option>
                                    <option value="fermer" <?php echo  $res->Etat_de_vole ? 'selected' : ''; ?>>Fermer</option>
                                </select>
                                <!-- <label for="">Etat de vole</label>
                                <input type="text" name="etatVole" class="form-control" placeholder="Etat de vole"> -->
                            </div>


                            <div class="form-group">
                                <label for="">Prix</label>
                                <input type="text" name="Prix" class="form-control" placeholder="Prix" value="<?php echo $res->Prix ?>">
                            </div>
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