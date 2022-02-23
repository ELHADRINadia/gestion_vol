<?php

class VolsController
{
    public function getAllVol()
    {

        $vols = Vol::getAll();
        return $vols;
    }
    public function getOneVol()
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id'],
            );
        }
        $vol = Vol::getOneVol($data);
        return $vol;
    }
    public function addVol()
    {
        if ( isset( $_POST[ 'submit' ] ) ) {
                        $data = array(
                            'Date_depart' => $_POST[ 'Date_depart' ],
                            'Date_arrive' => $_POST[ 'Date_arrive' ],
                            'ville_depart' => $_POST[ 'ville_depart' ],
                            'ville_arrive' => $_POST[ 'ville_arrive' ],
                            'Etat_vol' => $_POST['Etat_vol'],
                        );
                        $resultat = Vol::add( $data );
                        if ( $resultat === 'ok' ) {
                            Redirect::to('dashboard');
                        } else {
                            echo $resultat;
                        }
                    }
        }
        public function updateVols(){
            if(isset($_POST['submit'])){
                $data = array(
                    'id_vols' => $_POST['id'],
                    'Date_depart' => $_POST['dateDepart'],
                    'Date_arrive' => $_POST['dateArrive'],
                    'Ville_depart' => $_POST['VilleDepart'],
                    'Ville_arrive' => $_POST['VilleArrive'],
                    'Etat_de_vole' => $_POST['etatVols'],
                    
                );
                $resultat = vol::update($data);
                if($resultat == 'ok'){
                    //  header('location:'.BASE_URL);
                    Redirect::to('dashbord');
                }else{
                    echo "error";
                }
            }
        }
    }
