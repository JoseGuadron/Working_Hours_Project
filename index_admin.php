<?php
include_once 'user.php';
include_once 'user_session.php';

$userSession = new UserSession();
$user = new User();


if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    include_once 'home.php';


}else if(isset($_POST['username']) && isset($_POST['password'])){
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if($user->AdminExists($userForm, $passForm)){
        $userSession->setCurrentUser($userForm, true);
        $user->setUser($userForm);
        include_once 'homeadmin.php';

    }else{
    
        $errorLogin = "<p style = 'text-align: right; color: #ff5252'>Incorrect user and/or password</p>";
        include_once 'AdminLogin.php';
    }

}else{
        include_once 'AdminLogin.php';
}