<?php
class Reservations
{

    public static function getAll()
    {
        $statement = DB::connect()->prepare('SELECT * FROM reservation');
        $statement->execute();
        return $statement->fetchAll();
        $statement = null;
    }

    public static function getAllById($idUser)
    {
        $reservation = DB::connect()->prepare('SELECT * FROM reservation WHERE id = :id');
        $reservation->execute(array(":id" => $idUser));
        return $reservation->fetchAll();
        $reservation = null;
    }

    public static function getAllByIdVols($IdVols)
    {
        $AllByIdVols = DB::connect()->prepare(('SELECT *FROM reservation WHERE id_vols = :id_vols '));
        $AllByIdVols->execute(array(":id_vols" => $IdVols));
        return $AllByIdVols->fetchAll();
        $AllByIdVols = null;
    }

    public static function addReservations($data, $nbr)
    {

       

       
        $statement = DB::connect()->prepare("INSERT INTO reservation (nbr_reservation,id_vols ,id ) VALUES (? ,? ,? )");
        
        if ($statement->execute([$nbr, $data, $_SESSION['id']])) {
            $statement = DB::connect()->prepare("SELECT MAX(id_reservation) as id_reservation FROM reservation");
            $statement->execute();
            $id = $statement->fetch(PDO::FETCH_OBJ);
            return $id;
        } else {
            return 'error';
        }
        

        $statement = null;
    }
    public static function delete($data)
    {
       
        try {
            $query = 'DELETE FROM reservation WHERE id_reservation = :id_res';
            $supp = DB::connect()->prepare($query);
            $supp->execute(array(":id_res" => $data));
            if ($supp->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
}

class passager
{
    public static function addpassager($data)
    {
        $nop = $data['nbrPersonne'];
        $prenom = $data['prenom'];
        $dateNaissance = $data['dateNaissance'];
        $id = $data['id_reservation'];
        $nom = $data['nom'];
        for ($i = 0; $i < $nop; $i++) {
            $sql = "INSERT INTO voyageurs (id,prenom,nom,date_naissance) VALUES ('$prenom[$i]','$nom[$i]','$dateNaissance[$i]','$id')";
            $statement = DB::connect()->prepare($sql);
            $statement->execute();
        }

    }
}
