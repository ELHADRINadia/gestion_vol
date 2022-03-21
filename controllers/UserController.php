<?php

class UserController
{


    public function authentification()
    {
        $data["email"] = $_POST['email'];
        $data["password"] = $_POST['password'];

        // $usename =$_POST['username'];
        // $password = $_POST['password'];
        $result = User::login($data);
        // print_r($result);
        if (!$result) {
            echo "Incorrect !";
            return;
        }
        var_dump($result);
        if ($result->email == $_POST['email'] && $_POST['password'] == $result->password) {
            $_SESSION['logged'] = true;
            $_SESSION['email'] = $result->email;
            $_SESSION['role'] = $result->role;
            $_SESSION['id'] = $result->id;
            if ($result->role == "admin") {
                Redirect::to('dashboard');
            } else {
                Redirect::to('dashUser');
            }
        } 
        
    }

    public function getOneUser($id)
    {
        $data = array(
            'id' => $id
        );
        $user = User::getUser($data);
        return $user;
    }
    public function register()
    {
        var_dump($_POST);
        if (isset($_POST['submit'])) {
            $data = array(
                'Last_name' =>   $_POST['Last_name'],
                'First_name' =>  $_POST['First_name'],
                'email'    =>   $_POST['email'],
                'password' =>   $_POST['password']
            );
            $resultat = User::createUser($data);
            if ($resultat === 'good') {
                Session::set('success', 'User ajouter');
                Redirect::to('login');
            } else {
                echo $resultat;
            }
        }
    }


    public static function logout()
    {
        unset($_SESSION);
        session_destroy();
    }
}
