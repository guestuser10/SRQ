<?php

include_once 'users.php';
include_once 'userSession.php';

$userSession = new UserSession();
$users = new User();

if(isset($_SESSION['users'])){
    echo "Hay sesion";
}else if(isset($_POST['username']) && isset($_POST['password'])){
    //echo "Validacion de login ";
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];

    //echo $userForm , " ";
    //echo $passForm;
    $fila = $users->userExists($userForm, $passForm);
    if($fila <> null){
        
        $userSession->setCurrentUser($userForm);
        $users->setUser($userForm);
        echo $users->getNombre();

        include_once '../View/home_.php';
    }else{
        include_once '../View/login_.php';
        //include_once '../Templates/views/login.php';
        echo "Usuario y/o contraseña incorrecto";
    }

}else{
    //echo "Login";
    //include_once '../Templates/views/login.php';
    include_once '../View/login_.php';
}

?>