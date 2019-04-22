<?php
include_once 'user.php';
include_once 'user_session.php';

$userSession = new UserSession();
$user = new User();


if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    include_once 'logoption.php';


}else if(isset($_POST['username']) && isset($_POST['password'])){
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    if($user->userExists($userForm, $passForm)){
        $userSession->setCurrentUser($userForm, false);
        $user->setUser($userForm);
        include_once 'logoption.php';

    }else{
    
        $errorLogin = "<p style = 'text-align: right; color: #ff5252'>Incorrect user and/or password</p>";
        include_once 'UserLogin.php';
    }

}else{
        include_once 'UserLogin.php';
}