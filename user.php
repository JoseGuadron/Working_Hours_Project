<?php
include_once 'db.php';

class User extends DB{

    private $name;
    private $username;
    private $isAdmin;

    public function userExists($user, $pass){

        $md5pass = md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM user WHERE username = :user AND password = :pass AND is_admin = 0');
        $query->execute(['user' => $user, 'pass' => $md5pass ]);

        if($query->rowCount()){
            return true;

        }else{
            return false;

        }
    }


Public function AdminExists($user, $pass){

        $md5pass = md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM user WHERE username = :user AND password = :pass AND is_admin = 1');
        $query->execute(['user' => $user, 'pass' => $md5pass]);

        if($query->rowCount()){
            return true;

        }else{
            return false;

        }
    }




    public function setUser($user){

        $query = $this->connect()->prepare('SELECT * FROM user WHERE username = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {

            $this->name = $currentUser['Name'];
            $this->username = $currentUser['UserName'];
            $this->isAdmin = $currentUser['is_admin'];

        
        }
    }

    public function getName(){
        return $this->name;
    }

     public function isAdmin(){
        return $this->isAdmin;
    }
}

?>