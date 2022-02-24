<?php

class
UserController
{


    public function authentification()
    {
        
        $result = User::login($_POST['username']);
       
        if ($result->username == $_POST['username'] && $_POST['password'] == $result->password) {
            $_SESSION['logged'] = true;
            $_SESSION['username'] = $result->username;
            $_SESSION['role'] = $result->role;
            $_SESSION['id'] = $result->id;
            if ($result->role == "0") {
                Redirect::to('home');
            } else {
                Redirect::to('dashbord');
            }
        } else {
            Redirect::to('login');
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
        if (isset($_POST['submit'])) {
            $data = array(
                'username' =>   $_POST['username'],
                'name'     =>   $_POST['Name'],
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
        session_destroy();
    }
}
