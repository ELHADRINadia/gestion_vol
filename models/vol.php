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
    
}
    static public function getOneVol($data){
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
        $stmt = DB::connect()->prepare('INSERT INTO vol (Date_depart, Date_arrive, ville_depart, ville_arrive, prix, Etat_vol)VALUES (:Date_depart, :Date_arrive, :ville_depart, :ville_arrive, :prix, :Etat_vol)');
        $stmt->bindParam( ':Date_depart', $data[ 'Date_depart' ] );
        $stmt->bindParam( ':Date_arrive', $data[ 'Date_arrive' ] );
        $stmt->bindParam( ':ville_depart', $data[ 'ville_depart' ] );
        $stmt->bindParam( ':ville_arrive', $data[ 'ville_arrive' ] );
        $stmt->bindParam( ':prix', $data[ 'prix' ] );
        $stmt->bindParam( ':Etat_vol', $data[ 'Etat_vol' ] );
  var_dump($data);
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        // $stmt->close();
        // $stmt->null();

    }
    static public function update( $data ){
        $stmt = DB::connect()->prepare('UPDATE vol SET Date_depart = :Date_depart , Date_arrive =:Date_arrive , ville_depart = :ville_depart, ville_arrive = :ville_arrive , prix = :prix, Etat_vol =  :Etat_vol WHERE id =:id ');
        $stmt->bindParam( ':id', $data[ 'id' ] );
        $stmt->bindParam( ':Date_depart', $data[ 'Date_depart' ] );
        $stmt->bindParam( ':Date_arrive', $data[ 'Date_arrive' ] );
        $stmt->bindParam( ':ville_depart', $data[ 'ville_depart' ] );
        $stmt->bindParam( ':ville_arrive', $data[ 'ville_arrive' ] );
        $stmt->bindParam( ':prix', $data[ 'prix' ] );
        $stmt->bindParam( ':Etat_vol', $data[ 'Etat_vol' ] );
  
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }

    }public static function delete($data)
    {
        try {
            $query = 'DELETE FROM vol WHERE id = :id';
            $del = DB::connect()->prepare($query);
            $del->execute(array(":id" => $data['id']));
            if ($del->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
    static public function searchVol($data){
        $search =$data['search'];
        // die(var_dump($data));//do you arrive data 
        try{
            $query ='SELECT * FROM vol WHERE ville_depart LIKE ? OR ville_arrive LIKE ?';
            $stmt =Db::connect()->prepare($query);
            $stmt->execute(array('%'.$search.'%','%'.$search.'%'));
            $vols = $stmt -> fetchAll();
            return  $vols ;
        }
        catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }
    }  
}





