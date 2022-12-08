<?php
class UserSession{
    
    public function __construct(){
        session_start();
    }
    
    public function setCurrentUser($nombre, $tipo){
        $_SESSION['nombre'] = $nombre;
        $_SESSION['tipo'] = $tipo;
    }

    public function getCurrentUser(){
        return array ($_SESSION['nombre'], $_SESSION['tipo']);
    }
    
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}
?>