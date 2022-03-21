<?php
class Reservations
{

    public static function getAll()
    {
        $statement = DB::connect()->prepare('SELECT reservation.id,Date_depart,ville_depart,Date_arrive,ville_arrive,username,nombre_passager FROM reservation LEFT JOIN vol ON reservation.id_vols = vol.id ');
        $statement->execute();
        // $res = $statement->fetchAll();
        // echo "<pre>";
        // var_dump($res);
        return $statement->fetchAll();
        // $statement = null;
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

    public static function addreservations($data)
    {

        $statement = DB::connect()->prepare("INSERT INTO reservation (id_vols,username,nombre_passager,categorie) VALUES (:id_vols, :username,:nombre_passager, :categorie)");
        $statement->bindParam( ':id_vols', $data[ 'id_vols' ] );
        $statement->bindParam( ':username', $data[ 'username' ] );
        $statement->bindParam( ':nombre_passager', $data[ 'nombre_passager' ] );
        $statement->bindParam( ':categorie', $data[ 'categorie' ] );
        if ($statement->execute()) {
            $statement = DB::connect()->prepare("SELECT MAX(id) as id FROM reservation");
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
            $query = 'DELETE FROM reservation WHERE id = :id_res';
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