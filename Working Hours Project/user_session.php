<?php
class UserSession{
    public function __construct(){
        session_start();
    }

    public function setCurrentUser($user, $isAdmin){
        $_SESSION['user'] = $user;
        $_SESSION['isAdmin'] = $isAdmin;

    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }

     public function isAdmin() {
       return $_SESSION['isAdmin']; 
    }
}
?>