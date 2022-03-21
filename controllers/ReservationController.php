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

    public function addreservations()
    {
        if (isset($_POST['submit'])) {
            $data['id_vols'] = $_POST['id_vols'];
            $data['username'] = $_POST['username'];
            $data['nombre_passager'] = $_POST['nombre_passager'];
            $data['categorie'] = $_POST['categorie'];
            // var_dump($vol);
            $result = Reservations::addreservations($data);

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


    // public function ajoutepassager($id)
    // {
    //     $nom = $_POST['nom'];
    //     $prenom = $_POST['prenom'];
    //     $dateNaissance = $_POST['dateNaissance'];
    //     $reservations = passager::addpassager($id, $nom, $prenom, $dateNaissance);
    // }
    // static public function ajouteMultipassager($id)
    // {
    //     $data=$_POST;
        
    //     passager::addpassager($data);
    //                     Redirect::to('home');
}