<?php
    include_once '../../Functions/userSession.php';
    $userSession = new UserSession();
    $userSession->setCurrentqueja($_POST['id_ticket']);
    include_once "mensaje.php";
?>