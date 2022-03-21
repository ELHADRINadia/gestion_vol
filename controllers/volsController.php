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
        // var_dump($data);
    }
    public function findVol(){
        if (isset($_POST['find'])){
            $data = array('search' => $_POST['find']);
        }
        $vols = Vol::searchVol($data);
        return $vols; 
    }
    public function addVol()
    {
        if ( isset( $_POST[ 'submit' ] ) ) {
                        $data = array(
                            'Date_depart' => $_POST[ 'Date_depart' ],
                            'Date_arrive' => $_POST[ 'Date_arrive' ],
                            'ville_depart' => $_POST[ 'ville_depart' ],
                            'ville_arrive' => $_POST[ 'ville_arrive' ],
                            'ville_arrive' => $_POST[ 'ville_arrive' ],
                                    'prix' => $_POST['prix'],
                            'Etat_vol' => $_POST['Etat_vol'],

                        );
                        $resultat = Vol::add( $data );
                        if ( $resultat === 'ok' ) {
                            Session::set('success','Vol ajouter');
                            Redirect::to('dashboard');
                        } else {
                            echo $resultat;
                        }
                    }
        }
        public function updateVol(){  
            if(isset($_POST['submit'])){
                $data = array(
                    'id' => $_POST['id'],
                    'Date_depart' => $_POST[ 'Date_depart' ],
                            'Date_arrive' => $_POST[ 'Date_arrive' ],
                            'ville_depart' => $_POST[ 'ville_depart' ],
                            'ville_arrive' => $_POST[ 'ville_arrive' ],
                            'prix' => $_POST[ 'prix' ],
                            'Etat_vol' => $_POST['Etat_vol'],
                    
                );
                $resultat = Vol::update($data);
                if($resultat == 'ok'){
                    Session::set('success','Vol modifier');
                    Redirect::to('dashboard');
                }else{
                    echo "error";
                }
            }
        }
        public function deleteVol()
        {
            if (isset($_POST['id'])) {
                $data['id'] = $_POST['id'];
                $result = vol::delete($data);
                if ($result === 'ok') {
                    Session::set('success','Vol supprimer');
                    Redirect::to('dashboard');
                } else {
                    echo $result;
                }
            }
        }
      
    }
