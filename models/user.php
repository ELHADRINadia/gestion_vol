<?php

class User
{

    public static function createUser($data)
    {
        $statement = DB::connect()->prepare('INSERT INTO user (role,Last_name,First_name,email,password) VALUES ("user", :Last_name,:First_name,:email,:password)');
        $statement->bindParam(':Last_name', $data['Last_name']);
        $statement->bindParam(':First_name', $data['First_name']);
        $statement->bindParam(':email', $data['email']);
        $statement->bindParam(':password', $data['password']);
        

        if ($statement->execute()) {
            return 'good';
        } else {
            return 'error';
        }

        $statement = null;
    }

    public static function login($data)
    {
        try {
            $query = "SELECT * FROM user WHERE email = :email AND password = :password";
            $statement = DB::connect()->prepare($query);
            $statement->bindParam(':password', $data['password']);
            $statement->bindParam(':email', $data['email']);
            $statement->execute();
            // array(":username" => $username)
            $user = $statement->fetch(PDO::FETCH_OBJ);
            return $user;

        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }

    }

    public static function getUser($data)
    {
        $id = $data['id'];
        try {
            $query = 'SELECT * FROM user WHERE id=:id';
            $statement = DB::connect()->prepare($query);
            $statement->execute(array(":id" => $id));
            $vol = $statement->fetch(PDO::FETCH_OBJ);
            // var_dump($vol);
            return $vol;
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
        //catch return le type d error
    }

}

// -- //controller envvoi une appel l model , model qui recuperé et envoi a views
// -- // controller recoi une appel man l// utilisateur et envoi l model o lmodel kayredha  l view o l view hia li katchof fiha l resultat
