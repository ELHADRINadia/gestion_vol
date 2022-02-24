<?php

class Vol
{

    static public function getAll()
    {
        try{
        $stmt = DB::connect()->prepare("SELECT * FROM vol");
        $stmt->execute();
        return $stmt->fetchAll();
       
    }
    catch (\PDOException$th) {
        throw $th;
    }
     // $stmt = null;
}
    static public function getVol($data){
        $id =$data['id'];
        try{
            $query = 'SELECT *FROM vol WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id"=>$id));  
            $vol = $stmt->fetch(PDO::FETCH_OBJ);        
            return $vol;
        } catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }
    }
    static public function add( $data ){
        $stmt = DB::connect()->prepare('INSERT INTO vol (Date_depart, Date_arrive, ville_depart, ville_arrive, Etat_vol)VALUES (:Date_depart, :Date_arrive, :ville_depart, :ville_arrive, :Etat_vol)');
        $stmt->bindParam( ':Date_depart', $data[ 'Date_depart' ] );
        $stmt->bindParam( ':Date_arrive', $data[ 'Date_arrive' ] );
        $stmt->bindParam( ':ville_depart', $data[ 'ville_depart' ] );
        $stmt->bindParam( ':ville_arrive', $data[ 'ville_arrive' ] );
        $stmt->bindParam( ':Etat_vol', $data[ 'Etat_vol' ] );

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        $stmt->close();
        $stmt->null();

    }
    public static function update($data)
    {
        print_r($data);
        $statement = DB::connect()->prepare(
            "UPDATE vol
            SET
            id_vols=:id,
            Date_depart =:Date_depart ,
            Date_arrive =:Date_arrive ,
            Ville_depart =:Ville_depart ,
            Ville_arrive =:Ville_arrive ,
            Etat_vol =:Etat_vol,
            WHERE id_vols = :id_vols
        "
        );
        $statement->bindParam('id', $data['id']);
        $statement->bindParam('Date_depart', $data['Date_depart']);
        $statement->bindParam('Date_arrive', $data['Date_arrive']);
        $statement->bindParam('Ville_depart', $data['Ville_depart']);
        $statement->bindParam('Ville_arrive', $data['Ville_arrive']);
        $statement->bindParam('Etat_vol', $data['Etat_vol']);
        $statement->bindParam('id', $data['id']);
        $statement = $statement->execute();

        if ($statement) {
            return 'ok';
        } else {
            return 'error';
        }
        $statement = null;
    }
    public static function delete($data)
    {
        try {
            $query = 'DELETE FROM vol WHERE id = :id';
            $supp = DB::connect()->prepare($query);
            $supp->execute(array(":id" => $data['id']));
            if ($supp->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
}





