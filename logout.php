 <?php                                                                                                                                                                                                                                       
    include_once 'user_session.php';

    $userSession = new UserSession();

    $isAdmin = $userSession->isAdmin();
    $userSession->closeSession();

    if ($isAdmin) {
        header("location: index_admin.php");
    } else {
        header("location: index.php");
    }
?>