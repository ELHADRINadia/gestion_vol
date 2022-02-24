<?php
require './models/reservation.php';
class ReservationController
{

    public function deleteReservation()
    {
        if (isset($_POST['id_reserv'])) {
            $data['id'] = $_POST['id'];
            $result = Reservations::delete($_POST['id']);
            if ($result === 'ok') {
                Redirect::to('home');
            } else {
                echo $result;
            }
        }
    }

    public function ajoutereservations()
    {
       
        if (isset($_POST['reserve'])) {
            $vol = new VolsController();
            $vol = $_POST['id_vol'];
            $nbr = $_POST['nbrPersonne'];
            $result = Reservations::addReservations($vol, $nbr);
            return $result;
            
        }
    }

    public function getReservations()
    {
        $Reservations = Reservations::getAll();
        return $Reservations;
    }


    public function getAllReservationsById()
    {
        $idUser =  $_SESSION['id'];
        $reservation = Reservations::getAllById($idUser);
        return $reservation;
    }

    public function getAllResByIdVol()
    {
        $IdVols = $_POST['id_vols'];
        $delResbyIdVol = Reservations::getAllByIdVols($IdVols);
        return $delResbyIdVol;
    }


    public function ajoutepassager($id)
    {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $dateNaissance = $_POST['dateNaissance'];
        $reservations = passager::addpassager($id, $nom, $prenom, $dateNaissance);
    }
    static public function ajouteMultipassager($id)
    {
        $data=$_POST;
        
        passager::addpassager($data);
                        Redirect::to('home');

    }
}
