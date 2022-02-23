<?php
if (isset($_POST['submit'])) {
    $newVol = new volsController();
    $newVol->addVol();
}
?>
<div class="wrapper">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Ajouter un Vol</div>
                <div class="card-body bg-light">
                <a href="<?php echo BASE_URL; ?>" class="btn btn-sm btn-primary mr-2 mb-2">
                        <i class="fas fa-home"></i>
                    </a>
                    <form method="post">
                            <div class="form-group">
                                <label for="">Date Depart</label>
                                <input type="datetime-local" name="Date_depart" class="form-control" placeholder="Date Depart">
                            </div>


                            <div class="form-group">
                                <label for="">Date d'arrivé</label>
                                <input type="datetime-local" name="Date_arrive" class="form-control" placeholder="Date d'arrivé">
                            </div>


                            <div class="form-group">
                                <label for="">Ville Depart</label>
                                <input type="text" name="ville_depart" class="form-control" placeholder="Ville Depart">
                            </div>


                            <div class="form-group">
                                <label for="">Ville d'arrivé</label>
                                <input type="text" name="ville_arrive" class="form-control" placeholder="Date d'arrivé">
                            </div>


                            <div class="form-group ">
                            <label for="action">Etat de vol*</label>
                        <select class="form-control" name="Etat_vol">
                            <option value="1">Ouvert</option>
                            <option value="0">Fermer</option>
                        </select>
                    </div>
</br>
                    <div class="form-group ">
                        <button type="submit" class=" btn btn-primary" name="submit">Valider</button>
                    </div>
                        </form>




                </div>
            </div>
        </div>
    </div>
</div>