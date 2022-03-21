<?php
// var_dump($_POST);
if (isset($_POST['id'])) {
    // print_r($_POST);
    $exitVol = new volsController();
    $res = $exitVol->getOneVol();

// var_dump($res);
   
}
elseif (isset($_POST['submit'])) {
    $newVol = new ReservationController();
    $newVol->addreservations();
    Redirect::to('dashReservation');
}
else {
    Redirect::to('dashUser');
}

?>
<!DOCTYPE html> 
<html>
    <head>
        <title>Gestion Vol !</title>
        
        <!-- lier la page html avec le css pour ajouter le design -->
        <link rel="stylesheet" type="text/css" href="public/css/res.css">

        <!-- ajouter une police d'ecriture -->
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

        <!-- je prend en compte les accents -->
        <meta charset="utf-8">
    </head>
    <body>

        <!-- Balise pour le haut de page -->
        <header>
            <!-- Titre de la page -->
            <h1 class="titre">Reservation ✈</h1>

            <!-- Slogan -->
            <h3 class="slogan">«Vous etes les bienvenus chez nous!»</h3>

            <div class="search-form">
                <!-- Formulaire de recherche -->
                <form method="post">
                                
                    <div class="form-group">
                        <label for="provenance">Username</label>
                        <input type="text" name="username" id="user" placeholder="enter votre nom"  >
                        <label for="provenance">Ville de départ</label>
                        <input type="text" name="provenance" id="provenance" placeholder="casa, marrackech, ..."  value="<?php echo $res->ville_depart ?>">

                        <label for="arrivee">Ville d'arrivée</label>
                        <input type="text" name="arrivee" id="arrivee" placeholder="Paris, Milan, ..." value="<?php echo $res->ville_arrive ?>">
                    </div>

                    <div class="form-group">
                        <label for="depart">Date_départ</label>
                        <input type="text" name="Date_depart" class="form-control" placeholder="Date Depart" value="<?php echo $res->Date_depart ?>">
                    <input type="hidden" name="id_vols" value="<?= $res->id ?>">

                        <label for="retour">Date_Rotour</label>
                        <input type="text" name="Date_arrive" class="form-control" placeholder="Date d'arrivé" value="<?php echo $res->Date_arrive ?>">
                    </div>

                    <div class="form-group">
                        <label for="adultes">Nombre de passager</label>
                        <select name="nombre_passager" id="adultes">
                            <option selected="selected">0 passager</option>
                            <option>1 passager </option>
                            <option>2 passager</option>
                            <option>3 passager</option>
                            <option>4 passager</option>
                            <option>5 passager</option>
                        </select>
                        <label for="type">Categorie</label>
                        <select name="categorie" id="type">
                            <option selected="selected">Classe Economique</option>
                            <option>Classe Affaires</option>
                        </select>
                    </div>

                    <div class="button-submit"> 
                    <button type="submit" class=" btn btn-primary" name="submit">Lancer la reservation</button>
                    </div>
                    
                </form>
            </div>

        </header>
    </br>

</br>
    </br>
    </br>  </br>  </br>  </br>  </br>
        <!-- Une section avec les destinations -->
        <section id="destinations">

            <h3>Nous proposons differentes destinations pour découvrir le monde !</h3>

            <div class="destinations-group">
                <!-- destination 1 -->
                <div class="destination-item barcelone">
                    <div class="overlay">
                        <span class="prix">Dès 80€</span>
                        <span class="nom">Barcelone</span>
                    </div>
                </div>

                <!-- destination 2 -->
                <div class="destination-item dubai">
                    <div class="overlay">
                        <span class="prix">Dès 300€</span>
                        <span class="nom">Dubai</span>
                    </div>
                </div>

                <!-- destination 3 -->
                <div class="destination-item philippines">
                    <div class="overlay">
                        <span class="prix">Dès 1200€</span>
                        <span class="nom">Manille</span>
                    </div>
                </div>

                <!-- destination 4 -->
                <div class="destination-item paris">
                    <div class="overlay">
                        <span class="prix">Dès 55€</span>
                        <span class="nom">Paris</span>
                    </div>
                </div>

                <!-- destination 5 -->
                <div class="destination-item turky">
                    <div class="overlay">
                        <span class="prix">Dès 90€</span>
                        <span class="nom">Turky</span>
                    </div>
                </div>

                <!-- destination 6 -->
                <div class="destination-item londres">
                   <!--  <img src=""> -->
                    <div class="overlay">
                        <span class="prix">Dès 65€</span>
                        <span class="nom">Londres</span>
                    </div>
                </div>
            </div>

        </section>

       
    </body>
</html>